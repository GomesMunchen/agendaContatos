@extends('layouts.app')

@section('stylecss')
<style media="screen">
    .img-avatar-xs {
        width:  30px;
        height: 30px;
        border: 1px solid #c0c0c0;
        border-radius: 5px;
    }
    .a-line {
        line-height: 30px;
    }
</style>

@endsection

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Pesquisar Contato" ></input>
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button">Buscar</button>
            </div>
          </div>
            <a href="{{ url('contato/add') }}" class="btn btn-primary btn-sm float-right">Novo Contato</a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive border-0">
                <table class="table table-hover" style="margin-bottom: inherit">
                                 <thead>
                                   <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">Nome</th>
                                      <th scope="col">Telefone</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                            <tbody>
                        @foreach ($contatos as $contato)
                        <tr>
                            <td><a href="{{ url('contato/'.$contato->id) }}">{{ $contato->id }} </a></td>
                            <td><a class='a-line' href="{{ url('contato/'.$contato->id) }}">{{ $contato->nome }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('contato/'.$contato->id) }}">{{ $contato->telefone }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('contato/'.$contato->id) }}">{{ $contato->email }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
