<?php

class Post {
	public $title;
	public $published;
	
	public function __construct($title, $published) {
		$this->title = $title;
		$this->published = $published;
	}
}

$posts = [
	new Post("My First Post", true),
	new Post("My Second Post", true),
	new Post("My Third Post", false),
	new Post("My Fourth Post", true),
];

echo "<strong>original array:</strong><br>";
var_dump($posts);

// array_filter() -- only return an element from the array when the callback function is true
$unpublished = array_filter($posts, function ($post) {
	return $post->published === false; // only return when this is true
});

echo "<br><br><strong>array_filter(): <br></strong>";
var_dump($unpublished);

// array_map() -- when you want apply the callback to elements of the array
$mapResult = array_map(function ($post) {
	$post->published = true; // for every post, post->published is now true
}, $posts);

echo "<br><br><strong>array_map(): <br></strong>";
var_dump($mapResult);

// array_column() -- pulls a value from each item in the array that has a given key
$columnResult = array_column($posts, 'title');
echo "<br><br><strong>array_column(): <br></strong>";
var_dump($columnResult);

// array_splice()
$awardwinners = array('Gold' => 'Max', 'Silver' => 'Boots', 'Bronze' => 'Dora');
array_splice($awardwinners, 1);
echo "<br><br><strong>array_splice(): <br></strong>";
var_dump($awardwinners);

