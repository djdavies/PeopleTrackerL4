<?php

class GoogleResult extends Eloquent {
	// protected $table = 'google_results';
	protected $fillable = ['people_id'];

    public function googleResult() {
    	return $this->belongsTo('People');
    }
}   