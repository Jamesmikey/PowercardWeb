<?php

use Phinx\Migration\AbstractMigration;

class CreateServiceImagesTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        $service_images = $this->table('service_images');

        $service_images->addColumn('path', 'string')
              ->addColumn('title', 'string', ['null' => true])
              ->addColumn('description', 'text', ['null' => true])
              ->addColumn('active', 'boolean', ['default' => true])
              ->addColumn('service_id', 'integer')
              ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
              ->addColumn('updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
              ->save();
    }

    public function down()
    {
        $this->dropTable('service_images');
    }
}
