<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\UploadedFile;

class TreinoTest extends TestCase
{
    public function testInserirTreinoComDadosInvalidos()
    {
        // Cria um usuário para autenticação
        /** @var \App\Models\User $user */
        $user = User::factory()->create();

        // Define os dados da solicitação
        $data = [
            'nome' => 'ab',
            'categoria_id' => '',
            'descricao' => 'Preencha aqui a descrição',
            'info_extra' => 'Preencha aqui a informação extra',
            'caminho_imagem' => UploadedFile::fake()->create('document.pdf', 1000)
        ];

        // Envia a solicitação como o usuário autenticado
        $response = $this->actingAs($user)->post('/treinos', $data);

        // Verifica se a resposta contém os erros de validação esperados
        $response->assertSessionHasErrors([
            'nome' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'categoria_id' => 'O campo categoria id deve ser preenchido',
            'descricao' => 'Descrição inválida',
            'info_extra' => 'Informação extra inválida',
            'caminho_imagem' => 'O arquivo deve ser uma imagem'
        ]);
    }
    public function testNomeMenorQueMinimo()
    {
        /** @var \App\Models\User $user */
        $user = User::factory()->create();

        $data = [
            'nome' => 'ab',
            
        ];

        $response = $this->actingAs($user)->post('/treinos', $data);

        $response->assertSessionHasErrors([
            'nome' => 'O campo nome precisa ter no mínimo 3 caracteres',
        ]);
    }

    public function testNomeMaiorQueMaximo()
    {
        /** @var \App\Models\User $user */
        $user = User::factory()->create();

        $data = [
            'nome' => str_repeat('a', 41),
            
        ];

        $response = $this->actingAs($user)->post('/treinos', $data);

        $response->assertSessionHasErrors([
            'nome' => 'O campo nome deve ter no máximo 40 caracteres',
        ]);
    }

    public function testDescricaoMenorQueMinimo()
    {
        /** @var \App\Models\User $user */
        $user = User::factory()->create();

        $data = [
            'descricao' => 'ab',
            
        ];

        $response = $this->actingAs($user)->post('/treinos', $data);

        $response->assertSessionHasErrors([
            'descricao' => 'O campo descricao precisa ter no mínimo 3 caracteres',
        ]);
    }

    public function testDescricaoMaiorQueMaximo()
    {
        /** @var \App\Models\User $user */
        $user = User::factory()->create();

        $data = [
            'descricao' => str_repeat('a', 201),
            
        ];

        $response = $this->actingAs($user)->post('/treinos', $data);

        $response->assertSessionHasErrors([
            'descricao' => 'A descrição deve ter no máximo 200 caracteres',
        ]);
    }

    public function testInfoExtraMaiorQueMaximo()
    {
        /** @var \App\Models\User $user */
        $user = User::factory()->create();

        $data = [
            'info_extra' => str_repeat('a', 501),            
        ];

        $response = $this->actingAs($user)->post('/treinos', $data);

        $response->assertSessionHasErrors([
            'info_extra' => 'O campo info extra deve ter no máximo 500 caracteres',
        ]);
    }
    public function testCategoriaIdVazio()
    {
         /** @var \App\Models\User $user */
        $user = User::factory()->create();
    
        $data = [
            'categoria_id' => '',
        ];
    
        $response = $this->actingAs($user)->post('/treinos', $data);
    
        $response->assertSessionHasErrors([
            'categoria_id' => 'O campo categoria id deve ser preenchido',
        ]);
    }
    
    public function testDescricaoComTextoPadrao()
    {
         /** @var \App\Models\User $user */
        $user = User::factory()->create();
    
        $data = [
            'descricao' => 'Preencha aqui a descrição',
        ];
    
        $response = $this->actingAs($user)->post('/treinos', $data);
    
        $response->assertSessionHasErrors([
            'descricao' => 'Descrição inválida',
        ]);
    }
    
    public function testInfoExtraComTextoPadrao()
    {
         /** @var \App\Models\User $user */
        $user = User::factory()->create();
    
        $data = [
            'info_extra' => 'Preencha aqui a informação extra',
        ];
    
        $response = $this->actingAs($user)->post('/treinos', $data);
    
        $response->assertSessionHasErrors([
            'info_extra' => 'Informação extra inválida',
        ]);
    }
    
    public function testCaminhoImagemNaoEhImagem()
    {
         /** @var \App\Models\User $user */
        $user = User::factory()->create();
    
        $data = [
            'caminho_imagem' => UploadedFile::fake()->create('document.pdf', 1000),
        ];
    
        $response = $this->actingAs($user)->post('/treinos', $data);
    
        $response->assertSessionHasErrors([
            'caminho_imagem' => 'O arquivo deve ser uma imagem',
        ]);
    }
    public function testInfoExtraComDoisEspacosEmBranco()
{
    /** @var \App\Models\User $user */
    $user = User::factory()->create();

    $data = [
        'info_extra' => 'texto com  dois espaços em branco',            
    ];

    $response = $this->actingAs($user)->post('/treinos', $data);

    $response->assertSessionHasErrors([
        'info_extra' => 'O campo info extra não pode ter mais de um espaço consecutivo.',
    ]);
}
}