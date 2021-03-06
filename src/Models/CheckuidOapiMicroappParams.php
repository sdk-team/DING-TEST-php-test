<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CheckuidOapiMicroappParams extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('agentid', $this->agentid, true);
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CheckuidOapiMicroappParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 企业微应用id
     * @var int
     */
    public $agentid;

    /**
     * @description 员工id
     * @var string
     */
    public $userid;

}
