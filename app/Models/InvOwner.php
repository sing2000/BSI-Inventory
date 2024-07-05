<?php

namespace App\Models;

use App\Models\Invshop;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InvOwner extends Model
{
    use HasFactory;
    protected $table = 'inv_owner';
    protected $fillable = [
        'o_name',
        'o_email',
        'o_contact',
        'o_address',
        'status',
    ];
    public function invShop()
    {
        return $this->hasMany(Invshop::class);
    }
}
