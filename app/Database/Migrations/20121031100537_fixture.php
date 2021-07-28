<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fixture extends Migration
{
        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 10,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'referee'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '100',
                        ],
                        'timezone' => [
                                'type' => 'TEXT',
                                'null' => true,
                        ],
                        'date' => [
                            'type' => 'TEXT',
                            'null' => true,
                    ],
                    'timestamp' => [
                        'type' => 'TEXT',
                        'null' => true,
                ],
                'periods_id' => [
                    'type'           => 'INT',
                    'constraint'     => 10,
                    'null' => false,
            ],
            'venue_id' => [
                'type'           => 'INT',
            'constraint'     => 10,
            'null' => false,
        ],
        'status_id' => [
            'type'           => 'INT',
            'constraint'     => 10,
            'null' => false,
    ],
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('fixture');
        }

        public function down()
        {
                $this->forge->dropTable('fixture');
        }
}