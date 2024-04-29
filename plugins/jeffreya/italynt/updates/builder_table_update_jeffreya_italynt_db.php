<?php namespace Jeffreya\ItalyNt\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateJeffreyaItalyntDb extends Migration
{
    public function up()
    {
        Schema::table('jeffreya_italynt_db', function($table)
        {
            $table->string('club', 255)->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('position', 32)->change();
            $table->string('other_positions', 32)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jeffreya_italynt_db', function($table)
        {
            $table->integer('club')->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('position', 255)->change();
            $table->string('other_positions', 255)->change();
        });
    }
}
