<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class MakeImageNullableInEventsTable extends Migration
{
    public function up()
    {
        DB::statement('ALTER TABLE events MODIFY image VARCHAR(255) NULL');
    }

    public function down()
    {
        DB::statement('ALTER TABLE events MODIFY image VARCHAR(255) NOT NULL');
    }
}
