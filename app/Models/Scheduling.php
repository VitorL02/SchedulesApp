<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheduling extends Model
{
    use HasFactory;
    protected $table = 'scheduling';
    protected $date=['date'];

    protected $guarded=[];
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
