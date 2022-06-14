<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	use SoftDeletes;
	protected $table  = 'categories'; 
    protected $dates = ['deleted_at'];

    public function service() {
    	return $this->hasOne('\App\Models\HairdresserService','category_id','id');
    }

    public function parent_category() {
    	return $this->hasOne('\App\Models\ParentCategory','id','parent_category_id');
    }
}
