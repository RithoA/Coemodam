<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cem_registry extends Model
{
    //

 public $timestamps = false;
 protected $table = 'cem_registry';
 protected $fillable = [
        'id','gender','dob','patient_no','cem_screening', 'cem_outcome', 'enrolled','cem_id', 'reason_nonenroll','cem_endpoint', 'cem_enddate','fac_id',
    ];

}
