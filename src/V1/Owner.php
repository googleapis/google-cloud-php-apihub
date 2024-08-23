<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/common_fields.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Owner details.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.Owner</code>
 */
class Owner extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The name of the owner.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $display_name = '';
    /**
     * Required. The email of the owner.
     *
     * Generated from protobuf field <code>string email = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $email = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           Optional. The name of the owner.
     *     @type string $email
     *           Required. The email of the owner.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\CommonFields::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The name of the owner.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. The name of the owner.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Required. The email of the owner.
     *
     * Generated from protobuf field <code>string email = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Required. The email of the owner.
     *
     * Generated from protobuf field <code>string email = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

}

