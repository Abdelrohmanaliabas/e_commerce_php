<?php

namespace Database\Seeders;

use App\Models\ItemsModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                ItemsModel::factory(20)->create();

    }
}
