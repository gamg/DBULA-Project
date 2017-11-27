<?php

//Route::get('/', function () {
//    return view('welcome');
//});

Route::view('/', 'dashboard');

Route::view('locales', 'admin.restaurants');

Route::view('empleados', 'admin.employees');

Route::view('cuentas-bancarias', 'admin.bank-accounts');

Route::view('menus', 'admin.menus');

Route::view('platos', 'admin.plates');

Route::view('bebidas', 'admin.drinks');

Route::view('extras', 'admin.extras');

Route::view('pedidos', 'admin.orders');

Route::view('clientes', 'admin.customers');

Route::view('impuestos', 'admin.taxes');

Route::view('mis-pedidos', 'customer.my-orders');

Route::view('mis-direcciones', 'customer.shipping-addresses');

Route::view('nuevo-pedido', 'customer.new-order');

Route::view('pedido', 'customer.order-info');
