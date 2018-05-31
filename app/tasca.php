<?php

namespace todo;

use Illuminate\Database\Eloquent\Model;

class tasca extends Model
{
    //
    protected $fillable = [
        'propietari', 'nom', 'data','assignat','estat'
    ];

    public function todo(){
    	return $this->belongsTo('todo\User');
    }
}
