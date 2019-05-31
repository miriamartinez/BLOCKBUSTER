<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
<<<<<<< HEAD
            $table->string('email',20)->index();
            $table->string('token',50);
=======
            $table->string('email',50)->index();
            $table->string('token', 250);
>>>>>>> 25694758c067ab0abc41ec5ccb6e458c6742b00b
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
