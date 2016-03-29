<?php
/*
Author: Logan Rasmussen
Date: March 28, 2016
File: Help.php
*/

class Help {
	/*public $geo;
	public $ping;
	public $arpscan;
	public $wifi;*/
	public $sections;

	public function __construct() {
		$this->sections = array();
		$this->sections[] = new HelpSection(
			"About WebNetTools"
			,array("WebNetTools is a small collection of free utilities that are available for various Linux distributions.  The main purpose of the site is to provide remote access to tools that are on a dedicated machine in a network closet, office, or home location (For example, in my case running the web site at home on a raspberry pi which has apache2 and PHP installed on it).  WebNetTools runs various shell commands using PHP and provides a web view of the results.  Some may prefer the web results over the command line output.")
			,array()
		);
		$this->sections[] = new HelpSection(
			"What Did I Learn?"
			,array("This project was built as my Capstone project at Utah Valley University.  It helped me to gain a better understanding of quite a few different aspects of website construction.  For this particular project I went full circle and configured and implemented every aspect of a web site.  I physically built my device and applied all the needed configurations to the web server and its components."
				,"The main focus for the beginning of the project was to get some experience in working with hardware components. I have very little experience with putting together a small electronic device, so it looked very intruiging and I jumped in with both feet.  I wanted to create a small dedicated server, that could also go mobile if needed, and I had no idea what it would take to do so. I found the Raspberry Pi first, and then considered the Arduino devices as well.  Ultimately for simplicity's sake I chose to make my device based on the Raspberry Pi. All I needed to add to it was a screen, and some sort of battery to make it work the way I wanted, so away I went.  You'll see more details and pictures below."
				,"In the software side of the project, I installed Raspbian Linux, apache2 web server, PHP, configured SSH with security keys, allowed only commands that I specify to be run by apache, and installed all the needed utilities that were to be used with the web site.  The utitlies that I installed are Wireshark, Tshark, arp-scan, matchbox-keyboard, tightvncserver, git, xinput_calibrator, and other required dependencies which would be too many to list here.  I also implemented my own version of an MVC model using PHP so that I could become more familiar with how they work.")
			,array()
		);
		//$this->sections[] = new HelpSection();
		//$this->sections[] = new HelpSection();
	}	
}

class HelpSection {
	public $title;
	public $paragraphs;
	public $examples;

	public function __construct($title, $paragraphs, $examples) {
		$this->title = $title;
		$this->paragraphs = $paragraphs;
		$this->examples = $examples;
	}
}
?>