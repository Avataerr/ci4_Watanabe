<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPasswordToUsers extends Migration
{
    public function up()
    {
        if (!$this->db->fieldExists('password', 'users')) {
            $this->forge->addColumn('users', [
                'password' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 255,
                    'null'       => true,
                ],
            ]);
        }

        $defaultHash = password_hash('password123', PASSWORD_DEFAULT);

        $this->db->table('users')
            ->where('(password IS NULL OR password = "")', null, false)
            ->update(['password' => $defaultHash]);
    }

    public function down()
    {
        if ($this->db->fieldExists('password', 'users')) {
            $this->forge->dropColumn('users', 'password');
        }
    }
}
