<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table ='Types';

    protected $fillable = [
        'name',
        'quantity',
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }

}
