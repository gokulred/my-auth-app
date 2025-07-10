<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'business_name',
        'street',
        'city',
        'state',
        'zip_code',
        'phone',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}