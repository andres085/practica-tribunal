<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id()->unique();
            $table->foreignId('id_expediente')->constrained('expedientes');
            $table->foreignId('id_tipo')->constrained('documento_tipos')->unique();
            $table->foreignId('id_organismo')->nullable()->constrained('organismos')->unique();
            $table->foreignId('id_area')->nullable()->constrained('areas')->unique();
            $table->year('anio');
            $table->integer('numero')->default(1);
            $table->unique(['anio', 'numero']);
            $table->string('tema');
            $table->text('informacion');
            $table->string('caratula');
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
        Schema::dropIfExists('documentos');
    }
}
