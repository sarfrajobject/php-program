<?php

trait Fruit{

	public function Name(){


		echo "The fruit name is ";

	}

}


class Apple{


	use Fruit;

}


$obj = new Apple;
$obj->Name();

?>