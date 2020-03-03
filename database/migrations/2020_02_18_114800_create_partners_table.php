<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable()->comment('Código do Usuário');
            $table->boolean('active')->default(1)->comment('Ativa?');
            $table->string('name', 100)->comment('Nome do Parceiro');
            $table->enum('gender', [
                'M', // Masculino
                'F', // Feminino
            ])->nullable()->comment('Gênero do Parceiro');
            $table->string('cpf', 11)->nullable()->comment('CPF');
            $table->string('zip_code', 8)->nullable()->comment('CEP');
            $table->string('address_name')->nullable()->comment('Cód. do Endereço');
            $table->string('address_number', 20)->nullable()->comment('Número do Endereço');
            $table->string('address_complement', 100)->nullable()->comment('Complemento do Endereço');
            $table->string('neighborhood_name')->nullable()->comment('Cód. do Bairro');
            $table->string('city_name')->nullable()->comment('Cód. da Cidade');
            $table->string('cell_phone', 11)->nullable()->comment('Telefone Celular');
            $table->string('email', 50)->nullable()->comment('E-mail');
            $table->dateTime('date_birth')->nullable()->comment('Data de Nascimento/Fundação');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partners');
    }
}
