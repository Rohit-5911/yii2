<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public static function tableName()
    {
        return 'user'; // Adjust the table name as necessary
    }

    public function rules()
    {
        return [
            [['name', 'email', 'role'], 'required'],
            ['email', 'email'],
            [['name', 'email', 'role'], 'string', 'max' => 255],
        ];
    }
}
