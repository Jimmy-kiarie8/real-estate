<?php

namespace Database\Seeders;

use App\Models\Saleofficer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SaleofficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Generate multiple fake agent records
        for ($i = 0; $i < 10; $i++) {
            Saleofficer::create([
               'name' => $faker->name,
               'email' => $faker->unique()->safeEmail,
               'phone' => $faker->phoneNumber(),
               'pin' => $faker->numberBetween(1, 10)
            ]);
        }
    }
}
