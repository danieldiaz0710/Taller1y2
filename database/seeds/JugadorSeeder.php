<?php

class JugadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    factory(\APP\Models\Jugador::class, 3)->create();
    }
}