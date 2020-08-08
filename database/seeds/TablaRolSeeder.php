<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [
            'Administrador',
            'Editor',
            'Supervisor'             
        ];
        foreach($rols as $key => $value){
            DB::table('roles')->insert([
                'Nombre'=> $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
