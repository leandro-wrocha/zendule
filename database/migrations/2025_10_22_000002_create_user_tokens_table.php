<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTokensTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('user_tokens')) {
            Schema::create('user_tokens', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('provider_id');
                $table->string('provider_user_id')->nullable();
                $table->string('access_token', 255)->nullable();
                $table->string('refresh_token', 255)->nullable();
                $table->timestamp('expires_at')->nullable();
                $table->json('scopes_approved')->nullable();
                $table->datetimes();
    
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('provider_id')->references('id')->on('social_providers')->onDelete('cascade');
                $table->unique(['user_id','provider_id']);
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('user_tokens');
    }
}
