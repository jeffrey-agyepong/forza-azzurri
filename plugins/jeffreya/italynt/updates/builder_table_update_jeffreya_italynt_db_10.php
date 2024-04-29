<?php namespace Jeffreya\ItalyNt\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateJeffreyaItalyntDb10 extends Migration
{
    public function up()
    {
        Schema::table('jeffreya_italynt_db', function($table)
        {
            $table->decimal('height', 5, 2)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jeffreya_italynt_db', function($table)
        {
            $table->decimal('height', 10, 0)->change();
        });
    }
}
