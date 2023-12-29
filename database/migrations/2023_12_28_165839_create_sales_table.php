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
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_no')->nullable();
            $table->string('status')->nullable();
            $table->string('amount')->nullable();
            $table->string('paid_amount')->nullable();

            $table->unsignedBigInteger('plot_id')->nullable();
            $table->unsignedBigInteger('sales_officer_id')->nullable();
            $table->unsignedBigInteger('project_id')->nullable();

            $table->foreign('plot_id')->references('id')->on('plots')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('sales_officer_id')->references('id')->on('saleofficers')->onDelete('cascade');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
