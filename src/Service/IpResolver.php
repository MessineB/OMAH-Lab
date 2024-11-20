<?php

namespace App\Service;

use Karser\Recaptcha3Bundle\Services\IpResolverInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class IpResolver implements IpResolverInterface
{
    private RequestStack $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public function resolveIp(): ?string
    {
        $request = $this->requestStack->getCurrentRequest();
        if (!$request) {
            return null;
        }
        return $request->getClientIp();
    }
}
