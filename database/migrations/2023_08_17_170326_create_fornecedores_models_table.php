<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fornecedores_models', function (Blueprint $table) {
            $table->id();
            $table->string('Nome', 80)->nullable(false);
            $table->string('CPF', 11)->unique()->nullable(false);
            $table->string('E-mail', 100)->unique()->nullable(false);
            $table->string('Contato', 15)->nullable(false);
            $table->string('CEP', 8)->nullable(false);
            $table->string('Inscrição Municipal', 11)->nullable(false);
            $table->string('País', 30)->nullable(false);
            $table->string('CNPJ', 14)->unique()->nullable(false);
            $table->string('Bairro', 30)->nullable(false);
            $table->string('Código', 12)->unique()->nullable(false);
            $table->string('Cidade', 30)->nullable(false);
            $table->string('WebSite', 50)->unique()->nullable(false);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fornecedores_models');
    }
};
