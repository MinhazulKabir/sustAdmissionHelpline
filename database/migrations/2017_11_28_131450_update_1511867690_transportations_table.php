<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1511867690TransportationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transportations', function (Blueprint $table) {
            if(Schema::hasColumn('transportations', 'source')) {
                $table->dropColumn('source');
            }
            
        });
Schema::table('transportations', function (Blueprint $table) {
            
if (!Schema::hasColumn('transportations', 'cost')) {
                $table->string('cost');
                }
if (!Schema::hasColumn('transportations', 'source')) {
                $table->string('source');
                }
if (!Schema::hasColumn('transportations', 'middle_point')) {
                $table->string('middle_point');
                }
if (!Schema::hasColumn('transportations', 'destination')) {
                $table->string('destination');
                }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transportations', function (Blueprint $table) {
            $table->dropColumn('cost');
            $table->dropColumn('source');
            $table->dropColumn('middle_point');
            $table->dropColumn('destination');
            
        });
Schema::table('transportations', function (Blueprint $table) {
                        $table->string('source');
                
        });

    }
}
