<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('lastname', 50);
            $table->string('document', 50);
            $table->enum('document_type', ['CC', 'TI', 'TP', 'RC', 'CE', 'CI']);
            $table->string('expedition_place', 50);
            $table->string('address', 50);
            $table->string('phone', 10);
            $table->string('cellphone', 15);
            $table->enum('sex', ['M', 'F']);
            $table->timestamp('date_of_birth');
            $table->enum('civil_status', ['Soltero', 'Casado', 'Unión libre', 'Separado', 'Divorciado', 'Viudo']);
            $table->foreignId('neighborhood_id')->constrained();
            $table->foreignId('cell_id')->nullable()->constrained()->onDelete('set null');
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
        Schema::dropIfExists('members');
    }
}
