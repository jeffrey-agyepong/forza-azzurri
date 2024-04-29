<?php namespace Jeffreya\ItalyNt\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateJeffreyaItalyntClubs extends Migration
{
    public function up()
    {
        Schema::table('jeffreya_italynt_clubs', function($table)
        {
            $table->renameColumn('team', 'club');
        });
    }
    
    public function down()
    {
        Schema::table('jeffreya_italynt_clubs', function($table)
        {
            $table->renameColumn('club', 'team');
        });
    }
}
