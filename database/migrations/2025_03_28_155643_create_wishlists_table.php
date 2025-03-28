<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create the wishlists table
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Name of the wishlist
            $table->enum('status', ['public', 'private'])->default('private'); // Status can be 'public' or 'private'
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key referencing users table
            $table->timestamps(); // created_at and updated_at columns
        });

        // Create the pivot table for wishlist items
        Schema::create('wishlist_item', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('wishlist_id')->constrained('wishlists')->onDelete('cascade'); // Foreign key to wishlists table
            $table->foreignId('item_id')->constrained('user_inventories')->onDelete('cascade'); // Foreign key to user_inventories table
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wishlist_item'); // Drop the pivot table first
        Schema::dropIfExists('wishlists'); // Then drop the wishlists table
    }
}
