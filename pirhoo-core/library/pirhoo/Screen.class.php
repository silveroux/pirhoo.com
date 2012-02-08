<?php
/**
 * Abstract class to represent a screen
 * 
 * @author Pirhoo <pierre.romera@gmail.com>
 * @version 1.0
 * @package Screen
 */
class Screen {
    
    
    /**     
     * @param Smarty $smarty
     * @param string $template
     * @param string $outputFormat
     * @access public
     * @return Screen 
     */
    public function __construct(& $smarty, $template, $outputFormat = "html") {
        
        // output format
        switch( strtolower($outputFormat) ) {            
            case $outputFormat == "html" || $outputFormat == "json":
                $this->setOutputFormat($outputFormat);
                break;            
        }
        
        // smarty instance
        if($smarty instanceof Smarty) $this->smarty = &$smarty;
        
        // template of the screen
        $this->template = $template;
        
        return $this;
    }
    
    /**
     * @param string $fileType
     * @param string $fileSrc
     * @access public
     * @return boolean
     */
    public function addHeaderFile($fileType, $fileSrc) {
        
        if(is_string($fileType) && key_exists($fileType, $this->headerFile) )
            $this->headerFile[$fileType][] = $fileSrc;            
        
        
        return true;     
    }
    
    /**
     * @access public
     * @return boolean 
     */
    public function display() {
        
        
        // assign default variables
        $this->smarty->assign("template_output_format", $this->outputFormat);
        $this->smarty->assign("files_stylesheet",       $this->getHeaderFile("stylesheet"));
        $this->smarty->assign("files_javascript",       $this->getHeaderFile("javascript"));        
        $this->smarty->assign('screen_id',              $this->screenId);
        $this->smarty->assign('screen_title',           $this->screenTitle);
    
        $this->smarty->display($this->template);
        
        return true;
    }
    
    /**
     * @access public
     * @return Smarty
     */
    public function getSmarty() {
        return $this->s;
    }

    /**
     * @access public
     * @param Smarty $s 
     */
    public function setSmarty($s) {
        if($s instanceof Smarty) $this->s = $s;
    }

    /**     
     * @access public
     * @return string
     */
    public function getOutputFormat() {
        return $this->outputFormat;
    }

    /**
     * @access public
     * @param string $output_format 
     */
    public function setOutputFormat($outputFormat) {
        $this->outputFormat = $outputFormat;
    }

    /**     
     * @access public
     * @return string
     */
    public function getTemplate() {
        return $this->template;
    }

    /**
     * @access public
     * @param string $template
     */
    public function setTemplate($template) {
        $this->template = $template;
    }

    /**
     * @param string $headerType
     * @return array
     */
    public function getHeaderFile($headerType = null) {
        if(is_string($headerType) && key_exists($headerType, $this->headerFile) )
            return $this->headerFile[$headerType];
        else
            return $this->headerFile;
    }

    /**
     * @access public
     * @param array $headerFile 
     */
    public function setHeaderFile($headerFile, $headerArray) {
        
        if( is_array($headerFile) )
            $this->headerFile = $headerFile;
        
        elseif( is_string($headerFile) && is_array($headerArray) )
            $this->headerFile[$headerFile] = $headerArray;
        
        elseif( is_string($headerFile) && is_string($headerArray) )
            $this->headerFile[$headerFile] = array($headerArray);        
    }
        
    
    /**     
     * @access public
     * @return string
     */
    public function getScreenId() {
        return $this->screenId;
    }
    
    /**
     * @access public
     * @param string $screen_id
     */
    public function setScreenId($screenId) {
        $this->screenId = $screenId;
    }

    /**     
     * @access public
     * @return string
     */
    public function getScreenTitle() {
        return $this->screenTitle;
    }

    /**
     * @access public
     * @param string $screen_title
     */
    public function setScreenTitle($screenTitle) {
        $this->screenTitle = $screenTitle;
    }

        
        
    private $s; // a reference to Smarty instance
    private $outputFormat; // the output format (html or json)
    private $template; // current template
    private $headerFile = Array("javascript" => Array(), "stylesheet" => Array()); // stylesheet list & javascript list
    private $screenId; // id of the screen
    private $screenTitle; // title of the screen
    
}
?>
