<?php

namespace app\models;

use Yii;
use yii\base\Model;

class LoginForm extends Model
{
    public $email;
    public $password;

    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            ['email', 'email'],
        ];
    }

    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login(User::findByEmail($this->email), 3600 * 24 * 30); // 30 days
        }

        return false;
    }
}

?>
