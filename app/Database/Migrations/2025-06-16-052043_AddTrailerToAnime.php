<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTrailerToAnime extends Migration
{
   public function up()
{
    $this->forge->addColumn('anime', [
        'trailer_url' => [
            'type'       => 'VARCHAR',
            'constraint' => 255,
            'null'       => true,
            'after'      => 'img', // tempatkan setelah kolom img
        ],
    ]);
}

public function down()
{
    $this->forge->dropColumn('anime', 'trailer_url');
}

}
