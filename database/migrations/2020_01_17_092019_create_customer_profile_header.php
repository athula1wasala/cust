<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerProfileHeader extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_profile_header', function (Blueprint $table) {
            $table->string('code')->index();
            $table->string('br_no')->nullable();
            $table->string('nic');
            $table->string('passprot')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('driving_licene')->nullable();
            $table->string('title')->nullable();
            $table->string('sex');
            $table->string('dob');
            $table->string('Initials')->nullable();
            $table->string('fname')->nullable();
            $table->string('surname')->nullable();
            $table->string('full_name')->nullable();
            $table->string('pref_language')->nullable();
            $table->string('notification_type');
            $table->string('pref_language')->nullable();

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
