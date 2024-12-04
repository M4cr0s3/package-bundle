<?php

namespace Macrose\PackagesBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

final class MacrosePackagesBundle extends Bundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }

}