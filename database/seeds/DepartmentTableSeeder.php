<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'faculty_id'=>1,
                'name' => 'Yönetim Bilişim Sistemleri',
                'slug'        =>'yonetim-bilisim-sistemleri' ,
            ],
            [
                'faculty_id'=>1,
                'name' => 'Çalışma Ekonomisi',
                'slug'        =>'ceko' ,
            ],
            [
                'faculty_id'=>1,
                'name' => 'Ekonometri',
                'slug'        => 'ekonometri' ,
            ],
            [
                'faculty_id'=>2,
                'name' => 'Bilgisayar Mühendisliği',
                'slug'        => 'bilgisayar-muh' ,
            ],
            [
                'faculty_id'=>2,
                'name' => 'Makine Mühendisliği',
                'slug'        => 'makine-muh' ,
            ],

        ];

        DB::table('departments')->insert($departments);
    }
}
