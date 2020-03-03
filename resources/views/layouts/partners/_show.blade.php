@extends('layouts.master')

@section('title')
    Parceiros
@endsection

@section('content')


<div class="container-fluid">
  
    <div class="col-12 text-left">
      <a href="">
        <i class="material-icons">person_add</i>
      </a>
    </div>
    
    <hr>
  
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
          <h4 class="card-title ">Editar o parceiro - {{ $partners->name }}</h4>
              <p class="card-category">---</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              

              <div class="card">
                
                <div class="card-body">
                  <h4 class="card-title">Matrícula {{ $partners->id }}</h4>
                </div>
                <div class="card-body">
                  <p class="card-text">Nome <h6>{{ $partners->name }}</h6></p>
                  <p class="card-text">E-mail <h6>{{ $partners->email }}</h6></p>
                  <p class="card-text">Sexo <h6>{{ $partners->gender }}</h6></p>
                  <p class="card-text">CPF <h6>{{ $partners->cpf }}</h6></p>
                  <p class="card-text">Data Nascimento <h6>{{ $partners->date_birth }}</h6></p>
                  <p class="card-text">Celular <h6>{{ $partners->cell_phone }}</h6></p>
                  <p class="card-text">Ativo <h6>{{ $partners->active }}</h6></p>
                  <p class="card-text">CEP <h6>{{ $partners->zip_code }}</h6></p>
                  <p class="card-text">Logradouro <h6>{{ $partners->address_name }} {{$partners->address_number }}</h6></p>
                  <p class="card-text">Bairro <h6>{{ $partners->neighborhood_name }}</h6></p>
                  <p class="card-text">Cidade <h6>{{ $partners->city_name }}</h6></p>
                    
                    <a href="{{ route('partners.edit', $partners->id)}}" class="btn btn-success">Editar</a>
                    
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
  
  
@endsection

@section('script')
    
@endsection