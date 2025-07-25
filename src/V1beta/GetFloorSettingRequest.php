<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/modelarmor/v1beta/service.proto

namespace Google\Cloud\ModelArmor\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for getting a Floor Setting
 *
 * Generated from protobuf message <code>google.cloud.modelarmor.v1beta.GetFloorSettingRequest</code>
 */
class GetFloorSettingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the floor setting to get, example
     * projects/123/floorsetting.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the floor setting to get, example
     *                     projects/123/floorsetting. Please see
     *                     {@see ModelArmorClient::floorSettingName()} for help formatting this field.
     *
     * @return \Google\Cloud\ModelArmor\V1beta\GetFloorSettingRequest
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
     *           Required. The name of the floor setting to get, example
     *           projects/123/floorsetting.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Modelarmor\V1Beta\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the floor setting to get, example
     * projects/123/floorsetting.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the floor setting to get, example
     * projects/123/floorsetting.
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

