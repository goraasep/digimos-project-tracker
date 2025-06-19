<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasUuids;
    protected $guarded = ['id'];
    public function assignedUsers()
    {
        return $this->belongsToMany(User::class);
    }
    protected $casts = [
        'deadline' => 'datetime',
    ];
}
