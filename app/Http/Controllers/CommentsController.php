<?php

namespace App\Http\Controllers;

use App\Team;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store($id)
    {
        $this->validate(request(), [
            'content' => 'required|min:10',
        ]);

        $team = Team::find($id);
        $content = request('content');

		$team->comments()->create(['content' => $content, 'user_id'=>auth()->user()->id]);




        


        return back();
    }
}
