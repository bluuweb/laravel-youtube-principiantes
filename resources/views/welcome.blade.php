@extends('plantilla')

@section('seccion')
    <h1>Notas</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($notas as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->descripcion }}</td>
                <td>@mdo</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection