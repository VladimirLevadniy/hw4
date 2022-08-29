<?php
require ('../src/ServiceInterface.php');
require ('../src/TariffInterface.php');
require ('../src/TariffAbstract.php');
require ('../src/TariffBasic.php');
require ('../src/ServiceGPS.php');
require ('../src/ServiceDriver.php');
require ('../src/TariffHours.php');
require ('../src/TariffStudent.php');


/**@var TariffInterfce $tariff*/
$tariff = new TariffStudent(10, 10);
//$tariff->addService(new ServiceGPS(15));
//$tariff->addService(new ServiceDriver(100));
echo $tariff->countPrice();