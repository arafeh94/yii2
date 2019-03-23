<?php
/**
 * Created by PhpStorm.
 * User: Arafeh
 * Date: 5/19/2018
 * Time: 4:10 PM
 */

namespace app\components\rbac;


use app\models\User;
use Yii;
use yii\bootstrap\ActiveForm;
use yii\rbac\PhpManager;
use yii\rbac\Role;

class RbacManager extends PhpManager
{
    public function init()
    {
        parent::init();
        if (!Yii::$app->user->isGuest and Yii::$app->user instanceof RbacInterface) {
            $roleName = User::get()->getType();
            if (!array_key_exists(User::get()->getId(), $this->assignments)) {
                /** @noinspection PhpUnhandledExceptionInspection */
                $this->assign(new Role(['name' => $roleName]), User::get()->getId());
            }
        }
    }
}