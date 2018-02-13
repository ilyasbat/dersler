<?php
$arabalar = array('Clio','Astra','Megane','Focus','A4');

if(in_array('Clio',$arabalar))
{
	echo 'İlyas\'ın Clio arabası olmuş';	
}
echo '<br/>';
if(in_array('Latitude',$arabalar))
{
	echo 'İlyas\'ın Latitude arabası olmuş';	
}
else
{
	echo 'İlyas hiç Latitude model bir arabaya sahip olmamış';		
}
?>