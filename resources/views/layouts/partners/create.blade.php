@extends('layouts.master')

@section('title')
    Cadastro de Parceiros
@endsection

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Criar novo parceiro</h4>
            <p class="card-category">Informe todos os dados possíveis</p>
          </div>
          <div class="card-body">
            <form action="{{ route('partners.store') }}" method="POST">
              @csrf
              
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">E-mail</label>
                    <input type="email" name="email" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nome completo</label>
                    <input type="text" name="name" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Sexo</label>
                    <select class="form-control" name="gender">
                      <option value="F">Feminino</option>
                      <option value="M">Masculino</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">CPF</label>
                    <input type="text" name="cpf" class="form-control">  {{-- verificar formato 000.000.000-00 --}}
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Data Nascimento</label>
                    <input type="date" name="date_birth" class="form-control">  
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Celular</label>
                    <input type="text" name="cell_phone" class="form-control"> {{-- verificar formato (00) 00000-0000 --}}
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Ativo</label>
                    <select class="form-control" name="active" id="">
                      <option value="1">Sim</option>
                      <option value="0">Não</option>
                    </select>
                  </div>
                </div>

              </div>
              
              <hr>
              
              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="bmd-label-floating">CEP</label>
                    <input type="text" name="zip_code" class="form-control">  {{-- verificar formato 00.000-000 --}}
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label class="bmd-label-floating">Logradouro</label>
                  <input type="text" name="address_name" class="form-control">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="bmd-label-floating">Número</label>
                    <input type="number" name="address_number" class="form-control">  
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">Complemento</label>
                    <input type="text" name="address_complement" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Bairro</label>
                  <input type="text" name="neighborhood_name" class="form-control">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="bmd-label-floating">Cidade</label>
                    <input type="text" name="city_name" class="form-control">  
                  </div>
                </div>
              </div>

              
                <button type="submit" class="btn btn-primary pull-right">CADASTRAR</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 
@endsection

@section('script')
    
@endsection