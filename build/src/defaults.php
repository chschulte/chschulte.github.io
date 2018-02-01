<?php 

 $months = array("JAN" => "January", "FEB" => "February",
                 "MAR" => "March", "APR" => "April",
                 "MAY" => "May", "JUN" => "June",
                 "JUL" => "July", "AUG" => "August",
                 "SEP" => "September", "OCT" => "October",
                 "NOV" => "November", "DEC" => "December");

 $docroot = "src";
 $urlroot = "https://chschulte.github.io/";

 $suburls = array(array("url"    => "index",
                        "text"   => "main",
                        "hdr"    => "Christian Schulte",
                        "slogan" => "KTH Royal Institute of Technology",
                        "title"  => "Christian Schulte"),
                  array("url"    => "contact",
                        "text"   => "contact",
                        "hdr"    => "Contact"),
                  array("url"    => "papers",
                        "text"   => "papers",
                        "hdr"    => "Papers"),
                  array("url"    => "software",
                        "text"   => "software",
                        "hdr"    => "Software"),
                  array("url"    => "education",
                        "text"   => "education",
                        "hdr"    => "Education"),
                  array("url"    => "presentations",
                        "text"   => "presentations",
                        "hdr"    => "Presentations"),
                  array("url"    => "bio",
                        "text"   => "short bio",
                        "hdr"    => "Short Bio"));

 function page_header ($self, $opt = "", $oslogan = "", $omenu = 1) {
  global $urlroot, $docroot, $suburls;
  $inmenu = 0;
  $idx = -1;
  for ($i=0; $i < count($suburls); $i++) {
     if ($suburls[$i]["url"] == "$self") {
     	$hdr  = $suburls[$i]["hdr"];
        if ($suburls[$i]["slogan"]) {
           $slogan = $suburls[$i]["slogan"];
        } else {
          if ($oslogan != "") {
            $slogan = $oslogan;
          } else {
            $slogan = "Christian Schulte";
          }
        }
        if ($suburls[$i]["title"]) {
           $title = $suburls[$i]["title"];
        } else {
           $title = "Christian Schulte: $hdr";
        }
	$inmenu = 1;
        $idx = $i;
     }
  };
  if (!$inmenu) {
     $title  = "Christian Schulte: $self";
     if ($oslogan != "") {
        $slogan = $oslogan;
     } else {
        $slogan = "Christian Schulte";
     }
     $hdr    = $self;
  }
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="author" content="Christian Schulte" />
	<link rel="stylesheet" type="text/css" 
              href="<?php echo $urlroot; ?>style.css" title="1024px" media="screen,projection" />
	<title><?php echo $title; ?></title>
</head>

<body>
<div id="wrap">
  <div id="header">
    <p id="toplinks">[<a href="#content">content</a> | 
<?php
  if ($omenu) {
     print "<a href=\"#sidebar\">navigation</a> |";
  }
?>
                      <a href="#footer">footer</a>]
    </p>
    <h1><?php echo $hdr; ?></h1>
    <p id="slogan"><?php echo $slogan; ?></p>
  </div>
<?php
print "<div id=\"sidebar\">";
  if ($omenu) {
print "<h2>information</h2>";
print "<ul>";

  for ($i=0; $i < count($suburls); $i++) {
     $url  = $urlroot . $suburls[$i]["url"] . ".html";
     $text = $suburls[$i]["text"];
     if ($i != $idx) {
       print("<li><a href=\"$url\">$text</a></li>");
     } else {
       print("<li><a class=\"gray\" href=\"$url\">$text</a></li>");
     }
  };

  print "</ul>";
  if ($opt != "") {
    print "<h2>options</h2>";
    print $opt;
  }
 }
   print "</div>";
 };


$month = array("Jan","Feb","Mar","Apr","May","Jun",
               "Jul","Aug","Sep","Oct","Nov","Dec");

$wday = array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");

 function pad2z($s) {
   $n = strlen($s);
   if ($n == 1) { return "0$s"; }
   if ($n == 2) { return $s; }
   if ($n == 0) { return "00"; }
 }

 function page_footer ($self) {
  global $docroot;
  $localfile = ($docroot . "/" . $self . ".html");
  global $month, $wday;
  $change = getdate(filemtime("$localfile"));
  $cts = ($wday[$change["wday"]] . " " .
          $month[$change["mon"]-1] . " " .
          $change["mday"] . " " . 
          pad2z($change["hours"]) . ":" . 
          pad2z($change["minutes"]) . ":" . 
          pad2z($change["seconds"]) . " " .
	  $change["year"]);
  ?>

  <div id="footer">
    &copy; 2009 <a href="https://chschulte.github.io/">Christian Schulte</a> (<?php echo $cts; ?>) |
    original design by <a href="http://andreasviklund.com/"
    >Andreas Viklund</a>
  </div>

</div>
</body>
</html>
<?php
 };
?>
