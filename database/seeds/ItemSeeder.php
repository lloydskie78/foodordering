<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'user_id' => 1,
                'category_id' => 1,
                'name' => 'Burger1',
                'description' => 'Burger that is tasty',
                'price' => 12.00,
                'qty' => 100,
                'tax' => 5.00,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'filename' => '',
                'mime' => '',
            ],
            [
                'user_id' => 1,
                'category_id' => 1,
                'name' => 'Burger2',
                'description' => 'Burger that is tasty',
                'price' => 22.00,
                'qty' => 100,
                'tax' => 5.00,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'filename' => '',
                'mime' => '',
            ],
            [
                'user_id' => 1,
                'category_id' => 1,
                'name' => 'Burger3',
                'description' => 'Burger that is tasty',
                'price' => 41.00,
                'qty' => 100,
                'tax' => 5.00,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'filename' => '',
                'mime' => '',
            ],
            [
                'user_id' => 1,
                'category_id' => 2,
                'name' => 'Beverage1',
                'description' => 'Drinks that are thirst quencher',
                'price' => 51.00,
                'qty' => 150,
                'tax' => 5.00,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'filename' => '',
                'mime' => '',
            ],
            [
                'user_id' => 1,
                'category_id' => 2,
                'name' => 'Beverage2',
                'description' => 'Drinks that are thirst quencher',
                'price' => 32.00,
                'qty' => 150,
                'tax' => 5.00,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'filename' => '',
                'mime' => '',
            ],
            [
                'user_id' => 1,
                'category_id' => 2,
                'name' => 'Beverage3',
                'description' => 'Drinks that are thirst quencher',
                'price' => 35.00,
                'qty' => 150,
                'tax' => 5.00,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'filename' => '',
                'mime' => '',
            ],
            [
                'user_id' => 1,
                'category_id' => 3,
                'name' => 'Combo1',
                'description' => 'Budget meals',
                'price' => 45.00,
                'qty' => 20,
                'tax' => 5.00,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'filename' => '',
                'mime' => '',
            ],
            [
                'user_id' => 1,
                'category_id' => 3,
                'name' => 'Combo2',
                'description' => 'Budget meals',
                'price' => 50.00,
                'qty' => 20,
                'tax' => 5.00,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'filename' => '',
                'mime' => '',
            ],
            [
                'user_id' => 1,
                'category_id' => 3,
                'name' => 'Combo3',
                'description' => 'Budget meals',
                'price' => 100.00,
                'qty' => 20,
                'tax' => 5.00,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'filename' => '',
                'mime' => '',
            ],
        ]);
    }
}
