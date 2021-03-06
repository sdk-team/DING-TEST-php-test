<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DelemployeedismissionandhandoverCorpHrmEmployeeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'success' => 'success',
        'errorMsg' => 'error_msg',
        'dingOpenErrcode' => 'ding_open_errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->errorMsg) {
            $res['error_msg'] = $this->errorMsg;
        }
        if (null !== $this->dingOpenErrcode) {
            $res['ding_open_errcode'] = $this->dingOpenErrcode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['error_msg'])){
            $model->errorMsg = $map['error_msg'];
        }
        if(isset($map['ding_open_errcode'])){
            $model->dingOpenErrcode = $map['ding_open_errcode'];
        }
        return $model;
    }
    /**
     * @description 是否成功
     * @var bool
     */
    public $success;

    /**
     * @description 错误信息
     * @var string
     */
    public $errorMsg;

    /**
     * @description 错误码
     * @var int
     */
    public $dingOpenErrcode;

}
