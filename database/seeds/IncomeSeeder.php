<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'created_at'=>'2020-05-04'
        ],
        [
            'name'=>'Vivi',
            'type'=>'Fizetés',
            'amount'=>40000,
            'created_at'=>'2020-05-04'
        ]
    );
    }
}
