<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->string('mobile')->nullable();
            $table->string('siret')->nullable();
            $table->string('additional_address')->nullable();
            $table->string('vat_no')->nullable();
            $table->string('fax')->nullable();
            $table->string('landline')->nullable();
            $table->string('function')->nullable();
            $table->string('type')->nullable();
            $table->unsignedBigInteger('contact_id')->nullable();
            $table->timestamps();
             $table->foreign('contact_id')->references('id')->on('contacts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}