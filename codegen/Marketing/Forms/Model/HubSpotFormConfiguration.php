<?php
/**
 * HubSpotFormConfiguration
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Marketing\Forms
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Forms
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Marketing\Forms\Model;

use \ArrayAccess;
use \HubSpot\Client\Marketing\Forms\ObjectSerializer;

/**
 * HubSpotFormConfiguration Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Marketing\Forms
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HubSpotFormConfiguration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HubSpotFormConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'create_new_contact_for_new_email' => 'bool',
        'editable' => 'bool',
        'allow_link_to_reset_known_values' => 'bool',
        'lifecycle_stages' => '\HubSpot\Client\Marketing\Forms\Model\LifecycleStage[]',
        'post_submit_action' => '\HubSpot\Client\Marketing\Forms\Model\FormPostSubmitAction',
        'language' => 'string',
        'pre_populate_known_values' => 'bool',
        'cloneable' => 'bool',
        'notify_contact_owner' => 'bool',
        'recaptcha_enabled' => 'bool',
        'archivable' => 'bool',
        'notify_recipients' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'create_new_contact_for_new_email' => null,
        'editable' => null,
        'allow_link_to_reset_known_values' => null,
        'lifecycle_stages' => null,
        'post_submit_action' => null,
        'language' => null,
        'pre_populate_known_values' => null,
        'cloneable' => null,
        'notify_contact_owner' => null,
        'recaptcha_enabled' => null,
        'archivable' => null,
        'notify_recipients' => null
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
        'create_new_contact_for_new_email' => 'createNewContactForNewEmail',
        'editable' => 'editable',
        'allow_link_to_reset_known_values' => 'allowLinkToResetKnownValues',
        'lifecycle_stages' => 'lifecycleStages',
        'post_submit_action' => 'postSubmitAction',
        'language' => 'language',
        'pre_populate_known_values' => 'prePopulateKnownValues',
        'cloneable' => 'cloneable',
        'notify_contact_owner' => 'notifyContactOwner',
        'recaptcha_enabled' => 'recaptchaEnabled',
        'archivable' => 'archivable',
        'notify_recipients' => 'notifyRecipients'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create_new_contact_for_new_email' => 'setCreateNewContactForNewEmail',
        'editable' => 'setEditable',
        'allow_link_to_reset_known_values' => 'setAllowLinkToResetKnownValues',
        'lifecycle_stages' => 'setLifecycleStages',
        'post_submit_action' => 'setPostSubmitAction',
        'language' => 'setLanguage',
        'pre_populate_known_values' => 'setPrePopulateKnownValues',
        'cloneable' => 'setCloneable',
        'notify_contact_owner' => 'setNotifyContactOwner',
        'recaptcha_enabled' => 'setRecaptchaEnabled',
        'archivable' => 'setArchivable',
        'notify_recipients' => 'setNotifyRecipients'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create_new_contact_for_new_email' => 'getCreateNewContactForNewEmail',
        'editable' => 'getEditable',
        'allow_link_to_reset_known_values' => 'getAllowLinkToResetKnownValues',
        'lifecycle_stages' => 'getLifecycleStages',
        'post_submit_action' => 'getPostSubmitAction',
        'language' => 'getLanguage',
        'pre_populate_known_values' => 'getPrePopulateKnownValues',
        'cloneable' => 'getCloneable',
        'notify_contact_owner' => 'getNotifyContactOwner',
        'recaptcha_enabled' => 'getRecaptchaEnabled',
        'archivable' => 'getArchivable',
        'notify_recipients' => 'getNotifyRecipients'
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

    public const LANGUAGE_AF = 'af';
    public const LANGUAGE_AR_EG = 'ar-eg';
    public const LANGUAGE_BG = 'bg';
    public const LANGUAGE_BN = 'bn';
    public const LANGUAGE_CA_ES = 'ca-es';
    public const LANGUAGE_CS = 'cs';
    public const LANGUAGE_DA = 'da';
    public const LANGUAGE_DE = 'de';
    public const LANGUAGE_EL = 'el';
    public const LANGUAGE_EN = 'en';
    public const LANGUAGE_ES = 'es';
    public const LANGUAGE_ES_MX = 'es-mx';
    public const LANGUAGE_FI = 'fi';
    public const LANGUAGE_FR = 'fr';
    public const LANGUAGE_FR_CA = 'fr-ca';
    public const LANGUAGE_HE_IL = 'he-il';
    public const LANGUAGE_HR = 'hr';
    public const LANGUAGE_HU = 'hu';
    public const LANGUAGE_ID = 'id';
    public const LANGUAGE_IT = 'it';
    public const LANGUAGE_JA = 'ja';
    public const LANGUAGE_KO = 'ko';
    public const LANGUAGE_LT = 'lt';
    public const LANGUAGE_MS = 'ms';
    public const LANGUAGE_NL = 'nl';
    public const LANGUAGE_NO_NO = 'no-no';
    public const LANGUAGE_PL = 'pl';
    public const LANGUAGE_PT = 'pt';
    public const LANGUAGE_PT_BR = 'pt-br';
    public const LANGUAGE_RO = 'ro';
    public const LANGUAGE_RU = 'ru';
    public const LANGUAGE_SK = 'sk';
    public const LANGUAGE_SL = 'sl';
    public const LANGUAGE_SV = 'sv';
    public const LANGUAGE_TH = 'th';
    public const LANGUAGE_TL = 'tl';
    public const LANGUAGE_TR = 'tr';
    public const LANGUAGE_UK = 'uk';
    public const LANGUAGE_VI = 'vi';
    public const LANGUAGE_ZH_CN = 'zh-cn';
    public const LANGUAGE_ZH_HK = 'zh-hk';
    public const LANGUAGE_ZH_TW = 'zh-tw';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_AF,
            self::LANGUAGE_AR_EG,
            self::LANGUAGE_BG,
            self::LANGUAGE_BN,
            self::LANGUAGE_CA_ES,
            self::LANGUAGE_CS,
            self::LANGUAGE_DA,
            self::LANGUAGE_DE,
            self::LANGUAGE_EL,
            self::LANGUAGE_EN,
            self::LANGUAGE_ES,
            self::LANGUAGE_ES_MX,
            self::LANGUAGE_FI,
            self::LANGUAGE_FR,
            self::LANGUAGE_FR_CA,
            self::LANGUAGE_HE_IL,
            self::LANGUAGE_HR,
            self::LANGUAGE_HU,
            self::LANGUAGE_ID,
            self::LANGUAGE_IT,
            self::LANGUAGE_JA,
            self::LANGUAGE_KO,
            self::LANGUAGE_LT,
            self::LANGUAGE_MS,
            self::LANGUAGE_NL,
            self::LANGUAGE_NO_NO,
            self::LANGUAGE_PL,
            self::LANGUAGE_PT,
            self::LANGUAGE_PT_BR,
            self::LANGUAGE_RO,
            self::LANGUAGE_RU,
            self::LANGUAGE_SK,
            self::LANGUAGE_SL,
            self::LANGUAGE_SV,
            self::LANGUAGE_TH,
            self::LANGUAGE_TL,
            self::LANGUAGE_TR,
            self::LANGUAGE_UK,
            self::LANGUAGE_VI,
            self::LANGUAGE_ZH_CN,
            self::LANGUAGE_ZH_HK,
            self::LANGUAGE_ZH_TW,
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
        $this->container['create_new_contact_for_new_email'] = $data['create_new_contact_for_new_email'] ?? null;
        $this->container['editable'] = $data['editable'] ?? null;
        $this->container['allow_link_to_reset_known_values'] = $data['allow_link_to_reset_known_values'] ?? null;
        $this->container['lifecycle_stages'] = $data['lifecycle_stages'] ?? null;
        $this->container['post_submit_action'] = $data['post_submit_action'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['pre_populate_known_values'] = $data['pre_populate_known_values'] ?? null;
        $this->container['cloneable'] = $data['cloneable'] ?? null;
        $this->container['notify_contact_owner'] = $data['notify_contact_owner'] ?? null;
        $this->container['recaptcha_enabled'] = $data['recaptcha_enabled'] ?? null;
        $this->container['archivable'] = $data['archivable'] ?? null;
        $this->container['notify_recipients'] = $data['notify_recipients'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['create_new_contact_for_new_email'] === null) {
            $invalidProperties[] = "'create_new_contact_for_new_email' can't be null";
        }
        if ($this->container['editable'] === null) {
            $invalidProperties[] = "'editable' can't be null";
        }
        if ($this->container['allow_link_to_reset_known_values'] === null) {
            $invalidProperties[] = "'allow_link_to_reset_known_values' can't be null";
        }
        if ($this->container['post_submit_action'] === null) {
            $invalidProperties[] = "'post_submit_action' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'language', must be one of '%s'",
                $this->container['language'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['pre_populate_known_values'] === null) {
            $invalidProperties[] = "'pre_populate_known_values' can't be null";
        }
        if ($this->container['cloneable'] === null) {
            $invalidProperties[] = "'cloneable' can't be null";
        }
        if ($this->container['notify_contact_owner'] === null) {
            $invalidProperties[] = "'notify_contact_owner' can't be null";
        }
        if ($this->container['recaptcha_enabled'] === null) {
            $invalidProperties[] = "'recaptcha_enabled' can't be null";
        }
        if ($this->container['archivable'] === null) {
            $invalidProperties[] = "'archivable' can't be null";
        }
        if ($this->container['notify_recipients'] === null) {
            $invalidProperties[] = "'notify_recipients' can't be null";
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
     * Gets create_new_contact_for_new_email
     *
     * @return bool
     */
    public function getCreateNewContactForNewEmail()
    {
        return $this->container['create_new_contact_for_new_email'];
    }

    /**
     * Sets create_new_contact_for_new_email
     *
     * @param bool $create_new_contact_for_new_email Whether to create a new contact when a form is submitted with an email address that doesn’t match any in your existing contacts records.
     *
     * @return self
     */
    public function setCreateNewContactForNewEmail($create_new_contact_for_new_email)
    {
        $this->container['create_new_contact_for_new_email'] = $create_new_contact_for_new_email;

        return $this;
    }

    /**
     * Gets editable
     *
     * @return bool
     */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
     * Sets editable
     *
     * @param bool $editable Whether the form can be edited.
     *
     * @return self
     */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;

        return $this;
    }

    /**
     * Gets allow_link_to_reset_known_values
     *
     * @return bool
     */
    public function getAllowLinkToResetKnownValues()
    {
        return $this->container['allow_link_to_reset_known_values'];
    }

    /**
     * Sets allow_link_to_reset_known_values
     *
     * @param bool $allow_link_to_reset_known_values Whether to add a reset link to the form. This removes any pre-populated content on the form and creates a new contact on submission.
     *
     * @return self
     */
    public function setAllowLinkToResetKnownValues($allow_link_to_reset_known_values)
    {
        $this->container['allow_link_to_reset_known_values'] = $allow_link_to_reset_known_values;

        return $this;
    }

    /**
     * Gets lifecycle_stages
     *
     * @return \HubSpot\Client\Marketing\Forms\Model\LifecycleStage[]|null
     */
    public function getLifecycleStages()
    {
        return $this->container['lifecycle_stages'];
    }

    /**
     * Sets lifecycle_stages
     *
     * @param \HubSpot\Client\Marketing\Forms\Model\LifecycleStage[]|null $lifecycle_stages lifecycle_stages
     *
     * @return self
     */
    public function setLifecycleStages($lifecycle_stages)
    {
        $this->container['lifecycle_stages'] = $lifecycle_stages;

        return $this;
    }

    /**
     * Gets post_submit_action
     *
     * @return \HubSpot\Client\Marketing\Forms\Model\FormPostSubmitAction
     */
    public function getPostSubmitAction()
    {
        return $this->container['post_submit_action'];
    }

    /**
     * Sets post_submit_action
     *
     * @param \HubSpot\Client\Marketing\Forms\Model\FormPostSubmitAction $post_submit_action post_submit_action
     *
     * @return self
     */
    public function setPostSubmitAction($post_submit_action)
    {
        $this->container['post_submit_action'] = $post_submit_action;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language The language of the form.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $allowedValues = $this->getLanguageAllowableValues();
        if (!in_array($language, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'language', must be one of '%s'",
                    $language,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets pre_populate_known_values
     *
     * @return bool
     */
    public function getPrePopulateKnownValues()
    {
        return $this->container['pre_populate_known_values'];
    }

    /**
     * Sets pre_populate_known_values
     *
     * @param bool $pre_populate_known_values Whether contact fields should pre-populate with known information when a contact returns to your site.
     *
     * @return self
     */
    public function setPrePopulateKnownValues($pre_populate_known_values)
    {
        $this->container['pre_populate_known_values'] = $pre_populate_known_values;

        return $this;
    }

    /**
     * Gets cloneable
     *
     * @return bool
     */
    public function getCloneable()
    {
        return $this->container['cloneable'];
    }

    /**
     * Sets cloneable
     *
     * @param bool $cloneable Whether the form can be cloned.
     *
     * @return self
     */
    public function setCloneable($cloneable)
    {
        $this->container['cloneable'] = $cloneable;

        return $this;
    }

    /**
     * Gets notify_contact_owner
     *
     * @return bool
     */
    public function getNotifyContactOwner()
    {
        return $this->container['notify_contact_owner'];
    }

    /**
     * Sets notify_contact_owner
     *
     * @param bool $notify_contact_owner Whether to send a notification email to the contact owner when a submission is received.
     *
     * @return self
     */
    public function setNotifyContactOwner($notify_contact_owner)
    {
        $this->container['notify_contact_owner'] = $notify_contact_owner;

        return $this;
    }

    /**
     * Gets recaptcha_enabled
     *
     * @return bool
     */
    public function getRecaptchaEnabled()
    {
        return $this->container['recaptcha_enabled'];
    }

    /**
     * Sets recaptcha_enabled
     *
     * @param bool $recaptcha_enabled Whether CAPTCHA (spam prevention) is enabled.
     *
     * @return self
     */
    public function setRecaptchaEnabled($recaptcha_enabled)
    {
        $this->container['recaptcha_enabled'] = $recaptcha_enabled;

        return $this;
    }

    /**
     * Gets archivable
     *
     * @return bool
     */
    public function getArchivable()
    {
        return $this->container['archivable'];
    }

    /**
     * Sets archivable
     *
     * @param bool $archivable Whether the form can be archived.
     *
     * @return self
     */
    public function setArchivable($archivable)
    {
        $this->container['archivable'] = $archivable;

        return $this;
    }

    /**
     * Gets notify_recipients
     *
     * @return string[]
     */
    public function getNotifyRecipients()
    {
        return $this->container['notify_recipients'];
    }

    /**
     * Sets notify_recipients
     *
     * @param string[] $notify_recipients The list of user IDs to receive a notification email when a submission is received.
     *
     * @return self
     */
    public function setNotifyRecipients($notify_recipients)
    {
        $this->container['notify_recipients'] = $notify_recipients;

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


