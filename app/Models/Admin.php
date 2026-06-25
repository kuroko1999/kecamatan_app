<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Admin extends Model
{
    protected $table = 'admins';
    protected $fillable = ['email', 'password', 'nama', 'role'];
    
    protected $hidden = ['password'];
    
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
    
    public function verifyPassword($password)
    {
        return Hash::check($password, $this->password);
    }
}