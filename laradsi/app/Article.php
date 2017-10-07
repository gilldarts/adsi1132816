<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
     protected $fillable=[
    	'name','image','content','category_id',
    ];
    public function category(){
    	return $this->BelongsTo('App\Category');
    }
    public function getCreatedAtAttribute($date){
    	Carbon::setlocale('es');
    	// return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('L J F Y');
    	return Carbon::createFromFormat('Y-m-d H:i:s', $date)->diffForHumans();
    }
    public function scopeName($query, $name){
        if (trim($name)!='') {
            $query->where('name',"LIKE","%$name%");
        }
    }
}
