<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ViewCount extends Model
{
    protected $table = 'view_counts';

    // As a best practice, always set up the fillable property on your model!
    protected $fillable = [ 'ip_address', 'view_count' ];
}
