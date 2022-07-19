<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'sku' => 'PROD1',
            'name' => 'Gala Apple',
            'price' => '2.49',
            'description' => 'Gala apples are sweet and crisp with pink-orange stripes over a yellow background. They are juicy, fragrant, and best enjoyed raw.',
            'measure_unit' => 'lbs',
            'quantity' => '3'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD2',
            'name' => 'Banana',
            'price' => '0.70',
            'description' => 'Bananas are typically 6-10 inches long and have a green peel when unripe. They taste best when the peel turns yellow and is speckled with dark spots.',
            'measure_unit' => 'lbs',
            'quantity' => '2'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD3',
            'name' => 'Strwberry',
            'price' => '4.49',
            'description' => 'Strawberries vary in colour, shape, and size but their flavour is distinctively sweet. They are topped with a hull of green leaves and are speckled with seeds on the surface.',
            'measure_unit' => 'lbs',
            'quantity' => '4'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD4',
            'name' => 'English Cucumber',
            'price' => '1.49',
            'description' => 'English (or hothouse) cucumbers are cylindrical green-skinned fruit with a crisp white flesh and edible seeds. English cucumbers are typically enjoyed raw and can be peeled or eaten with the skin on.',
            'measure_unit' => 'lbs',
            'quantity' => '3'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD5',
            'name' => 'Celery Stalks',
            'price' => '2.99',
            'description' => 'Celery has a cluster of pale green leaved ribs surrounding a heart (inner ribs). Trimmed celery leaves can be used as a garnish or added to a mixed greens salad.',
            'measure_unit' => 'lbs',
            'quantity' => '2'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD6',
            'name' => 'Yellow Onions',
            'price' => '2.49',
            'description' => ' It is higher in sulfur content than the white onion, which gives it a stronger, more complex flavor.',
            'measure_unit' => 'lbs',
            'quantity' => '3'

        ]);
    }
}
