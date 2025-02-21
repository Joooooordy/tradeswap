<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_id')->constrained('users')->onDelete('cascade');   // User who sends the items
            $table->foreignId('receiver_id')->constrained('users')->onDelete('cascade'); // User who receives the items
            $table->foreignId('sender_item_id')->constrained('user_inventories')->onDelete('cascade'); // Item being sent
            $table->foreignId('receiver_item_id')->nullable()->constrained('user_inventories')->onDelete('cascade'); // Item being traded back (can be null)
            $table->enum('status', ['pending', 'accepted', 'declined'])->default('pending'); // items status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trades');
    }
}
