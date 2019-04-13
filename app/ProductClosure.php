<?php
namespace App;

use Franzose\ClosureTable\Models\ClosureTable;

class ProductClosure extends ClosureTable implements ProductClosureInterface
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_closure';
}
