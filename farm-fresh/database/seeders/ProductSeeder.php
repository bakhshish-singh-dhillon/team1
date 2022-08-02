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

        DB::table('products')->insert([
            'sku' => 'PROD19',
            'name' => 'Flavour Yougart 4PK',
            'price' => '5.49',
            'description' => 'Strawberry and Vanilla, two exquisite flavours available in one convenient 4 x 250g format.',
            'measure_unit' => 'lbs',
            'quantity' => '15'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD20',
            'name' => 'Milk Chocolate',
            'price' => '1.99',
            'description' => 'The classic, creamy taste of Milk Chocolate.100% sustainably sourced cocoa.',
            'measure_unit' => 'lbs',
            'quantity' => '24'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD21',
            'name' => 'Cream Cheese',
            'price' => '2.49',
            'description' => 'Cream cheese is the perfect spread on a bagel in the morning.',
            'measure_unit' => 'lbs',
            'quantity' => '95'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD22',
            'name' => 'Egg White 12 Pk',
            'price' => '4.19',
            'description' => 'Eggs range in size (extra-large, large, medium, etc.) and their shells are either white or brown, depending on the breed of the hen.',
            'measure_unit' => 'lbs',
            'quantity' => '200'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD23',
            'name' => 'Egg Brown 12 Pk',
            'price' => '4.99',
            'description' => 'Eggs range in size (extra-large, large, medium, etc.) and their shells are either white or brown, depending on the breed of the hen.',
            'measure_unit' => 'lbs',
            'quantity' => '265'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD24',
            'name' => 'Sweet Green Pepper',
            'price' => '2.49',
            'description' => 'Green bell peppers have a bright green skin and mild, sweet flavour. Their flesh is crisp and juicy, perfect for enjoying raw with dips or hummus.',
            'measure_unit' => 'lbs',
            'quantity' => '221'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD25',
            'name' => 'Zucchini',
            'price' => '1.49',
            'description' => 'Zucchini are summer squash with dark to light green skin, white flesh, and tiny edible seeds. They have a delicate flavour and can be eaten raw or cooked in a variety of ways.',
            'measure_unit' => 'lbs',
            'quantity' => '201'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD26',
            'name' => 'Green Grapes',
            'price' => '3.99',
            'description' => 'Green grapes range in colour from pale green to amber yellow and are considered white grape varieties.',
            'measure_unit' => 'lbs',
            'quantity' => '101'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD27',
            'name' => 'Red Grapes',
            'price' => '3.99',
            'description' => 'Red grapes, such as the popular Flame and Ruby varieties, should be plump and firmly attached to green stems.',
            'measure_unit' => 'lbs',
            'quantity' => '111'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD28',
            'name' => 'Sweet Potato',
            'price' => '1.79',
            'description' => 'Sweet potatoes have a thick dark orange skin and sweet orange flesh. Yams are similar in size and shape but are not related to the sweet potato at all.',
            'measure_unit' => 'lbs',
            'quantity' => '11'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD29',
            'name' => 'Raspberry',
            'price' => '4.49',
            'description' => 'Raspberries are delicate fruit with bright red drupelets that connect to each other around a hollow central core. Their flavour is sweet but can also be tart if they aren’t quite ripe.',
            'measure_unit' => 'lbs',
            'quantity' => '85'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD30',
            'name' => 'Cilantro',
            'price' => '0.99',
            'description' => 'Cilantro is the bunched leafy green from the coriander plant. It has a distinctive flavour and fragrance that some describe as “soapy”.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD31',
            'name' => 'Blueberry',
            'price' => '3.99',
            'description' => 'Blueberries range in colour from a deep purple-blue to a blue-black, both with a silvery sheen called bloom.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD32',
            'name' => 'Limes',
            'price' => '2.99',
            'description' => 'Limes are shaped like lemons but a little smaller in size. They have green skin and their green pulp produces a tart, aromatic juice that is used in everything from dressings to desserts.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD33',
            'name' => 'Potato',
            'price' => '1.29',
            'description' => 'Potatoes have a rough brown skin and a tender white flesh with a mild flavour. They are a popular variety of potato and a good choice for baking, mashing, and frying.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD34',
            'name' => 'Asparagus',
            'price' => '6.49',
            'description' => 'Asparagus stalks range in colour from green to purple, with dark green or purplish tips.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);
        
        DB::table('products')->insert([
            'sku' => 'PROD35',
            'name' => 'Avocados',
            'price' => '8.99',
            'description' => 'Avocados have a pebbly skin that turns from dark green to near black when ripe. Cut lengthwise, twist to separate the halves, and scoop out the creamy.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD36',
            'name' => 'Pineapples',
            'price' => '1.99',
            'description' => 'Pineapples have a diamond-patterned skin that resembles a pinecone with crisp, green leaves shooting out the top.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD37',
            'name' => 'Ginger',
            'price' => '0.99',
            'description' => 'Ginger (or gingerroot) has a tough tan skin and a fresh spicy fragrance. Ginger can be grated, slivered, or ground and its peppery flavour is used in a variety of dishes.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD38',
            'name' => 'Pears',
            'price' => '2.49',
            'description' => 'Bartlett pears are bell shaped with smooth yellowish-green skin, often with a hint of red. They are sweet and juicy, the perfect choice for eating fresh as a snack.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD39',
            'name' => 'Garlic',
            'price' => '2.49',
            'description' => 'Garlic is the small, white, round bulb of a plant that is related to the onion plant.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD40',
            'name' => 'Apricots',
            'price' => '2.49',
            'description' => 'Apricots are related to peaches and have smooth skin that ranges in colour from bright yellow to deep orange.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD41',
            'name' => 'Mango',
            'price' => '4.49',
            'description' => 'Mangoes have a firm, fibrous orange flesh and sweet flavour.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD42',
            'name' => 'Kiwi',
            'price' => '2.99',
            'description' => 'Kiwi is a fruit of ovoid shape, of variable size and covered with a brown fuzzy thin skin.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD43',
            'name' => 'Jalapeno',
            'price' => '1.99',
            'description' => 'Jalapeno peppers are slightly rounded chilies with smooth green skin that turns red when ripe. Jalapenos are popular because of their flavour and because they are easy to seed.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD44',
            'name' => 'Grapefruit',
            'price' => '3.99',
            'description' => 'Grapefruit is a juicy citrus fruit with yellow skin that sometimes has a pinkish hue. Grapefruits that feel heavy for their size will likely be the juiciest.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD45',
            'name' => 'Greenbeans',
            'price' => '1.39',
            'description' => 'Greenbeans hearts are the pale green, tender inner ribs of celery. Enjoy celery hearts on their own or with dip as a snack, or chop for soups, stews, or a flavourful tuna salad sandwich.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD46',
            'name' => 'Plum',
            'price' => '3.99',
            'description' => 'Plums are available in a wide range of colours including black, yellow, and red. Their flavour also ranges from very sweet to tart, and they can be enjoyed cooked or raw.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD47',
            'name' => 'Peach',
            'price' => '2.99',
            'description' => 'Peaches range in colour from pinkish-white to reddish-yellow and their flavour can be tart or sweet.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD48',
            'name' => 'Orange',
            'price' => '2.49',
            'description' => 'The orange is usually round or oval citrus; its rind and flesh are generally orange, except the varieties of red pulp.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD49',
            'name' => 'Cherry',
            'price' => '5.19',
            'description' => 'Cherries are firm, juicy, and sweet and turn from dark red to almost black when fully ripe.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);

        DB::table('products')->insert([
            'sku' => 'PROD50',
            'name' => 'Carrot',
            'price' => '2.29',
            'description' => 'Carrots are long and slender and come in a variety of colours in addition to orange. This popular vegetable is available all year and can be eaten raw or cooked in many ways.',
            'measure_unit' => 'lbs',
            'quantity' => '100'

        ]);
    }
}
