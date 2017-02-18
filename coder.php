<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['task'])&&isset($_POST['data'])&&isset($_POST['tool'])){

	header("Content-Type:text/plain");
		$task=$_POST['task'];
		$data=$_POST['data'];
		$tool=$_POST['tool'];
		if($tool=='url'){
			#url encoder / decoder
			if($task=='encode')
				echo urlencode($data);
			else
			{
				echo urldecode($data);
			}
		}
		elseif ($tool=='html') {
			# html encoder / decoder
			if($task=='encode')
				echo htmlspecialchars($data);
			else
				echo htmlspecialchars_decode($data, ENT_QUOTES);

		}
		elseif ($tool=='base64') {
			# base64 html encoder / decoder
			if($task=='encode')
				echo base64_encode($data);
			else
				echo base64_decode($data);
		}
	}
	else{
		echo 'e';
	}
}
else{
	echo 'bitstraw::aroliant_76 sorry our engine is offline';
}
?>