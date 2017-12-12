<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use App\Models\Customer;
use App\Models\Drink;
use App\Models\Local;
use App\Models\Menu;
use App\Models\Order;
use App\Models\Plate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;

class OrdersController extends Controller
{
    /**
     * Get the customer orders
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //$user = User::where('cedula', 'V-18244429')->first();
        $customer = Customer::where('cedula', 'V-18244429')->first();
        $orders = $customer->orders()->orderBy('codigo')->get();
        return view('customer.my-orders')->with('orders', $orders);
    }

    public function getCreate()
    {
        $local = Local::where('rif', 'J-198911947')->first();
        $menu = $local->menus()->where('id', 1)->first();
        $plates = $menu->plates()->where('id', '!=', 5)->get();
        $drinks =  $menu->drinks()->get();
        $additionals =  $menu->additionals()->get();
        return view('customer.new-order', compact('plates', 'drinks', 'additionals'));
    }

    public function postStore(Request $request)
    {
        //$user = User::where('cedula', 'V-18244429')->first();
        $customer = Customer::where('cedula', 'V-18244429')->first();
        $order = new Order();
        $order->estado = "esperando";
        $order->fecha = Carbon::now();
        $order->cedulacliente = $customer->cedula;
        $order->idtipoiva = $request->paymenttype;
        $order->total = 0;
        $order->save();
        $order = Order::where('codigo', $order->codigo)->first();
        foreach ($request->plates as $id) {
            $plate = Plate::find($id);
            if (!is_null($plate)) {
                $order->plates()->save($plate, [ 'cantidad' => $request->platequantity[$id], 'precio_unitario' => $plate->precio ]);
                $order->total += $plate->precio * $request->platequantity[$id];
            }
        }
        if (!empty($request->drinks)) {
            foreach ($request->drinks as $id) {
                $drink = Drink::find($id);
                if (!is_null($drink)) {
                    $order->drinks()->save($drink, [ 'cantidad' => $request->drinkquantity[$id], 'precio_unitario' => $drink->precio ]);
                    $order->total += $drink->precio * $request->drinkquantity[$id];
                }
            }
        }
        if (!empty($request->additionals)) {
            foreach ($request->additionals as $id) {
                $extra = Additional::find($id);
                if (!is_null($extra)) {
                    $order->additionals()->save($extra, [ 'cantidad' => $request->extraquantity[$id], 'precio_unitario' => $extra->precio ]);
                    $order->total += $extra->precio * $request->platequantity[$id];
                }
            }
        }

        $order->save();

        session()->flash('message', [
            'alert' => 'success',
            'text' => 'Pedido creado correctamente',
        ]);

        return redirect()->route('orders.index');
    }

    public function getShow($order)
    {
        $order = Order::where('codigo', $order)->first();
        if (is_null($order)) {
            return route('orders.index');
        }
        return view('customer.order-info')->with('order', $order);
    }

    public function getShowAdmin($order)
    {
        $order = Order::where('codigo', $order)->first();
        if (is_null($order)) {
            return redirect()->to('admin/pedidos');
        }
        return view('admin.order-info')->with('order', $order);
    }

    public function putUpdateState(Request $request, $order)
    {
        $order = Order::where('codigo', $order)->first();

        if (is_null($order)) {
            return redirect()->to('admin/pedidos');
        }

        if (empty($request->estado)){
            session()->flash('message', [
                'alert' => 'danger',
                'text' => 'Hey! debes seleccionar un estado para poder actualizarlo.',
            ]);
            return view('admin.order-info')->with('order', $order);
        }

        $order->estado = $request->estado;
        $order->save();

        session()->flash('message', [
            'alert' => 'info',
            'text' => 'Estado de pedido actualizado correctamente!',
        ]);

        return view('admin.order-info')->with('order', $order);
    }
}
