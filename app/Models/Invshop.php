<?php

namespace App\Models;

use App\Models\User;
use App\Models\InvOwner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invshop extends Model
{
    use HasFactory;
    protected $table = 'inv_shop';
    protected $fillable = [
        's_name',
        's_address',
        's_logo',
        'o_id',
        'status',
    ];
    public function InvOwner()
    {
        return $this->belongsTo(InvOwner::class);
    }
    public function User()
    {
        return $this->hasMany(User::class);
    }
}
