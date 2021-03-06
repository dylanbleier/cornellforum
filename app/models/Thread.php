<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Thread extends Eloquent implements SluggableInterface {

	use SluggableTrait;

	protected $fillable = array('title', 'body_raw', 'body', 'user_id', 'points');
	protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );

    public function comments() {
        return $this->hasMany('Comment');
    }

    public function votes() {
        return $this->hasMany('Vote');
    }

    public function threadviews() {
        return $this->hasMany('ThreadView');
    }

    public function set_title($title) {
        $this->set_attribute('title', trim($title));
    }


}
