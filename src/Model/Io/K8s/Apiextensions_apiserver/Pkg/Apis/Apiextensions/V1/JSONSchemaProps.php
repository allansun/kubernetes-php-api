<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1;

/**
 * JSONSchemaProps is a JSON-Schema following Specification Draft 4
 * (http://json-schema.org/).
 */
class JSONSchemaProps extends \KubernetesRuntime\AbstractModel
{

    /**
     * @var string
     */
    public $_ref = null;

    /**
     * @var string
     */
    public $_schema = null;

    /**
     * @var JSONSchemaPropsOrBool
     */
    public $additionalItems = null;

    /**
     * @var JSONSchemaPropsOrBool
     */
    public $additionalProperties = null;

    /**
     * @var JSONSchemaProps[]
     */
    public $allOf = null;

    /**
     * @var JSONSchemaProps[]
     */
    public $anyOf = null;

    /**
     * default is a default value for undefined object fields. Defaulting is a beta
     * feature under the CustomResourceDefaulting feature gate. Defaulting requires
     * spec.preserveUnknownFields to be false.
     *
     * @var JSON
     */
    public $default = null;

    /**
     * @var object
     */
    public $definitions = null;

    /**
     * @var object
     */
    public $dependencies = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var JSON[]
     */
    public $enum = null;

    /**
     * @var JSON
     */
    public $example = null;

    /**
     * @var boolean
     */
    public $exclusiveMaximum = null;

    /**
     * @var boolean
     */
    public $exclusiveMinimum = null;

    /**
     * @var ExternalDocumentation
     */
    public $externalDocs = null;

    /**
     * format is an OpenAPI v3 format string. Unknown formats are ignored. The
     * following formats are validated:
     *
     * - bsonobjectid: a bson object ID, i.e. a 24 characters hex string - uri: an URI
     * as parsed by Golang net/url.ParseRequestURI - email: an email address as parsed
     * by Golang net/mail.ParseAddress - hostname: a valid representation for an
     * Internet host name, as defined by RFC 1034, section 3.1 [RFC1034]. - ipv4: an
     * IPv4 IP as parsed by Golang net.ParseIP - ipv6: an IPv6 IP as parsed by Golang
     * net.ParseIP - cidr: a CIDR as parsed by Golang net.ParseCIDR - mac: a MAC
     * address as parsed by Golang net.ParseMAC - uuid: an UUID that allows uppercase
     * defined by the regex
     * (?i)^[0-9a-f]{8}-?[0-9a-f]{4}-?[0-9a-f]{4}-?[0-9a-f]{4}-?[0-9a-f]{12}$ - uuid3:
     * an UUID3 that allows uppercase defined by the regex
     * (?i)^[0-9a-f]{8}-?[0-9a-f]{4}-?3[0-9a-f]{3}-?[0-9a-f]{4}-?[0-9a-f]{12}$ - uuid4:
     * an UUID4 that allows uppercase defined by the regex
     * (?i)^[0-9a-f]{8}-?[0-9a-f]{4}-?4[0-9a-f]{3}-?[89ab][0-9a-f]{3}-?[0-9a-f]{12}$ -
     * uuid5: an UUID5 that allows uppercase defined by the regex
     * (?i)^[0-9a-f]{8}-?[0-9a-f]{4}-?5[0-9a-f]{3}-?[89ab][0-9a-f]{3}-?[0-9a-f]{12}$ -
     * isbn: an ISBN10 or ISBN13 number string like "0321751043" or "978-0321751041" -
     * isbn10: an ISBN10 number string like "0321751043" - isbn13: an ISBN13 number
     * string like "978-0321751041" - creditcard: a credit card number defined by the
     * regex
     * ^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$
     * with any non digit characters mixed in - ssn: a U.S. social security number
     * following the regex ^\d{3}[- ]?\d{2}[- ]?\d{4}$ - hexcolor: an hexadecimal color
     * code like "#FFFFFF: following the regex ^#?([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$ -
     * rgbcolor: an RGB color code like rgb like "rgb(255,255,2559" - byte: base64
     * encoded binary data - password: any kind of string - date: a date string like
     * "2006-01-02" as defined by full-date in RFC3339 - duration: a duration string
     * like "22 ns" as parsed by Golang time.ParseDuration or compatible with Scala
     * duration format - datetime: a date time string like "2014-12-15T19:30:20.000Z"
     * as defined by date-time in RFC3339.
     *
     * @var string
     */
    public $format = null;

    /**
     * @var string
     */
    public $id = null;

    /**
     * @var JSONSchemaPropsOrArray
     */
    public $items = null;

    /**
     * @var integer
     */
    public $maxItems = null;

    /**
     * @var integer
     */
    public $maxLength = null;

    /**
     * @var integer
     */
    public $maxProperties = null;

    /**
     * @var float
     */
    public $maximum = null;

    /**
     * @var integer
     */
    public $minItems = null;

    /**
     * @var integer
     */
    public $minLength = null;

    /**
     * @var integer
     */
    public $minProperties = null;

    /**
     * @var float
     */
    public $minimum = null;

    /**
     * @var float
     */
    public $multipleOf = null;

    /**
     * @var JSONSchemaProps
     */
    public $not = null;

    /**
     * @var boolean
     */
    public $nullable = null;

    /**
     * @var JSONSchemaProps[]
     */
    public $oneOf = null;

    /**
     * @var string
     */
    public $pattern = null;

    /**
     * @var object
     */
    public $patternProperties = null;

    /**
     * @var object
     */
    public $properties = null;

    /**
     * @var string[]
     */
    public $required = null;

    /**
     * @var string
     */
    public $title = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @var boolean
     */
    public $uniqueItems = null;

    /**
     * x-kubernetes-embedded-resource defines that the value is an embedded Kubernetes
     * runtime.Object, with TypeMeta and ObjectMeta. The type must be object. It is
     * allowed to further restrict the embedded object. kind, apiVersion and metadata
     * are validated automatically. x-kubernetes-preserve-unknown-fields is allowed to
     * be true, but does not have to be if the object is fully specified (up to kind,
     * apiVersion, metadata).
     *
     * @var boolean
     */
    public $x-kubernetes-embedded-resource = null;

    /**
     * x-kubernetes-int-or-string specifies that this value is either an integer or a
     * string. If this is true, an empty type is allowed and type as child of anyOf is
     * permitted if following one of the following patterns:
     *
     * 1) anyOf:
     *    - type: integer
     *    - type: string
     * 2) allOf:
     *    - anyOf:
     *      - type: integer
     *      - type: string
     *    - ... zero or more
     *
     * @var boolean
     */
    public $x-kubernetes-int-or-string = null;

    /**
     * x-kubernetes-list-map-keys annotates an array with the x-kubernetes-list-type
     * `map` by specifying the keys used as the index of the map.
     *
     * This tag MUST only be used on lists that have the "x-kubernetes-list-type"
     * extension set to "map". Also, the values specified for this attribute must be a
     * scalar typed field of the child structure (no nesting is supported).
     *
     * @var string[]
     */
    public $x-kubernetes-list-map-keys = null;

    /**
     * x-kubernetes-list-type annotates an array to further describe its topology. This
     * extension must only be used on lists and may have 3 possible values:
     *
     * 1) `atomic`: the list is treated as a single entity, like a scalar.
     *      Atomic lists will be entirely replaced when updated. This extension
     *      may be used on any type of list (struct, scalar, ...).
     * 2) `set`:
     *      Sets are lists that must not have multiple items with the same value. Each
     *      value must be a scalar, an object with x-kubernetes-map-type `atomic` or an
     *      array with x-kubernetes-list-type `atomic`.
     * 3) `map`:
     *      These lists are like maps in that their elements have a non-index key
     *      used to identify them. Order is preserved upon merge. The map tag
     *      must only be used on a list with elements of type object.
     * Defaults to atomic for arrays.
     *
     * @var string
     */
    public $x-kubernetes-list-type = null;

    /**
     * x-kubernetes-map-type annotates an object to further describe its topology. This
     * extension must only be used when type is object and may have 2 possible values:
     *
     * 1) `granular`:
     *      These maps are actual maps (key-value pairs) and each fields are
     * independent
     *      from each other (they can each be manipulated by separate actors). This is
     *      the default behaviour for all maps.
     * 2) `atomic`: the list is treated as a single entity, like a scalar.
     *      Atomic maps will be entirely replaced when updated.
     *
     * @var string
     */
    public $x-kubernetes-map-type = null;

    /**
     * x-kubernetes-preserve-unknown-fields stops the API server decoding step from
     * pruning fields which are not specified in the validation schema. This affects
     * fields recursively, but switches back to normal pruning behaviour if nested
     * properties or additionalProperties are specified in the schema. This can either
     * be true or undefined. False is forbidden.
     *
     * @var boolean
     */
    public $x-kubernetes-preserve-unknown-fields = null;


}

