<?php
    namespace app\models;

    use yii\db\ActiveRecord;
    
    class Project extends ActiveRecord
    {
        public static function tableName()
        {
            return 'project'; // Name of your project table
        }
    
        public function rules()
        {
            return [
                [['title', 'description'], 'required'],
                ['title', 'string', 'max' => 255],
                ['description', 'string'],
            ];
        }
    }
    
?>