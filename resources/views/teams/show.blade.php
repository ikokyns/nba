@extends('layouts.master')

@section('content')

<div class="row marketing">
	<div class="col-lg-12">
		<h1>Team: {{ $team->name }}</h1>
		<br/>
		<h5>Team email: {{ $team->email }}</h5>
		<h5>Team address: {{ $team->address }}</h5>
		<h5>Home city: {{ $team->city }}</h5>
		<h5>Team members:</h5>
		
		@foreach($team->players as $player)
			<ul>
				<li>
					<h6><a href="/players/{{ $player->id }}">{{ $player->first_name }} {{ $player->last_name }}</a></h6>
				</li>
			</ul>
		@endforeach

	    @foreach($team->comments as $comment)
	        <li>
	            <strong>{{ $comment->created_at->diffForHumans() }}</strong>
	            {{ $comment->content }} By {{ $comment->user->name }}
	        </li>
	    @endforeach
	    
		<hr>

		    <h4>Comments</h4>

		    <form method="POST" action="/teams/{{ $team->id }}/comment">

		        {{ csrf_field() }}

		        <div class="form-group">
		            <label for="body">Content</label>
		            <textarea class="form-control" id="body" name="content"></textarea>
		        </div>

		        <div class="form-group">
		            <button type="submit" class="btn btn-primary">Submit</button>
		        </div>

		    </form>
    </div>
</div>

@endsection