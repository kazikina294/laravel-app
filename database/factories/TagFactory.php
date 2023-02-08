<?php
namespace Database\Factories;
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


class TagFactory extends Factory
{

    protected $model = Tag::class;

    public function definition()
    {
        return [

       'label' => $this->faker->word,
        ];

    }


// $factory->define(Tag::class, function (Faker $faker) {
//    return [
//        //
//        'label' => $this->faker->word,
//    ];
//   });



}
