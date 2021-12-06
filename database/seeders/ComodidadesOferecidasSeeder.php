<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ComodidadesOferecida;

class ComodidadesOferecidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ComodidadesOferecida::create(['comodidades_oferecidas' => 'Contas Inclusas']);
        ComodidadesOferecida::create(['comodidades_oferecidas' => 'Imóvel Mobiliado']);
        ComodidadesOferecida::create(['comodidades_oferecidas' => 'Quarto Mobiliado']);
    }
}
