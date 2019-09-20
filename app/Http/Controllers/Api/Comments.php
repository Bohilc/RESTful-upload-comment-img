<?php

namespace App\Http\Controllers;

use App\Services\CommentsService;
use Illuminate\Http\Request;

use App\Contracts\CommentsImgInterface;
use Illuminate\Support\Facades\Validator;

class Comments extends Controller
{

    /**
     * Get comments by product id.
     *
     * @param Request $request
     * @param CommentsImgInterface $commentsImg
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function index(Request $request, CommentsImgInterface $commentsImg)
    {
//        Access to fetch at 'https://api.deepbreath.pl/api/comments/img' from origin 'https://www.sklep.deepbreath.pl' has been blocked by CORS policy: No 'Access-Control-Allow-Origin' header is present on the requested resource. If an opaque response serves your needs, set the request's mode to 'no-cors' to fetch the resource with CORS disabled.


        return response(['data' => $commentsImg->getCommentByProductId($request->id)], 200);
    }

    /**
     * Create new comment with img.
     *
     * @param Request $request
     * @param CommentsImgInterface $commentsImg
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store(Request $request, CommentsImgInterface $commentsImg)
    {
        $url = null;

        if(empty($request->get('comment'))) {
            return response(['comment' => false]);
        }

        if($request->hasFile('image')) {
            $image = $request->file('image')->store('comments/' . $request->get('product_id'), 'public');
            $url = asset('storage/' . $image);
        }

        $newComment = [
            'product_id' => $request->get('product_id'),
            'author' => $request->get('user'),
            'comment' => $request->get('comment'),
            'rating' => $request->get('rating'),
            'url' => $url,
        ];

        $comment = $commentsImg->create($newComment);

        return response(['comment' => $comment], 201);

    }

    /**
     * Update comment id.
     *
     * @param Request $request
     * @param CommentsImgInterface $commentsImg
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function update(Request $request, CommentsImgInterface $commentsImg)
    {
//        $status = $commentsImg->updateCommentId(
//            $request->get('id'),
//            ["comment_id" => $request->get('comment_id')]
//        );
//
//        return response(['comment' => $status]);
    }
}
