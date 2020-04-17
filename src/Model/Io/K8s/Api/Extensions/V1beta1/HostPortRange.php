<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

/**
 * HostPortRange defines a range of host ports that will be enabled by a policy for
 * pods to use.  It requires both the start and end to be defined. Deprecated: use
 * HostPortRange from policy API Group instead.
 */
class HostPortRange extends \KubernetesRuntime\AbstractModel
{

    /**
     * max is the end of the range, inclusive.
     *
     * @var integer
     */
    public $max = null;

    /**
     * min is the start of the range, inclusive.
     *
     * @var integer
     */
    public $min = null;


}
