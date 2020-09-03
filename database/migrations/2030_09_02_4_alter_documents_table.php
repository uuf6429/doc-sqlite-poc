<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterDocumentsTable extends Migration
{
    public function up(): void
    {
        Schema::table('documents', static function (Blueprint $table) {
            $table->string('iv', 50)->nullable()->change();
            $table->string('ek', 50)->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('documents', static function (Blueprint $table) {
            $table->string('iv', 50)->change();
            $table->string('ek', 50)->change();
        });
    }
}
