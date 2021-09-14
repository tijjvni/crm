<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->boolean('open')->default(true);
            $table->foreignId('ticket_type_id')->constrained();
            $table->string('subject', 200);
            $table->foreignId('escalated')->nullable()->constrained('users')->default(null);
            $table->foreignId('opened_by')->nullable()->constrained('users')->default(null);
            $table->foreignId('opened_for')->nullable()->constrained('users')->default(null);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
