@extends('plantilla')

@section('seccion')
    <h1>Nosotros</h1>
    <ul>
      @foreach ($equipo as $item)
          <li>
            <a href="{{ route('nosotros', $item) }}">{{$item}}</a>
          </li>
      @endforeach
    </ul>

    <div>
      @if (  !empty($nombre)  )
          
        @switch($nombre)
            @case($nombre == 'Ignacio')
              <h3>Información de {{$nombre}}</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea molestias maxime fuga expedita quaerat accusantium fugiat quam, totam nulla sed dolorum asperiores exercitationem, ab nam ducimus nostrum doloremque saepe itaque?</p>
                @break
            @case($nombre == 'Juanito')
              <h3>Información de {{$nombre}}</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea molestias maxime fuga expedita quaerat accusantium fugiat quam, totam nulla sed dolorum asperiores exercitationem, ab nam ducimus nostrum doloremque saepe itaque?</p>
                @break
            @case($nombre == 'Pedrito')
              <h3>Información de {{$nombre}}</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea molestias maxime fuga expedita quaerat accusantium fugiat quam, totam nulla sed dolorum asperiores exercitationem, ab nam ducimus nostrum doloremque saepe itaque?</p>
                @break
            @default
                
        @endswitch

      @endif
    </div>
@endsection