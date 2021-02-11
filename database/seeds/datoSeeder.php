<?php
use App\DatosPersona;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class datoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\DatosPersona::class, 50)->create();
    }
}
