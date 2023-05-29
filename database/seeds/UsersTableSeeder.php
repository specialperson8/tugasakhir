<?php

use App\Events\Inst;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        // Create admin account
        DB::table('users')->insert([
            'usertype' => 'Admin',
            'first_name' => 'Marz',
            'last_name' => 'Zuki',            
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'image_icon' => 'admin',
            'remember_token' => str_random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('widgets')->insert([
            'footer_widget1_title' => 'Tentang Kami',
            'footer_widget1_desc' => 'Dapur Bunda adalah sebuah jasa catering yang menyiapkan makanan khas Sidoarjo, dengan menu-menu pilihan yang dibuat oleh koki profesional. berdiri sejak 2018 berlokasi di Buduran, Sidarjo',
            'footer_widget2_title' => 'Bermitra Dengan',
            'footer_widget2_desc' => 'Dispenduk Jawa Timur, Kantin Politeknik Negeri Jember, Kemendikbudristek Sidoarjo, SMKN 1 Taman, SMP Al - Azhar Sepanjang, Pondok Pesantren Lirboyo Kediri',
            'footer_widget3_title' => 'Info Lebih Lanjut',
            'footer_widget3_address' => 'Jl. Sekolahan No.1 RT.01 RW.05 Buduran, Sidoarjo, Jawa Timur - Indonesia',
            'footer_widget3_phone' => '085895645840',
            'footer_widget3_email' => 'dapurbunda@gmail.com',
            'about_title' => 'Tentang Kami',
            'about_desc' => 'Aenean ultricies mi vitae est. Mauris placerat eleifend leosit amet est.',
            'need_help_title' => 'Hubungi Kami',
            'need_help_phone' => '085895645840',
            'need_help_time' => 'Jam Operasional : 08.00 - 15.00 WIB'
             
        ]);
        
        DB::table('settings')->insert([            
            'site_name' => 'Dapur Bunda',
            'currency_symbol' => 'Rp',
            'site_email' => 'dapurbunda@gmail.com',
            'site_logo' => 'logo.png',
            'site_favicon' => 'favicon.png',
            'site_description' => 'Viavi - Food Delivery Script Viavi - Food Delivery is an laravel script for Delivery Restaurants',
            'site_copyright' => 'Copyright © 2023 Dapur Bunda - Catering Script. All Rights Reserved.',
            'home_slide_image1' => 'home_slide_image1.png',
            'home_slide_image2' => 'home_slide_image2.png',
            'home_slide_image3' => 'home_slide_image3.png',
            'page_bg_image' => 'page_bg_image.png',
            'total_restaurant' => '2550',
            'total_people_served' => '5355',
            'total_registered_users' => '12454'
        ]);
         
        DB::table('restaurant_types')->insert([
            'type' => 'Nasi Korea',
            'type_image' => 'American_1458535213'
        ]);
        
        DB::table('restaurant_types')->insert([
            'type' => 'Tumpeng',
            'type_image' => 'Chinese_1458535609'
        ]);

        DB::table('restaurant_types')->insert([
            'type' => 'Mie Ayam',
            'type_image' => 'Indian_1458535662'   
        ]);

        DB::table('restaurant_types')->insert([
            'type' => 'Nasi Kuning',
            'type_image' => 'Mexican_1458535796'
        ]);

        DB::table('restaurant_types')->insert([
            'type' => 'Ayam Bakar',
            'type_image' => 'Sushi_1458535621'
        ]);

        DB::table('restaurant_types')->insert([
            'type' => 'Dimsum',
            'type_image' => 'Thai_1458535292'
        ]); 
        
       // factory('App\User', 20)->create();
    }
}
