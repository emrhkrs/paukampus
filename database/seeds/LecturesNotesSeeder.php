<?php

use Illuminate\Database\Seeder;

class LecturesNotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lectures_notes=[
            [
                'lecture_id' =>1,
                'note_id'=>1
            ],
            [
                'lecture_id' =>1,
                'note_id'=>2
            ],
        ];
        DB::table('lectures_notes')->insert($lectures_notes);
    }
}
