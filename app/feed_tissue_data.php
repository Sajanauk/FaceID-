<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feed_tissue_data extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'age_group', 'gender','bregma','glabella',
    ];

}
