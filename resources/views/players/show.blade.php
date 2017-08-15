@extends('layouts.master')

@section('content')

<div class="row marketing">
	<div class="col-lg-12">
		<h1>First name: {{ $player->first_name }}</h1>
		<h1>Last name: {{ $player->last_name }}</h1>
		<h1>Email: {{ $player->email }}</h1>
		<h1>Team: <a href="/teams/{{ $player->team->id }}"> {{ $player->team->name }} </a></h1>
    </div>
</div>

@endsection