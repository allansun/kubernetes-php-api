<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

/**
 * JSONSchemaPropsOrArray represents a value that can either be a JSONSchemaProps
 * or an array of JSONSchemaProps. Mainly here for serialization purposes.
 */
class JSONSchemaPropsOrArray extends \KubernetesRuntime\AbstractModel
{

    /**
     * @var JSONSchemaProps[]
     */
    public $JSONSchemas = null;

    /**
     * @var JSONSchemaProps
     */
    public $Schema = null;


}

