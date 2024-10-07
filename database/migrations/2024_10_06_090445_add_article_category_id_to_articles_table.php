<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddArticleCategoryIdToArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            // Add the new column
            $table->unsignedBigInteger('article_category_id')->nullable(); // Nullable if needed

            // Create the foreign key constraint
            $table->foreign('article_category_id')
                  ->references('id')->on('article_categories')
                  ->onDelete('cascade'); // Handle delete behavior
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            // Drop the foreign key constraint first
            $table->dropForeign(['article_category_id']);
            
            // Then drop the column
            $table->dropColumn('article_category_id');
        });
    }
}
