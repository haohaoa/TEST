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
        Schema::create('contact', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable(); // Changed 'int' to 'string'
            $table->text('message')->nullable();
            $table->integer('id_user')->nullable(); // Changed 'int' to 'integer'
            $table->timestamps(); // This will automatically add 'created_at' and 'updated_at' fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
