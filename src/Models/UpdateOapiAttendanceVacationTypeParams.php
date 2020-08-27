<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiAttendanceVacationTypeParams extends Model {
    protected $_name = [
        'opUserid' => 'op_userid',
        'leaveName' => 'leave_name',
        'leaveViewUnit' => 'leave_view_unit',
        'bizType' => 'biz_type',
        'naturalDayLeave' => 'natural_day_leave',
        'leaveCode' => 'leave_code',
        'hoursInPerDay' => 'hours_in_per_day',
        'extras' => 'extras',
    ];
    public function validate() {
        Model::validateRequired('opUserid', $this->opUserid, true);
        Model::validateRequired('leaveCode', $this->leaveCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        if (null !== $this->leaveName) {
            $res['leave_name'] = $this->leaveName;
        }
        if (null !== $this->leaveViewUnit) {
            $res['leave_view_unit'] = $this->leaveViewUnit;
        }
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }
        if (null !== $this->naturalDayLeave) {
            $res['natural_day_leave'] = $this->naturalDayLeave;
        }
        if (null !== $this->leaveCode) {
            $res['leave_code'] = $this->leaveCode;
        }
        if (null !== $this->hoursInPerDay) {
            $res['hours_in_per_day'] = $this->hoursInPerDay;
        }
        if (null !== $this->extras) {
            $res['extras'] = $this->extras;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiAttendanceVacationTypeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        if(isset($map['leave_name'])){
            $model->leaveName = $map['leave_name'];
        }
        if(isset($map['leave_view_unit'])){
            $model->leaveViewUnit = $map['leave_view_unit'];
        }
        if(isset($map['biz_type'])){
            $model->bizType = $map['biz_type'];
        }
        if(isset($map['natural_day_leave'])){
            $model->naturalDayLeave = $map['natural_day_leave'];
        }
        if(isset($map['leave_code'])){
            $model->leaveCode = $map['leave_code'];
        }
        if(isset($map['hours_in_per_day'])){
            $model->hoursInPerDay = $map['hours_in_per_day'];
        }
        if(isset($map['extras'])){
            $model->extras = $map['extras'];
        }
        return $model;
    }
    /**
     * @description 操作者ID
     * @var string
     */
    public $opUserid;

    /**
     * @description 假期名称
     * @var string
     */
    public $leaveName;

    /**
     * @description 请假单位，可以按照天半天或者小时请假。(day、halfday、hour其中一种)
     * @var string
     */
    public $leaveViewUnit;

    /**
     * @description 假期类型，普通假期或者加班转调休假期。(general_leave、lieu_leave其中一种)
     * @var string
     */
    public $bizType;

    /**
     * @description 是否按照自然日统计请假时长，当为false的时候，用户发起请假时候会根据用户在请假时间段内的排班情况来计算请假时长。
     * @var bool
     */
    public $naturalDayLeave;

    /**
     * @description 假期类型唯一标识
     * @var string
     */
    public $leaveCode;

    /**
     * @description 每天折算的工作时长(百分之一 例如1天=10小时=1000)
     * @var int
     */
    public $hoursInPerDay;

    /**
     * @description 调休假有效期规则(validity_type:有效类型 absolute_time(绝对时间)、relative_time(相对时间)其中一种 validity_value:延长日期(当validity_type为absolute_time该值该值不为空且满足yy-mm格式 validity_type为relative_time该值为大于1的整数))
     * @var string
     */
    public $extras;

}
