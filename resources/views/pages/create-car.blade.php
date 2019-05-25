@extends('layouts.carsLayout')

@section('content')

  <form action="{{ route('cars.store') }}" method="post">
    @csrf
      <label for="model">model</label>
      <input type="text" name="model" placeholder="write model">

      <label for="speed">speed</label>
      <input type="text" name="speed" placeholder="write speed">

      <label for="year">year</label>
      <input type="text" name="year" placeholder="write year">

      <input type="submit" value="save new car">
  </form>

@stop
