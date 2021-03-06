<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiCrmObjectdataParams extends Model {
    protected $_name = [
        'currentOperatorUserid' => 'current_operator_userid',
        'dataIdList' => 'data_id_list',
        'name' => 'name',
    ];
    public function validate() {
        Model::validateRequired('dataIdList', $this->dataIdList, true);
        Model::validateRequired('name', $this->name, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->currentOperatorUserid) {
            $res['current_operator_userid'] = $this->currentOperatorUserid;
        }
        if (null !== $this->dataIdList) {
            $res['data_id_list'] = $this->dataIdList;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiCrmObjectdataParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['current_operator_userid'])){
            $model->currentOperatorUserid = $map['current_operator_userid'];
        }
        if(isset($map['data_id_list'])){
            if(!empty($map['data_id_list'])){
                $model->dataIdList = $map['data_id_list'];
            }
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 操作人用户ID
     * @var string
     */
    public $currentOperatorUserid;

    /**
     * @description 数据ID列表
     * @var array
     */
    public $dataIdList;

    /**
     * @description 表单名称
     * @var string
     */
    public $name;

}
