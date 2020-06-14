<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $primaryKey = 'id_user_role';
    protected $fillable = ['role'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
