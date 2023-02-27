<?php

namespace Modules\Gateway\Entities;

use Modules\Gateway\Facades\GatewayHelper;

class GatewayHandler
{
    private $methods = [];
    private $views = [];

    public function registerMethodProcessor($name, $class)
    {
        $this->methods[$name] = $class;
    }

    public function registerMethodViews($name, $class)
    {
        $this->views[$name] = $class;
    }

    public function registerAllMethods()
    {
        $allMethods = (new GatewayModule)->paymentGateways();
        foreach ($allMethods as $method) {
            $processor = 'Modules\\' . $method->getName() . '\\Processor\\' . $method->getName() . 'Processor';
            $view = 'Modules\\' . $method->getName() . '\\Views\\' . $method->getName() . 'View';

            $this->registerMethodProcessor($method->getAlias(), $processor);
            $this->registerMethodViews($method->getAlias(), $view);
        }
    }

    public function getProcessor($name)
    {
        return new $this->methods[$name];
    }

    public function getView($name)
    {
        return new $this->views[$name];
    }
}
