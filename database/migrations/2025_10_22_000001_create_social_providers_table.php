<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialProvidersTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('social_providers')) {
            Schema::create('social_providers', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->boolean('is_enabled')->default(false);
                $table->datetimes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('social_providers');
    }
}
