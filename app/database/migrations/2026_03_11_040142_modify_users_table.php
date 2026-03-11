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
        Schema::table('users', function (Blueprint $table) {
            //department_id, username, role
            $table->string('username', 100)->after('id')->unique();
            $table->foreignId('department_id')
                    ->after('email')
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->boolean('role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['department_id']);
            $table->dropColumn(['username', 'department_id', 'role']);
        });
    }
};
