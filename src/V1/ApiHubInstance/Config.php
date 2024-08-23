<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/common_fields.proto

namespace Google\Cloud\ApiHub\V1\ApiHubInstance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Available configurations to provision an ApiHub Instance.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.ApiHubInstance.Config</code>
 */
class Config extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Customer Managed Encryption Key (CMEK) used for data
     * encryption. The CMEK name should follow the format of
     * `projects/([^/]+)/locations/([^/]+)/keyRings/([^/]+)/cryptoKeys/([^/]+)`,
     * where the location must match the instance location.
     *
     * Generated from protobuf field <code>string cmek_key_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $cmek_key_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cmek_key_name
     *           Required. The Customer Managed Encryption Key (CMEK) used for data
     *           encryption. The CMEK name should follow the format of
     *           `projects/([^/]+)/locations/([^/]+)/keyRings/([^/]+)/cryptoKeys/([^/]+)`,
     *           where the location must match the instance location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\CommonFields::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Customer Managed Encryption Key (CMEK) used for data
     * encryption. The CMEK name should follow the format of
     * `projects/([^/]+)/locations/([^/]+)/keyRings/([^/]+)/cryptoKeys/([^/]+)`,
     * where the location must match the instance location.
     *
     * Generated from protobuf field <code>string cmek_key_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCmekKeyName()
    {
        return $this->cmek_key_name;
    }

    /**
     * Required. The Customer Managed Encryption Key (CMEK) used for data
     * encryption. The CMEK name should follow the format of
     * `projects/([^/]+)/locations/([^/]+)/keyRings/([^/]+)/cryptoKeys/([^/]+)`,
     * where the location must match the instance location.
     *
     * Generated from protobuf field <code>string cmek_key_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCmekKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cmek_key_name = $var;

        return $this;
    }

}

