<?php

use Illuminate\Database\Seeder;

class LectureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lectures=[
            [
                'name' =>'İstatistik',
                'slug' =>'istatistik'
            ],
            [
                'name' =>'Araştırma Yöntemleri',
                'slug' =>'arastirma-yontemleri'
            ],
            [
                'name' =>'İşletmeye Giriş',
                'slug' =>'isletmeye-giris'
            ],
        ];
        DB::table('lectures')->insert($lectures);
    }
}
