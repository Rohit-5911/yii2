<?php
    namespace app\controllers;

    use Yii;
    use app\models\Project;
    use yii\web\Controller;
    use yii\web\NotFoundHttpException;
    use yii\data\ActiveDataProvider;
    
    class ProjectController extends Controller
    {
        public function actionIndex()
        {
            $dataProvider = new ActiveDataProvider([
                'query' => Project::find(),
            ]);
    
            return $this->render('index', [
                'dataProvider' => $dataProvider,
            ]);
        }
    
        public function actionView($id)
        {
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }
    
        public function actionCreate()
        {
            $model = new Project();
    
            if ($model->load(Yii::$app->request->post())) {
                $model->created_at = time();
                $model->updated_at = time();
                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
    
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    
        public function actionUpdate($id)
        {
            $model = $this->findModel($id);
            if ($model->load(Yii::$app->request->post())) {
                $model->updated_at = time();
                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
    
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    
        public function actionDelete($id)
        {
            $this->findModel($id)->delete();
            return $this->redirect(['index']);
        }
    
        protected function findModel($id)
        {
            if (($model = Project::findOne($id)) !== null) {
                return $model;
            }
    
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
?>