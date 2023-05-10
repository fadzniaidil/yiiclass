<?php

namespace frontend\controllers;

use yii\web\Controller;
use common\models\MyPengguna;
use yii\data\ActiveDataProvider;

class PenggunaController extends Controller
{
	public function actionIndex()
	{
		$dataProvider = new ActiveDataProvider(
			['query' => MyPengguna::find()]
		);
		return $this->render('index', ['dataProvider' => $dataProvider]);
	}

	public function actionCreate()
	{
		$model = new MyPengguna();
		$model->created_at = time();
		if ($this->request->isPost) {
			if ($model->load($this->request->post() && $model->save())) {
				return $this->redirect(['index']);
			}
		} else {
			$model->loadDefaultValues();
		}
		return $this->render('create', ['model' => $model]);
	}
}
