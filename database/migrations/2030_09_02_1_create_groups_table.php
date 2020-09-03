<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    public function up(): void
    {
        Schema::create('groups', static function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
}
