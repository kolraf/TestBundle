<?php

namespace Kolraf\TestBundle;

use Kolraf\TestBundle\DependencyInjection\KolrafTestExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class TestBundle extends Bundle
{
    protected function createContainerExtension(): ?ExtensionInterface
    {
        return new KolrafTestExtension();
    }
}
