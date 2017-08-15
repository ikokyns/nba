@extends('layouts.master')

@section('content')

<div class="row marketing">
  <div class="col-lg-12">

    @foreach($teams as $team)
    	<h2><a href="teams/{{ $team->id }}">{{ $team->name }}</a></h2>
    @endforeach

  </div>
</div>

@endsection