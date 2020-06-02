<?php

use Illuminate\Database\Seeder;

class FacultyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faculty = [
            [
                'name' => 'İktisadi İdari Bilimler Fakültesi',
                'slug'        =>'iktisadi-idari-bilimler' ,
            ],
            [
                'name' => 'Mühendislik Fakültesi',
                'slug'        =>'muhendislik-fakıltesi' ,
            ],
            [
                'name' => 'Tıp Fakültesi',
                'slug'        =>'tip-fakultesi' ,
            ],
        ];

        DB::table('faculty')->insert($faculty);
    }
}
