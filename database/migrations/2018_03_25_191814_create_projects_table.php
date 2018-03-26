<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('proposal_date');
            $table->integer('budget');
            $table->integer('requested_amount')->nullable();
            $table->integer('approved_amount')->nullable();
            $table->integer('noof_milestones');
            $table->integer('comp_milestones');
            //$table->boolean('is_active')->default(1);
            $table->string('updated_by')->nullable();
            $table->string('location');
            $table->integer('contractor_id')->unsigned();
            $table->foreign('contractor_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('projects');
    }
}
