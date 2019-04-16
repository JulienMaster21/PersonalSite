<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tests';

    /**
     * Run the migrations.
     * @table tests
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('courses_id');
            $table->string('name')->nullable();
            $table->string('completed', 45)->nullable();
            $table->float('grade')->nullable();
            $table->float('EC')->nullable();

            $table->index(["courses_id"], 'fk_tests_courses1_idx');


            $table->foreign('courses_id', 'fk_tests_courses1_idx')
                ->references('id')->on('courses')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
