<?php

namespace ElefantCMS\Classes;

class SingleNote
{
    private $_notePath = "";
    private $_dom;
    
    function __construct($NotePathOnDisk) 
    {
        $this->_notePath = $NotePathOnDisk;
    }
    
    public function ParseSingleNote()
    {
        $this->_dom = new \DOMDocument('1.0', 'UTF-8');
        $this->_dom->load($this->_notePath); 
    } 
    
    public function GetContent()
    {
        $nodes = $this->_dom->getElementsByTagName('Content');

        if ($nodes->length==0) 
        { 
            throw new Exception("Content node not found");
        }
        else
        {
            return $nodes->item(0)->nodeValue;
        }
    }
}
