<?php

namespace App\Models;

use App\Models\Follows;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamps=false;
    protected $table='users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function blog(){
        return $this->hasMany(blog::class,'user_id');
    }
    public function Follows(){
        return $this->hasMany(Follows::class,'user_id');
    }
    static function uploadImage($image,$path='/image/')
    {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $imagepath=public_path($path);
        $image->move($imagepath,$imagename);
        return $path.$imagename;
    }
    public function likes(){
        return $this->hasMany(likes::class);
    }
    public function loggedBy(user $user){
        return $user->id===$this->user_id;
     }
     public function followedBy(user $user){
        return $user->id===$this->user_id;
     }
}
