<?php namespace Jeffreya\ItalyNt\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateJeffreyaItalyntClubs2 extends Migration
{
    public function up()
    {
        Schema::table('jeffreya_italynt_clubs', function($table)
        {
            $table->dropColumn('club');
        });
    }
    
    public function down()
    {
        Schema::table('jeffreya_italynt_clubs', function($table)
        {
            $table->string('club', 32);
        });
    }
}
