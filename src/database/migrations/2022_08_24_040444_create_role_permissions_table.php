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
        Schema::create('role_permissions', function (Blueprint $table) {
            $table->string('role');
            $table->foreign('role')->references('name')->on('roles')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('permission');
            $table->foreign('permission')->references('name')->on('permissions')->cascadeOnDelete()->cascadeOnUpdate();
            $table->primary(['role','permission']);
            $table->string('description');
            $table->integer('active')->default(1);
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
        Schema::dropIfExists('role_permissions');
    }
};
