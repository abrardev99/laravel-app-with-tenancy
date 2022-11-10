<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tenant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('drop database if exists tenantbar');

        $tenant1 = Tenant::create(['id' => 'bar']);
        $tenant1->domains()->create(['domain' => 'bar']);
    }
}
