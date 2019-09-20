<?php


namespace App\Services;

use App\Contracts\CommentsImgInterface;
use Illuminate\Http\Request;

class CommentsService
{
    public function store(CommentsImgInterface $commentsImg, Request $request)
    {
        $image = $request->file('image')->store('comments', 'public');
        $url = asset('storage/' . $image);

        $new_comment = [
            'product_id' => 2,
            'author' => 'test',
            'url' => $url,
        ];

        return $commentsImg->create($new_comment);
    }
}
