<?php

class Post{

	private  $name;

	public function __set($name,$value){
		echo 'Setting '. $name.'to <strong>'.$value ;
		$this->name = $value;
	}
	public function __get($name,$value){
		echo 'Setting '. $name.'to <strong>'.$value ;
		$this->name = $value;
	}
}


$post = new Post;
$post->name ='Testing';
echo $post->name;

?>