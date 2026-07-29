<?php
namespace Database\Seeders;
use Database\Seeders\UserTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        $this->call(PortfolioSeeder::class);
        $this->call(UserTableSeeder::class );
    }
}
