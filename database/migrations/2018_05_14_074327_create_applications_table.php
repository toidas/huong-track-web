<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type',250);
            $table->string('package', 250);
            $table->string('version_name', 250)->nullable()->default(null);
            $table->string('version_code', 250)->nullable()->default(null);
            $table->string('admob_banner', 250)->nullable()->default(null);
            $table->string('admob_interstitial', 250)->nullable()->default(null);
            $table->string('admob_video', 250)->nullable()->default(null);
            $table->string('unity_video', 250)->nullable()->default(null);
            $table->string('facebook_name', 250)->nullable()->default(null);
            $table->string('facebook_app_id', 250)->nullable()->default(null);
            $table->string('facebook_ads', 250)->nullable()->default(null);
            $table->string('startapp_id', 250)->nullable()->default(null);
            $table->string('token', 250)->nullable()->default(null);
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
        Schema::dropIfExists('applications');
    }
}
