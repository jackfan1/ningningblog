<?php

use yii\db\Migration;
use yii\db\Schema;

class m170402_011949_ning_articles extends Migration
{
    public function up()
    {
        $this->createTable('ning_articles',[
            'id' => Schema::TYPE_PK,
            'author_id' => Schema::TYPE_INTEGER . " NOT NULL",
            'author_name' => Schema::TYPE_STRING . ' NOT NULL ',
            'title' => Schema::TYPE_STRING . ' NOT NULL ',
            'content' => Schema::TYPE_TEXT . ' NOT NULL ',
            'create_time' => Schema::TYPE_DATETIME . ' NOT NULL ',
            'update_time' => Schema::TYPE_DATETIME . ' NOT NULL ',
        ]);
    }

    public function down()
    {
        $this->dropTable('ning_articles');
        echo "m170402_011949_ning_articles cannot be reverted.\n";
        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
