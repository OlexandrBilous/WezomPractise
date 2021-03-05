<?php

namespace App;

use App\Http\Models\Article;
use App\Http\Models\Comment;
use App\Http\Models\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id', 'updated_at', 'created_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
    public function isAdmin()
    {
        return $this->role->name == 'Admin';
    }
    public function isModerator()
    {
        return $this->role->name == 'Moderator';
    }
    public function role()
    {
    return $this->belongsTo(Role::class);
    }
}
