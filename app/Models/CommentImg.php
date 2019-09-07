<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentImg extends Model
{
    protected $fillable = [
      'comment_id', 'url'
    ];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comments_img';

    /**
     * @return CommentImg[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return static::all();
    }


}
