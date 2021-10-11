@extends('plantilla')



@section('content')
<div class="container">

  <table id="listado"  class='table table-striped table-bordered display nowrap' style="width:100%">
    <thead>
        <tr>
            <th>PATENTE</th>
            <th>MODELO</th>
            <th>MARCA</th>
            <th>AÑO</th>
            <th>CATEGORIA</th>
            <th>TIPO SERVICIO</th>
            <th>ESTADO</th>
            <th>FECHA INGRESO</th>
        </tr>
    </thead>
    <tbody>
      @foreach($model as $model)
        <tr>
            <th>{{$model->ppu}}</th>
            <th>{{$model->marca}}</th>
            <th>{{$model->modelo}}</th>
            <th>{{$model->anio_fabricacion}}</th>
            <th>{{$model->categoria}}</th>
            <th>{{$model->tipo_servicio}}</th>
            <th>{{$model->estado}}</th>
            <th>{{$model->fecha_ingreso}}</th>
        </tr>
        @endforeach
    </tbody>
  </table>

  
</div>
@endsection