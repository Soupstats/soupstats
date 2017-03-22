<?php
namespace soupstats;

class SoupEnhancement
{
    private $enhancements;

    public function loadEnhancements()
    {
        foreach( glob( "soup-enhancement/", GLOB_MARK|GLOB_ONLYDIR ) as $enh )
        {
            $jsonFile = "soup-enhancement/" . $enh . $enh . ".json";
            if(file_exists($jsonFile))
            {
                $this->enhancements[$enh] = json_decode($jsonFile);
            }
        }
    }
}