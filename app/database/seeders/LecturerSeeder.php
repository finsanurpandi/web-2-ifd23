<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //nidn, address, user_id
        $users = DB::table('users')->where('role', 0)->get();

        // inisiasi faker
        $faker = Faker::create('ja_JP');

        foreach($users as $user) {
            DB::table('lecturers')->insert([
                'nidn' => rand(1111111111, 9999999999),
                'address' => $faker->address,
                'user_id' => $user->id
            ]);
        }
    }
}
