<?php

namespace Kubernetes\Model\Io\K8s\Api\Authentication\V1;

/**
 * TokenReviewSpec is a description of the token authentication request.
 */
class TokenReviewSpec extends \KubernetesRuntime\AbstractModel
{

    /**
     * Token is the opaque bearer token.
     *
     * @var string
     */
    public $token = null;


}

