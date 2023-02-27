<?php

namespace Modules\Gateway\Entities;

use Nwidart\Modules\Exceptions\ModuleNotFoundException;
use Nwidart\Modules\Facades\Module;

class GatewayModule extends Module
{
    private $nameOnly = false;
    private $enabledOnly = false;



    /**
     * Sets enabledOnly attribute
     *
     * @return this
     */
    public function setEnabledOnly($enabled = true)
    {
        $this->enabledOnly = $enabled;
        return $this;
    }


    /**
     * Sets nameOnly attribute
     *
     * @return this
     */
    public function setNameOnly($name = true)
    {
        $this->nameOnly = $name;
        return $this;
    }


    /**
     * Returns all the payment gateways based on conditions
     *
     * @return Array
     */
    public function paymentGateways()
    {
        $addons = $this->enabledOnly ? parent::allEnabled() : parent::all();
        $gateways = array();

        foreach ($addons as $addon) {
            if ($addon->get('gateway')) {
                $gateways[] = $this->nameOnly ? $addon->getName() : $addon;
            }
        }
        return $gateways;
    }

    /**
     * Returns all offline the payment gateways based on conditions
     *
     * @return Array
     */
    public function offlinePaymentGateways(): array
    {
        $addons = $this->enabledOnly ? parent::allEnabled() : parent::all();
        $gateways = array();

        foreach ($addons as $addon) {
            if ($addon->get('offline')) {
                $gateways[] = $this->nameOnly ? $addon->getName() : $addon;
            }
        }
        return $gateways;
    }


    /**
     * Returns all the payable payment gateways
     *
     * @return Array
     */
    public function payableGateways()
    {
        $modules = $this->setNameOnly()->setEnabledOnly()->paymentGateways();
        $gateways = Gateway::active()->get();

        $payableGateways = array();

        foreach ($gateways as $gateway) {
            if (in_array($gateway->name, $modules)) {
                $payableGateways[] = $gateway;
            };
        }

        return $payableGateways;
    }

    /**
     * Returns all offline the payable payment gateways
     *
     * @return Array
     */
    public function offlinePayableGateways(): array
    {
        $modules = $this->setNameOnly()->setEnabledOnly()->offlinePaymentGateways();
        $gateways = Gateway::active()->get();

        $payableGateways = array();

        foreach ($gateways as $gateway) {
            if (in_array($gateway->name, $modules)) {
                $payableGateways[] = $gateway;
            };
        }

        return $payableGateways;
    }



    public function findModule($name)
    {
        $module = GatewayModule::findOrFail($name);
        if ($module->get('gateway')) {
            return $module;
        }
        throw new ModuleNotFoundException(__(':name payment gateway module not found.', ['name' => ucfirst($name)]));
    }
}
