<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerWorkPlaceDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('customer_work_detail', function (Blueprint $table) {
            $table->string('code')->index();
            $table->string('name')->default('');
            $table->string('address')->default('');
            $table->string('department')->default('');
            $table->string('phone')->default('');
            $table->string('designation')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->default('');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
