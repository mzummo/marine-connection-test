<?php

use Illuminate\Database\Seeder;

class BoatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $boats = [
            [
                "year" => "1999",
                "make" => "Hunter",
                "model" => "Marlow",
                "serial_number" => "0000043",
                "stock_number" => "0022",
                "list_price" => "75000.00"
            ],
            [
                "year" => "1999",
                "make" => "Hunter",
                "model" => "Marlow",
                "serial_number" => "0000043",
                "stock_number" => "0022",
                "list_price" => "75000.00"
            ],
            [
                "year" => "1999",
                "make" => "Hunter",
                "model" => "Marlow",
                "serial_number" => "0000043",
                "stock_number" => "0022",
                "list_price" => "75000.00"
            ]
        ];
        DB::table('boats')->insert($boats);
    }
}
