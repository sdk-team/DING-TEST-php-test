<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripHotelOrderParams\rq;

class SearchOapiAlitripBtripHotelOrderParams extends Model {
    protected $_name = [
        'rq' => 'rq',
    ];
    public function validate() {
        Model::validateRequired('rq', $this->rq, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->rq) {
            $res['rq'] = null !== $this->rq ? $this->rq->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SearchOapiAlitripBtripHotelOrderParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['rq'])){
            $model->rq = rq::fromMap($map['rq']);
        }
        return $model;
    }
    /**
     * @description rq
     * @var rq
     */
    public $rq;

}
