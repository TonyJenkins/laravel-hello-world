<?php

use App\Dog;

use Illuminate\Database\Seeder;

class DogsTableSeeder extends Seeder {

    public function run () {

        factory (Dog::class, 10) -> create ();

    }
}
