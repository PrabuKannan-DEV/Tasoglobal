<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        DB::table('terms')->insert([
            ['id'=>1, 'name'=>"Term 1", 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['id'=>2, 'name'=>"Term 2", 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['id'=>3, 'name'=>"Term 2", 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['id'=>4, 'name'=>"Term 4", 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
            ['id'=>5, 'name'=>"Term 5", 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terms');
    }
};
