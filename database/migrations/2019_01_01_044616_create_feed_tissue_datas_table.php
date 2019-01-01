<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedTissueDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed_tissue_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('age_group');
            $table->string('gender');
            $table->float('bregma');
            $table->float('glabella');
            $table->float('nasion');
            $table->float('end_of_nasal_bone');
            $table->float('mid_philtrum');
            $table->float('upper_lip_margin');
            $table->float('lower_lip_margin');
            $table->float('chin_lip_fold');
            $table->float('mental_emnince');
            $table->float('beneath_chin');
            $table->float('supra_orbital');
            $table->float('infra_orbital');
            $table->float('ectoconchion');
            $table->float('supra_canine');
            $table->float('infra_canin');
            $table->float('jugale');
            $table->float('zygomatic_arch');
            $table->float('supra_glenoid');
            $table->float('mastoiale');
            $table->float('euryon');
            $table->float('gonion');
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
        Schema::dropIfExists('feed_tissue_datas');
    }
}
