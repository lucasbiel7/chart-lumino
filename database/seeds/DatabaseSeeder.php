<?php

use Illuminate\Database\Seeder;

use App\Grafico;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(GraficoSeeder::class);
    }
}

class GraficoSeeder extends Seeder{
	
	public function run(){
		Grafico::create(array("categoria"=>"Pera","valor"=>312));
		Grafico::create(array("categoria"=>"Banana","valor"=>842));
		Grafico::create(array("categoria"=>"Uva","valor"=>31));
		Grafico::create(array("categoria"=>"Pera","valor"=>312));
		Grafico::create(array("categoria"=>"Maça","valor"=>432));
	}
}
