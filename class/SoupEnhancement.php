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

// JS init example, not tested
//
//function bla()
//{
//    alert("bla");
//}
//
//var modules = { "DOMContentLoaded": ["bla"]};
//
//document.addEventListener("DOMContentLoaded",function()
//{
//    alert("loaded");
//    for(var i = 0; i< modules.DOMContentLoaded; i++)
//  {
//      windows[modules.DOMContentLoaded[i]]();
//  }
//});


// inject files with JS
//
//function includeCSSfile(href) {
//    var head_node = document.getElementsByTagName('head')[0];
//    var link_tag = document.createElement('link');
//    link_tag.setAttribute('rel', 'stylesheet');
//    link_tag.setAttribute('type', 'text/css');
//    link_tag.setAttribute('href', href);
//    head_node.appendChild(link_tag);
//}
//
//function includeCSSfile(href) {
//    var head_node = document.getElementsByTagName('head')[0];
//    var link_tag = document.createElement('link');
//    link_tag.setAttribute('rel', 'stylesheet');
//    link_tag.setAttribute('type', 'text/css');
//    link_tag.setAttribute('href', href);
//    head_node.appendChild(link_tag);
//}
//
//OR
//
//var link = document.createElement("link");
//link.href = "http://example.com/mystyle.css";
//link.type = "text/css";
//link.rel = "stylesheet";
//document.getElementsByTagName("head")[0].appendChild(link);