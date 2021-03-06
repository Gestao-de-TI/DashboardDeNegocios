@extends('layout.layout')
@section('content')
 
 
    @component('layout.components.header')
        
    @endcomponent
  <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    @component('layout.components.nav')
            
    @endcomponent
    <!-- Sidebar Navigation end-->
    <div class="page-content">
      <!-- Page Header-->
      <div class="page-header no-margin-bottom">
        <div class="container-fluid">
          <h2 class="h1 no-margin-bottom">{{$produto->nome}}</h2>
        </div>
      </div>
      <!-- Breadcrumb-->
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="index.html">Produtos</a></li>
          <li class="breadcrumb-item active">{{$produto->nome}}</li>
        </ul>
      </div>
      <section>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="statistic-block block">
                <div class="progress-details d-flex align-items-end justify-content-between">
                  <div class="title">
                    <div class="icon"><i class="icon-user-1"></i></div><strong>Quantidade de vendas</strong>
                  </div> 
                  <div class="number dashtext-1">{{ $quantidadeProdutoVendido->quantidade ?? 0 }}</div>
                </div>
                <div class="progress progress-template">
                  <div role="progressbar" style="width: {{($quantidadeProdutoVendido->quantidade / $quantidadeTotalVendido->quantidade) * 100}}%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                </div>
              </div>
            </div>
  
            <div class="col-md-6 col-sm-12">
              <div class="statistic-block block">
                <div class="progress-details d-flex align-items-end justify-content-between">
                  <div class="title">
                    <div class="icon"><i class="icon-user-1"></i></div><strong>Quantidade de vendas</strong>
                  </div>
                  <div class="number dashtext-1">{{ ($quantidadeTotalVendido->quantidade )}}</div>
                </div>
                <div class="progress progress-template">
                  <div role="progressbar" style="width: {{(1 - ($quantidadeProdutoVendido->quantidade / $quantidadeTotalVendido->quantidade)) * 100 }}%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                </div>
              </div>
            </div>

          </div>
        </div>


        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8">
              <div class="line-chart block chart">
                <div class="title"><strong>Lucro e faturamento</strong></div>
                <canvas id="barChartCustom3"></canvas>
              </div>
            </div>
            
            <div class="col-lg-4">
              <div class="chart block">
                <div class="title"> <strong>Vendas por hor??rio</strong></div>
                <strong>Individual</strong>

                <div class="bar-chart chart margin-bottom-sm">
                  <canvas id="barChartCustom1"></canvas>
                </div>
                <strong>Geral</strong>

                <div class="bar-chart chart">
                  <canvas id="barChartCustom2"></canvas>
                </div>
              </div>
            </div>
            
            <div class="col-lg-6">
              <div class="doughnut-chart chart block">
                <div class="title"><strong>Estoque do produto</strong></div>
                <div class="doughnut-chart chart margin-bottom-sm">
                  <canvas id="doughnutChartCustom1"></canvas>
                </div>
              </div>
            </div>
          
            <div class="col-lg-6">
              <div class="radar-chart chart block">
                <div class="title"><strong>M??tricas Produto x m??dia</strong></div>
                <div class="radar-chart chart margin-bottom-sm">
                  <canvas id="radarChartCustom"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @component('layout.components.footer')
            
      @endcomponent
    </div>
  </div>
  <!-- JavaScript files-->
  
  
@endsection