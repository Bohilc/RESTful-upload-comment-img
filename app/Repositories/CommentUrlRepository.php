<?php


namespace App\Repositories;

use App\Contracts\CommentsImg as Contract;
use App\Models\CommentImg as Comment;

class CommentUrlRepository extends Repository implements Contract
{
    /**
     * Reference to Entitly class.
     *
     * @var string eg. \My\Namespace\To\Entity::class
     */
    protected $entityClass = \App\Models\CommentImg::class;
}
