<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    //

    public function set():BelongsTo {
        return $this->belongsTo(Set::class);
    }

    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function condition(): BelongsTo{
        return $this->belongsTo(Condition::class);
    }

    public function rarity():BelongsTo{
        return $this->belongsTo(Rarity::class);
    }

    public function inventory():HasOne{
        return $this->hasOne(Inventory::class);
    }
}
