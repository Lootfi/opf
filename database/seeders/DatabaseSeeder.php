<?php

namespace Database\Seeders;

use App\Models\Citoyen;
use App\Models\Immobilier;
use App\Models\Notaire;
use App\Models\Responsable;
use App\Models\User;
use Carbon\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        $fac = new Factory();

        try {
            // Responsables
            User::factory(10)->create()->each(function ($user) {
                $user->responsable()->saveMany(Responsable::factory(1)->create([
                    'user_id' => $user->id
                ]));
                $user->email = 'responsable' . $user->responsable->id . '@gmail.com';
                $user->save();
            });

            // Notaires
            User::factory(20)->create()->each(function ($user) {
                $user->notaire()->saveMany(Notaire::factory(1)->create([
                    'user_id' => $user->id
                ]));
                $user->email = 'notaire' . $user->notaire->id . '@gmail.com';
                $user->save();
            });

            // Citoyens
            User::factory(100)->create()->each(function ($user) {
                $user->citoyen()->saveMany(Citoyen::factory(1)->create([
                    'user_id' => $user->id
                ])->each(function ($citoyen) {
                    $citoyen->proprietes()->saveMany(Immobilier::factory(10)->create());
                }));
                $user->email = 'citoyen' . $user->citoyen->id . '@gmail.com';
                $user->save();
            });

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }
}
