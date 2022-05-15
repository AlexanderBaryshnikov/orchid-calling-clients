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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone', 20);
            $table->enum('status', ['interviewed', 'not_interviewed'])->comment('Опрошен/Не опрошен')->default('not_interviewed');
            $table->string('email')->unique()->nullable();
            $table->bigInteger('service_id')->comment('ID оказанной услуги')->unsigned()->nullable();
            $table->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->smallInteger('assessment')->comment('Оценка качества')->nullable();
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
        Schema::dropIfExists('clients');
    }
};
