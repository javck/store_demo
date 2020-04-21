<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Cgy;

class AlterPicCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cgies', function (Blueprint $table) {
            $table->string('pic',255)->nullable();
            $table->integer('sort')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cgies', function (Blueprint $table) {
            $table->dropColumn('pic');
            $table->dropColumn('sort');

        });
    }
}
