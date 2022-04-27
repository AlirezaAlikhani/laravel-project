<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copans', function (Blueprint $table) {
            $table->id();
            $table->string('code1');
            $table->string('amount');//چقدر از قیمت کم میکند
            $table->tinyInteger('amount_type')->default(0)->comment('0 => percentage, 1 => price unit');//تخفیف درصدی باشه یا پولب
            $table->unsignedBigInteger('discount_ceiling')->nullable();//سقف تخفیف
            $table->tinyInteger('type')->default(0)->comment('0 =>common (each user can use one time), 1 => privet (one user can use one time)');//نوعکد تخفیف
            $table->tinyInteger('status')->default(0);
            $table->timestamp('start_at')->useCurrent();
            $table->timestamp('end_at')->useCurrent();
            $table->foreignId('user_id')->nullable()->constrained('product_categories')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('copans');
    }
}
