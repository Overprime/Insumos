<?php

  
function Conectarse()

{

if(!($link=mssql_connect("192.168.1.4","APLICACIONES","APLICACIONES")))
{

echo"Error conectando la base de datos";

	exit();
}
  if (!mssql_select_db("[020BDCOMUN]",$link)) 
  {

  	echo"Error seleccionando la base de datos";

  	exit();
}

return $link;

}


  ?>