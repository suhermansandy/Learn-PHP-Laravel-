<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('slud');
            $table->text('sipnosis');
            $table->text('deskripsi');
            $table->boolean('published');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('kategori_id');
            $table->timestamp('publish_at');
            $table->string('tags');
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategori_beritas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('beritas');
    }
}
