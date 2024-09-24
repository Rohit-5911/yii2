<?php
    namespace app\models;

    use Yii;
    use yii\base\Model;


    use app\models\User; // Ensure this is at the top of your SignupForm model
    
    class SignupForm extends Model
    {
        public $name;
        public $email;
        public $password;
        public $role;
    
        public function rules()
        {
            return [
                [['name', 'email', 'password', 'role'], 'required'],
                ['email', 'email'],
                ['email', 'unique', 'targetClass' => User::class, 'message' => 'This email address has already been taken.'],
                ['role', 'in', 'range' => ['admin', 'user', 'manager']],
                ['password', 'string', 'min' => 6],
            ];
        }
    
        public function signup()
        {
            if ($this->validate()) {
                $user = new User();
                $user->name = $this->name;
                $user->email = $this->email;
                $user->password = Yii::$app->security->generatePasswordHash($this->password);
                $user->role = $this->role;
                $user->created_at = time();
                $user->updated_at = time();
    
                return $user->save() ? $user : null;
            }
    
            return null;
        }
    }
    
?>