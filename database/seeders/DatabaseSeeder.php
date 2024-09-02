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
        User::factory(5)->create();
        Category::factory(5)->create();
        Product::factory(5)->create();
        Order::factory(5)->create();
        Cart::factory(5)->create();
        OrderItem::factory(5)->create();
        Address::factory(5)->create();
        // OrderItems::factory(10)->create();
        // OrderItemsFactory(10)->create();

    }
}
