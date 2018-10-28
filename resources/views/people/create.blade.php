@extends('layouts.site') 
@section('content')


<div class="box-body">
    <!-- box-body start -->
    <div class="row col-md-12">
        <!-- row start -->

        <div class="row col-md-12">
            <div class="panel box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        Dados Pessoais
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                        <div class="form-group col-md-6">
                            <form method="POST" action="/people">
                                @csrf
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" class="form-control" name="nome" placeholder="Nome">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">E-mail:</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Digite seu email:" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Data de nascimento:</label>
                            <input type="date" class="form-control" name="datanasc" id="joining_date" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">CPF:</label>
                            <input type="text" class="form-control" name="cpf" id="exampleInputEmail1" placeholder="Digite seu cpf:" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">RG:</label>
                            <input type="text" class="form-control" name="rg" id="exampleInputEmail1" placeholder="Digite seu RG:" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Selecione o sexo:</label>
                            <select class="form-control" name="sexo">
                            <option>Selecione</option>
                            <option value="Masculino" required>Masculino</option>
                            <option value="Feminino" required>Feminino</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>


            <!-- row end -->
        </div>

        <div class="row col-md-12">
            <div class="panel box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        Endereço
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                        <!-- endereco start -->
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">CEP:</label>
                            <input type="text" class="form-control" placeholder="Informe o cep" name="cep" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Rua:</label>
                            <input type="text" class="form-control" placeholder="Informe a rua" name="logradouro" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Bairro:</label>
                            <input type="text" class="form-control" placeholder="Informe o bairro" name="bairro">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Cidade:</label>
                            <input type="text" class="form-control" placeholder="Informe a cidade" name="cidade">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Estado:</label>
                            <input type="text" class="form-control" placeholder="Informe o Estado" name="estado">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Número e complemento:</label>
                            <input type="text" class="form-control" placeholder="Informe o número" name="numeroecompl" required>
                        </div>
                        <!-- endereco start -->
                    </div>
                </div>
            </div>

        </div>
        <!-- box-body end -->

    </div>
    <!-- /.box-body -->


    <!-- Content -->
</div>
<!-- /.box-body -->
<div class="box-footer">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</div>
</form>
<!-- /.box-footer-->
</div>
<!-- /.box -->
<!-- /.box-header -->
<!-- form start -->
@endsection