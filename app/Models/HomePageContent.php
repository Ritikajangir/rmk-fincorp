<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_heading',
        'main_heading',
        'sub_heading',
        'hero_image',
        'about_us_heading',
        'about_us_content',
        'about_us_image',
        'our_mission_main_heading',
        'our_mission_sub_heading',
        'our_mission_image',
        'choose_us_main_heading',
        'choose_us_sub_heading',
        'choose_us_image',
        'our_team_main_heading',
        'our_team_sub_heading',
        'testimonial_main_heading',
        'testimonial_sub_heading'
    ];
}
