<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlexandrainfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alexandrainfos')->insert([
            'name' => "ITI Mansoura 40",
            'hint' => "Information Technology Institute Mansoura Branch",
            'statement' => "Information Technology Institute Mansoura Branch. Information Technology Institute Mansoura Branch. Information Technology Institute Mansoura Branch",
            'image'=>'DSC05123.png',
            'video'=>'1.mp4',            
        ]);
    }
}
