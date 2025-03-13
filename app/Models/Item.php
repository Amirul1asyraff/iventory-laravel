<?php

namespace App\Models;

use App\Models\Color;
use App\Observers\ItemObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy(ItemObserver::class)]

class Item extends Model
{
    protected $table = 'items';

    protected $fillable = [
        'user_id',
        'uuid',
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

    public function scopeSearch($query, $search = null)
    {
        $query->when($search, function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%');
        });

        return $query;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
