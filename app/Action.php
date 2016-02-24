<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body', 'date', 'lead', 'collaborators', 'status', 'success'
    ];

    public function objective()
    {
        return $this->belongsTo(Objective::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

}