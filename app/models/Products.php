<?php

use Phalcon\Mvc\Model;

/**
 * Products
 */
class Products extends Model
{
	/**
	 * @var integer
	 */
	public $id;
        
        /**
	 * @var integer
	 */
	public $product_types_id;

	/**
	 * @var string
	 */
	public $name;

	/**
	 * @var string
	 */
	public $price;

	/**
	 * Products initializer
	 */
	public function initialize()
	{
		$this->belongsTo('product_types_id', 'ProductTypes', 'id', array(
			'reusable' => true
		));
	}

}
