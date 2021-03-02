<?php

namespace App\Controllers;

class Page extends BaseController
{
	public function Aboutme()
	{
		
       return view("about");
        
	}
   
	public function Contact()
	{
		
        return view("contact");
        
	}
}
