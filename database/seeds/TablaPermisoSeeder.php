<?php

use App\Models\Admin\Permiso;
use Illuminate\Database\Seeder;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PermisoFactory::class)->times(11)->create();
    }

}

