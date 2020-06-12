<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pets extends Model
{
    public function clients(){
        return $this->belongsTo('App\Clients', 'client_id');
    }
}
