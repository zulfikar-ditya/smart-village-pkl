<?php

namespace common\components;


use Yii;
use yii\base\Component;
use yii\base\Exception;

class BackendMiddleware extends Component
{
    // Define A Event
    const CheckAdminOrNot = 'checkAdmin';
    const CheckOperatorOrNot = 'checkOperator';

    public static function AutoCheckAdmin()
    {
        if (Yii::$app->user->identity->roles_id != 1) {
            throw new \yii\web\ForbiddenHttpException('Only Admin Can Access This Page');
        } else {
            return true;
        }
    }

    public static function AutoCheckOperator()
    {
        if (Yii::$app->user->identity->roles_id == 1 || Yii::$app->user->identity->roles_id == 7) {
            return true;
        } else {
            throw new \yii\web\ForbiddenHttpException('Only Admin Or Operator Can Access This Page');
        }
    }
}

?>