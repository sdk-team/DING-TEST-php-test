<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListscheduleSmartworkAttendsResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListscheduleSmartworkAttendsResponseBody\result\result;

class result extends Model {
    protected $_name = [
        'dingOpenErrcode' => 'ding_open_errcode',
        'errorMsg' => 'error_msg',
        'success' => 'success',
        'result' => 'result',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->dingOpenErrcode) {
            $res['ding_open_errcode'] = $this->dingOpenErrcode;
        }
        if (null !== $this->errorMsg) {
            $res['error_msg'] = $this->errorMsg;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ding_open_errcode'])){
            $model->dingOpenErrcode = $map['ding_open_errcode'];
        }
        if(isset($map['error_msg'])){
            $model->errorMsg = $map['error_msg'];
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['result'])){
            $model->result = result::fromMap($map['result']);
        }
        return $model;
    }
    /**
     * @description dingOpenErrcode
     * @var int
     */
    public $dingOpenErrcode;

    /**
     * @description errorMsg
     * @var string
     */
    public $errorMsg;

    /**
     * @description success
     * @var bool
     */
    public $success;

    /**
     * @description result
     * @var result
     */
    public $result;

}
