<?php
		function WebServJSon($ruta, $JSon)
			{
				$Serv="192.168.113.150";
				$wsdl = "http://".$Serv."/WebRestService.asmx?WSDL";
				$soapClient=new nusoap_client($wsdl, true); 				
				$resultado = $soapClient->call($ruta,array("JSon"=>$JSon));
				return $resultado;						
			}

	?>