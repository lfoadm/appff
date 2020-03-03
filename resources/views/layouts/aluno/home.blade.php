@extends('layouts.master2')

@section ('title')
    Bem vindo Aluno!!
@endsection

@section('content')
<div class="box">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                            <i class="material-icons">done_outline</i>
                            </div>
                            <p class="card-category">Status Aluno</p>
                            <h3 class="card-title">Ativo <small></small></h3>
                        </div>

                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">info</i> Mais detalhes
                            <a href=""></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                          <i class="material-icons">school</i>
                        </div>
                        <p class="card-category">Instrutor</p>
                        <h3 class="card-title">Laura Cristina</h3>
                      </div>
                      <div class="card-footer">
                        <div class="stats">
                          <i class="material-icons">info</i> Mais detalhes
                        </div>
                      </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                          <i class="material-icons">shopping_cart</i>
                        </div>
                        <p class="card-category">Serviço</p>
                        <h3 class="card-title">Pilates</h3>
                      </div>
                      <div class="card-footer">
                        <div class="stats">
                          <i class="material-icons">info</i> Mais detalhes
                        </div>
                      </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                          <i class="material-icons">restore_page</i>
                        </div>
                        <p class="card-category">Plano</p>
                        <h3 class="card-title">Mensal</h3>
                      </div>
                      <div class="card-footer">
                        <div class="stats">
                          <i class="material-icons">info</i> Mais detalhes
                        </div>
                      </div>
                    </div>
                </div>

            </div>


            <div class="col-lg-12 col-md-12">
                <div class="card">
                  <div class="card-header card-header-warning">
                    <h4 class="card-title">Histórico do aluno</h4>
                    <p class="card-category">Cliente desde 01/01/2019.</p>
                  </div>
                  <div class="card-body table-responsive">
                    <table class="table table-hover">
                      <thead class="text-warning">
                        <th>Matrícula</th>
                        <th>Data Início</th>
                        <th>Data Final</th>
                        <th>Produto</th>
                        <th>Instrutor</th>
                        <th>Plano</th>
                        <th>Forma de Pagamento</th>
                        <th>Valor</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>24/02/2020</td>
                          <td>23/03/2020</td>
                          <td>Pilates</td>
                          <td>Paula de Paula</td>
                          <td>Mensal</td>
                          <td>Dinheiro</td>
                          <td>R$ 240,00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>24/02/2020</td>
                            <td>23/03/2020</td>
                            <td>Pilates</td>
                            <td>Paula de Paula</td>
                            <td>Mensal</td>
                            <td>Dinheiro</td>
                            <td>R$ 240,00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>24/02/2020</td>
                            <td>23/03/2020</td>
                            <td>Pilates</td>
                            <td>Paula de Paula</td>
                            <td>Mensal</td>
                            <td>Dinheiro</td>
                            <td>R$ 240,00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>24/02/2020</td>
                            <td>23/03/2020</td>
                            <td>Pilates</td>
                            <td>Paula de Paula</td>
                            <td>Mensal</td>
                            <td>Dinheiro</td>
                            <td>R$ 240,00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>24/02/2020</td>
                            <td>23/03/2020</td>
                            <td>Pilates</td>
                            <td>Paula de Paula</td>
                            <td>Mensal</td>
                            <td>Dinheiro</td>
                            <td>R$ 240,00</td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            

        </div>
    </div>
</div>

@endsection

