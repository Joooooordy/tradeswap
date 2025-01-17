<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserInventory extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'item_name',
        'game',
        'rarity',
        'status',
        'icon_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tradesAsSenderItem()
    {
        return $this->hasMany(Trade::class, 'sender_item_id');
    }

    public function tradesAsReceiverItem()
    {
        return $this->hasMany(Trade::class, 'receiver_item_id');
    }

}
