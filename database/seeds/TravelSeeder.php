<?php

use Illuminate\Database\Seeder;

// Use Faker
use Faker\Generator as Faker;

//Importazione modello
use App\Travel;


class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //Creazione 20 pacchetti di viaggio (rows)
        for ($i=0; $i < 20; $i++) { 
            // creazione nuova istanza di Travel
            $new_travel = new Travel();

          
            $new_travel->name = $faker->text(30);
            $new_travel->destination = $faker->text(12);
            $new_travel->departure_date = $faker->dateTimeBetween('+1 week', '+2 week');
            $new_travel->return_date = $faker->dateTimeBetween('+2 week', '+3 week');
            $new_travel->description = $faker->paragraph(3);
            $new_travel->days = $faker->numberBetween(0, 16);
            // Salvare i dati nel DB
            $new_travel->save();
        }

    }
}