<?php namespace Jeffreya\ItalyNt\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateJeffreyaItalyntDb4 extends Migration
{
    public function up()
    {
        Schema::table('jeffreya_italynt_db', function($table)
        {
            $table->timestamp('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('jeffreya_italynt_db', function($table)
        {
            $table->dropColumn('updated_at');
        });
    }
}
