<?php

//Route::get('/home', function () {
//    return view('home');
//});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/', 'auth.login');

Route::get('mis-pedidos', 'OrdersController@getIndex')->name('orders.index');
Route::get('pedido/crear', 'OrdersController@getCreate')->name('orders.create');
Route::post('pedido/almacenar', 'OrdersController@postStore')->name('orders.store');
Route::get('pedido/ver/{order}', 'OrdersController@getShow')->name('orders.show');
//Route::get('pedido/editar/{order}', 'OrdersController@getEdit')->name('orders.edit');
//Route::put('pedido/actualizar/{order}', 'OrdersController@putUpdate')->name('orders.update');
Route::view('mis-direcciones', 'customer.shipping-addresses');
Route::view('pedido', 'customer.order-info');

Route::prefix('admin')->group(function () {
    Route::view('/', 'auth.login');

    Route::view('/dashboard', 'dashboard');

    Route::view('dashboard', 'dashboard');

    Route::view('locales', 'admin.restaurants');

    Route::view('empleados', 'admin.employees');

    Route::view('cuentas-bancarias', 'admin.bank-accounts');

    Route::view('menus', 'admin.menus');

    Route::view('platos', 'admin.plates');

    Route::view('bebidas', 'admin.drinks');

    Route::view('extras', 'admin.extras');

    Route::view('pedidos', 'admin.orders');

    Route::get('pedido/ver/{order}', 'OrdersController@getShowAdmin')->name('admin.orders.show');

    Route::post('pedido/actualizar/{order}', 'OrdersController@putUpdateState')->name('admin.orders.update');

    Route::view('clientes', 'admin.customers');

    Route::view('impuestos', 'admin.taxes');
});