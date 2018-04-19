<?php
	function export($data, $type='json')
	{
		if(isset($data))
		{
			switch($type)
			{
				case 'json':
					echo json_encode($data);
				break;
				case 'xml':
				default:
					echo 'not supported format';
				break;
			}
		}
	}
	export($arData);
?>