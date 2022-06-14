<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ParentCategory extends Model
{
	use SoftDeletes;
	protected $table  = 'parent_categories'; 
    protected $dates = ['deleted_at'];

    public function category(){
    	return $this->hasMany('\App\Models\Category','parent_category_id','id');
    }
}
