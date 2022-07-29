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
            'quantity' => '0'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD5',
            'name' => 'Celery Stalks',
            'price' => '2.99',
            'description' => 'Celery has a cluster of pale green leaved ribs surrounding a heart (inner ribs). Trimmed celery leaves can be used as a garnish or added to a mixed greens salad.',
            'measure_unit' => 'lbs',
            'quantity' => '0'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD6',
            'name' => 'Yellow Onions',
            'price' => '2.49',
            'description' => ' It is higher in sulfur content than the white onion, which gives it a stronger, more complex flavor.',
            'measure_unit' => 'lbs',
            'quantity' => '3'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD7',
            'name' => 'Tomato Vine',
            'price' => '2.33',
            'description' => 'Tomatoes are excellent when used fresh in salads, but they can also be roasted or used in many tomato-based recipes.',
            'measure_unit' => 'lbs',
            'quantity' => '2'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD8',
            'name' => 'Lattuce Iceberg',
            'price' => '1.79',
            'description' => 'Iceberg (or crisphead) lettuce is a round, tightly-packed head of pale green leaves. It has a crisp texture and a mild flavour and is mainly used fresh.',
            'measure_unit' => 'lbs',
            'quantity' => '3'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD9',
            'name' => 'Lemon',
            'price' => '0.99',
            'description' => 'Lemons have a bright yellow peel and can vary in size depending on the variety. This citrus fruit produces a tart, acidic juice that will add flavour to your salad dressings, beverages, and marinades.',
            'measure_unit' => 'lbs',
            'quantity' => '3'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD10',
            'name' => 'Couliflower',
            'price' => '3.99',
            'description' => 'Cauliflower is a cruciferous vegetable that comes in a tight cluster of florets surrounded by crisp green leaves. It is normally white but also comes in green, purple, and orange.',
            'measure_unit' => 'lbs',
            'quantity' => '3'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD11',
            'name' => 'Broccoli',
            'price' => '1.99',
            'description' => 'Broccoli is a cruciferous vegetable that comes in a tight cluster of florets on top of firm, edible stalks. It is deep green in colour.',
            'measure_unit' => 'lbs',
            'quantity' => '3'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD12',
            'name' => 'Cantaloupe',
            'price' => '3.99',
            'description' => 'Cantaloupes have a greyish-beige skin with a raised netting overtop. The flesh is pale orange, juicy, and sweet. When ripe, cantaloupes are fragrant and yield to pressure at the blossom end.',
            'measure_unit' => 'lbs',
            'quantity' => '3'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD13',
            'name' => 'Red Pepper',
            'price' => '3.49',
            'description' => 'Red bell peppers start with green skin but are left to ripen longer, giving them their bright red skin and sweet, fruity flavor.',
            'measure_unit' => 'lbs',
            'quantity' => '23'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD14',
            'name' => 'Milk',
            'price' => '1.00',
            'description' => 'Milk has been subjected to at least one heat treatment and has a content of fat of at least 1.5% to a maximum of 2%. With 2% milk fat, it is possible to reduce fat intake while preserving whole milk flavour.',
            'measure_unit' => 'lt',
            'quantity' => '105'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD15',
            'name' => 'Butter',
            'price' => '4.99',
            'description' => 'Butter is the solid mass resulting from churning freshly separated, pasteurized cream. Product shall be smooth textured with a solid body.',
            'measure_unit' => 'lbs',
            'quantity' => '43'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD16',
            'name' => 'Cheese',
            'price' => '4.99',
            'description' => 'This mouth-watering blend of shredded old, medium and mild Cheddar cheeses saves you much needed time in the kitchen.',
            'measure_unit' => 'lbs',
            'quantity' => '93'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD17',
            'name' => 'Whipped Cream',
            'price' => '4.19',
            'description' => 'Light and fluffy Whipped Cream, perfect for any dessert.',
            'measure_unit' => 'lbs',
            'quantity' => '205'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD18',
            'name' => 'Yougurt',
            'price' => '2.77',
            'description' => '6% M.F. traditional set style yogourt.',
            'measure_unit' => 'lbs',
            'quantity' => '215'

        ]);
    }
}
