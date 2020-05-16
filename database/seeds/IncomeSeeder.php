<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('income')->insert([
            'name'=>'Berci',
            'type'=>'Fizetés',
            'amount'=>30000,
            'date'=> Carbon::now()
        ]
    );
        DB::table('income')->insert([
        'name'=>'Vivi',
        'type'=>'Fizetés',
        'amount'=>40000,
        'date'=> Carbon::now()
        ]
    );
    }
}
