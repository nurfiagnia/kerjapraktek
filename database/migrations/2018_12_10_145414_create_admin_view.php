<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE VIEW admin_view AS SELECT
            users.id as id_user,
            users.name as name,
            users.email as email,
            users.alamat as alamat,
            users.no_tlp as no_tlp,
            users.instansi as instansi,
            users.jabatan as jabatan,

            role_user.role_id as role_id,
            role_user.user_id as user_id

            FROM users
            JOIN role_user

            ON (users.id = role_user.user_id);
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
