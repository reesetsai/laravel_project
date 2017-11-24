<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class My_model extends Model
{
    //
    protected $table="loan";
    protected $primaryKey="link_id";
    public $timestamps=false;
    protected $guarded=[];
}
