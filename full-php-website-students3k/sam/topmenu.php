<?php
function topnavigator() {
echo "  <div id=\"topNavigation\">\n"; 
echo "    <ul class=\"level-0\" id=\"cssmw\">\n"; 
echo "      <li><span><a href=\"index.php\">Home</a></span></li>\n"; 
echo "      <li><span><a href=\"http://www.i-tech-system.com/forum\">Forum</a></span>\n"; 
echo "      <li><span><a href=\"products.php\">Products</a></span>\n";
echo "	  <ul class=\"level-1\">\n";
echo "          <li><span><a href=\"http://www.i-tech-system.com/products/itech%20video%20converter\">iTech Video Converter 2.0.0</a></span></li>\n"; 
echo "          <li><span><a href=\"http://www.i-tech-system.com/products/shutdown%20fast\">Windows Shutdown Fast!</a></span></li>\n"; 
echo "          <li><span><a href=\"http://www.i-tech-system.com/products/activex%20registerer\">ActiveX Registerer</a></span>\n"; 
echo "        </ul>\n"; 
echo "	  </li>\n";  
echo "      <li><span><a href=\"downloads.php\">Downloads</a></span>\n"; 
echo "	  <ul class=\"level-1\">\n";
echo "          <li><span><a href=\"http://www.i-tech-system.com/downloads/itech%20video%20converter\">iTech Video Converter 2.0.0</a></span></li>\n"; 
echo "          <li><span><a href=\"http://www.i-tech-system.com/downloads/shutdown%20fast\">Windows Shutdown Fast!</a></span></li>\n"; 
echo "          <li><span><a href=\"http://www.i-tech-system.com/downloads/activex%20registerer\">ActiveX Registerer</a></span>\n"; 
echo "        </ul>\n"; 
echo "	  </li>\n"; 
echo "	  <li><span><a href=\"about.php\">About Us</a></span></li>\n"; 
echo "      <li><span><a href=\"contact.php\">Contact Us</a></span></li>\n"; 
echo "    </ul>\n"; 
echo "    <script type=\"text/javascript\">if(window.attachEvent) { window.attachEvent(\"onload\", function() { cssmw.intializeMenu('cssmw'); }); } else if(window.addEventListener) { window.addEventListener(\"load\", function() { cssmw.intializeMenu('cssmw0'); }, true); }</script>\n"; 
echo "</div>\n";
}
?>