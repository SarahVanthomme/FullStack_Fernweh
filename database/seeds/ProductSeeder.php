<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       DB::table('products')->insert(['category_id'=>'1', 'continent_id'=>'1','country_id'=>'1','city_id'=>'1','photo_id'=>'1','name'=>'TRAVEL GUIDE MARRAKESH', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut autem beatae consequuntur cupiditate dolores ducimus, ea illo in incidunt laboriosam, molestias nihil nostrum obcaecati quibusdam reprehenderit repudiandae, tempora temporibus voluptates.', 'price'=>'20.00', 'bestseller'=>'1']);
       DB::table('products')->insert(['category_id'=>'1', 'continent_id'=>'1','country_id'=>'1','city_id'=>'1','photo_id'=>'1','name'=>'TRAVEL GUIDE MARRAKESH', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut autem beatae consequuntur cupiditate dolores ducimus, ea illo in incidunt laboriosam, molestias nihil nostrum obcaecati quibusdam reprehenderit repudiandae, tempora temporibus voluptates.', 'price'=>'20.00', 'bestseller'=>'1']);
       DB::table('products')->insert(['category_id'=>'1', 'continent_id'=>'1','country_id'=>'1','city_id'=>'1','photo_id'=>'1','name'=>'TRAVEL GUIDE MARRAKESH', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut autem beatae consequuntur cupiditate dolores ducimus, ea illo in incidunt laboriosam, molestias nihil nostrum obcaecati quibusdam reprehenderit repudiandae, tempora temporibus voluptates.', 'price'=>'20.00', 'bestseller'=>'1']);
       DB::table('products')->insert(['category_id'=>'1', 'continent_id'=>'1','country_id'=>'1','city_id'=>'1','photo_id'=>'1','name'=>'TRAVEL GUIDE MARRAKESH', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut autem beatae consequuntur cupiditate dolores ducimus, ea illo in incidunt laboriosam, molestias nihil nostrum obcaecati quibusdam reprehenderit repudiandae, tempora temporibus voluptates.', 'price'=>'20.00', 'bestseller'=>'1']);
       DB::table('products')->insert(['category_id'=>'1', 'continent_id'=>'1','country_id'=>'1','city_id'=>'1','photo_id'=>'1','name'=>'TRAVEL GUIDE MARRAKESH', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut autem beatae consequuntur cupiditate dolores ducimus, ea illo in incidunt laboriosam, molestias nihil nostrum obcaecati quibusdam reprehenderit repudiandae, tempora temporibus voluptates.', 'price'=>'20.00', 'bestseller'=>'1']);
       DB::table('products')->insert(['category_id'=>'1', 'continent_id'=>'1','country_id'=>'1','city_id'=>'1','photo_id'=>'1','name'=>'TRAVEL GUIDE MARRAKESH', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut autem beatae consequuntur cupiditate dolores ducimus, ea illo in incidunt laboriosam, molestias nihil nostrum obcaecati quibusdam reprehenderit repudiandae, tempora temporibus voluptates.', 'price'=>'20.00', 'bestseller'=>'1']);
       DB::table('products')->insert(['category_id'=>'1', 'continent_id'=>'1','country_id'=>'1','city_id'=>'1','photo_id'=>'1','name'=>'TRAVEL GUIDE MARRAKESH', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut autem beatae consequuntur cupiditate dolores ducimus, ea illo in incidunt laboriosam, molestias nihil nostrum obcaecati quibusdam reprehenderit repudiandae, tempora temporibus voluptates.', 'price'=>'20.00', 'bestseller'=>'1']);
       DB::table('products')->insert(['category_id'=>'1', 'continent_id'=>'1','country_id'=>'1','city_id'=>'1','photo_id'=>'1','name'=>'TRAVEL GUIDE MARRAKESH', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut autem beatae consequuntur cupiditate dolores ducimus, ea illo in incidunt laboriosam, molestias nihil nostrum obcaecati quibusdam reprehenderit repudiandae, tempora temporibus voluptates.', 'price'=>'20.00', 'bestseller'=>'1']);

        //DB::table('products')->insert(['category_id'=>'3', 'continent_id'=>'3','country_id'=>'2','city_id'=>'2','photo_id'=>'2','name'=>'TRAVEL GUIDE SHANGHAI', 'description'=>'Description Shanghai', 'price'=>'20.00']);
        //DB::table('products')->insert(['category_id'=>'4', 'continent_id'=>'4','country_id'=>'3','city_id'=>'4','photo_id'=>'3','name'=>'TRAVEL GUIDE MADRID', 'description'=>'Description Madrid', 'price'=>'20.00']);
    }
}
