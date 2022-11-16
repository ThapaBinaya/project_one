<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Site_settingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_setting')->insert([
            'title'      => 'It Bridge',
            'alias'      =>  'njcnsnsdnd',
            'logo'      =>  'logo.jpg',
            'facebook'   => 'www.facebook.com',
            'twitter'     => 'twitter.com',
            'tiktok'      => 'tiktok.com',
            'address'     => 'Ktm',
            'phone'       => '9874561301',
            'email'     => 'admin@laravel.com',
        ]);
    }
}
