<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

/**
 * Preconditions must be fulfilled before an operation (update, delete, etc.) is
 * carried out.
 */
class Preconditions extends \KubernetesRuntime\AbstractModel
{

    /**
     * Specifies the target ResourceVersion
     *
     * @var string
     */
    public $resourceVersion = null;

    /**
     * Specifies the target UID.
     *
     * @var string
     */
    public $uid = null;


}

