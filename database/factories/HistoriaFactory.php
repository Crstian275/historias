<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Historia;
use Faker\Generator as Faker;

$factory->define(Historia::class, function (Faker $faker) {
	$enlace_video = $faker->randomelement(['https://www.youtube.com/watch?v=IJ4zoo8RyfY',
		'https://www.youtube.com/watch?v=AKPVWuQMwSI','https://www.youtube.com/watch?v=q9Grf_Dw8OI',
		'https://www.youtube.com/watch?v=FJNc8Jfs4UQ','https://www.youtube.com/watch?v=QvTeXucZYJU',
		' https://www.youtube.com/watch?v=lpWjBFyTbHA']);

	$nombreImagen = 'img/'.$faker->randomElement
   (['1','2','3','4','5','6','7']).'.jpg';
    return [
        'Titulo' => $faker->name,
        'Descripcion' => $faker->paragraph(2),
        'Texto' => $faker->text,
        'imagen' => $nombreImagen,
        'Enlace_historia' => $faker->paragraph(2),
        'Enlace_video' => $enlace_video,


    ];
});
