<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiMessageMassParams\msgBody;

use AlibabaCloud\Tea\Model;

class file extends Model {
    protected $_name = [
        'mediaId' => 'media_id',
    ];
    public function validate() {
        Model::validateMaxLength('mediaId', $this->mediaId, 512);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->mediaId) {
            $res['media_id'] = $this->mediaId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return file
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['media_id'])){
            $model->mediaId = $map['media_id'];
        }
        return $model;
    }
    /**
     * @description 媒体文件id。引用的媒体文件最大10MB
     * @var string
     */
    public $mediaId;

}
