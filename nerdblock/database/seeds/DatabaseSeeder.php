<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('users')->insert([
            'firstName' => 'Shawn',
            'lastName' => 'Kirubakaran',
            'email' => 'shawn@dcmail.ca',
            'address' => $faker->streetAddress,
            'city' => 'Oshawa',
            'state' => 'Ontario',
            'phone' => $faker->phoneNumber,
            'password' => bcrypt('password'),
            'isEmployee' => '1',
            'remember_token' => 'session_id',
            'created_at' => $faker->dateTimeBetween($startDate = '-60 days', $endDate = '-15 days', $timezone = null),
            'updated_at' => $faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null)
        ]);

        DB::table('jobs')->insert([
            'jobTitle' => 'Web Developer',
            'jobDescription' => $faker->sentence($nbWords = 15, $variableNbWords = true),
            'jobDepartment' => $faker->sentence($nbWords = 2, $variableNbWords = true),
            'hourlySalary' => $faker->numberBetween(8, 20) . '00',
            'jobSalary' => $faker->numberBetween(5500, 6500) . '00',
            'created_at' => $faker->dateTimeBetween($startDate = '-60 days', $endDate = '-15 days', $timezone = null),
            'updated_at' => $faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null)
        ]);

        DB::table('employees')->insert([
            'employeeID' => '1',
            'jobID' => '1',
            'employeeWorkHours' => $faker->numberBetween(1, 60) . '00',
            'isAdmin' => '1',
            'created_at' => $faker->dateTimeBetween($startDate = '-60 days', $endDate = '-15 days', $timezone = null),
            'updated_at' => $faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null)
        ]);






        foreach(range(1, 50) as $index){

            DB::table('blocks')->insert([
                'blockName' => $faker->randomElement(['Batman', 'Deadpool', 'Dungeons & Dragons', 'Monster Hunter', 'Fantasy', 'Hello Kitty', 'Ghoulish', 'Anime']) . ' ' . $faker->randomElement(['Bundle', 'Package', 'Gear', 'Collectible', 'Exclusive Crate', 'Accessories']),
                'blockDescription' => $faker->sentence($nbWords = 15, $variableNbWords = true),
                'blockPrice' => $faker->numberBetween(16, 29) . '.99',
                'blockLaunchDate' => $faker->dateTimeBetween($startDate = '-60 days', $endDate = 'now', $timezone = null),
                'blockTheme' => $faker->randomElement(['horror', 'classic', 'gaming', 'childhood', 'comic', 'sci-fi']),
                'created_at' => $faker->dateTimeBetween($startDate = '-60 days', $endDate = '-15 days', $timezone = null),
                'updated_at' => $faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null)
            ]);

        }

        DB::table('customer_subscriptions')->insert([
            'id' => '1',
            'blockID' => $faker->numberBetween(1, 10),
            'customerOrderPurchaseDate' => $faker->dateTimeBetween($startDate = '-10 days', $endDate = 'now', $timezone = null),
            'customerOrderProgress' => $faker->randomElement(['ordered', 'cancelled', 'shipped', 'refunded', 'recalled', 'completed']),
            'created_at' => $faker->dateTimeBetween($startDate = '-60 days', $endDate = '-15 days', $timezone = null),
            'updated_at' => $faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null)
        ]);

        foreach (range(1,10) as $index) {
            DB::table('jobs')->insert([
                'jobID' => $index+1,
                'jobTitle' => $faker->unique(true)->randomElement(['Inventory Supervisor', 'GENERAL LABOURER', 'Warehouse Worker', 'Package Handler', 'Warehouse Associate', 'Customer Service Representative', 'Brand Creative Director', 'Shipping & Receiving Supervisor', 'Production Worker', 'Packer/Inspector']),
                'jobDescription' => $faker->sentence($nbWords = 15, $variableNbWords = true),
                'jobDepartment' => $faker->sentence($nbWords = 2, $variableNbWords = true),
                'hourlySalary' => $faker->numberBetween(8, 20) . '00',
                'jobSalary' => $faker->numberBetween(1500, 4500) . '00',
                'created_at' => $faker->dateTimeBetween($startDate = '-60 days', $endDate = '-15 days', $timezone = null),
                'updated_at' => $faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null)
            ]);
        }
        foreach (range(1,100) as $index) {
          DB::table('users')->insert([
             'firstName' => $faker->firstName,
             'lastName' => $faker->lastName,
             'email' => $faker->email,
             'address' => $faker->streetAddress,
             'city' => $faker->city,
             'state' => $faker->state,
             'phone' => $faker->phoneNumber,
             'password' => bcrypt('secret'),
             'isEmployee' => $faker->randomElement(['0', '0', '0', '0', '0', '0', '0', '0', '0', '1']),
             'remember_token' => 'session_id',
             'created_at' => $faker->dateTimeBetween($startDate = '-60 days', $endDate = '-15 days', $timezone = null),
             'updated_at' => $faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null)
         ]);



          DB::table('items')->insert([
            'itemID' => $index,
            'itemName' => $faker->sentence($nbWords = 2, $variableNbWords = true),
            'itemPrice' => $faker->numberBetween(0, 2) . '.99',
            'created_at' => $faker->dateTimeBetween($startDate = '-60 days', $endDate = '-15 days', $timezone = null),
            'updated_at' => $faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null)
        ]);



          DB::table('stores')->insert([
            'storeID' => $index,
            'storeAddress' => $faker->streetAddress,
            'storeCity' => $faker->city,
            'storeState' => $faker->state,
            'storePhoneNumber' => $faker->phoneNumber,
            'storeManager' => $faker->name,
            'created_at' => $faker->dateTimeBetween($startDate = '-60 days', $endDate = '-15 days', $timezone = null),
            'updated_at' => $faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null)
        ]);
      }    
      foreach (range(1,100) as $index) {
        DB::table('customer_subscriptions')->insert([
            'id' => $faker->numberBetween(1, 100),
            'blockID' => $faker->numberBetween(1, 50),
            'customerOrderPurchaseDate' => $faker->dateTimeBetween($startDate = '-10 days', $endDate = 'now', $timezone = null),
            'customerOrderProgress' => $faker->randomElement(['ordered', 'cancelled', 'shipped', 'refunded', 'recalled', 'completed']),
            'created_at' => $faker->dateTimeBetween($startDate = '-60 days', $endDate = '-15 days', $timezone = null),
            'updated_at' => $faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null)
        ]);
    }

    foreach (range(1,100) as $index) {
        DB::table('shipments')->insert([
            'shipmentID' => $index,
            'id' => $faker->numberBetween(1, 100),
            'customerSubID' => $faker->numberBetween(1, 100),
            'trackingID' => $faker->regexify('[A-Za-z0-9]{20}'),
            'blockPrice' => $faker->numberBetween(16, 29) . '.99',
            'shipmentDate' => $faker->dateTimeBetween($startDate = '-10 days', $endDate = '10 days', $timezone = null),
            'created_at' => $faker->dateTimeBetween($startDate = '-60 days', $endDate = '-15 days', $timezone = null),
            'updated_at' => $faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null)
        ]);
    }

    foreach (range(1,100) as $index) {
        DB::table('employees')->insert([
            'employeeID' => $index,
            'jobID' => $faker->numberBetween(1, 10),
            'employeeWorkHours' => $faker->numberBetween(1, 60) . '00',
            'isAdmin' => '0',
            'created_at' => $faker->dateTimeBetween($startDate = '-60 days', $endDate = '-15 days', $timezone = null),
            'updated_at' => $faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null)
        ]);

        DB::table('item_orders')->insert([
            'orderID' => $index,
            'itemID' => $faker->numberBetween(1, 100),
            'qtyOrdered' => $faker->numberBetween(100, 1000),
            'qtyCost' => $faker->numberBetween(0, 500) . '99',
            'orderPurchaseDate' =>$faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null),
            'created_at' => $faker->dateTimeBetween($startDate = '-60 days', $endDate = '-15 days', $timezone = null),
            'updated_at' => $faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null)
        ]);
    }

    foreach(range(1,50) as $index){
        DB::table('block_items')->insert([
            'blockID' => $index,
            'itemID' => $faker->numberBetween(1, 100),
            'created_at' => $faker->dateTimeBetween($startDate = '-60 days', $endDate = '-15 days', $timezone = null),
            'updated_at' => $faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null)
        ]);
    }

    foreach (range(1,100) as $index) {
        DB::table('store_shipments')->insert([
            'storeShipmentID' => $index,
            'storeID' => $faker->numberBetween(1, 100),
            'employeeID' => $faker->numberBetween(1, 100),
            'itemID' => $faker->numberBetween(1, 100),
            'storeShipmentDate' =>$faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null),
            'qtyShipped' => $faker->numberBetween(1, 100),
            'created_at' => $faker->dateTimeBetween($startDate = '-60 days', $endDate = '-15 days', $timezone = null),
            'updated_at' => $faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null)
        ]);

        DB::table('employee_jobs')->insert([
            'employeeID' => $faker->numberBetween(1, 100),
            'jobID' => $faker->numberBetween(1, 10),
            'workHours' => $faker->numberBetween(0, 60) . '00',
            'created_at' => $faker->dateTimeBetween($startDate = '-60 days', $endDate = '-15 days', $timezone = null),
            'updated_at' => $faker->dateTimeBetween($startDate = '-15 days', $endDate = 'now', $timezone = null)
        ]);

    }
}
}
