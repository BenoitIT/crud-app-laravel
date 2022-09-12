<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Follows extends Model
{
    use HasFactory;
    protected $fillable=['user_id','followed_user'];
    public function User(){
        return $this->belongsTo(User::class);
    }
  
}
