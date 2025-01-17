<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id', 'receiver_id', 'sender_item_id', 'receiver_item_id', 'status',
    ];

    // Relationship with the User (Sender)
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // Relationship with the User (Receiver)
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    // Relationship with the UserInventory (Sender Item)
    public function senderItem()
    {
        return $this->belongsTo(UserInventory::class, 'sender_item_id');
    }

    // Relationship with the UserInventory (Receiver Item)
    public function receiverItem()
    {
        return $this->belongsTo(UserInventory::class, 'receiver_item_id');
    }
}
