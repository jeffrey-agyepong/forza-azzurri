<?php namespace Jeffreya\ItalyNt\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateJeffreyaItalyntDb11 extends Migration
{
    public function up()
    {
        Schema::table('jeffreya_italynt_db', function($table)
        {
            $table->integer('club_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('jeffreya_italynt_db', function($table)
        {
            $table->dropColumn('club_id');
        });
    }
}
