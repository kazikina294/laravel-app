<?php
namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;


use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

// Фабрики заполняют базу данных с помощью библиотеки faker и нашей логики
class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        $title = $this->faker->sentence(6,true);
        //Если вы хотите удалить все пробелы, включая пространство табуляции, вы можете использовать
        // preg_replace('/\s+/', '', $request->designation_name);  \s+ says "match a sequence, made up of one or more space characters"

        $slug = Str:: substr(Str::lower(preg_replace('/\s+/', '-',$title)),0,-1);

        // "Hello wold hello wold hello wold." нужно привести всё к нижнему регистру, убрать точку в конце и заменить пробелы
        // "hello-wold-Hello-wold-Hello-wold"
        // https://laravel.com/docs/8.x/helpers
        //изображения https://via.placeholder.com/600/5F1138/FFFFFF?text=LARAVEL:8.*
        //dateTimeBetween('-1 years') статьи,  созданы в разное время
        // выполняется  SQL: insert into `articles` (`title`, `body`, `slug`, `created_at`, `updated_at`) values
        return [
            'title' => $title,
            'body' => $this->faker->paragraph(100,true),
            'slug' => $slug,
             'img'=>'https://via.placeholder.com/600/5F1138/FFFFFF?text=LARAVEL:8.*',
            'created_at' => $this->faker-> dateTimeBetween('-1 years'),
                    ];
    }


}

//$factory->define(Article::class, function (Faker $faker)
//{
//    return [
//        //
//    ];
//});

