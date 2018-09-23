<?php

use Illuminate\Database\Seeder;
use App\CompanyType;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        CompanyType::create(['name' => 'ООО']);
        CompanyType::create(['name' => 'ОАО']);
        CompanyType::create(['name' => 'АО']);
        CompanyType::create(['name' => 'ПАО']);
        CompanyType::create(['name' => 'ИП']);
    }
}
