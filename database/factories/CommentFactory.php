<?php
namespace Database\Factories;
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;


class CommentFactory extends Factory
{
    protected $model = Comment::class;


// subject  фраза из 3х слов
//body текст из 3х предложений
    public function definition()
    {
        return [

            'subject' => $this->faker->sentence('3'),
            'body' => $this->faker->paragraph(3,false),
        ];

    }





//$factory->define(Comment::class, function (Faker $faker)
//{
 //   return [
//        'subject' => $this->faker->sentence('3'),
 //       'body' => $this->faker->paragraph(3,false),
 //   ];
//});
}
