<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('business_name', 100);
            $table->string('fantasy_name', 100);
            $table->string('legal_address', 100);
            $table->string('subsidiary');
            $table->string('locality_1');
            $table->string('postal_code');
            $table->string('province_1');
            $table->string('business_address');
            $table->string('locality_2');
            $table->string('postal_code');
            $table->string('province_2');
            $table->string('cuit')->unique();
            $table->string('iva_condition');
            $table->date('start_date');
            $table->string('phones')->nullable();
            $table->string('email');
            $table->string('web')->nullable();
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
