<?php

namespace admin\controllers;

use admin\models\Admin;
use admin\models\Major;
use common\base\controllers\BaseConfigController;
use common\base\models\BaseJob;
use common\helpers\ArrayHelper;
use common\libs\Cache;
use Yii;
use yii\console\Response;

class ConfigController extends BaseAdminController
{

    use BaseConfigController;

    /**
     *
     */
    public function actionSetTableStagingField()
    {
        $key   = Yii::$app->request->post('key');
        $value = Yii::$app->request->post('value');

        // TODO 这里做一下key和value的限制
        if (!$key || !$value) {
            return $this->fail();
        }
        $adminId = Yii::$app->user->id;
        $realKey = Cache::PC_ADMIN_TABLE_STAGING_FIELD_KEY . ':' . $key . ':' . $adminId;

        Cache::set($realKey, $value);

        return $this->success('');
    }

    /**
     *
     */
    public function actionGetTableStagingField()
    {
        $key = Yii::$app->request->get('key');
        if (!$key) {
            return $this->fail();
        }
        $adminId = Yii::$app->user->id;
        $realKey = Cache::PC_ADMIN_TABLE_STAGING_FIELD_KEY . ':' . $key . ':' . $adminId;

        return $this->success(['value' => Cache::get($realKey) ?: '']);
    }

    public function actionGetAllSale()
    {
        // 获取所有的业务员
        return $this->success(Admin::getAllSaleList());
    }

    public function actionMajorAiRecognition()
    {
        $text = Yii::$app->request->post('text');

        return $this->success(Major::aiRecognition($text));
    }

    /**
     * 获取投递方式与报名方式列表
     * @return Response|\yii\web\Response
     */
    public function actionGetDeliveryApply()
    {
        $result = [
            'delivery_way' => ArrayHelper::obj2Arr(BaseJob::DELIVERY_WAY_SELECT_NAME),
            'apply_type'   => BaseJob::getSignUpList(),
        ];

        return $this->success($result);
    }

    /**
     * 获取是否绑定微信类型
     * @return Response|\yii\web\Response
     */
    public function actionGetWxBind()
    {
        $result = [
            [
                'k' => '不限',
                'v' => '',
            ],
            [
                'k' => '是',
                'v' => 1,
            ],
            [
                'k' => '否',
                'v' => 2,
            ],
        ];

        return $this->success($result);
    }
}