<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefaultValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        DB::statement("ALTER TABLE `advertisements` CHANGE `status` `status` SMALLINT(6) NOT NULL DEFAULT '2' COMMENT '1 for show/live on website, 2 for inactive, 3 for draft, 4 for not verify, 5 for verified, 6 for deleted etc';");
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('default_values');
    }
}
