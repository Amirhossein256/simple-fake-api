<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    protected $model = product::class;

    protected $fakeProduct = [
        'موبایل',
        'لپ تاپ',
        'پی سی',
        'لوازم جانبی',
        'تبلت',
        'باطری',
        'دوربین عکاسی',
        'کتابخوان',
        'مودم',
        'تجهیزات شبکه',
        'هارد',
        'فلش',
        'رم',
        'هدفون بیسیم',
        'هندزفری',
        'مچ بند هوشمند',
        'ساعت هوشمند',
        'کنسول بازی',
        'لباس',
        'کیف',
        'کفش',
        'کاپشن',
        'بافت',
        'شلوار',
        'کمربرد',
    ];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->randomElement($this->fakeProduct),
            "description" => $this->faker->paragraph(4),
            "price" => number_format(rand(1,9) . str_repeat("0", 8)),
            "star" => rand(1,5)
        ];
    }
}
