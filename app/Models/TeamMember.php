<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMember extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'designation',
        'email',
        'phone',
        'bio',
        'image',
        'facebook',
        'twitter',
        'linkedin',
        'sort_order',
        'status',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', true)->orderBy('sort_order');
    }
}
