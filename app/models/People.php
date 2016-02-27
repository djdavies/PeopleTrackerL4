<?php

class People extends Eloquent {

	// protected $table = 'people';
	// protected $fillable = array('name');

    public function googleResult() {
    	return $this->hasOne('GoogleResult', 'people_id');
    }
}