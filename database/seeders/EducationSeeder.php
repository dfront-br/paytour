<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            "Fundamental - Incompleto",
            "Fundamental - Completo",
            "Médio - Incompleto",
            "Médio - Completo",
            "Superior - Incompleto",
            "Superior - Completo",
            "Pós-graduação (Lato senso) - Incompleto",
            "Pós-graduação (Lato senso) - Completo",
            "Pós-graduação (Stricto sensu, nível mestrado) - Incompleto",
            "Pós-graduação (Stricto sensu, nível mestrado) - Completo",
            "Pós-graduação (Stricto sensu, nível doutor) - Incompleto",
            "Pós-graduação (Stricto sensu, nível doutor) - Completo"
        ];
        foreach ($list as $item) {
            DB::table('education')->insert([
                'title' => $item
            ]);
        }
    }
}
