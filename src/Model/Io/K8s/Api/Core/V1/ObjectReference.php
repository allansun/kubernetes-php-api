<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * ObjectReference contains enough information to let you inspect or modify the
 * referred object.
 */
class ObjectReference extends \KubernetesRuntime\AbstractModel
{

    /**
     * API version of the referent.
     *
     * @var string
     */
    public $apiVersion = null;

    /**
     * If referring to a piece of an object instead of an entire object, this string
     * should contain a valid JSON/Go field access statement, such as
     * desiredState.manifest.containers[2]. For example, if the object reference is to
     * a container within a pod, this would take on a value like:
     * "spec.containers{name}" (where "name" refers to the name of the container that
     * triggered the event) or if no container name is specified "spec.containers[2]"
     * (container with index 2 in this pod). This syntax is chosen only to have some
     * well-defined way of referencing a part of an object.
     *
     * @var string
     */
    public $fieldPath = null;

    /**
     * Kind of the referent. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = null;

    /**
     * Name of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     *
     * @var string
     */
    public $name = null;

    /**
     * Namespace of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/namespaces/
     *
     * @var string
     */
    public $namespace = null;

    /**
     * Specific resourceVersion to which this reference is made, if any. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#concurrency-control-and-consistency
     *
     * @var string
     */
    public $resourceVersion = null;

    /**
     * UID of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#uids
     *
     * @var string
     */
    public $uid = null;

    protected $isRawObject = true;


}

