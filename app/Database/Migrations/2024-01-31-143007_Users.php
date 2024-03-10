<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
        $this->forge->addField([
            'id' => ['type'  => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'name' => ['type' => 'VARCHAR',  'constraint' => '255'],
            'username' => ['type' => 'VARCHAR',  'constraint' => '255'],
            'email' => ['type' => 'VARCHAR',  'constraint' => '255'],
            'password' => ['type' => 'VARCHAR',  'constraint' => '255'],
            'level' => ['type' => 'VARCHAR',  'constraint' => '255'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat table users
        $this->forge->createTable('users', TRUE);
    }

    public function down()
    {
        // menghapus table users
        $this->forge->dropTable('users');
    }
}
