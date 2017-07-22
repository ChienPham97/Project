<?php

/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 7/16/2017
 * Time: 8:52 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class Product extends Model {

    public function category(){
        return $this->belongsTo('App\Category');
    }
    
    public function supplier(){
        return $this->belongsTo('App\Supplier');
    }
}
=======
class Product extends Model
{
    public function Category(){
        return $this->belongsTo('App\Category');
      }
}
>>>>>>> b50f172391dd24e92f2d9ab8c9999d6aa3f117ce
