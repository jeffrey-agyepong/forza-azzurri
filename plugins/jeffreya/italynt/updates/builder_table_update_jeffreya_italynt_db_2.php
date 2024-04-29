<?php namespace Jeffreya\ItalyNt\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateJeffreyaItalyntDb2 extends Migration
{
    public function up()
    {
        Schema::table('jeffreya_italynt_db', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('jeffreya_italynt_db', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
