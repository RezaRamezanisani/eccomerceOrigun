<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {




        $products = [
            [
                'order' => 'Samsung Galaxy',
                
            ],
            [
                'order' => 'Apple iPhone 12',
                
            ],
            [
                'order' => 'Google Pixel 2 XL',
              
            ],
        ];


        // $orders = [
        //     [
        //         // 'name'=>'rexza',
        //         // 'email'=>'some@gmail.com',
        //             'order'=>"koo"
        //     ],
        //     [
        //         // 'name'=>'rexza',
        //         // 'email'=>'some@gmail.com',
        //             'order'=>"reza"
        //     ],
        //     // [
        //     //     // 'name'=>'rexza',
        //     //     // 'email'=>'some@gmail.com',
        //     //         'order'=>"'{'name':'','price:'65',discount:'76','img':'c'}'"
        //     // ],
        // ];

        foreach ($products as   $value) {
            Order::create($value);
        }
    }
}
