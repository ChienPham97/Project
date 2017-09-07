<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
<<<<<<< HEAD
    protected $table = "order";
=======
    protected $table = "orders";
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function status()
    {
        return $this->belongsTo('App\Status', 'status');
    }
<<<<<<< HEAD
    public function Supplier(){
        return $this->belongsTo('App\Supplier');
    }
=======
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
}
