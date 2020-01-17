<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTaxDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_tax_detail', function (Blueprint $table) {
            $table->string('code')->index();
            $table->boolean('vat_customer')->default(0);
            $table->boolean('vat_extempted')->default(0);
            $table->string('vat_reg')->nullable();
            $table->string('svat_cust')->default(0);
            $table->string('svat_reg')->nullable();
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
