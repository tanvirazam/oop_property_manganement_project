<?php 


include 'autoloder.php';

use app\classes\Luxaryappertment;
use app\classes\Owner;
use app\classes\StandarsAppartment;


$standerdAppertment=new StandarsAppartment("405",1800,3);
$luxaryAppertment=new Luxaryappertment("405",1800,3, [ 'gyn','bathroom','swimming pull' ] );


//set balconi calculate
$standerdAppertment->setBelconi(true);
$standerdAppertment->calculateRent();


$owner1=new Owner('jishan',$standerdAppertment);
$owner2=new Owner('laden',$luxaryAppertment);

echo "Standart Appertment Details:";

$standerdAppertment->showAppertmentDetails();


echo "Luxary Appertment Details:";

$luxaryAppertment->showAppertmentDetails() ."/n";
$luxaryAppertment->getAnimeties();

echo "Owner Details";
$owner1->ownDetails();
$owner2->ownDetails();