@extends('layouts.carsLayout')

@section('content')

  <form action="{{ route('cars.update', $car->id) }}" method="post">
    @csrf
    @method('PATCH')
      <label for="model">model</label>
      <input type="text" name="model" value="{{ $car->model }}">

      <label for="speed">speed</label>
      <input type="text" name="speed" value="{{ $car->speed }}">

      <label for="year">year</label>
      <input type="text" name="year" value="{{ $car->year }}">

      <input type="submit" value="save">
  </form>

@stop
