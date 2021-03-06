@extends('layouts.app') @section('content')
<div class="container">
    <h5 class="center">Solicitação Para Renovação</h5>

    @include('admin._caminho')

    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome do Responsável</th>
                    <th>Nome do Aluno</th>
                    <th>Status</th>
					<th>Ação</th>

                </tr>
            </thead>
            <tbody>
                @forelse($renovacao as $renovac)
                <tr>
                    <td>{{$renovac->id}} </td>
                    <td>{{$renovac->nomerespo}} </td>
                    <td>{{$renovac->nomealuno}} </td>
                    <td>{{$renovac->status}}</td>
                   

                    <td>
                    <td>
						
                        <a title="Editar Status da Renovacao" href="{{ route('renovacao.edit',$renovac->id) }}" class="btn orange">
                            <i class="material-icons">mode_edit</i>
						</a>

                        <a title="Deletar Renovacao" href="{{route('relatorio.renovacao.destroy', $renovac->id)}}" class="btn red">
							<i class="material-icons">delete</i>
                        </a>
                        
                    </td>
                    </td>
                </tr>
                 @empty
					
					<td> Não Existe Renovações Cadastrada </td>
				@endforelse


               
            </tbody>
        </table>

    </div>

</div>

@endsection