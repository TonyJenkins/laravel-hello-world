<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dog;
use Faker\Generator as Faker;

$factory -> define (Dog::class, function (Faker $faker) {

    $breeds = ['Bulldog', 'Chihuahua', 'Terrier', 'Mastiff', 'Bloodhound',
               'Labrador', 'Great Dane', 'Irish Wolfhound', 'Lurcher',
               'Poodle', 'Beagle', 'Pug', 'Greyhound', 'Husky',
               'Boxer', 'Labrador', 'Dachshund', 'Pomeranian', 'Rottweiler',
        ];

    return [

        'name' => $faker -> firstName,
        'breed' => $breeds [array_rand ($breeds)],
        'score' => $faker ->  numberBetween (0, 10),

    ];
});
