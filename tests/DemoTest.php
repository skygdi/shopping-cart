<?php
namespace Tests;

use skygdi\ShoppingCart\model\ShoppingCart;

class DemoTest extends TestCase
{
    public function testSomethingIsTrue()
    {
    	//$box = new Box(['cat', 'toy', 'torch']);
    	$ret = ShoppingCart::create(["product_id"=>1001,
    			"user_id"	=>	99,
    			"qty"		=>	3,
    	]);

        $this->assertTrue($ret->product_id==1001);
    }
}