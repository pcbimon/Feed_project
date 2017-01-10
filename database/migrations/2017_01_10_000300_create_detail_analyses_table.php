<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailAnalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_analyses', function (Blueprint $table) {
            $table->string('id');
            $table->string('product_of_analysis_id');
            $table->string('subject_of_analyses_id');
            $table->double('result_analysis');
            $table->string('path_analysis_file');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_analyses');
    }
}
