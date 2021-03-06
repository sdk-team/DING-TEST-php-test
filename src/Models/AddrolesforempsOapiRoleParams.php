<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AddrolesforempsOapiRoleParams extends Model {
    protected $_name = [
        'roleIds' => 'roleIds',
        'userIds' => 'userIds',
    ];
    public function validate() {
        Model::validateRequired('roleIds', $this->roleIds, true);
        Model::validateRequired('userIds', $this->userIds, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->roleIds) {
            $res['roleIds'] = $this->roleIds;
        }
        if (null !== $this->userIds) {
            $res['userIds'] = $this->userIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddrolesforempsOapiRoleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['roleIds'])){
            if(!empty($map['roleIds'])){
                $model->roleIds = $map['roleIds'];
            }
        }
        if(isset($map['userIds'])){
            if(!empty($map['userIds'])){
                $model->userIds = $map['userIds'];
            }
        }
        return $model;
    }
    /**
     * @description 角色id list
     * @var array
     */
    public $roleIds;

    /**
     * @description 员工id list
     * @var array
     */
    public $userIds;

}
