<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturedProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_projects', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('slug');
            $table->string('title_en', 100);
            $table->string('sub_title_en', 100);
            $table->string('title_bn', 100)->nullable();
            $table->string('sub_title_bn', 100)->nullable();
            $table->longText('desccription_en');
            $table->longText('desccription_bn')->nullable();
            $table->unsignedTinyInteger('status')->default(1)->comment('1=>Active, 0=>Inactive');
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
        Schema::dropIfExists('featured_projects');
    }
}
