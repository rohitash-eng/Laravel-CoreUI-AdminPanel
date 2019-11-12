<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('address')->comment("this address fill by user, as manuallly")->nullable();
            $table->text('goole_live_address')->nullable()->comment("this address comes from google live location, means from google address MAP");
            $table->text('ads_sizes')->comment("ads sizes 2x2 or 16x16 etc or banner, hodings like that")->nullable();
            $table->dateTime('ads_book_start_date')->comment("when it was booked")->nullable();
            $table->dateTime('ads_book_end_date')->comment("ads space would be free on?")->nullable();
            $table->boolean('is_ads_space_free')->comment("if ads free then TRUE else FALSE")->nullable();
            $table->text('description')->comment("this description would help about ads, where,what,why?")->nullable();
            $table->smallInteger('status')->comment("1 for show/live on website, 2 for inactive, 3 for draft, 4 for not verify, 5 for verified, 6 for deleted etc");
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
        Schema::dropIfExists('advertisements');
    }
}
