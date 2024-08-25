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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id'); // کلید اصلی از نوع bigint unsigned
            $table->string('title');
            $table->text('body');
            $table->unsignedBigInteger('category_id'); // نوع داده bigint unsigned
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // اضافه کردن کلید خارجی
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
