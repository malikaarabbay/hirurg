<?php

namespace frontend\controllers;

use common\models\Article;
use common\models\Category;
use common\models\Comment;
use common\models\Doctor;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class DoctorController extends \yii\web\Controller
{
//    public function actionIndex()
//    {
//        $query = Article::find()->where(['is_published' => '1'])->orderBy('created DESC');
//
//        $dataProvider = new ActiveDataProvider([
//            'query' => $query,
//            'pagination' => [
//                'pageSize' => 6,
//            ],
//        ]);
//
//        return $this->render('index', [
//            'dataProvider' => $dataProvider,
//        ]);
//    }

//    public function actionIndex($slug = '')
//    {
//        $query = Article::find()->where(['is_published' => '1'])->orderBy('created DESC');
//
//        if($slug){
//            $category = $this->findCategory($slug);
//            $query->andWhere(['category_id' => $category->id]);
//        }
//
//        $dataProvider = new ActiveDataProvider([
//            'query' => $query,
//            'pagination' => [
//                'pageSize' => 6,
//            ],
//        ]);
//
//        $categories = Category::find()->where(['model_name' => 'article'])->all();
//
//        return $this->render('index', [
//            'dataProvider' => $dataProvider,
//            'categories' => $categories,
//        ]);
//    }


    public function actionView($slug){

        $model = $this->findDoctor($slug);
        $doctors = Doctor::find()->where(['is_published' => 1])->all();
        return $this->render('view', [
            'model' => $model,
            'doctors' => $doctors,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Doctor::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findDoctor($slug)
    {
        if (($model = Doctor::find()->where(['slug' => $slug])->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
