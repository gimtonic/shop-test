<?php
namespace App;

use Franzose\ClosureTable\Models\Entity;

class Product extends Entity implements ProductInterface
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * ClosureTable model instance.
     *
     * @var ProductClosure
     */
    protected $closure = 'App\ProductClosure';
}
