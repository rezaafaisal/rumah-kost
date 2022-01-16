<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("id_akses_roles")
                  ->unsigned();
            $table->foreign("id_akses_roles")
                  ->references('id')
                  ->on('akses_roles')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->string('name');
            $table->string('email')->unique();
            $table->string('no_wa')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('show_password');
            $table->enum("status", 
                                    ['aktif',
                                     'tidak'
                                    ]
                        );
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
