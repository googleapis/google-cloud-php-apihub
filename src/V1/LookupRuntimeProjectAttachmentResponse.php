<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/runtime_project_attachment_service.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The
 * [ListRuntimeProjectAttachments][google.cloud.apihub.v1.RuntimeProjectAttachmentService.ListRuntimeProjectAttachments]
 * method's response.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.LookupRuntimeProjectAttachmentResponse</code>
 */
class LookupRuntimeProjectAttachmentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Runtime project attachment for a project if exists, empty otherwise.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.RuntimeProjectAttachment runtime_project_attachment = 1;</code>
     */
    protected $runtime_project_attachment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ApiHub\V1\RuntimeProjectAttachment $runtime_project_attachment
     *           Runtime project attachment for a project if exists, empty otherwise.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\RuntimeProjectAttachmentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Runtime project attachment for a project if exists, empty otherwise.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.RuntimeProjectAttachment runtime_project_attachment = 1;</code>
     * @return \Google\Cloud\ApiHub\V1\RuntimeProjectAttachment|null
     */
    public function getRuntimeProjectAttachment()
    {
        return $this->runtime_project_attachment;
    }

    public function hasRuntimeProjectAttachment()
    {
        return isset($this->runtime_project_attachment);
    }

    public function clearRuntimeProjectAttachment()
    {
        unset($this->runtime_project_attachment);
    }

    /**
     * Runtime project attachment for a project if exists, empty otherwise.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.RuntimeProjectAttachment runtime_project_attachment = 1;</code>
     * @param \Google\Cloud\ApiHub\V1\RuntimeProjectAttachment $var
     * @return $this
     */
    public function setRuntimeProjectAttachment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiHub\V1\RuntimeProjectAttachment::class);
        $this->runtime_project_attachment = $var;

        return $this;
    }

}

