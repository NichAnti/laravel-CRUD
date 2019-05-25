@extends('layouts.carsLayout')

@section('content')

  <ul>

    @foreach($cars as $car)

    <li>

      {{ $car->model }} - {{ $car->speed }} - {{ $car->year }} | <a href="{{ route('cars.edit', $car->id) }}">edit</a> |

      <form action="{{ route('cars.destroy', $car->id) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete"></input>
      </form></li>

    @endforeach

  </ul>

  <a href="{{ route('cars.create') }}">
    <h5>create new car</h5>
  </a>

@stop
