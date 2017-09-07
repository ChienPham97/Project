<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = "categories";

    public function type()
    {
<<<<<<< HEAD
        return $this->belongsTo('App\DanhMuc', 'type_id');
=======
        return $this->belongsTo('App\Type', 'type_id');
>>>>>>> 4447da6b56cfb18bb64c607c0d5ff297220695f2
    }
}
