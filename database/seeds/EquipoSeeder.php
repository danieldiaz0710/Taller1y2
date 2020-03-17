<?php

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\APP\Models\Equipo::class, 5)->create();
    }
}

