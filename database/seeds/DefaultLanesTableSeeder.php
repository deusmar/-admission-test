<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Lane;

class DefaultLanesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now()->format("Y-m-d H:i:s");
        Lane::insert([
            [
                "name"       => "To do",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "name"       => "In Progress",
                "created_at" => $date,
                "updated_at" => $date,
            ],
            [
                "name"       => "Done",
                "created_at" => $date,
                "updated_at" => $date,
            ],
        ]);
    }
}
