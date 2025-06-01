<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('invoice_date');
            $table->string('client_name');
            $table->longText('client_address');
            $table->string('client_email');
            $table->string('forwarding_vessel');
            $table->string('port_of_discharge');
            $table->string('port_of_loading');
            $table->string('bill_lading');
            $table->string('shipper');
            $table->string('consignee');
            $table->string('cargo_description');
            $table->date('etd');
            $table->date('eta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
