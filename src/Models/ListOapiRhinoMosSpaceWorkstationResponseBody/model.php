<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoMosSpaceWorkstationResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model {
    protected $_name = [
        'categoryCode' => 'category_code',
        'categorySubCode' => 'category_sub_code',
        'poiCode' => 'poi_code',
        'prodWorkstationCode' => 'prod_workstation_code',
        'prodWorkstationName' => 'prod_workstation_name',
        'tenantId' => 'tenant_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->categoryCode) {
            $res['category_code'] = $this->categoryCode;
        }
        if (null !== $this->categorySubCode) {
            $res['category_sub_code'] = $this->categorySubCode;
        }
        if (null !== $this->poiCode) {
            $res['poi_code'] = $this->poiCode;
        }
        if (null !== $this->prodWorkstationCode) {
            $res['prod_workstation_code'] = $this->prodWorkstationCode;
        }
        if (null !== $this->prodWorkstationName) {
            $res['prod_workstation_name'] = $this->prodWorkstationName;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['category_code'])){
            $model->categoryCode = $map['category_code'];
        }
        if(isset($map['category_sub_code'])){
            $model->categorySubCode = $map['category_sub_code'];
        }
        if(isset($map['poi_code'])){
            $model->poiCode = $map['poi_code'];
        }
        if(isset($map['prod_workstation_code'])){
            $model->prodWorkstationCode = $map['prod_workstation_code'];
        }
        if(isset($map['prod_workstation_name'])){
            $model->prodWorkstationName = $map['prod_workstation_name'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        return $model;
    }
    /**
     * @description 类目code
     * @var string
     */
    public $categoryCode;

    /**
     * @description 类目子code
     * @var string
     */
    public $categorySubCode;

    /**
     * @description 兴趣点code
     * @var string
     */
    public $poiCode;

    /**
     * @description 站位code
     * @var string
     */
    public $prodWorkstationCode;

    /**
     * @description 站位name
     * @var string
     */
    public $prodWorkstationName;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

}
