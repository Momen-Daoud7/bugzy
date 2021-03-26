<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bugs', function (Blueprint $table) {
            $table->id();
            $table->string("bug_name");
            $table->string('bug_summary');
            $table->string('bug_description')->nullable();
            $table->unsignedBigInteger('opened_by');
            $table->foreign('opened_by')->references('id')->on('users')->onDelete('null');
            $table->unsignedBigInteger('related_project');
            $table->foreign('related_project')->references('id')->on('projects')->onDelete('cascade');
            $table->unsignedBigInteger('assigned_to');
            $table->foreign('assigned_to')->references('id')->on('users')->onDelete('null');
            $table->enum('status' , ['closed' , 'open']);
            $table->enum('priority',['important' , 'not important' , 'medium']);
            $table->date('traget_resolution_date')->nullable();
            $table->data('actual_resoultion_date')->nullable();
            $table->string('resolution_summary')->nullable();
            $table->unsignedBigInteger('modifed_by')->nullable();
            $table->foreign('modifed_by')->references('id')->on('users')->onDelete('null'); 
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
        Schema::dropIfExists('bugs');
    }
}
