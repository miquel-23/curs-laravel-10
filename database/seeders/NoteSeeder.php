<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notes')->insert([
            'title' => 'Aprenent Blade',
            'content' =>  <<< 'CONTENT'
                    Per a imprimir una variable amb Blade utilitzem aquesta sintaxis:
                    {{ $variable }}
                
                    Les directives de Blade comencen amb arrova, per exemple:
                    @foreach
                    CONTENT,
        ]);
        DB::table('notes')->insert([
            'title' => 'Per a què serveix Composer?',
            'content' =>  'Amb Composer podem instal·lar i actualitzar frameworks com Laravel o Symfony, així com components per a generar PDF, processar pagaments amb targetes, manipular imatges i molt més.',
        ]);
        DB::table('notes')->insert([
            'title' => 'Instal·lació de Laravel',
            'content' =>  <<< 'CONTENT'
                Hi ha 2 formes d'instal·lar Laravel: la primera és a través de Composer, el qual et permet instal·lar una versión específica de Laravel:

                <pre>composer create-project laravel/laravel curso-laravel-styde "6.*"</pre>

                La segona és amb l'instal·lador de Laravel, el qual instal·larà la versió actual del framework:</p>

                <pre>laravel new curso-laravel-styde</pre>
                CONTENT,
        ]);
        DB::table('notes')->insert([
            'title' => 'Rutes i JSON',
            'content' =>  <<< 'CONTENT'
                Recorda que si retornes un array en una ruta, Laravel el convertirà en JSON automàticament:

                <pre>
                    &lt;?php

                    Route::get('/', function () {
                        return [
                            'Cursos' => [
                                'Primers passos amb Laravel',
                                'Crea un tauler de control amb Laravel',
                            ]
                        ];
                    });
                </pre>

                Produïrà el següent resultat:</p>

                <code>{"Cursos":["Primers passos amb Laravel","Crea un tauler de control amb Laravel"]}</code>
                CONTENT,
        ]);
        DB::table('notes')->insert([
            'title' => 'Front Controller',
            'content' =>  "Front Controller és un patró d'arquitectura on un controlador maneja totes les sol·licitut o peticions a un lloc web.",
        ]);
        DB::table('notes')->insert([
            'title' => 'Canvia el format de paràmetres dinàmics',
            'content' =>  <<< 'CONTENT'
                    Pots col·locar el següent codi en el mètode <code>boot</code>
                    de <code>app/Providers/RouteServiceProvider.php</code>
                    per a restringir qualsevol paràmetre de les rutes a un format numèric:

                <pre>Route::pattern('nom-del-paràmetre', '\d+');</pre>

                Pots per supost usar altres expressions regulars per a restringir a altres formats.
                CONTENT,
        ]);
    }
}
