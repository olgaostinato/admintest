<?php
use Phinx\Migration\AbstractMigration;

final class Feedback extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('feedback');
        $table->addColumn('name', 'string',['limit' => 100])
            ->addColumn('emal', 'string',['limit' => 100])
            ->addColumn('comments', 'string',['limit' => 500])
            ->addColumn('created', 'datetime',['default' => 'CURRENT_TIMESTAMP'])
            ->create();

    }
}
