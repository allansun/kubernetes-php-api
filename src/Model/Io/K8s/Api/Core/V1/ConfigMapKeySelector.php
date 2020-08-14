<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Selects a key from a ConfigMap.
 */
class ConfigMapKeySelector extends \KubernetesRuntime\AbstractModel
{

    /**
     * The key to select.
     *
     * @var string
     */
    public $key = null;

    /**
     * Name of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     *
     * @var string
     */
    public $name = null;

    /**
     * Specify whether the ConfigMap or its key must be defined
     *
     * @var boolean
     */
    public $optional = null;


}

