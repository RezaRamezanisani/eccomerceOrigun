<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId("role_id")->references("id")->on("roles");
            $table->string('name',20);
            $table->string('email_phone',40)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',100);
            $table->string("avatar",20)->default('post-sq-5.jpg');
            $table->enum("status",["active","inactive"])->default("active");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
