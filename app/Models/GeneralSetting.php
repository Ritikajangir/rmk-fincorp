<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'favicon',
        'logo',
        'phone',
        'email',
        'address',
        'about',
        'facebook_link',
        'twitter_link',
        'linkedin_link',
        'instagram_link',
        'start_day',
        'end_day',
        'start_time',
        'end_time'
    ];
}
