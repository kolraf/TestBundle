<?php

namespace Kolraf\TestBundle;

use Kolraf\TestBundle\DependencyInjection\KolrafTestExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class KolrafTestBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new KolrafTestExtension();
    }
}
