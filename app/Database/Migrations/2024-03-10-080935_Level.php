<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Level extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
        $this->forge->addField([
            'id' => ['type'  => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'kode' => ['type' => 'VARCHAR',  'constraint' => '3'],
            'nama_level' => ['type' => 'VARCHAR',  'constraint' => '255'],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat table roles
        $this->forge->createTable('level', TRUE);
    }

    public function down()
    {
        // menghapus table roles
        $this->forge->dropTable('level');
    }
}
