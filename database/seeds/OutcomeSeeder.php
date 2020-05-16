<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
            'date'=> Carbon::now()
        ]
    )
        ;DB::table('outcome')->insert([
        'name'=>'Vivi',
        'type'=>'Élelmiszer',
        'amount'=>15000,
        'date'=> Carbon::now()
        ]
    );
    }
}
