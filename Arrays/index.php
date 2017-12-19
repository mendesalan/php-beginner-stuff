<?php

/**
* 
*/
class Post
{
	public $title;

	public $published;


	public function __construct($title, $published)
	{
		$this->title = $title; 
		$this->published = $published; 
	}
}

$posts = [
	new Post('My First Post', true),
	new Post('My Second Post', true),
	new Post('My Third Post', true),
	new Post('My Fourth Post', false)
];

$unpublishedPosts = array_filter($posts, function($post) {
	return ! $post->published;
});


 $titles = array_column($posts, 'title');  // return only the title column

echo '<pre>';
die(var_dump($titles));
echo '</pre>';