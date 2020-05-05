<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('outcome')->insert([
            'name'=>'Berci',
            'type'=>'Autó',
            'amount'=>15000,
            'created_at'=>'2020-05-04'
        ],
        [
            'name'=>'Vivi',
            'type'=>'Lakás',
            'amount'=>20000,
            'created_at'=>'2020-05-04'
        ]
    );
    }
}
