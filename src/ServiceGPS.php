<?php
class ServiceGPS implements ServiceInterface
{
    private $priceHours;

    public function __construct(int $priceHours){

        $this->priceHours = $priceHours;

    }

    public function apply(TariffInterface $tariff, &$price)
    {
        $hours = ceil($tariff->getMinutes() / 60);
        $price += $this->priceHours * $hours;
    }
}
