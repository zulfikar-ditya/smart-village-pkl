<?php

use yii\db\Migration;

/**
 * Class m210125_144838_load_database
 */
class m210125_144838_load_database extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = file_get_contents(__DIR__ . '/db_smartvillage.sql');
        $command = Yii::$app->db->createCommand($sql);
        $command->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210125_144838_load_database cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210125_144838_load_database cannot be reverted.\n";

        return false;
    }
    */
}
