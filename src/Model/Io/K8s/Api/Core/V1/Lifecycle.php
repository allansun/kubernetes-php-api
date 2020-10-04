<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Lifecycle describes actions that the management system should take in response
 * to container lifecycle events. For the PostStart and PreStop lifecycle handlers,
 * management of the container blocks until the action is complete, unless the
 * container process fails, in which case the handler is aborted.
 */
class Lifecycle extends AbstractModel
{

    /**
     * PostStart is called immediately after a container is created. If the handler
     * fails, the container is terminated and restarted according to its restart
     * policy. Other management of the container blocks until the hook completes. More
     * info:
     * https://kubernetes.io/docs/concepts/containers/container-lifecycle-hooks/#container-hooks
     *
     * @var Handler
     */
    public $postStart = null;

    /**
     * PreStop is called immediately before a container is terminated. The container is
     * terminated after the handler completes. The reason for termination is passed to
     * the handler. Regardless of the outcome of the handler, the container is
     * eventually terminated. Other management of the container blocks until the hook
     * completes. More info:
     * https://kubernetes.io/docs/concepts/containers/container-lifecycle-hooks/#container-hooks
     *
     * @var Handler
     */
    public $preStop = null;


}

