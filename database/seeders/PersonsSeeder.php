<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PersonsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('persons')->insert([
            'first_name' => 'Victor',
            'second_name' => 'Alfonso',
            'last_name' => 'Cabezas',
            'surname' => 'Anrango',
            'sex' => 'M',
            'citizenship_type' => 'C',
            'citizenship_card' => rand(1000000000, 9999999999),
            'birth_date' => date('Y-m-d'),
            'phone' => rand(1000000000, 9999999999),
            'cellular' => rand(1000000000, 9999999999),
            'email' => Str::random(10) . '@gmail.com',
            'address' => 'Colinas dle NOrte',
            'status' => true,
        ]);
        DB::table('persons')->insert([
            'first_name' => 'Hugo',
            'second_name' => 'Martín',
            'last_name' => 'González',
            'surname' => 'Gómez',
            'sex' => 'M',
            'citizenship_type' => 'C',
            'citizenship_card' => rand(1000000000, 9999999999),
            'birth_date' => date('Y-m-d'),
            'phone' => rand(1000000000, 9999999999),
            'cellular' => rand(1000000000, 9999999999),
            'email' => Str::random(10) . '@gmail.com',
            'address' => 'Colinas dle NOrte',
            'status' => true,
        ]);
        DB::table('persons')->insert([
            'first_name' => 'Mateo',
            'second_name' => 'Leo',
            'last_name' => 'González',
            'surname' => 'Díaz',
            'sex' => 'M',
            'citizenship_type' => 'C',
            'citizenship_card' => rand(1000000000, 9999999999),
            'birth_date' => date('Y-m-d'),
            'phone' => rand(1000000000, 9999999999),
            'cellular' => rand(1000000000, 9999999999),
            'email' => Str::random(10) . '@gmail.com',
            'address' => 'Colinas dle NOrte',
            'status' => true,
        ]);
        DB::table('persons')->insert([
            'first_name' => 'Daniel',
            'second_name' => 'Alejandro',
            'last_name' => 'González',
            'surname' => 'González',
            'sex' => 'M',
            'citizenship_type' => 'C',
            'citizenship_card' => rand(1000000000, 9999999999),
            'birth_date' => date('Y-m-d'),
            'phone' => rand(1000000000, 9999999999),
            'cellular' => rand(1000000000, 9999999999),
            'email' => Str::random(10) . '@gmail.com',
            'address' => 'Colinas dle NOrte',
            'status' => true,
        ]);
        DB::table('persons')->insert([
            'first_name' => 'Pablo',
            'second_name' => 'Manuel',
            'last_name' => 'Rodríguez',
            'surname' => 'González',
            'sex' => 'M',
            'citizenship_type' => 'C',
            'citizenship_card' => rand(1000000000, 9999999999),
            'birth_date' => date('Y-m-d'),
            'phone' => rand(1000000000, 9999999999),
            'cellular' => rand(1000000000, 9999999999),
            'email' => Str::random(10) . '@gmail.com',
            'address' => 'Colinas dle NOrte',
            'status' => true,
        ]);
        DB::table('persons')->insert([
            'first_name' => 'Álvaro',
            'second_name' => 'Adrián',
            'last_name' => 'Gómez',
            'surname' => 'González',
            'sex' => 'M',
            'citizenship_type' => 'C',
            'citizenship_card' => rand(1000000000, 9999999999),
            'birth_date' => date('Y-m-d'),
            'phone' => rand(1000000000, 9999999999),
            'cellular' => rand(1000000000, 9999999999),
            'email' => Str::random(10) . '@gmail.com',
            'address' => 'Colinas dle NOrte',
            'status' => true,
        ]);
        DB::table('persons')->insert([
            'first_name' => 'David',
            'second_name' => 'Mario',
            'last_name' => 'Rodríguez',
            'surname' => 'Rodríguez',
            'sex' => 'M',
            'citizenship_type' => 'C',
            'citizenship_card' => rand(1000000000, 9999999999),
            'birth_date' => date('Y-m-d'),
            'phone' => rand(1000000000, 9999999999),
            'cellular' => rand(1000000000, 9999999999),
            'email' => Str::random(10) . '@gmail.com',
            'address' => 'Colinas dle NOrte',
            'status' => true,
        ]);
        DB::table('persons')->insert([
            'first_name' => 'Enzo',
            'second_name' => 'Diego',
            'last_name' => 'Fernández',
            'surname' => 'Díaz',
            'sex' => 'M',
            'citizenship_type' => 'C',
            'citizenship_card' => rand(1000000000, 9999999999),
            'birth_date' => date('Y-m-d'),
            'phone' => rand(1000000000, 9999999999),
            'cellular' => rand(1000000000, 9999999999),
            'email' => Str::random(10) . '@gmail.com',
            'address' => 'Colinas dle NOrte',
            'status' => true,
        ]);
        DB::table('persons')->insert([
            'first_name' => 'Marcos',
            'second_name' => 'Izan',
            'last_name' => 'Pérez',
            'surname' => 'Gómez',
            'sex' => 'M',
            'citizenship_type' => 'C',
            'citizenship_card' => rand(1000000000, 9999999999),
            'birth_date' => date('Y-m-d'),
            'phone' => rand(1000000000, 9999999999),
            'cellular' => rand(1000000000, 9999999999),
            'email' => Str::random(10) . '@gmail.com',
            'address' => 'Colinas dle NOrte',
            'status' => true,
        ]);
        DB::table('persons')->insert([
            'first_name' => 'Javier',
            'second_name' => 'Marco',
            'last_name' => 'Lucero',
            'surname' => 'Sosa',
            'sex' => 'M',
            'citizenship_type' => 'C',
            'citizenship_card' => rand(1000000000, 9999999999),
            'birth_date' => date('Y-m-d'),
            'phone' => rand(1000000000, 9999999999),
            'cellular' => rand(1000000000, 9999999999),
            'email' => Str::random(10) . '@gmail.com',
            'address' => 'Colinas dle NOrte',
            'status' => true,
        ]);
        DB::table('persons')->insert([
            'first_name' => 'Álex',
            'second_name' => 'Bruno',
            'last_name' => 'Quiroga',
            'surname' => 'Martínez',
            'sex' => 'M',
            'citizenship_type' => 'C',
            'citizenship_card' => rand(1000000000, 9999999999),
            'birth_date' => date('Y-m-d'),
            'phone' => rand(1000000000, 9999999999),
            'cellular' => rand(1000000000, 9999999999),
            'email' => Str::random(10) . '@gmail.com',
            'address' => 'Colinas dle NOrte',
            'status' => true,
        ]);
        DB::table('persons')->insert([
            'first_name' => 'Oliver',
            'second_name' => 'Miguel',
            'last_name' => 'Díaz',
            'surname' => 'Fernández',
            'sex' => 'M',
            'citizenship_type' => 'C',
            'citizenship_card' => rand(1000000000, 9999999999),
            'birth_date' => date('Y-m-d'),
            'phone' => rand(1000000000, 9999999999),
            'cellular' => rand(1000000000, 9999999999),
            'email' => Str::random(10) . '@gmail.com',
            'address' => 'Colinas dle NOrte',
            'status' => true,
        ]);
        DB::table('persons')->insert([
            'first_name' => 'Thiago',
            'second_name' => 'Antonio',
            'last_name' => 'López',
            'surname' => 'Rodríguez',
            'sex' => 'M',
            'citizenship_type' => 'C',
            'citizenship_card' => rand(1000000000, 9999999999),
            'birth_date' => date('Y-m-d'),
            'phone' => rand(1000000000, 9999999999),
            'cellular' => rand(1000000000, 9999999999),
            'email' => Str::random(10) . '@gmail.com',
            'address' => 'Colinas dle NOrte',
            'status' => true,
        ]);
        DB::table('persons')->insert([
            'first_name' => 'Marc',
            'second_name' => 'Carlos',
            'last_name' => 'Romero',
            'surname' => 'Sánchez',
            'sex' => 'M',
            'citizenship_type' => 'C',
            'citizenship_card' => rand(1000000000, 9999999999),
            'birth_date' => date('Y-m-d'),
            'phone' => rand(1000000000, 9999999999),
            'cellular' => rand(1000000000, 9999999999),
            'email' => Str::random(10) . '@gmail.com',
            'address' => 'Colinas dle NOrte',
            'status' => true,
        ]);
        DB::table('persons')->insert([
            'first_name' => 'Ángel',
            'second_name' => 'Juan',
            'last_name' => 'Ruiz',
            'surname' => 'Pérez',
            'sex' => 'M',
            'citizenship_type' => 'C',
            'citizenship_card' => rand(1000000000, 9999999999),
            'birth_date' => date('Y-m-d'),
            'phone' => rand(1000000000, 9999999999),
            'cellular' => rand(1000000000, 9999999999),
            'email' => Str::random(10) . '@gmail.com',
            'address' => 'Colinas dle NOrte',
            'status' => true,
        ]);
        DB::table('persons')->insert([
            'first_name' => 'Gonzalo',
            'second_name' => 'Lucas',
            'last_name' => 'Pérez',
            'surname' => 'Muñoz',
            'sex' => 'M',
            'citizenship_type' => 'C',
            'citizenship_card' => rand(1000000000, 9999999999),
            'birth_date' => date('Y-m-d'),
            'phone' => rand(1000000000, 9999999999),
            'cellular' => rand(1000000000, 9999999999),
            'email' => Str::random(10) . '@gmail.com',
            'address' => 'Colinas dle NOrte',
            'status' => true,
        ]);
    }

}
