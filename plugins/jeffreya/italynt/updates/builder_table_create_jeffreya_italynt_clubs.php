<?php namespace Jeffreya\ItalyNt\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateJeffreyaItalyntClubs extends Migration
{
    public function up()
    {
        Schema::create('jeffreya_italynt_clubs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('team', 32);
            $table->string('league', 32);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jeffreya_italynt_clubs');
    }
}
