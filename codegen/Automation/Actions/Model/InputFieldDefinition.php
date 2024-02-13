<?php
/**
 * InputFieldDefinition
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Automation\Actions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Automation Actions V4
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v4
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Automation\Actions\Model;

use \ArrayAccess;
use \HubSpot\Client\Automation\Actions\ObjectSerializer;

/**
 * InputFieldDefinition Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Automation\Actions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InputFieldDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InputFieldDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_required' => 'bool',
        'automation_field_type' => 'string',
        'type_definition' => '\HubSpot\Client\Automation\Actions\Model\FieldTypeDefinition',
        'supported_value_types' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_required' => null,
        'automation_field_type' => null,
        'type_definition' => null,
        'supported_value_types' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'is_required' => 'isRequired',
        'automation_field_type' => 'automationFieldType',
        'type_definition' => 'typeDefinition',
        'supported_value_types' => 'supportedValueTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_required' => 'setIsRequired',
        'automation_field_type' => 'setAutomationFieldType',
        'type_definition' => 'setTypeDefinition',
        'supported_value_types' => 'setSupportedValueTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_required' => 'getIsRequired',
        'automation_field_type' => 'getAutomationFieldType',
        'type_definition' => 'getTypeDefinition',
        'supported_value_types' => 'getSupportedValueTypes'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const SUPPORTED_VALUE_TYPES_STATIC_VALUE = 'STATIC_VALUE';
    public const SUPPORTED_VALUE_TYPES_OBJECT_PROPERTY = 'OBJECT_PROPERTY';
    public const SUPPORTED_VALUE_TYPES_FIELD_DATA = 'FIELD_DATA';
    public const SUPPORTED_VALUE_TYPES_FETCHED_OBJECT_PROPERTY = 'FETCHED_OBJECT_PROPERTY';
    public const SUPPORTED_VALUE_TYPES_ENROLLMENT_EVENT_PROPERTY = 'ENROLLMENT_EVENT_PROPERTY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSupportedValueTypesAllowableValues()
    {
        return [
            self::SUPPORTED_VALUE_TYPES_STATIC_VALUE,
            self::SUPPORTED_VALUE_TYPES_OBJECT_PROPERTY,
            self::SUPPORTED_VALUE_TYPES_FIELD_DATA,
            self::SUPPORTED_VALUE_TYPES_FETCHED_OBJECT_PROPERTY,
            self::SUPPORTED_VALUE_TYPES_ENROLLMENT_EVENT_PROPERTY,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['is_required'] = $data['is_required'] ?? null;
        $this->container['automation_field_type'] = $data['automation_field_type'] ?? null;
        $this->container['type_definition'] = $data['type_definition'] ?? null;
        $this->container['supported_value_types'] = $data['supported_value_types'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_required'] === null) {
            $invalidProperties[] = "'is_required' can't be null";
        }
        if ($this->container['type_definition'] === null) {
            $invalidProperties[] = "'type_definition' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets is_required
     *
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required
     *
     * @param bool $is_required is_required
     *
     * @return self
     */
    public function setIsRequired($is_required)
    {
        $this->container['is_required'] = $is_required;

        return $this;
    }

    /**
     * Gets automation_field_type
     *
     * @return string|null
     */
    public function getAutomationFieldType()
    {
        return $this->container['automation_field_type'];
    }

    /**
     * Sets automation_field_type
     *
     * @param string|null $automation_field_type automation_field_type
     *
     * @return self
     */
    public function setAutomationFieldType($automation_field_type)
    {
        $this->container['automation_field_type'] = $automation_field_type;

        return $this;
    }

    /**
     * Gets type_definition
     *
     * @return \HubSpot\Client\Automation\Actions\Model\FieldTypeDefinition
     */
    public function getTypeDefinition()
    {
        return $this->container['type_definition'];
    }

    /**
     * Sets type_definition
     *
     * @param \HubSpot\Client\Automation\Actions\Model\FieldTypeDefinition $type_definition type_definition
     *
     * @return self
     */
    public function setTypeDefinition($type_definition)
    {
        $this->container['type_definition'] = $type_definition;

        return $this;
    }

    /**
     * Gets supported_value_types
     *
     * @return string[]|null
     */
    public function getSupportedValueTypes()
    {
        return $this->container['supported_value_types'];
    }

    /**
     * Sets supported_value_types
     *
     * @param string[]|null $supported_value_types supported_value_types
     *
     * @return self
     */
    public function setSupportedValueTypes($supported_value_types)
    {
        $allowedValues = $this->getSupportedValueTypesAllowableValues();
        if (!is_null($supported_value_types) && array_diff($supported_value_types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'supported_value_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['supported_value_types'] = $supported_value_types;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


