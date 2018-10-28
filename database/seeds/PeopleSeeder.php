<?php

use Illuminate\Database\Seeder;
use App\Person;
class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::create([
            'cpf'=>'10264587231',
            'nome'=>'Cleyton de Assis Vasconcelos',
            'datanasc'=>'1935-09-22',
            'rg'=>'MG 16.143.599',
            'cep'=>'35.173-200',
            'logradouro'=>'Rua Gamora',
            'bairro'=>'Bela Vista',
            'cidade'=>'Timóteo',
            'estado'=>'MG',
            'email'=>'c-assis1989@yahoo.com.br',
            'sexo'=>'Masculino',
            'numeroecompl' => '123A'
        ]);
        Person::create([
            'cpf'=>'10264589231',
            'nome'=>'Ronaldo de Assis Vasconcelos',
            'datanasc'=>'1935-09-22',
            'rg'=>'MG 16.143.590',
            'cep'=>'35.173-200',
            'logradouro'=>'Rua Gamora',
            'bairro'=>'Bela Vista',
            'cidade'=>'Timóteo',
            'estado'=>'MG',
            'email'=>'r-assis1989@yahoo.com.br',
            'sexo'=>'Masculino',
            'numeroecompl' => '123A'
        ]);
        Person::create([
            'cpf'=>'10264583231',
            'nome'=>'Jadson de Assis Vasconcelos',
            'datanasc'=>'1935-09-22',
            'rg'=>'MG 16.143.895',
            'cep'=>'35.173-200',
            'logradouro'=>'Rua Gamora',
            'bairro'=>'Bela Vista',
            'cidade'=>'Timóteo',
            'estado'=>'MG',
            'email'=>'j-assis1989@yahoo.com.br',
            'sexo'=>'Masculino',
            'numeroecompl' => '123A'
        ]);
        Person::create([
            'cpf'=>'10264587431',
            'nome'=>'Fredsson de Assys Vasconcelos',
            'datanasc'=>'1935-09-22',
            'rg'=>'MG 16.143.755',
            'cep'=>'35.173-200',
            'logradouro'=>'Rua Gamora',
            'bairro'=>'Bela Vista',
            'cidade'=>'Timóteo',
            'estado'=>'MG',
            'email'=>'f-assys1989@yahoo.com.br',
            'sexo'=>'Masculino',
            'numeroecompl' => '123A'
        ]);
    }
}
