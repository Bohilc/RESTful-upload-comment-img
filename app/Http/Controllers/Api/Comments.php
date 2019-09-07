<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contracts\CommentsImg;

class Comments extends Controller
{
    public function index(CommentsImg $commentsImg)
    {
        $comments = $commentsImg->all();

        return $comments;
    }

    public function store(Request $request, CommentsImg $commentsImg)
    {
        $image = $request->file('image')->store('comments', 'public');
        $url = asset('storage/' . $image);

        $new_comment = [
            'comment_id' => $request->comment_id,
            'url' => $url,
        ];

        $status = $commentsImg->create($new_comment);

        return response([
            'status' =>$status
        ]);
    }
}
