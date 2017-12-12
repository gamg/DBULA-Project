<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'cedula' => 'V-18244429',
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'direccion' => $faker->address,
        'correo' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'avatar' => 'default.jpg',
        //'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Local::class, function (Faker $faker) {
    return [
        'rif' => 'J-198911947',
        'nombre' => $faker->name,
        'correo' => $faker->unique()->safeEmail,
        'direccion' => $faker->address,
        'imagen' => 'default.jpg',
    ];
});

$factory->define(App\Models\Empleado::class, function (Faker $faker) {
    return [
        'cedula' => 'E-19891194',
        'tipo' => 'comun',
        'riflocal' => 'J-198911947',
    ];
});

$factory->define(App\Models\Cliente::class, function (Faker $faker) {
    return [
        'cedula' => 'V-18244429',
        'telefono' => '04247380080',
    ];
});

$factory->define(App\Models\Menu::class, function (Faker $faker) {
    return [
        'id' => 1,
        'nombre' => 'Super menu 1',
    ];
});

$factory->define(App\Models\Plate::class, function (Faker $faker) {
    return [
        'nombre' => $faker->unique()->text(30),
        'descripcion' => $faker->text(200),
        'precio' => $faker->numberBetween(25000, 55000),
        'tiempo_estimado' => $faker->time('00:30:00'),
        'imagen' => 'image.jpg',
    ];
});

$factory->define(App\Models\Additional::class, function (Faker $faker) {
    return [
        'nombre' => $faker->unique()->text(30),
        'precio' => $faker->numberBetween(14000, 25000),
    ];
});

$factory->define(App\Models\Drink::class, function (Faker $faker) {
    return [
        'nombre' => $faker->unique()->text(30),
        'precio' => $faker->numberBetween(8000, 20000),
    ];
});

$factory->define(App\Models\IvaType::class, function (Faker $faker) {
    return [
        'tipo' => 'transferencia',
        'porcentaje' => '10',
        'activo' => false,
    ];
});
