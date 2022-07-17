<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class CreateProductSeeder extends Seeder
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
                'name' => 'Spoon',
                'short_desc' => 'There is no spoon',
                'long_desc' => "Do not try and bend the spoon. That’s impossible. Instead, only try to realize the truth. There is no spoon. Then you'll see, that it is not the spoon that bends, it is only yourself.",
                'price' => 1000,
                'discount' => 0,
                'stock' => 0,
                'img' => "https://www.amazon.com/Dinner-Spoons-Food-Grade-Silverware-Restaurant/dp/B07XYT8X1S",
            ],
            [
                'name' => 'Secure Phone',
                'short_desc' => '',
                'long_desc' => "A secure telephone is a telephone that provides voice security in the form of end-to-end encryption for the telephone call, and in some cases also the mutual authentication of the call parties, protecting them against a man-in-the-middle attack.",
                'price' => 24,
                'discount' => 0,
                'stock' => 2,
                'img' => "https://en.wikipedia.org/wiki/Nokia_8110#/media/File:Matrixphone.jpg",
            ],
            [
                'name' => 'Raspberry Pi 3 with Kali',
                'short_desc' => 'The lastest model of Raspberry Pi that has 64-bit processor, internal WiFi, Bluetooth connection and built-in Kali.',
                'long_desc' => "Raspberry Pi 3 released at Raspberry Pi's fourth birtday. Pi 3 is the most powerful model of them all. BCM2837 SoC (system-on-chip) which produced by Broadcom is on the board, Pi has 1.2 GHz 64-bit 4-core ARM Cortex-A53 processor. Accordingly, Raspberry Pi 3 offers approximately 10 times more processing power than the first model of Raspberry Pi.",
                'price' => 55,
                'discount' => 5,
                'stock' => 100,
                'img' => "https://image.robotistan.com/raspberry-pi-3-64-bit-processor-21276-52-O.jpg",
            ],
        ];

        foreach($products as $product){
            Product::create($product);
        }
    }
}
