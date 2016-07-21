<?php
class Fl_Controller extends CI_Controller
{
	/**
	 * Constructor for Fl_Controller
	 * @param bool $authentication Make it false if login not required. 
	 */
	function __construct($authentication = TRUE)
	{
		parent::__construct();
		
		
		//Setting authentication as default
		if($authentication)
		{
			if (!$this->ion_auth->logged_in())
			{
				// redirect them to the login page
				redirect('auth/login', 'refresh');
			}
		}
	}
}