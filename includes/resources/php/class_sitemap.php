<?php
 $arrayMap = array();
class Sitemap 
{
	 	public 	$fileExtensions = array("php","html","htm","xml","php3",'tpl');
	
	 	public  $hostUrl		= '';
	
	 	public  $rootDir		= "";
	
	 	private $siteDir		= "";
	
	 
	private $mapArray		= array();
	
	 
	private $mapTextString	= '';
	
	 
	private $mapXmlString	= '';
	
	//public  $changeFreq		= 'Weekly';   // Availabe option: (always,hourly,daily,weekly,monthly,yearly,never)
	//public  $priority		= 0.5;		//Valid Range : (0.0 to 1.0)
	
	// Name of the sitemap file
	 
	public  $fileName		= 'sitemap';
	
 	public  $filePath		= '';
	
	private  $eol			= '';
	
	
	 
	public function __construct($rootDir=null) {
		if ($rootDir != null) {
			$this->rootDir = $rootDir;
		} else {
			$this->rootDir = $_SERVER['DOCUMENT_ROOT'];
		}
		if ($this->hostUrl=='') {
			$this->hostUrl = 'http://'.$_SERVER['HTTP_HOST'].'/';
		}
		$this->eol=(strpos( $_ENV[ "OS" ], "Win" ) !== false )?"\n\r":"\n";
	}
	 
	private function generate($siteDir) {
		
		if ($siteDir == '') {
			$lastDir = $this->rootDir;
			$nextDir = '';
		} else {
			$lastDir = $this->rootDir."/".$siteDir;
			$nextDir = $siteDir.'/';
		}
		if (!is_dir($lastDir) || !is_readable($lastDir)) {	
			die($lastDir." : Invalid Directory or can't readable");
		}
		$dirHandle	=	opendir($lastDir);
		while ($file = readdir($dirHandle)) {
			if ($file != "." AND $file != "..") {
				if (is_dir($lastDir."/".$file)) {
					$arrayMap	= array_merge((array)$arrayMap,(array)$this->generate($nextDir.$file));
				} else {
					$file_info = pathinfo($file);
					if (in_array(strtolower($file_info["extension"]),(array) $this->fileExtensions)) {
						$arrayMap[]['loc'] = $siteDir."/".$file;
					}
				}
			}
		}
		return $arrayMap;
	}
	
	 	public function getTextSiteMap($siteDir,$filPath=''){
		
		$lastDir 		= ($siteDir == '') ? $this->rootDir : $this->rootDir."/".$siteDir;
		//filePath is '' then $lastDir will consider as filepath 
		$this->filePath = ($filPath == '') ? $lastDir : $filPath;
		
		$this->mapArray = $this->generate($siteDir);
		if ($this->mapArray) {
			for($i=0,$length=count($this->mapArray);$i<$length;$i++) {
				$this->mapTextString .= $this->hostUrl.$this->mapArray[$i]['loc'].$this->eol;
			}
		}
		if (is_writable($this->filePath)) {
			$bytes = @file_put_contents($this->filePath."/".$this->fileName.'.txt',$this->mapString);
			if ($bytes) {
				return $this->filePath."/".$this->fileName.'.txt';
			} else {
				return false;
			}
		} else {
			die("Could not have write permission on ".$this->filePath);
		}
	}
	
	 	public function getXmlSiteMap($siteDir,$filPath='',$changeFreq='weekly',$priority=0.5){
		
		$lastDir 		= ($siteDir == '') ? $this->rootDir : $this->rootDir."/".$siteDir;
		$this->filePath = ($filPath == '') ? $lastDir : $filPath;
		//Generate the sitemap
		$this->mapArray = $this->generate($siteDir);
		
		if ($this->mapArray) {
			$this->mapXmlString = 	'<?xml version="1.0" encoding="UTF-8"?>
									 <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
			for($i=0,$length=count($this->mapArray);$i<$length;$i++) {
				$this->mapXmlString .= '<url>';
				$this->mapXmlString .= '<loc>'.$this->hostUrl.$this->mapArray[$i]['loc'].'</loc>';
				$this->mapXmlString .= '<lastmod>'.date("Y-m-d", filemtime($this->rootDir."/".$this->mapArray[$i]['loc'])).'</lastmod>';
				$this->mapXmlString .= '<changefreq>'.$changeFreq.'</changefreq>';
				$this->mapXmlString .= '<priority>'.$priority.'</priority>';
				$this->mapXmlString .= '</url>';
			}
			$this->mapXmlString .= '</urlset>';	
		}
		if (is_writable($this->filePath)) {
			 $bytes = @file_put_contents($this->filePath."/".$this->fileName.'.xml',$this->mapXmlString);
			 if ($bytes) {
			 	return $this->filePath."/".$this->fileName.'.xml';
			 } else {
			 	return false;
			 }
		} else {
			die("Could not have write permission on ".$this->filePath);
		}
	}
}