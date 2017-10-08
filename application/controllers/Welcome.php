<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->data['pagebody'] = 'welcome';
		
		// build the list of airplanes, to pass on to our view
		$numPlane = $this->fleets->getCount();
		$numFlight = $this->flights->getCount();
		
		// pass on the data to present, as the "numOfplane" view parameter
		$this->data['numOfplane'] = $numPlane;
		$this->data['numOfflight'] = $numFlight;
		
		$this->render(); 
	}

}
