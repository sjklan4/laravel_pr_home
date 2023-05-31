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
        Schema::create('hyboardprs', function (Blueprint $table) {
            $table->id('Lno');
            $table->char('list',1)->index();
            $table->string('Ltitle',100);
            $table->string('Lcontent',4000);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->char('deleted_flg',1)->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hyboardprs');
    }
};
