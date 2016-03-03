<?php

namespace App;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Auth\Authenticatable;
use Kodeine\Acl\Traits\HasRole;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use Authenticatable, CanResetPassword, HasRole;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'department',
        'permission',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'permission',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function teams()
    {
        return$this->belongsToMany(Team::class);
    }
}
