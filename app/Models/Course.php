<?php

namespace App\Models;
use App\Models\Objective;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'order'];
    protected $dates = ['register_date', 'deleted_at'];
    protected $table = 'courses';


    public function objectives()
    {
        return $this->hasMany(Objective::class, 'objective_id');
    }
    
}
