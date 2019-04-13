<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTableMigration extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('position', false, true);
            $table->integer('real_depth', false, true);
            $table->string('name');
            $table->string('slug')->nullable();
            $table->softDeletes();

            $table->foreign('parent_id')
                ->references('id')
                ->on('products')
                ->onDelete('set null');
        });

        Schema::create('product_closure', function (Blueprint $table) {
            $table->increments('closure_id');

            $table->integer('ancestor', false, true);
            $table->integer('descendant', false, true);
            $table->integer('depth', false, true);

            $table->foreign('ancestor')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');

            $table->foreign('descendant')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('product_closure', function (Blueprint $table) {
            Schema::dropIfExists('product_closure');
        });

        Schema::table('products', function (Blueprint $table) {
            Schema::dropIfExists('products');
        });
    }
}
