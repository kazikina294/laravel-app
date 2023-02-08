<?php
namespace Database\Factories;
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\State;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;



// Чтобы likes больше, чем просмотров views


class StateFactory extends Factory
{

    protected $model = State::class;

    public function definition()
    {
        return [

            'likes' => $this->faker->numberBetween($min = 1, $max = 20),
            'views' => $this->faker->numberBetween($min = 21, $max = 100),
        ];

    }


//$factory->define(State::class, function (Faker $faker) {
//    return [
//
//        'likes' => $this->faker-> numberBetween($min=1, $max=20),
//        'views' => $this->faker-> numberBetween($min=21, $max=100),
//    ];
//});


}
