<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MerchandiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nm = ['T-shirts','Leisurewear','Home decor','Tote bags','Embroidered sweatshirt','Mugs','Hats','Phone cases','Stickers','Face mask',
    'Desk Accessories','Blue Light Blocking Glasses','Branded Pen','Eco-friendly Water Bottle','Ceramic Mugs','Power Bank','Flash Drive','Embroidered Logo Patches'];
        $pc =['500','400','200','150','600','200','1000','700','600'];
        return [
            'name'=>$this->faker->randomElement($nm),
            'discription'=>$this->faker->sentence(),
            'quantity'=>$this->faker->numerify('####'),
            'price'=>$this->faker->randomElement($pc),
        ];
    }
}
