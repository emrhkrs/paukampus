<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(FacultyTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(LectureTableSeeder::class);
        $this->call(LectureDepartmentTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(TitleSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(NoteSeeder::class);
        $this->call(BooksSeeder::class);
        //$this->call(LecturesNotesSeeder::class);
        $this->call(LecturesTeachersSeeder::class);

    }
}
