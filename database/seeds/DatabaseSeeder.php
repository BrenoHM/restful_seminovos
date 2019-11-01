<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $cars = [
            [
                'tipoVeiculo' => 1,
                'marca'       => 4,
                'modelo'      => 25,
                'ano'         => 2015,
                'preco'       => 20000,
                'origem'      => 'particular',
                'estado'      => 'seminovo',
                'placaId'     => 'HUN-2550',
                'created_at'  => date('Y-m-d H:i:s')
            ],
            [
                'tipoVeiculo' => 2,
                'marca'       => 5,
                'modelo'      => 50,
                'ano'         => 2018,
                'preco'       => 10000,
                'origem'      => 'revenda',
                'estado'      => 'novo',
                'placaId'     => '1550',
                'created_at'  => date('Y-m-d H:i:s')
            ],
            [
                'tipoVeiculo' => 3,
                'marca'       => 10,
                'modelo'      => 55,
                'ano'         => 2019,
                'preco'       => 150000,
                'origem'      => 'particular',
                'estado'      => 'novo',
                'placaId'     => '1551',
                'created_at'  => date('Y-m-d H:i:s')
            ],
            [
                'tipoVeiculo' => 1,
                'marca'       => 10,
                'modelo'      => 55,
                'ano'         => 2017,
                'preco'       => 30000,
                'origem'      => 'revenda',
                'estado'      => 'seminovo',
                'placaId'     => 'HMV-2567',
                'created_at'  => date('Y-m-d H:i:s')
            ]
        ];

        DB::table('cars')->insert($cars);
    }
}
