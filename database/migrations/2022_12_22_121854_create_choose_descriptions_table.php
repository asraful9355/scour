<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChooseDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choose_descriptions', function (Blueprint $table) {
            $table->id();
            $table->text('description_en')->nullable();
            $table->text('description_bn')->nullable();
            $table->string('video');
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
        Schema::dropIfExists('choose_descriptions');
    }
}
