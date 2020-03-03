@extends('layouts.master2')

@section ('title')
    Bem vindo Instrutor!!
@endsection

@section('content')
<div class="box">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                          <i class="material-icons">attach_money</i>
                        </div>
                        <p class="card-category">Faturamento atual</p>
                        <h3 class="card-title">R$ 3.968.54</h3>
                      </div>
                      <div class="card-footer">
                        <div class="stats">
                          <i class="material-icons">info</i> Mais detalhes
                        </div>
                      </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                            <i class="material-icons">thumb_up</i>
                            </div>
                            <p class="card-category">Alunos Ativos</p>
                            <h3 class="card-title">35 <small></small></h3>
                        </div>

                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">info</i> Fevereiro 2020
                            <a href=""></a>
                            </div>
                        </div>
                    </div>
                </div>
               

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                          <i class="material-icons">thumb_down</i>
                        </div>
                        <p class="card-category">Alunos à Renovar</p>
                        <h3 class="card-title">22</h3>
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
                  <div class="card-header card-header-success">
                    <h4 class="card-title">Alunos Ativos</h4>
                    <p class="card-category">Relatório dos alunos que estáo com planos ativos em Fevereiro/2020.</p>
                  </div>
                  <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-warning">
                            <th>Matrícula</th>
                            <th>Nome</th>
                            <th>Data Início</th>
                            <th>Data Final</th>
                            <th>Produto</th>
                            <th>Plano</th>
                            <th>Forma de Pagamento</th>
                            <th>Valor</th>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>Leandro Ferreira Oliveira</td>
                            <td>24/02/2020</td>
                            <td>23/03/2020</td>
                            <td>Pilates</td>
                            <td>Mensal</td>
                            <td>Dinheiro</td>
                            <td>R$ 240,00</td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            
<hr>
              <div class="col-lg-12 col-md-12">
                <div class="card">
                  <div class="card-header card-header-danger">
                    <h4 class="card-title">Alunos ausentes</h4>
                    <p class="card-category">Relatório dos alunos que não renovaram o plano.</p>
                  </div>
                  <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-warning">
                            <th>Matrícula</th>
                            <th>Nome</th>
                            <th>Data Início</th>
                            <th>Data Final</th>
                            <th>Produto</th>
                            <th>Plano</th>
                            <th>Forma de Pagamento</th>
                            <th>Valor</th>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>Leandro Ferreira Oliveira</td>
                            <td>24/02/2020</td>
                            <td>23/03/2020</td>
                            <td>Pilates</td>
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

