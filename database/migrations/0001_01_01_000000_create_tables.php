<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('role_id')->constrained('roles');
            $table->timestamps();
        });

        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('customer_number')->unique();
            $table->string('address');
            $table->timestamps();
        });

        // Crear la tabla orders antes de evidences
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('material_id')->constrained('materials'); // Relación con materials
            $table->date('date');
            $table->string('status');
            $table->timestamps();
        });

        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quantity');
            $table->integer('stock');
            $table->timestamps();
        });

        Schema::create('evidences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders'); // Relación con orders
            $table->string('photo_url');
            $table->enum('type', ['LOAD', 'DELIVERY']);
            $table->timestamps();
        });

        Schema::create('material_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders');
            $table->foreignId('material_id')->constrained('materials');
            $table->timestamps();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('evidences');
        Schema::dropIfExists('material_order');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('materials');
        Schema::dropIfExists('customers');
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
    }
};