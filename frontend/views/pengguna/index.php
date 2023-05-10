<?php

use yii\grid\GridView;
use yii\grid\ActionColumn;
use common\models\MyPengguna;
use yii\helpers\Html;
use yii\helpers\Uri;

?>
<p>
    <?= Html::a('Create My Pengguna', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?php

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'username',
        'email:email',
        'status',
        [
            'attribute' => 'created_at',
            'value' => function ($model) {
                return date('d/m/y H:i:s', $model->created_at);
            }
        ],
        [
            'attribute' => 'updated_at',
            'value' => function ($model) {
                return date('d/m/y H:i:s', $model->updated_at);
            }
        ],

        [
            'attribute' => 'supervisor',
            'value' => function ($model) {
                return ($model->supervisor == null ? null : $model->supervisor0->username . ' - ' . ($model->supervisor0->supervisor == null ? null : $model->supervisor0->supervisor0->username));
            }
        ],

    ]
]);
?>