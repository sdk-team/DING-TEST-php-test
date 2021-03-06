<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DescribeOapiCrmObjectmetaCustomerResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DescribeOapiCrmObjectmetaCustomerResponseBody\result\fields;

class result extends Model {
    protected $_name = [
        'name' => 'name',
        'customized' => 'customized',
        'fields' => 'fields',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->customized) {
            $res['customized'] = $this->customized;
        }
        if (null !== $this->fields) {
            $res['fields'] = [];
            if(null !== $this->fields && is_array($this->fields)){
                $n = 0;
                foreach($this->fields as $item){
                    $res['fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['customized'])){
            $model->customized = $map['customized'];
        }
        if(isset($map['fields'])){
            if(!empty($map['fields'])){
                $model->fields = [];
                $n = 0;
                foreach($map['fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? fields::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 对象名称
     * @var string
     */
    public $name;

    /**
     * @description 是否自定义对象
     * @var bool
     */
    public $customized;

    /**
     * @description 字段列表
     * @var array
     */
    public $fields;

}
