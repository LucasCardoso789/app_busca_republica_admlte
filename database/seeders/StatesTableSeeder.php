<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StatesTable;

class StatesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatesTable::create(['id' => 1, 'name' => 'Acre', 'abbreviation' => 'AC']);
        StatesTable::create(['id' => 2, 'name' => 'Alagoas', 'abbreviation' => 'AL']);
        StatesTable::create(['id' => 3, 'name' => 'Amapá', 'abbreviation' => 'AP']);
        StatesTable::create(['id' => 4, 'name' => 'Amazonas', 'abbreviation' => 'AM']);
        StatesTable::create(['id' => 5, 'name' => 'Bahia', 'abbreviation' => 'BA']);
        StatesTable::create(['id' => 6, 'name' => 'Ceará', 'abbreviation' => 'CE']);
        StatesTable::create(['id' => 7, 'name' => 'Distrito Federal', 'abbreviation' => 'DF']);
        StatesTable::create(['id' => 8, 'name' => 'Espírito Santo', 'abbreviation' => 'ES']);
        StatesTable::create(['id' => 9, 'name' => 'Goiás', 'abbreviation' => 'GO']);
        StatesTable::create(['id' => 10, 'name' => 'Maranhão', 'abbreviation' => 'MA']);
        StatesTable::create(['id' => 11, 'name' => 'Mato Grosso', 'abbreviation' => 'MT']);
        StatesTable::create(['id' => 12, 'name' => 'Mato Grosso do Sul', 'abbreviation' => 'MS']);
        StatesTable::create(['id' => 13, 'name' => 'Minas Gerais', 'abbreviation' => 'MG']);
        StatesTable::create(['id' => 14, 'name' => 'Pará', 'abbreviation' => 'PA']);
        StatesTable::create(['id' => 15, 'name' => 'Paraíba', 'abbreviation' => 'PB']);
        StatesTable::create(['id' => 16, 'name' => 'Paraná', 'abbreviation' => 'PR']);
        StatesTable::create(['id' => 17, 'name' => 'Pernambuco', 'abbreviation' => 'PE']);
        StatesTable::create(['id' => 18, 'name' => 'Piauí', 'abbreviation' => 'PI']);
        StatesTable::create(['id' => 19, 'name' => 'Rio de Janeiro', 'abbreviation' => 'RJ']);
        StatesTable::create(['id' => 20, 'name' => 'Rio Grande do Norte', 'abbreviation' => 'RN']);
        StatesTable::create(['id' => 21, 'name' => 'Rio Grande do Sul', 'abbreviation' => 'RS']);
        StatesTable::create(['id' => 22, 'name' => 'Rondônia', 'abbreviation' => 'RO']);
        StatesTable::create(['id' => 23, 'name' => 'Roraima', 'abbreviation' => 'RR']);
        StatesTable::create(['id' => 24, 'name' => 'Santa Catarina', 'abbreviation' => 'SC']);
        StatesTable::create(['id' => 25, 'name' => 'São Paulo', 'abbreviation' => 'SP']);
        StatesTable::create(['id' => 26, 'name' => 'Sergipe', 'abbreviation' => 'SE']);
        StatesTable::create(['id' => 27, 'name' => 'Tocantins', 'abbreviation' => 'TO']);
    }

}
