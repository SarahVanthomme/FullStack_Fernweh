<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PAGE TITLES
        DB::table('translations')->insert(['name'=>'Fernweh', 'body'=>'Fernweh']);
        DB::table('translations')->insert(['name'=>'Shop', 'body'=>'Shop']);

        //HOME
        DB::table('translations')->insert(['name'=>'Titel1', 'body'=>'DISCOVER THE WORLD']);
        DB::table('translations')->insert(['name'=>'Titel2', 'body'=>'BEST SELLERS']);
        DB::table('translations')->insert(['name'=>'Titel3', 'body'=>'TRAVEL TYPE']);
        DB::table('translations')->insert(['name'=>'SubTitel1', 'body'=>'Explore every day.']);
        DB::table('translations')->insert(['name'=>'SubTitel2', 'body'=>'Explore Earth\'s gems.']);
        DB::table('translations')->insert(['name'=>'SubTitel3', 'body'=>'Explore your dreams.']);
        DB::table('translations')->insert(['name'=>'ButtonShop', 'body'=>'SHOP']);
        DB::table('translations')->insert(['name'=>'ButtonContact', 'body'=>'CONTACT']);

        // SHOP OVERVIEW
        DB::table('translations')->insert(['name'=>'OurProducts', 'body'=>'OUR PRODUCTS']);

        //CONTACT
        DB::table('translations')->insert(['name'=>'ContactUsTitle', 'body'=>'Contact Us']);
        DB::table('translations')->insert(['name'=>'Name', 'body'=>'Name']);
        DB::table('translations')->insert(['name'=>'Email', 'body'=>'Email']);
        DB::table('translations')->insert(['name'=>'YourMessage', 'body'=>'Your Message']);
        DB::table('translations')->insert(['name'=>'Send', 'body'=>' Send ']);






        //FOOTER
        DB::table('translations')->insert(['name'=>'AboutUs', 'body'=>'ABOUT US']);
        DB::table('translations')->insert(['name'=>'AboutUsContent', 'body'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis repudiandae voluptas. Aspernatur
                    dolorum esse fuga inventore nobis perspiciatis quia sapiente soluta temporibus.']);
        DB::table('translations')->insert(['name'=>'Newsletter', 'body'=>'NEWSLETTER']);
        DB::table('translations')->insert(['name'=>'NewsletterContent', 'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet facere placeat.']);
        DB::table('translations')->insert(['name'=>'ButtonSignUp', 'body'=>'Yes, sign me up !']);
        DB::table('translations')->insert(['name'=>'InstagramFeed', 'body'=>'INSTAGRAM FEED']);
        DB::table('translations')->insert(['name'=>'ContactUs', 'body'=>'CONTACT US']);
        DB::table('translations')->insert(['name'=>'FwStreet', 'body'=>'Schönhauser Allee']);
        DB::table('translations')->insert(['name'=>'FwNumCountry', 'body'=>'167c, 10345 Berlin Germany']);
        DB::table('translations')->insert(['name'=>'FooterEmail', 'body'=>'Email: ']);
        DB::table('translations')->insert(['name'=>'FwEmail', 'body'=>'moin@fernweh.de']);
        DB::table('translations')->insert(['name'=>'FooterTel', 'body'=>'Telephone: ']);
        DB::table('translations')->insert(['name'=>'FwTel', 'body'=>'0123456789']);
        DB::table('translations')->insert(['name'=>'@Footer', 'body'=>'&copy; Fernweh. All Rights Reserved']);

    }
}
