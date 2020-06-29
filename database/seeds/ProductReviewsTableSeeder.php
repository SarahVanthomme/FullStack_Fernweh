<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product_reviews')->insert(['user_id'=>'1', 'product_id'=>'1','email'=>'test@test.be','body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur corporis dolorem dolores dolorum, eius enim eos facilis fuga ipsam, iste itaque non quae qui quod ratione rerum ullam, velit voluptatibus.']);

    }
}
