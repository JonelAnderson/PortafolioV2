<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePortafoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portafolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('photo');
            $table->string('description');
            $table->timestamps();
        });
        DB::table('portafolios')->insert(array('id'=>'1','title'=>'Design web', 'description'=>'Diseñador web ','photo'=>'portafolio1644982158.png'));
        DB::table('portafolios')->insert(array('id'=>'2','title'=>'Developer', 'description'=>'Desarrollador web','photo'=>'portafolio1644982234.png'));
        DB::table('portafolios')->insert(array('id'=>'3','title'=>'Testing', 'description'=>'Especialista en calidad','photo'=>'portafolio1644982247.jpg'));
        DB::table('portafolios')->insert(array('id'=>'4','title'=>'Design Graphig', 'description'=>'Diseñador grafico','photo'=>'portafolio1644982263.png'));
        DB::table('portafolios')->insert(array('id'=>'5','title'=>'Design Graphig', 'description'=>'Diseñador grafico','photo'=>'portafolio1644982373.jpg'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portafolios');
    }
}
