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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->char('code');
            $table->char('objet',255);
            $table->text('contenue',5000);
            $table->foreignId('expediteur_id')
                  ->constraind('users')
                  ->nullable()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreignId('register_id')
                ->constraind('registre')
                ->nullable()
                ->onUpdate('cascade')
                 ->onDelete('cascade');

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
        Schema::dropIfExists('messages');
    }
};
