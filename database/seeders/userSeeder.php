<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('utilisateur')->insert(
            [
                'matricule' => 1234567,
                'nom' => 'Lefebvre',
                'prenom' => 'Antoine',
                'password' => Hash::make('motdepasse'),
                'email' => 'antoinelefebvre@hotmail.com',
                'departement' => 1,
                'superviseur' => null,
                'role' => 'admin'
            ],
            [
                'matricule' => 7654321,
                'nom' => 'Des Ruisseaux',
                'prenom' => 'Thomas',
                'password' => Hash::make('motdepasse'),
                'email' => 'thomasdesruisseaux@hotmail.com',
                'departement' => 1,
                'superviseur' => null,
                'role' => 'admin'
            ],
            [
                'matricule' => 1111111,
                'nom' => 'Lambert',
                'prenom' => 'Arnaud',
                'password' => Hash::make('motdepasse'),
                'email' => 'arnaudlambert@hotmail.com',
                'departement' => 4,
                'superviseur' => null,
                'role' => 'superieur'
            ],
            [
                'matricule' => 2222222,
                'nom' => 'Leao-Belzile',
                'prenom' => 'Cédric',
                'password' => Hash::make('motdepasse'),
                'email' => 'acedricleaobelzile@hotmail.com',
                'departement' => 5,
                'superviseur' => null,
                'role' => 'superieur'
            ],
            [
                'matricule' => 3333333,
                'nom' => 'bob',
                'prenom' => 'bob',
                'password' => Hash::make('motdepasse'),
                'email' => 'bobbob@hotmail.com',
                'departement' => 4,
                'superviseur' => 1111111,
                'role' => 'employe'
            ],
            [
                'matricule' => 4444444,
                'nom' => 'steph',
                'prenom' => 'steph',
                'password' => Hash::make('motdepasse'),
                'email' => 'stephsteph@hotmail.com',
                'departement' => 5,
                'superviseur' => 2222222,
                'role' => 'employe'
            ],
            [
                'matricule' => 5555555,
                'nom' => 'tod',
                'prenom' => 'tod',
                'password' => Hash::make('motdepasse'),
                'email' => 'todtod@hotmail.com',
                'departement' => 5,
                'superviseur' => 2222222,
                'role' => 'employe'
            ]
        );
    }
}
