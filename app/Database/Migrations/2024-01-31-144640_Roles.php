<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roles extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
        $this->forge->addField([
            'id' => ['type'  => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'role' => ['type' => 'VARCHAR',  'constraint' => '5'],
            'name' => ['type' => 'VARCHAR',  'constraint' => '255'],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat table roles
        $this->forge->createTable('roles', TRUE);
    }

    public function down()
    {
        // menghapus table roles
        $this->forge->dropTable('roles');
    }
}
