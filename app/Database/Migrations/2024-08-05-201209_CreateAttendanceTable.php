<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAttendanceTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'student_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'date' => [
                'type' => 'DATE',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('attendance');
    }

    public function down()
    {
        $this->forge->dropTable('attendance');
    }
}
