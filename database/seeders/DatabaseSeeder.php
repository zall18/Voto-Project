<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
// use Database\Factories\OrderItem;
// use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);





        //USE THIS USER TO TEST
        //THE USER IS A ADMIN, SO YOU CAN LOGIN TO ADMIN VIEW

        User::create([
            'name' => 'james smith',
            'email' => 'james@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'admin'
        ]);

        Address::create([
            'user_id' => '1',
            'street_address' => 'Tokyo street ST 12',
            'city' => 'Tokyo',
            'state' => 'babakan muncang',
            'postal_code' => '09182',
            'country' => 'Japan',
            'phone' => '099809129803',
            'detail_address' => 'side of paradise'
        ]);

        User::factory(10)->create();
        Category::factory(10)->create();
        Product::factory(10)->create();
        Order::factory(10)->create();
        Cart::factory(10)->create();
        OrderItem::factory(10)->create();
        Address::factory(10)->create();
        // OrderItems::factory(10)->create();
        // OrderItemsFactory(10)->create();

    }
}
