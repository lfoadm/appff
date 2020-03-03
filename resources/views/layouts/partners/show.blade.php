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
            <form action="{{ route('partners.update', $partners->id)}}" method="POST">
              @method('PUT')
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">E-mail</label>
                    <input type="email" name="email" class="form-control" value="{{$partners->email}}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nome completo</label>
                    <input type="text" name="name" class="form-control" value="{{$partners->name}}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Sexo</label>
                    <select class="form-control" name="gender" value="{{$partners->gender}}">
                      <option value="F">Feminino</option>
                      <option value="M">Masculino</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">CPF</label>
                    <input type="text" name="cpf" class="form-control" value="{{$partners->cpf}}">  {{-- verificar formato 000.000.000-00 --}}
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Data Nascimento</label>
                    <input type="text" name="date_birth" class="form-control" value="{{$partners->date_birth}}">   
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Celular</label>
                    <input type="text" name="cell_phone" class="form-control" value="{{$partners->cell_phone}}"> {{-- verificar formato (00) 00000-0000 --}}
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Ativo</label>
                    <select class="form-control" name="active" id="" value="{{$partners->active}}">
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
                    <input type="text" name="zip_code" class="form-control" value="{{$partners->zip_code}}">  {{-- verificar formato 00.000-000 --}}
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label class="bmd-label-floating">Logradouro</label>
                  <input type="text" name="address_name" class="form-control" value="{{$partners->address_name}}">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="bmd-label-floating">Número</label>
                    <input type="number" name="address_number" class="form-control" value="{{$partners->address_number}}">  
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">Complemento</label>
                    <input type="text" name="address_complement" class="form-control" value="{{$partners->address_complement}}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Bairro</label>
                  <input type="text" name="neighborhood_name" class="form-control" value="{{$partners->neighborhood_name}}">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="bmd-label-floating">Cidade</label>
                    <input type="text" name="city_name" class="form-control" value="{{$partners->city_name}}">  
                  </div>
                </div>
              </div>

              
                <button type="submit" class="btn btn-success pull-right">ATUALIZAR</button>
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