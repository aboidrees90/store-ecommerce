<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Setting::setMany([
            'default_locale' => 'en',
            'default_timezone' => 'Asia/Qatar',
            'reviews_enable' => true,
            'auto_approve_reviews' => true,
            'supported_currencies' => ['USD', 'EUR', 'QAR', 'SAR'],
            'default_currencies' => 'USD',
            'store_email' => 'admin@ecommerce.test',
            'search_engin' => 'mysql',
            'local_pickup_cost' => 0,
            'flat_rate_cost' => 0,
            'translatable' =>  [
                'store_name' => 'Fleet Cart',
                'free_shipping_label' => 'Free Shipping',
                'local_shipping_label' => 'Local Shipping',
                'outer_shipping_label' => 'Outer Shipping',
            ]
        ]);
    }
}
