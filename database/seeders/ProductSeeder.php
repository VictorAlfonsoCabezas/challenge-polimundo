<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('product')->insert([
            'name' => 'PAN BLANCO GRANDE 550G',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'PAN BLANCO PEQUEñO 275G',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'PAN INTEGRAL GRANDE 600G',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);

        DB::table('product')->insert([
            'name' => 'TORTA CHOCOLATE',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'TORTA VAINILLA',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'TORTA NARANJA',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'PAN INTEGRAL PEQUEñO 300G',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'HAMBURGUESA 560G',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'HOT DOG 560G',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'PAN BRíOCHE BOLLITO',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'PAN ARTESANAL BLANCO 560G',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'PAN MIEL Y SALVADO 700G',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'PAN AVENA Y SALVADO 700G',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'PAN 5 CEREALES 700G',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'PAN 7 CEREALES 520G',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'PAN CENTENO BENEFIT 600G',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'PAN HOLANDéS 680G',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'PAN CHOCOPAN  450G',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'PAN FRUTOS ROJOS 500G',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
        DB::table('product')->insert([
            'name' => 'PAN MANZANAS 500G',
            'cost' => rand(0.0001, 10.9999),
            'stocks' => 100,
            'observation' => 'PRODUCTO DE CONSUMO',
            'barcode' => Str::random(10),
            'status' => true,
        ]);
    }

}
