<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'phoneNo' => "010101010",
            'email' => "iti@gmail.com",
            'telegramLink' => "iti@telegram.com",
            'whatsAppLink'=>'iti@whats.com',
            'viberLink'=>'iti@whats.com',
            'pinterestLink'=>'iti@whats.com',
            'facebookLink'=>'iti@whats.com',
            'instaLink'=>'iti@whats.com',
            'wLink'=>'iti@whats.com',
            'youtubeLink'=>'iti@whats.com',
                      
        ]);
    }
}
