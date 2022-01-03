<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\States;

class StatesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        States::create(['id' => 1, 'name' => 'Acre', 'abbreviation' => 'AC']);
        States::create(['id' => 2, 'name' => 'Alagoas', 'abbreviation' => 'AL']);
        States::create(['id' => 3, 'name' => 'Amapá', 'abbreviation' => 'AP']);
        States::create(['id' => 4, 'name' => 'Amazonas', 'abbreviation' => 'AM']);
        States::create(['id' => 5, 'name' => 'Bahia', 'abbreviation' => 'BA']);
        States::create(['id' => 6, 'name' => 'Ceará', 'abbreviation' => 'CE']);
        States::create(['id' => 7, 'name' => 'Distrito Federal', 'abbreviation' => 'DF']);
        States::create(['id' => 8, 'name' => 'Espírito Santo', 'abbreviation' => 'ES']);
        States::create(['id' => 9, 'name' => 'Goiás', 'abbreviation' => 'GO']);
        States::create(['id' => 10, 'name' => 'Maranhão', 'abbreviation' => 'MA']);
        States::create(['id' => 11, 'name' => 'Mato Grosso', 'abbreviation' => 'MT']);
        States::create(['id' => 12, 'name' => 'Mato Grosso do Sul', 'abbreviation' => 'MS']);
        States::create(['id' => 13, 'name' => 'Minas Gerais', 'abbreviation' => 'MG']);
        States::create(['id' => 14, 'name' => 'Pará', 'abbreviation' => 'PA']);
        States::create(['id' => 15, 'name' => 'Paraíba', 'abbreviation' => 'PB']);
        States::create(['id' => 16, 'name' => 'Paraná', 'abbreviation' => 'PR']);
        States::create(['id' => 17, 'name' => 'Pernambuco', 'abbreviation' => 'PE']);
        States::create(['id' => 18, 'name' => 'Piauí', 'abbreviation' => 'PI']);
        States::create(['id' => 19, 'name' => 'Rio de Janeiro', 'abbreviation' => 'RJ']);
        States::create(['id' => 20, 'name' => 'Rio Grande do Norte', 'abbreviation' => 'RN']);
        States::create(['id' => 21, 'name' => 'Rio Grande do Sul', 'abbreviation' => 'RS']);
        States::create(['id' => 22, 'name' => 'Rondônia', 'abbreviation' => 'RO']);
        States::create(['id' => 23, 'name' => 'Roraima', 'abbreviation' => 'RR']);
        States::create(['id' => 24, 'name' => 'Santa Catarina', 'abbreviation' => 'SC']);
        States::create(['id' => 25, 'name' => 'São Paulo', 'abbreviation' => 'SP']);
        States::create(['id' => 26, 'name' => 'Sergipe', 'abbreviation' => 'SE']);
        States::create(['id' => 27, 'name' => 'Tocantins', 'abbreviation' => 'TO']);
    }

}
