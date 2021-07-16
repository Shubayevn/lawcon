<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adm extends Model
{
    /**
     * Запускает миграции
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Переворачивает миграции
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adm');
    }
}
