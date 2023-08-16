<?php

namespace admin\controllers;

use admin\models\DownloadTask;
use common\libs\Aliyun\Oss;
use Yii;

class DownloadTaskController
{
    public function actionLoadList()
    {
        $adminId = Yii::$app->user->id;
        $params  = Yii::$app->request->get();

        $data = DownloadTask::getList($adminId, $params);

        return $this->success($data);
    }

    public function actionGetUrl()
    {
        $id    = Yii::$app->request->get('id');
        $model = DownloadTask::findOne($id);
        if ($model->admin_id != Yii::$app->user->id) {
            return $this->fail('非法操作');
        }

        if ($model->status != DownloadTask::STATUS_FINISH) {
            return $this->fail('文件未下载完成');
        }

        $path = $model->path;

        $oss = new Oss();
        $url = $oss->getDownloadTaskUrl($path);

        return $this->success(['url' => $url]);
    }
}