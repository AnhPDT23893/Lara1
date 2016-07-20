<?php

class CategorySeeder extends Seeder {

	/**
	* Run the database seeds.
	*
	*@return void
	**/
	public function run()
	{
		$category = new Categories();
		$category->insert(array(
				array('name'  => 'MEN', 		'parent_id' => '0'),
				array('name'  => 'WOMEN', 	'parent_id' => '0'),
				array('name'  => 'BOYS', 		'parent_id' => '0'),
				array('name'  => 'GIRLS', 	'parent_id' => '0'),

				array('name'  => 'Clothing', 	'parent_id' => '1'),
				array('name'  => 'Shoes', 	'parent_id' => '1'),
				array('name'  => 'Bags', 		'parent_id' => '1'),
				array('name'  => 'Accessories', 'parent_id' => '1'),
				array('name'  => 'Watches', 	'parent_id' => '1'),
				array('name'  => 'Sunglasses', 'parent_id' => '1'),
				array('name'  => 'Jewellery',	'parent_id' => '1'),
				array('name'  => 'Dresses', 	'parent_id' => '5'),
				array('name'  => 'Tops', 		'parent_id' => '5'),
				array('name'  => 'T-Shirts', 	'parent_id' => '5'),
				array('name'  => 'Shorts', 	'parent_id' => '5'),
				array('name'  => 'Jeans', 	'parent_id' => '5'),
				array('name'  => 'Bots', 		'parent_id' => '6'),
				array('name'  => 'Sandals', 	'parent_id' => '6'),
				array('name'  => 'Sports', 	'parent_id' => '6'),

				array('name'  => 'Clothing', 	'parent_id' => '2'),
				array('name'  => 'Shoes', 	'parent_id' => '2'),
				array('name'  => 'Bags', 		'parent_id' => '2'),
				array('name'  => 'Accessories', 'parent_id' => '2'),
				array('name'  => 'Watches', 	'parent_id' => '2'),
				array('name'  => 'Sunglasses', 'parent_id' => '2'),
				array('name'  => 'Jewellery',	'parent_id' => '2'),
				array('name'  => 'Dresses', 	'parent_id' => '20'),
				array('name'  => 'Tops', 		'parent_id' => '20'),
				array('name'  => 'T-Shirts', 	'parent_id' => '20'),
				array('name'  => 'Shorts', 	'parent_id' => '20'),
				array('name'  => 'Jeans', 	'parent_id' => '20'),
				array('name'  => 'Bots', 		'parent_id' => '21'),
				array('name'  => 'Sandals', 	'parent_id' => '21'),
				array('name'  => 'Sports', 	'parent_id' => '21'),

				array('name'  => 'Clothing', 	'parent_id' => '3'),
				array('name'  => 'Shoes', 	'parent_id' => '3'),
				array('name'  => 'Bags', 		'parent_id' => '3'),
				array('name'  => 'Accessories', 'parent_id' => '3'),
				array('name'  => 'Watches', 	'parent_id' => '3'),
				array('name'  => 'Sunglasses', 'parent_id' => '3'),
				array('name'  => 'Jewellery',	'parent_id' => '3'),
				array('name'  => 'Dresses', 	'parent_id' => '35'),
				array('name'  => 'Tops', 		'parent_id' => '35'),
				array('name'  => 'T-Shirts', 	'parent_id' => '35'),
				array('name'  => 'Shorts', 	'parent_id' => '35'),
				array('name'  => 'Jeans', 	'parent_id' => '35'),
				array('name'  => 'Bots', 		'parent_id' => '36'),
				array('name'  => 'Sandals', 	'parent_id' => '36'),
				array('name'  => 'Sports', 	'parent_id' => '36'),
			));
	}
}