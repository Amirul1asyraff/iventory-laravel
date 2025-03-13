<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Color;
class Item extends Model
{
    protected $table = 'items';

    protected $fillable = [
        'name',
        'color_id',
        'type_id',
        'quantity',
    ];

    public function color()
    {
        return $this->belongsTo(color::class);
    }

    public function type()
    {
        return $this->belongsTo(type::class);
    }

}
