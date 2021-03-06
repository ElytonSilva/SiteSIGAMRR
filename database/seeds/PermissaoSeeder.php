<?php

use Illuminate\Database\Seeder;
use App\Permissao;
class PermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios1 = Permissao::firstOrCreate([
            'nome' =>'usuario-view',
            'descricao' =>'Acesso a lista de Usuários'
        ]);
        $usuarios2 = Permissao::firstOrCreate([
            'nome' =>'usuario-create',
            'descricao' =>'Adicionar Usuários'
        ]);
        $usuarios2 = Permissao::firstOrCreate([
            'nome' =>'usuario-edit',
            'descricao' =>'Editar Usuários'
        ]);
        $usuarios3 = Permissao::firstOrCreate([
            'nome' =>'usuario-delete',
            'descricao' =>'Deletar Usuários'
        ]);
  
        $papeis1 = Permissao::firstOrCreate([
            'nome' =>'papel-view',
            'descricao' =>'Listar Papéis'
        ]);
        $papeis2 = Permissao::firstOrCreate([
            'nome' =>'papel-create',
            'descricao' =>'Adicionar Papéis'
        ]);
        $papeis3 = Permissao::firstOrCreate([
            'nome' =>'papel-edit',
            'descricao' =>'Editar Papéis'
        ]);
  
        $papeis4 = Permissao::firstOrCreate([
            'nome' =>'papel-delete',
            'descricao' =>'Deletar Papéis'
        ]);

        $matricula1 = Permissao::firstOrCreate([
            'nome' =>'matricula-view',
            'descricao' =>'Adicionar matricula' 
        ]); 

        $matricula2 = Permissao::firstOrCreate([
            'nome' =>'matricula-edit',
            'descricao' =>'Editar matricula' 
        ]); 

        $matricula3 = Permissao::firstOrCreate([
            'nome' =>'matricula-update',
            'descricao' =>'Atualizar matricula' 
        ]); 

        $matricula4 = Permissao::firstOrCreate([
            'nome' =>'matricula-delete',
            'descricao' =>'Deletar matricula' 
        ]); 
        
        $perfil1 = Permissao::firstOrCreate([
            'nome' =>'perfil-view',
            'descricao' =>'Acesso ao Perfil.'
        ]);
          
        $perfil2 = Permissao::firstOrCreate([
            'nome' =>'perfil-edit',
            'descricao' =>'Editar Perfil.'
        ]);

        $prematricula1 = Permissao::firstOrCreate([
            'nome' =>'prematricula-view',
            'descricao' =>'Adicionar prematricula' 
        ]);
		
		$prematricula2 = Permissao::firstOrCreate([
            'nome' =>'prematricula-edit',
            'descricao' =>'Adicionar prematricula' 
        ]);
		
		$prematricula3 = Permissao::firstOrCreate([
            'nome' =>'prematricula-view',
            'descricao' =>'Adicionar prematricula' 
        ]);

        $renovacao1 = Permissao::firstOrCreate([
            'nome' =>'renovacao-view',
            'descricao' =>'Adicionar renovação' 
        ]);

        $renovacao2 = Permissao::firstOrCreate([
            'nome' =>'renovacao-edit',
            'descricao' =>'Adicionar renovação' 
        ]);

        $renovacao3 = Permissao::firstOrCreate([
            'nome' =>'renovacao-delete',
            'descricao' =>'Adicionar renovação' 
        ]);

        $relatorio1 = Permissao::firstOrCreate([
            'nome' =>'relatorios-view',
            'descricao' =>'Adicionar relatorios' 
        ]);

        $relatorio2 = Permissao::firstOrCreate([
            'nome' =>'relatorios-edit',
            'descricao' =>'editar relatorios' 
        ]);

        $relatorio3 = Permissao::firstOrCreate([
            'nome' =>'relatorios-delete',
            'descricao' =>'excluir relatorios' 
        ]);

        

        echo "Registros de Permissoes criados no sistema";
    }
}
