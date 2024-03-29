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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(ContinentsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(CategoryPhotosTableSeeder::class);
        $this->call(IndexBannersTableSeeder::class);
        $this->call(IndexBannerPhotosTableSeeder::class);
        $this->call(ContinentPhotosTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(BannerPhotosTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
        //$this->call(ProductReviewsTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
