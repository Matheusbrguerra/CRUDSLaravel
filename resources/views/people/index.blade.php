@extends('layouts.site') 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-body box-primary">
            <div class="col-md-6">
                <h4><i class="fa fa-list"></i> &nbsp; Listagem de Pessoas</h4>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{url('people/create/')}}" class="btn btn-success"><i class="fa fa-plus"></i> Nova Pessoa</a>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box box-body box-primary">
            <form action="{{action('PersonController@index')}}" method="get" class="sidebar-form">
                <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Faça sua pesquisa...">
                  <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                      </span>
                </div>
              </form>
        </div>
    </div>
</div>
<!-- /.search form -->

<!-- Default box -->
<div class="box box-primary">
    <div class="box-header with-border">
    </div>
    <div class="box-body">
        <!-- Content -->
        <table class="table table-bordered table-condensed table-striped">
            <thead class="">
                <th>CPF</th>
                <th>Nome</th>
                <th>RG</th>
                <th>Rua</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Email</th>
                <th>Sexo</th>
                <th>Número</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach($people as $person)
                <tr>
                    <td>{{$person->cpf}}</td>
                    <td>{{$person->nome}}</td>
                    <td>{{$person->rg}}</td>
                    <td>{{$person->logradouro}}</td>
                    <td>{{$person->bairro}}</td>
                    <td>{{$person->cidade}}</td>
                    <td>{{$person->estado}}</td>
                    <td>{{$person->email}}</td>
                    <td>{{$person->sexo}}</td>
                    <td>{{$person->numeroecompl}}</td>
                    <td style="width: 10%">
                        <a href="/people/{{$person->id}}" class="btn btn-sm btn-warning">
                            <span class="fa fa-edit"></span>
                        </a>
                    <a href="{{url('people/remover/'.$person['id'])}}" class="btn btn-sm btn-danger" type="submit">
                            <span class="fa fa-trash"></span>
                        </a>
                        <!--<form action="{{action('PersonController@destroy', $person['id'])}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <a class="btn btn-sm btn-danger" type="submit"><span class="fa fa-trash"></span></a>
                        </form>-->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Content -->
    </div>
    {{ $people->appends(request()->query())->links() }}
    <!-- /.box-body -->
    <div class="box-footer">

    </div>
    <!-- /.box-footer-->
</div>
<!-- /.box -->
<!-- /.box-header -->
<!-- form start -->
@endsection