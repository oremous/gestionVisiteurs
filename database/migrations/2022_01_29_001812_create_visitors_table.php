<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->integer('registration_number');
            $table->string('fullname');
            $table->string('depart');

            $table->date('hire_date')
                ->default(DB::raw('CURRENT_TIMESTAMP')) // Cette ligne de code permet de mettre la date et l'heure courante par defaut
                ->after('price');

            $table->integer('phone');
            $table->string('address');
            $table->string('city');
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
        Schema::dropIfExists('visitors');
    }
}
