<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!\App\User::where('cedula', 'V-18244429')->exists()) {
            factory(\App\User::class)->create([
                'cedula' => 'V-18244429',
                'nombre' => 'Gustavo',
                'apellido' => 'Meza',
                'direccion' => 'Ejido Merida',
                'correo' => 'adolfz10@gmail.com',
                'password' => bcrypt('secret'),
                'avatar' => 'default.jpg',
            ]);
        }

        if (!\App\User::where('cedula', 'E-19891194')->exists()) {
            factory(\App\User::class)->create([
                'cedula' => 'E-19891194',
                'nombre' => 'Ler',
                'apellido' => 'Vivas',
                'direccion' => 'Ejido Merida',
                'correo' => 'ler@gmail.com',
                'password' => bcrypt('secret'),
                'avatar' => 'default.jpg',
            ]);
        }

        if (!\App\Models\Local::where('rif', 'J-198911947')->exists()) {
            factory(\App\Models\Local::class)->create([
                'rif' => 'J-198911947',
                'nombre' => 'Local 01',
                'correo' => 'local01@gmail.com',
                'direccion' => 'Merida, esquina maria x calle 11',
                'imagen' => 'default.jpg',
            ]);
        }

        if (!\App\Models\Employee::where('cedula', 'E-19891194')->exists()) {
            factory(\App\Models\Empleado::class)->create([
                'cedula' => 'E-19891194',
                'tipo' => 'admin',
                'riflocal' => 'J-198911947',
            ]);
        }

        if (!\App\Models\Customer::where('cedula', 'V-18244429')->exists()) {
            factory(\App\Models\Cliente::class)->create([
                'cedula' => 'V-18244429',
                'telefono' => '04247380080',
            ]);
        }

        if (!\App\Models\Local::where('rif', 'J-198912227')->exists()) {
            factory(\App\Models\Local::class)->create([
                'rif' => 'J-198912227',
                'nombre' => 'Local 02',
                'correo' => 'local02@gmail.com',
                'direccion' => 'Ejido, Av Bolivar Calle 33',
                'imagen' => 'default.jpg',
            ]);
        }
        if (!\App\Models\Local::where('rif', 'J-198913337')->exists()) {
            factory(\App\Models\Local::class)->create([
                'rif' => 'J-198913337',
                'nombre' => 'Local 03',
                'correo' => 'local03@gmail.com',
                'direccion' => 'Ejido, Av Fernandez pena Calle 47',
                'imagen' => 'default.jpg',
            ]);
        }

        if (!\App\Models\Menu::where('id', 1)->exists()) {
            factory(\App\Models\Menu::class)->create([
                'id' => 1,
                'nombre' => 'Super menu 1',
            ]);
        }
        if (!\App\Models\Menu::where('id', 2)->exists()) {
            factory(\App\Models\Menu::class)->create([
                'id' => 2,
                'nombre' => 'Super menu 2',
            ]);
        }
        if (!\App\Models\Menu::where('id', 3)->exists()) {
            factory(\App\Models\Menu::class)->create([
                'id' => 3,
                'nombre' => 'Super menu 3',
            ]);
        }

        if (!\DB::table('localmenu')->where('riflocal', 'J-198911947')->where('idmenu', 1)->exists() &&
            \App\Models\Menu::where('id', 1)->exists() &&
            \App\Models\Local::where('rif', 'J-198911947')->exists()) {
            \DB::table('localmenu')->insert([
                'riflocal' => 'J-198911947',
                'idmenu' => 1,
                'activo' => true
            ]);
        }
        if (!\DB::table('localmenu')->where('riflocal', 'J-198911947')->where('idmenu', 2)->exists() &&
            \App\Models\Menu::where('id', 2)->exists() &&
            \App\Models\Local::where('rif', 'J-198911947')->exists()) {
            \DB::table('localmenu')->insert([
                'riflocal' => 'J-198911947',
                'idmenu' => 2,
                'activo' => false
            ]);
        }
        if (!\DB::table('localmenu')->where('riflocal', 'J-198911947')->where('idmenu', 3)->exists() &&
            \App\Models\Menu::where('id', 3)->exists() &&
            \App\Models\Local::where('rif', 'J-198911947')->exists()) {
            \DB::table('localmenu')->insert([
                'riflocal' => 'J-198911947',
                'idmenu' => 3,
                'activo' => false
            ]);
        }

        if (!\DB::table('localmenu')->where('riflocal', 'J-198912227')->where('idmenu', 1)->exists() &&
            \App\Models\Menu::where('id', 1)->exists() &&
            \App\Models\Local::where('rif', 'J-198912227')->exists()) {
            \DB::table('localmenu')->insert([
                'riflocal' => 'J-198912227',
                'idmenu' => 1,
                'activo' => false
            ]);
        }
        if (!\DB::table('localmenu')->where('riflocal', 'J-198912227')->where('idmenu', 2)->exists() &&
            \App\Models\Menu::where('id', 2)->exists() &&
            \App\Models\Local::where('rif', 'J-198912227')->exists()) {
            \DB::table('localmenu')->insert([
                'riflocal' => 'J-198912227',
                'idmenu' => 2,
                'activo' => true
            ]);
        }
        if (!\DB::table('localmenu')->where('riflocal', 'J-198912227')->where('idmenu', 3)->exists() &&
            \App\Models\Menu::where('id', 3)->exists() &&
            \App\Models\Local::where('rif', 'J-198912227')->exists()) {
            \DB::table('localmenu')->insert([
                'riflocal' => 'J-198912227',
                'idmenu' => 3,
                'activo' => false
            ]);
        }

        if (!\DB::table('localmenu')->where('riflocal', 'J-198913337')->where('idmenu', 1)->exists() &&
            \App\Models\Menu::where('id', 1)->exists() &&
            \App\Models\Local::where('rif', 'J-198913337')->exists()) {
            \DB::table('localmenu')->insert([
                'riflocal' => 'J-198913337',
                'idmenu' => 1,
                'activo' => true
            ]);
        }

        if (!\App\Models\Plate::where('id', 1)->exists()) {
            factory(\App\Models\Plate::class, 10)->create();
        }

        if (!\DB::table('menuplato')->where('idmenu', 1)->where('idplato', 1)->exists() &&
            \App\Models\Menu::where('id', 1)->exists() &&
            \App\Models\Plate::where('id', 1)->exists()) {
            \DB::table('menuplato')->insert([
                'idmenu' => 1,
                'idplato' => 1
            ]);
        }
        if (!\DB::table('menuplato')->where('idmenu', 1)->where('idplato', 2)->exists() &&
            \App\Models\Menu::where('id', 1)->exists() &&
            \App\Models\Plate::where('id', 2)->exists()) {
            \DB::table('menuplato')->insert([
                'idmenu' => 1,
                'idplato' => 2
            ]);
        }
        if (!\DB::table('menuplato')->where('idmenu', 1)->where('idplato', 3)->exists() &&
            \App\Models\Menu::where('id', 1)->exists() &&
            \App\Models\Plate::where('id', 3)->exists()) {
            \DB::table('menuplato')->insert([
                'idmenu' => 1,
                'idplato' => 3
            ]);
        }
        if (!\DB::table('menuplato')->where('idmenu', 1)->where('idplato', 4)->exists() &&
            \App\Models\Menu::where('id', 1)->exists() &&
            \App\Models\Plate::where('id', 4)->exists()) {
            \DB::table('menuplato')->insert([
                'idmenu' => 1,
                'idplato' => 4
            ]);
        }
        if (!\DB::table('menuplato')->where('idmenu', 1)->where('idplato', 5)->exists() &&
            \App\Models\Menu::where('id', 1)->exists() &&
            \App\Models\Plate::where('id', 5)->exists()) {
            \DB::table('menuplato')->insert([
                'idmenu' => 1,
                'idplato' => 5
            ]);
        }
        if (!\DB::table('menuplato')->where('idmenu', 2)->where('idplato', 5)->exists() &&
            \App\Models\Menu::where('id', 2)->exists() &&
            \App\Models\Plate::where('id', 5)->exists()) {
            \DB::table('menuplato')->insert([
                'idmenu' => 2,
                'idplato' => 5
            ]);
        }
        if (!\DB::table('menuplato')->where('idmenu', 2)->where('idplato', 6)->exists() &&
            \App\Models\Menu::where('id', 2)->exists() &&
            \App\Models\Plate::where('id', 6)->exists()) {
            \DB::table('menuplato')->insert([
                'idmenu' => 2,
                'idplato' => 6
            ]);
        }
        if (!\DB::table('menuplato')->where('idmenu', 3)->where('idplato', 7)->exists() &&
            \App\Models\Menu::where('id', 3)->exists() &&
            \App\Models\Plate::where('id', 7)->exists()) {
            \DB::table('menuplato')->insert([
                'idmenu' => 3,
                'idplato' => 7
            ]);
        }

        if (!\App\Models\Additional::where('id', 1)->exists()) {
            factory(\App\Models\Additional::class, 4)->create();
        }

        if (!\DB::table('extramenu')->where('idmenu', 1)->where('idextra', 1)->exists() &&
            \App\Models\Menu::where('id', 1)->exists() &&
            \App\Models\Additional::where('id', 1)->exists()) {
            \DB::table('extramenu')->insert([
                'idmenu' => 1,
                'idextra' => 1
            ]);
        }
        if (!\DB::table('extramenu')->where('idmenu', 1)->where('idextra', 2)->exists() &&
            \App\Models\Menu::where('id', 1)->exists() &&
            \App\Models\Additional::where('id', 2)->exists()) {
            \DB::table('extramenu')->insert([
                'idmenu' => 1,
                'idextra' => 2
            ]);
        }
        if (!\DB::table('extramenu')->where('idmenu', 1)->where('idextra', 3)->exists() &&
            \App\Models\Menu::where('id', 1)->exists() &&
            \App\Models\Additional::where('id', 3)->exists()) {
            \DB::table('extramenu')->insert([
                'idmenu' => 1,
                'idextra' => 3
            ]);
        }
        if (!\DB::table('extramenu')->where('idmenu', 1)->where('idextra', 4)->exists() &&
            \App\Models\Menu::where('id', 1)->exists() &&
            \App\Models\Additional::where('id', 4)->exists()) {
            \DB::table('extramenu')->insert([
                'idmenu' => 1,
                'idextra' => 4
            ]);
        }
        if (!\DB::table('extramenu')->where('idmenu', 2)->where('idextra', 4)->exists() &&
            \App\Models\Menu::where('id', 2)->exists() &&
            \App\Models\Additional::where('id', 4)->exists()) {
            \DB::table('extramenu')->insert([
                'idmenu' => 2,
                'idextra' => 4
            ]);
        }
        if (!\DB::table('extramenu')->where('idmenu', 3)->where('idextra', 3)->exists() &&
            \App\Models\Menu::where('id', 3)->exists() &&
            \App\Models\Additional::where('id', 3)->exists()) {
            \DB::table('extramenu')->insert([
                'idmenu' => 3,
                'idextra' => 3
            ]);
        }

        if (!\App\Models\Drink::where('id', 1)->exists()) {
            factory(\App\Models\Drink::class, 4)->create();
        }

        if (!\DB::table('bebidamenu')->where('idmenu', 1)->where('idbebida', 1)->exists() &&
            \App\Models\Menu::where('id', 1)->exists() &&
            \App\Models\Drink::where('id', 1)->exists()) {
            \DB::table('bebidamenu')->insert([
                'idmenu' => 1,
                'idbebida' => 1
            ]);
        }
        if (!\DB::table('bebidamenu')->where('idmenu', 1)->where('idbebida', 2)->exists() &&
            \App\Models\Menu::where('id', 1)->exists() &&
            \App\Models\Drink::where('id', 2)->exists()) {
            \DB::table('bebidamenu')->insert([
                'idmenu' => 1,
                'idbebida' => 2
            ]);
        }
        if (!\DB::table('bebidamenu')->where('idmenu', 1)->where('idbebida', 3)->exists() &&
            \App\Models\Menu::where('id', 1)->exists() &&
            \App\Models\Drink::where('id', 3)->exists()) {
            \DB::table('bebidamenu')->insert([
                'idmenu' => 1,
                'idbebida' => 3
            ]);
        }
        if (!\DB::table('bebidamenu')->where('idmenu', 1)->where('idbebida', 4)->exists() &&
            \App\Models\Menu::where('id', 1)->exists() &&
            \App\Models\Drink::where('id', 4)->exists()) {
            \DB::table('bebidamenu')->insert([
                'idmenu' => 1,
                'idbebida' => 4
            ]);
        }
        if (!\DB::table('bebidamenu')->where('idmenu', 2)->where('idbebida', 1)->exists() &&
            \App\Models\Menu::where('id', 2)->exists() &&
            \App\Models\Drink::where('id', 1)->exists()) {
            \DB::table('bebidamenu')->insert([
                'idmenu' => 2,
                'idbebida' => 1
            ]);
        }
        if (!\DB::table('bebidamenu')->where('idmenu', 3)->where('idbebida', 2)->exists() &&
            \App\Models\Menu::where('id', 3)->exists() &&
            \App\Models\Drink::where('id', 2)->exists()) {
            \DB::table('bebidamenu')->insert([
                'idmenu' => 3,
                'idbebida' => 2
            ]);
        }

        if (!\App\Models\IvaType::where('id', '1')->exists()) {
            factory(\App\Models\IvaType::class)->create([
                'tipo' => 'efectivo',
                'porcentaje' => '12',
                'activo' => true,
            ]);
        }
        if (!\App\Models\IvaType::where('id', '2')->exists()) {
            factory(\App\Models\IvaType::class)->create([
                'tipo' => 'transferencia',
                'porcentaje' => '9',
                'activo' => true,
            ]);
        }
    }
}
