<?php


namespace App\Repositories;

use App\Contracts\CommentsImgInterface as Contract;

class CommentImgRepository extends Repository implements Contract
{
    /**
     * Reference to Entity class.
     *
     * @var string eg. \My\Namespace\To\Entity::class
     */
    protected $entityClass = \App\Models\CommentImg::class;

    /**
     * Represent comments by product id.
     *
     * @param $productId
     * @return mixed
     */
    public function getCommentByProductId($productId)
    {
        $collection = $this->entityClass::where('product_id', $productId)->get();

        return $collection;
    }

    /**
     * Represent comments by product id.
     *
     * @param $id
     * @param $fields
     * @return mixed
     */
    public function updateCommentId($id, $fields)
    {
        $collection = $this->entityClass::where('id', $id)->update($fields);

        return $collection;
    }
}
