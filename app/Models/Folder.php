<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Folder extends Model
{
    //
    protected $fillable = [
        'name',
        'color',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function summaries()
    {
        return $this->hasMany(Summary::class);
    }

    public function searchsummaries(string $search)
    {
        return $this->hasMany(Summary::class)->where('title', 'LIKE', "%{$search}%");
    }
}
