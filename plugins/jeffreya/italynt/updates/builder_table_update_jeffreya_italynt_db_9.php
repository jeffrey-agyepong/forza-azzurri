<?php namespace Jeffreya\ItalyNt\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateJeffreyaItalyntDb9 extends Migration
{
    public function up()
    {
        Schema::table('jeffreya_italynt_db', function($table)
        {
            $table->decimal('height', 10, 0)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jeffreya_italynt_db', function($table)
        {
            $table->double('height', 10, 0)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
