<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * PodStatus represents information about the status of a pod. Status may trail the
 * actual state of a system.
 */
class PodStatus extends \Kubernetes\AbstractModel
{

    /**
     * Current service state of pod. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-conditions
     *
     * @var PodCondition[]
     */
    public $conditions = null;

    /**
     * The list has one entry per container in the manifest. Each entry is currently
     * the output of `docker inspect`. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-and-container-status
     *
     * @var ContainerStatus[]
     */
    public $containerStatuses = null;

    /**
     * IP address of the host to which the pod is assigned. Empty if not yet scheduled.
     *
     * @var string
     */
    public $hostIP = null;

    /**
     * The list has one entry per init container in the manifest. The most recent
     * successful init container will have ready = true, the most recently started
     * container will have startTime set. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-and-container-status
     *
     * @var ContainerStatus[]
     */
    public $initContainerStatuses = null;

    /**
     * A human readable message indicating details about why the pod is in this
     * condition.
     *
     * @var string
     */
    public $message = null;

    /**
     * Current condition of the pod. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-phase
     *
     * @var string
     */
    public $phase = null;

    /**
     * IP address allocated to the pod. Routable at least within the cluster. Empty if
     * not yet allocated.
     *
     * @var string
     */
    public $podIP = null;

    /**
     * The Quality of Service (QOS) classification assigned to the pod based on
     * resource requirements See PodQOSClass type for available QOS classes More info:
     * https://github.com/kubernetes/kubernetes/blob/master/docs/design/resource-qos.md
     *
     * @var string
     */
    public $qosClass = null;

    /**
     * A brief CamelCase message indicating details about why the pod is in this state.
     * e.g. 'Evicted'
     *
     * @var string
     */
    public $reason = null;

    /**
     * RFC 3339 date and time at which the object was acknowledged by the Kubelet. This
     * is before the Kubelet pulled the container image(s) for the pod.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $startTime = null;


}

