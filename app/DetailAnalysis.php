<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailAnalysis extends Model
{
    //
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
