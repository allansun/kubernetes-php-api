<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1beta1;

/**
 * StatefulSetUpdateStrategy indicates the strategy that the StatefulSet controller
 * will use to perform updates. It includes any additional parameters necessary to
 * perform the update for the indicated strategy.
 */
class StatefulSetUpdateStrategy extends \KubernetesRuntime\AbstractModel
{

    /**
     * RollingUpdate is used to communicate parameters when Type is
     * RollingUpdateStatefulSetStrategyType.
     *
     * @var RollingUpdateStatefulSetStrategy
     */
    public $rollingUpdate = null;

    /**
     * Type indicates the type of the StatefulSetUpdateStrategy.
     *
     * @var string
     */
    public $type = null;

    protected $isRawObject = true;


}

