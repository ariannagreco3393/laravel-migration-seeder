<?php

use App\Models\Travel;


use Illuminate\Database\Seeder;


class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = config('db.travels');
        //Creazione 20 pacchetti di viaggio (rows)
        foreach ($travels as $travel) {
            // creazione nuova istanza di Travel
            $new_travel = new Travel();

            // Popolazione delle colonne
            $new_travel->name = $travel['name'];
            $new_travel->destination = $travel['destination'];
            $new_travel->departure_date = $travel['departure_date'];
            $new_travel->return_date = $travel['return_date'];
            $new_travel->description = $travel['description'];
            $new_travel->days = $travel['days'];
        }

        // Salvare i dati nel DB
        $new_travel->save();
    }
}
