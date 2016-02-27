<?php

class PeopleTableSeederTest extends Seeder
{

    public function run()
    {
    	$people = People::create([
    		'name' => 'Daniel Davies'
    	]);
    	
        $google = GoogleResults::create([
            'title' => 'test',
            'url' => 'test',
            'content' => 'test',
            'people_id' => $people->id
            ]);

        $people->save();
        $google->save();
    }
}
