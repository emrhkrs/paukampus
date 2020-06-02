<?php

use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        $titles=[
            [
                'name'          =>$faker->title,

            ],
            [
                'name'          =>$faker->title,
            ],
            [
                'name'          =>$faker->title,
            ],
        ];
        DB::table('titles')->insert($titles);
    }
}
