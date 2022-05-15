<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::insert([
            ['name' => 'Маникюр'],
            ['name' => 'Педикюр'],
            ['name' => 'Косметология'],
            ['name' => 'Имидж и стиль'],
            ['name' => 'Учебный центр'],
        ]);
    }
}
