<?php

class ForumTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		

ForumGroup::create (array(
'title' => 'Grneral Disscussion',
'author_id' => 1



	));

ForumCategory::create (array(
'group_id' => 1,
'title' => 'test category 1',
'author_id' => 1


	));

ForumCategory::create (array(
'group_id' => 1,
'title' => 'test category 2',
'author_id' => 1


	));


	}

}
