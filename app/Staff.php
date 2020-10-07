<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //

    public function __construct(Staff $staff) {
        $this->staff = $staff;
    } 
    // protected $fillable = ['user_id', 'title', 'content'];

}

