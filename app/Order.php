<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function status()
    {
        return $this->belongsTo('App\Status', 'status');
    }
    public function Supplier(){
        return $this->belongsTo('App\Supplier');
    }
}
