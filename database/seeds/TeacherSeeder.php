<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers=[
            [
                'name'          =>'Hamit Yeşilyayla',
                'title_id'      =>1,
                'slug'          =>'hamit-yesilyayla',
            ],
            [
                'name'          =>'İbrahim Aksel ',
                'title_id'      =>2,
                'slug'          =>'ibrahim-aksel',
            ]
        ];
        DB::table('teachers')->insert($teachers);
    }
}
