<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\NewOapiAlitripBtripApprovalParams\rq;

use AlibabaCloud\Tea\Model;

class travelerList extends Model {
    protected $_name = [
        'userid' => 'userid',
        'userName' => 'user_name',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return travelerList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['user_name'])){
            $model->userName = $map['user_name'];
        }
        return $model;
    }
    /**
     * @description 出行人id
     * @var string
     */
    public $userid;

    /**
     * @description 出行人名称
     * @var string
     */
    public $userName;

}
