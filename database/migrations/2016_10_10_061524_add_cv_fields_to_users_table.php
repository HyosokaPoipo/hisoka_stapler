<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCvFieldsToUsersTable extends Migration {

    /**
     * Make changes to the table.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {

            $table->string('cv_file_name')->nullable();
            $table->integer('cv_file_size')->nullable()->after('cv_file_name');
            $table->string('cv_content_type')->nullable()->after('cv_file_size');
            $table->timestamp('cv_updated_at')->nullable()->after('cv_content_type');

        });

    }

    /**
     * Revert the changes to the table.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {

            $table->dropColumn('cv_file_name');
            $table->dropColumn('cv_file_size');
            $table->dropColumn('cv_content_type');
            $table->dropColumn('cv_updated_at');

        });
    }

}