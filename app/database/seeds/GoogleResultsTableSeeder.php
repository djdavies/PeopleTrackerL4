<?php

class GoogleResultsTableSeeder extends Seeder {

	public function run()
	{
        $people = People::whereName('Daniel Davies')->first();
        $resultJson = File::get(storage_path() . '/GoogleResults.json');
        $result = json_decode($resultJson);

        if ($result) {
            // TODO: the name will be supplied via web UI.
            $people = People::create([
            'name' => 'Daniel Davies Seeding'
        ]);
            // Add results.
            foreach ($result as $object) {
                $google = GoogleResult::create([
                    'content' => $object->content,
                    'people_id' => $people->id,
                    'title' => $object->title,
                    'url' => $object->url,
            ]);
            } // end foreach
        } // end if.
        $google->save();
        $people->save();
	} // end func.
} // end class.