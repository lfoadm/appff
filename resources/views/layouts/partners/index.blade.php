@extends('layouts.master')

@section('title')
    Parceiros
@endsection

@section('content')


<div class="container-fluid">
  
    <div class="col-12 text-left">
      <a href="{{ route('partners.create')}}">
        <i class="material-icons">person_add</i>
      </a>
    </div>
    
    <hr>
  
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Parceiros Cadastrados</h4>
              <p class="card-category">---</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>Matrícula</th>
                  <th>Nome</th>
                  <th>Celular</th>
                  <th>E-mail</th>
                  <th>&nbsp;</th>
                </thead>
                <tbody>
                  @foreach ($partners as $partner)
                  <tr>
                    <td>{{ $partner->id }}</td>
                    <td>{{ $partner->name }}</td>
                    <td>{{ $partner->cell_phone }}</td>
                    <td>{{ $partner->email }}</td>
                    <td>
                    <a href="{{ route('partners.show', $partner->id) }}" title="Editar Parceiro">
                        <i class="material-icons">edit</i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
  
  
@endsection

@section('script')
    
@endsection