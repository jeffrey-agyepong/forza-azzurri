<?php namespace Jeffreya\ItalyNt\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateJeffreyaItalyntDb extends Migration
{
    public function up()
    {
        Schema::create('jeffreya_italynt_db', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->string('player_name', 32);
            $table->date('date_of_birth');
            $table->integer('age');
            $table->decimal('height', 10, 0);
            $table->integer('club');
            $table->integer('goals');
            $table->integer('assists');
            $table->integer('national_caps');
            $table->text('picture');
            $table->text('tournaments');
            $table->string('position');
            $table->string('other_positions');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jeffreya_italynt_db');
    }
}
