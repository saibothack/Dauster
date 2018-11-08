<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kind_persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            $table->boolean('status')->default(1);
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('surnames')->nullable();
            $table->date('birthday')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->string('img_user')->nullable();
            $table->string('img_vehicle')->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('authorized')->default(0);
            $table->boolean('status')->default(1);
            $table->boolean('full')->default(1);
            $table->integer('current_work_id')->nullable();
            $table->integer('data_plan')->nullable();
            $table->integer('vehicles_id')->nullable();
            $table->unsignedInteger('kind_persons_id')->nullable();
            $table->foreign('kind_persons_id')
                ->references('id')
                ->on('kind_persons')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
        Schema::dropIfExists('billings');
        Schema::dropIfExists('states');
        Schema::dropIfExists('countries');
        Schema::dropIfExists('users');
        Schema::dropIfExists('kind_persons');
    }
}
