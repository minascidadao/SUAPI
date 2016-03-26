<?php

class Data
{
	public function DataFormatada($data)
	{
		if(isset($data))
			return date("d/m/Y", strtotime($data));

	}
	
	
}


?>