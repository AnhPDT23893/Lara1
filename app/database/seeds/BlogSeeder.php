<?php

class BlogSeeder extends Seeder {

	/**
	*
	*Run the database Seeds.
	* @return void.
	**/
	public function run()
	{
		$blog = new Blog();
		$img_blogs = array('10225.jpg', 'blog2.png', 'blog3.png', 'blog4.png', 'blog5.png', 'women2.png');

		for ($i=0; $i < 20; $i++) { 
		 	$blog->insert(array(
		 		array('title' => 'This is Blog number' .$i, 'description' => 'Lorem ipsum color sit amet, consestur adipiscing elit.', 'content' => 'Lorem ipsum color sit amet, consestur adipiscing elit. Proid tristique, est nasus fiora patheong leona catlyn vayne master', 'published' => rand(0,1), 'user_id' => '1', 'path' => 'assets/images/blog/' .$img_blogs[array_rand($img_blogs)]),
	 		));
		} 
	}

}