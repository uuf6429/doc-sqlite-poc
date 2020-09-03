<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    public function up(): void
    {
        Schema::create('documents', static function (Blueprint $table) {
            $table->string('hash', 40)->unique()->index();
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title', 100);
            $table->string('ek', 50);
            $table->string('iv', 50);
            $table->softDeletes();
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('group_id')->nullable();
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
}
