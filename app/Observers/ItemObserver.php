<?php

namespace App\Observers;

use App\Models\Item;
use Illuminate\Support\Str;

class ItemObserver
{
    public function creating(Item $item)
    {
        $item->uuid = Str::uuid();
        //model item diperhatikan oleh item observer
    }
}
