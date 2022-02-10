<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        // \App\Models\Table::factory()->create();

        $table = DB::table('tables')->first();

        \App\Models\Content::factory()->create([
            'table_id' => $table->id,
            'row_index' => 0,
            'column_index' => 1,
            'content' => 'Volservers.com'
        ]);

        \App\Models\Content::factory()->create([
            'table_id' => $table->id,
            'row_index' => 0,
            'column_index' => 3,
            'content' => 'Build Trust'
        ]);

        \App\Models\Content::factory()->create([
            'table_id' => $table->id,
            'row_index' => 3,
            'column_index' => 0,
            'content' => 'B2B Marketplace'
        ]);

        \App\Models\Content::factory()->create([
            'table_id' => $table->id,
            'row_index' => 2,
            'column_index' => 2,
            'content' => 'SaaS enabled Marketplace'
        ]);

        \App\Models\Content::factory()->create([
            'table_id' => $table->id,
            'row_index' => 3,
            'column_index' => 3,
            'content' => 'Provide Transparency'
        ]);
    }
}
