<?php
	class Post{
		private $name;

		public function __set($names, $value){
			echo 'Settings ' .$names. ' to <em>' .$value. '</em>';
			$this->names = $value;
		}

	}
$post = new Post;
$post->yello = 'Dhikrullakh';









?>