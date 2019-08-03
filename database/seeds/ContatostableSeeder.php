<?php

use Illuminate\Database\Seeder;

class ContatostableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Opção 1
        DB::table('contatos')->insert([
           'saudacao' => 'Sra.',
           'nome' => 'Monique Gomes',
           'telefone' => '(61) 98341-0301',
           'email' => 'gomesnick22@gmail.com',
           'nota' => 'Usuário criado usando Seeder test.',
           'created_at' => date('Y-m-d H:i:s')
        ]);

        // Opção 2
        factory(App\Models\Contatos::class, 20)->create();
    }
}
