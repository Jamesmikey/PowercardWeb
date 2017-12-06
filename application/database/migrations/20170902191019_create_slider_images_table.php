<?php

use Phinx\Migration\AbstractMigration;

class CreateSliderImagesTable extends AbstractMigration
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
        $slider_images = $this->table('slider_images');

        $slider_images->addColumn('path', 'string')
              ->addColumn('title', 'string')
              ->addColumn('description', 'text')
              ->addColumn('active', 'boolean', ['default' => false])
              ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
              ->addColumn('updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
              ->save();
    }

    public function down()
    {
        $this->dropTable('slider_images');
    }
}
