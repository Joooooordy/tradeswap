<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Get table and column names from the config (in case you want to customize)
        $tableNames = config('permission.table_names');

        // Create the roles table
        Schema::create($tableNames['roles'], static function (Blueprint $table) {
            $table->bigIncrements('id'); // Role ID
            $table->string('name'); // Role Name
            $table->string('guard_name')->default('web');
            $table->timestamps();

            // Unique constraint for name and guard_name
            $table->unique(['name', 'guard_name']);
        });

        // Optionally, you can clear any cached permission data after running the migration.
        app('cache')->store(config('permission.cache.store') != 'default' ? config('permission.cache.store') : null)
            ->forget(config('permission.cache.key'));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $tableNames = config('permission.table_names');

        Schema::table('user_has_roles', function (Blueprint $table) use ($tableNames) {
            // Drop the foreign key constraints
            $table->dropForeign(['role_id']);
            $table->dropForeign(['user_id']);
        });

        // Drop the roles table if rolling back
        Schema::dropIfExists($tableNames['roles']);
    }
};
