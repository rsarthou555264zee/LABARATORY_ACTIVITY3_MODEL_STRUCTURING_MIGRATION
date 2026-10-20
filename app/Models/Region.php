<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $primaryKey = 'region_id';
    protected $fillable = ['region_name'];

    public function countries()
    {
        return $this->hasMany(Country::class, 'region_id', 'region_id');
    }
}
