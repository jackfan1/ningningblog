<?php

use yii\db\Migration;
use yii\db\Schema;

class m170403_023702_ning_user extends Migration
{
    public function up()
    {
        $this->createTable('ning_user',[
            'id' => Schema::TYPE_PK,
            'user_name' => Schema::TYPE_STRING . " NOT NULL ",
            'user_password' => Schema::TYPE_STRING . " NOT NULL ",
            'create_time' => Schema::TYPE_DATETIME . " NOT NULL ",
            'update_time' => Schema::TYPE_DATETIME . " NOT NULL ",
        ]);
    }

    public function down()
    {
        $this->dropTable('ning_user');
        echo "m170403_023702_ning_user cannot be reverted.\n";
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
