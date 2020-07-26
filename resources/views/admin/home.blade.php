@extends('adminlte::page')

@section('plugins.Chartjs', true)

@section('title', 'Painel')

@section('content_header')

<div class="row">
    <div class="col-md-6">
        <h1>Dashboard</h1>
    </div>

    <!-- início Seleção do histórico de acessos -->

    <div class="col-md-6">
        <form method="GET">
            <select onChange="this.form.submit()" name="interval" class="float-md-right">
                <option {{$dateInterval == 30?'selected="selected"':''}} value="30">Últimos 30 dias</option>
                <option {{$dateInterval == 60?'selected="selected"':''}} value="60">Últimos 2 meses</option>
                <option {{$dateInterval == 90?'selected="selected"':''}} value="90">Últimos 3 meses</option>
                <option {{$dateInterval == 120?'selected="selected"':''}} value="120">Últimos 4 meses</option>
                <option {{$dateInterval == 150?'selected="selected"':''}} value="150">Últimos 5 meses</option>
                <option {{$dateInterval == 180?'selected="selected"':''}} value="180">Últimos 6 meses</option>
            </select>
        </form>

    </div>

    <!-- Fim da Seleção do histórico de acessos -->


</div>

@endsection

@section('content')

    <!-- Início Cards -->

   <div class="row">
        <div class="col-md-3">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$visitsCount}}</h3>
                    <h5>Acessos</h5>
                </div>
                <div class="icon">
                    <i class="far fa-fw fa-eye"></i>
                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3>{{$onlineCount}}</h3>
                    <h5>Usuários Online</h5>
                </div>
                <div class="icon">
                    <i class="far fa-fw fa-heart"></i>
                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$pageCount}}</h3>
                    <h5>Páginas</h5>
                </div>
                <div class="icon">
                    <i class="far fa-fw fa-sticky-note"></i>
                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$userCount}}</h3>
                    <h5>Usuários</h5>
                </div>
                <div class="icon">
                    <i class="far fa-fw fa-user"></i>
                </div>

            </div>
        </div>
   </div>

   <!-- Final Cards -->


   <div class="row">

    <!-- Início Gráfico -->

    <div class="col-md-6">
      <div class="card card-primary card-outline">
          <div class="card-header">
              <h3 class="card-title">Páginas mais visitadas</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
                <div class="card-body" style="display: block;">

                  <canvas id="visitas"></canvas>

                </div>
        </div>
    </div>

    <!-- Final Gráfico -->

   </div>

<script>

    // Script Gráfico páginas mais visitadas

    window.onload = function () {
      let ctx = document.getElementById('visitas').getContext('2d');
      window.visitas = new Chart(ctx, {
        type: 'bar',

data: {

  labels: {!! $pageLabels !!},

  datasets: [{

    label: "Acessos",

    backgroundColor: ["#a3e1d4", "#5e03fc", "#317044", "#dedede", "#b5b8cf"],

    data: {{$pageValues}}

  }]
},

         options: {
           responsive:true,
           legend: {
             display:false
           }
         }
      });
    }

 </script>

@endsection
