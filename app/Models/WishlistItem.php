<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishlistItem extends Model
{
    use HasFactory;

    protected $table = 'wishlist_item';

    protected $fillable = [
        'wishlist_id',
        'item_id',
    ];

    /**
     * Get the item details from the user's inventory.
     */
    public function item()
    {
        return $this->belongsTo(UserInventory::class, 'item_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class);
    }
}
