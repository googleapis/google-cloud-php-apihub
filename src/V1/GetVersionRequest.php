<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/apihub_service.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The [GetVersion][google.cloud.apihub.v1.ApiHub.GetVersion] method's request.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.GetVersionRequest</code>
 */
class GetVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the API version to retrieve.
     * Format:
     * `projects/{project}/locations/{location}/apis/{api}/versions/{version}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the API version to retrieve.
     *                     Format:
     *                     `projects/{project}/locations/{location}/apis/{api}/versions/{version}`
     *                     Please see {@see ApiHubClient::versionName()} for help formatting this field.
     *
     * @return \Google\Cloud\ApiHub\V1\GetVersionRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the API version to retrieve.
     *           Format:
     *           `projects/{project}/locations/{location}/apis/{api}/versions/{version}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\ApihubService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the API version to retrieve.
     * Format:
     * `projects/{project}/locations/{location}/apis/{api}/versions/{version}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the API version to retrieve.
     * Format:
     * `projects/{project}/locations/{location}/apis/{api}/versions/{version}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

