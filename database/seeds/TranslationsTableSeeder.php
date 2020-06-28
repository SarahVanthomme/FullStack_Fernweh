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
        DB::table('translations')->insert(['name'=>'Continents', 'body'=>'Continents']);
        DB::table('translations')->insert(['name'=>'AllContinents', 'body'=>'All continents']);
        DB::table('translations')->insert(['name'=>'Countries', 'body'=>'Countries']);
        DB::table('translations')->insert(['name'=>'AllCountries', 'body'=>'All countries']);
        DB::table('translations')->insert(['name'=>'Cities', 'body'=>'Cities']);
        DB::table('translations')->insert(['name'=>'AllCities', 'body'=>'All cities']);
        DB::table('translations')->insert(['name'=>'Categories', 'body'=>'Categories']);
        DB::table('translations')->insert(['name'=>'AllCategories', 'body'=>'All categories']);

        //SHOP DETAIL
        DB::table('translations')->insert(['name'=>'CategorieShopDetail', 'body'=>'Categorie: ']);
        DB::table('translations')->insert(['name'=>'Description', 'body'=>'Description']);
        DB::table('translations')->insert(['name'=>'Quantity', 'body'=>'Quantity']);
        DB::table('translations')->insert(['name'=>'ButtonShopDetail', 'body'=>'Yes, add to cart !']);

        //CHECK OUT
        DB::table('translations')->insert(['name'=>'CheckOut', 'body'=>'Check Out']);
        DB::table('translations')->insert(['name'=>'BillingDetails', 'body'=>'Billing Details']);
        DB::table('translations')->insert(['name'=>'FullName', 'body'=>'Full Name']);
        DB::table('translations')->insert(['name'=>'Phone', 'body'=>'Telephone Number']);
        DB::table('translations')->insert(['name'=>'Country', 'body'=>'Country']);
        DB::table('translations')->insert(['name'=>'Street', 'body'=>'Street']);
        DB::table('translations')->insert(['name'=>'StreetNumber', 'body'=>'No']);
        DB::table('translations')->insert(['name'=>'City', 'body'=>'City']);
        DB::table('translations')->insert(['name'=>'Zip', 'body'=>'Zip Code']);
        DB::table('translations')->insert(['name'=>'YourOrder', 'body'=>'Your Order']);
        DB::table('translations')->insert(['name'=>'Product', 'body'=>'Product']);
        DB::table('translations')->insert(['name'=>'Total', 'body'=>'Total']);
        DB::table('translations')->insert(['name'=>'Update', 'body'=>'Update']);
        DB::table('translations')->insert(['name'=>'Remove', 'body'=>'Remove']);
        DB::table('translations')->insert(['name'=>'CartEmpty', 'body'=>'Looks like your cart is empty.']);
        DB::table('translations')->insert(['name'=>'Subtotal', 'body'=>'Subtotal']);
        DB::table('translations')->insert(['name'=>'Shipping', 'body'=>'Shipping']);
        DB::table('translations')->insert(['name'=>'FlatRate', 'body'=>'Flat Rate']);
        DB::table('translations')->insert(['name'=>'€5', 'body'=>'€ 5.00']);
        DB::table('translations')->insert(['name'=>'ReadAndAccept', 'body'=>'I have read and accept the ']);
        DB::table('translations')->insert(['name'=>'TermsAndConditions', 'body'=>'terms and conditions']);
        DB::table('translations')->insert(['name'=>'ButtonProceedPayment', 'body'=>'Proceed to payment']);

        //PAYMENT

        DB::table('translations')->insert(['name'=>'YourPayment', 'body'=>'Your Payment']);
        DB::table('translations')->insert(['name'=>'PaymentDetails', 'body'=>'Payment Details']);
        DB::table('translations')->insert(['name'=>'NameOnCard', 'body'=>'Name On Card']);
        DB::table('translations')->insert(['name'=>'CardNumber', 'body'=>'Card Number']);
        DB::table('translations')->insert(['name'=>'CVC', 'body'=>'CVC']);
        DB::table('translations')->insert(['name'=>'CVCexample', 'body'=>'ex. 311']);
        DB::table('translations')->insert(['name'=>'ExpirationMonth', 'body'=>'Expiration Month']);
        DB::table('translations')->insert(['name'=>'MM', 'body'=>'MM']);
        DB::table('translations')->insert(['name'=>'ExpirationYear', 'body'=>'Expiration Year']);
        DB::table('translations')->insert(['name'=>'YYYY', 'body'=>'YYYY']);
        DB::table('translations')->insert(['name'=>'ButtonPayNow', 'body'=>' Pay Now ']);

        //CONFIRMATION
        DB::table('translations')->insert(['name'=>'ThankYou', 'body'=>'Thank You !']);
        DB::table('translations')->insert(['name'=>'OrderReceived', 'body'=>'Your order has been received.']);


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
