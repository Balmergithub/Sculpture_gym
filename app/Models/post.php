<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Change Title Names of your table Here
class post extends Model
{
    //Table Name
    protected $table = 'Posts';

    //Primary Key       
    public $primaryKey = 'id';

    //TimeStamps
    public $timestamps = true; 
    
    public function users(){
        return $this->belongsTo('App\Models\User');
    }
}
