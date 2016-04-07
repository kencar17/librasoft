<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['startdate','enddate'];


    public function goals()
    {
        return $this->hasMany(Goal::class);
    }

    public function addGoal(Goal $goal) {
        return $this->goals()->save($goal);
    }

}
