<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Áo thun','description' => 'Mô tả 1'],
            ['name' => 'Quần','description' => 'Mô tả 2'],
            ['name' => 'Quần bò','description' => 'Mô tả 3']
        ]);
    }
}
