<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('estoque', function (Blueprint $table) {

    $table->id();
    $table->string('codigo_produto');
    $table->string('nome_produto');
    $table->string('categoria');
    $table->string('marca')->nullable();
    $table->string('unidade');
    $table->integer('quantidade')->default(0);
    $table->integer('estoque_minimo')->default(0);
    $table->date('data_validade')->nullable();
    $table->string('fornecedor')->nullable();
    $table->text('observacao')->nullable();
    $table->timestamps();

});
    }

    public function down(): void
    {
        Schema::dropIfExists('estoque');
    }
};