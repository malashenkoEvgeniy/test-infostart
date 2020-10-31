<?php

use common\models\Profile;
use common\models\User;
use yii\db\Migration;

/**
 * Class m201031_163659_create_admin
 */
class m201031_163659_create_admin extends Migration
{

    public function up()
    {
        $user =  User::create(
          'admin',
          'admin@example.com',
          '111'
        );
        $profile = Profile::create($user->id, 'admin',
                                                'admin');
    }

    public function down()
    {
        echo "m201031_163659_create_admin cannot be reverted.\n";

        return false;
    }
}
