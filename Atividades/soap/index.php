<?php

$pureclient = new SoapClient("localhost");
$client = array('client' => "1");
$result = $pureclient->consultClient($client);
echo "Consunt by Client";
echo "<br>name: " . $result->return->name;
echo "
<br> email: " . $result->return->email;
echo "
<br> role: " . $result->return->role;
echo "
<br> salary: " . $result->return->salary;
echo "
<br> cpf: " . $result->return->cpf;
echo "
<br> rg: " . $result->return->rg;
echo "
<br> responsabilities: " . $result->return->responsabilities;
echo "
<br> start_dt: " . $result->return->start_dt;
echo "
<br> birthday: " . $result->return->birthday;
echo "";
