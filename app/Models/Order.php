<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
	use SoftDeletes;
	protected $table  = 'orders'; 
    protected $dates = ['deleted_at'];

    public function customer(){
    	return $this->hasOne('\App\Models\User','id','customer_id');
    }

    public function hairdresser(){
    	return $this->hasOne('\App\Models\User','id','hairdresser_id');
    }

    public function order_service(){
    	return $this->hasMany('\App\Models\OrderService','order_id','id');
    }

    public function transaction_detail(){
        return $this->hasOne('\App\Models\OrderTransaction','order_id','id');
    }

    public function promocode_detail(){
        return $this->hasOne('\App\Models\PromoCode','id','promo_code_id');
    }

    public function order_review() {
        return $this->hasOne('\App\Models\OrderReview','order_id','id');
    }

    public static function detail($id) {
        $user = \JWTAuth::user();

        //print_r($user);exit;

        return Order::where('id',$id)->with(['order_service'=>function($q){
            $q->with('category');
        },'customer'=>function($q){
            $q->with(['avgRating','totalEarning','reviews']);
        },'hairdresser'=>function($q){
            $q->with(['avgRating','totalEarning','reviews']);
        },'promocode_detail','transaction_detail','order_review'=>function($q) use($user){
            $q->where('sender_id',$user->id);
        }])->first();
    }

    
}
