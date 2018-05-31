<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeVarTypesInProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_invoice_id_foreign');
            $table->foreign('invoice_id')->references('id')->on('products')->onDelete('cascade');
            $table->float('quantity')->change();
            $table->string('unit')->change();
            $table->float('price')->change();
            $table->integer('vat')->change();
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
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_invoice_id_foreign');
            $table->foreign('invoice_id')->references('id')->on('products');
            $table->integer('quantity')->change();
            $table->integer('unit')->change();
            $table->integer('price')->change();
            $table->string('vat')->change();
            $table->dropTimestamps();
            $table->dropSoftDeletes();
        });
    }
}
