<?php

class ProductSeeder extends Seeder {

	/**
	*
	*Run the database seeds.
	*@return void
	**/
	public function run()
	{
		$img_clothing = array('product1.png', 'product2.png', 'product3.png', 'product4.png', 'product15.png', 'product16.png', 'product18.png', 'product19.png', 'product20.png', 'product21.png', 'product22.png', 'product23.png', 'product24.png');
		$img_shoes	= array('product9.png', 'product10.png', 'product11.png', 'product12.png');
		$img_bags = array('product5.png', 'product6.png','product7.png', 'product8.png', 'product13.png');
		$img_assories = array('product25.png', 'product26.png', 'product27.png', 'product28.png');
		$size = array('XXL', 'XL', 'L',  'M', 'S');
		$color = array('Red', 'Blue', 'White', 'Black');
		$status = array('NEW', 'HOT', 'SALE', 'SOLD OUT' );

		$product = new Product();

		for ($i=0; $i < 15; $i++) { 
			$product->insert(array(
				array('name_product' => 'Shoes' .$i, 'category_id' => rand(32, 34), 'price' => rand(150, 400), 'special_price' => rand(400, 700), 'path' => 'assets/images/products/' .$img_shoes[array_rand($img_shoes)], 'description' => 'Lorem ipsum color sit amet, consestur adipiscing elit. Proid tristique, est nasus fiora patheong leona catlyn vayne master', 'size' => $size[array_rand($size)], 'color' => $color[array_rand($color)], 'status' => $status[array_rand($status)], 'quantity' => rand(10, 50), 'user_id' => 1 ),
			));
		}
		
		for ($i=0; $i < 15; $i++) { 
			$product->insert(array(
				array('name_product' => 'Bags' .$i, 'category_id' => '22', 'price' => rand(150, 400), 'special_price' => rand(400, 700), 'path' => 'assets/images/products/' .$img_bags[array_rand($img_bags)], 'description' => 'Lorem ipsum color sit amet, consestur adipiscing elit. Proid tristique, est nasus fiora patheong leona catlyn vayne master', 'color' => $color[array_rand($color)], 'status' => $status[array_rand($status)], 'quantity' => rand(10, 50), 'user_id' => 1 ),
			));
		}

		for ($i=0; $i < 15; $i++) { 
			$product->insert(array(
				array('name_product' => 'Assories' .$i, 'category_id' => '23', 'price' => rand(150, 400), 'special_price' => rand(400, 700), 'path' => 'assets/images/products/' .$img_assories[array_rand($img_assories)], 'description' => 'Lorem ipsum color sit amet, consestur adipiscing elit. Proid tristique, est nasus fiora patheong leona catlyn vayne master', 'color' => $color[array_rand($color)], 'status' => $status[array_rand($status)], 'quantity' => rand(10, 50), 'user_id' => 1 ),
			));
		}

		for ($i=0; $i < 20; $i++) { 
			$product->insert(array(
				array('name_product' => 'Clothing' .$i, 'category_id' => rand(27, 31), 'price' => rand(150, 400), 'special_price' => rand(400, 700), 'path' => 'assets/images/products/' .$img_clothing[array_rand($img_clothing)], 'description' => 'Lorem ipsum color sit amet, consestur adipiscing elit. Proid tristique, est nasus fiora patheong leona catlyn vayne master', 'size' => $size[array_rand($size)], 'color' => $color[array_rand($color)], 'status' => $status[array_rand($status)], 'quantity' => rand(10, 50), 'user_id' => 1 ),
			));
		}
	}
}