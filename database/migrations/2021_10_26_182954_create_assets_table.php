<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('bank');
            $table->integer('cpte_number');
            $table->integer('amount');
            $table->integer('init_value');
            $table->integer('resid_value');
            $table->integer('estim_value');
            $table->string('desc');
            $table->string('adress');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Category::class);
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
        Schema::dropIfExists('assets');
    }
}
