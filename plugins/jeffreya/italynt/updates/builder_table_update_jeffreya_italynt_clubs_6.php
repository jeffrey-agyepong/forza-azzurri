<?php namespace Jeffreya\ItalyNt\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateJeffreyaItalyntClubs6 extends Migration
{
    public function up()
    {
        Schema::table('jeffreya_italynt_clubs', function($table)
        {
            $table->renameColumn('id', 'club_id');
        });
    }
    
    public function down()
    {
        Schema::table('jeffreya_italynt_clubs', function($table)
        {
            $table->renameColumn('club_id', 'id');
        });
    }
}
