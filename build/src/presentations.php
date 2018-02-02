<?php
  include 'defaults.php';

$opt  = $_GET["opt"];

if ($opt == "year") { 
  $cy = "class=\"gray\""; $cr=""; $ct="";
} else if ($opt == "type") { 
  $ct = "class=\"gray\""; $cr=""; $cy="";
} else {
  $cr = "class=\"gray\""; $cy=""; $ct="";
}
  
$o = <<<EOO
<ul>
<li><a $cr href="presentations.html">recent</a></li>
<li><a $cy href="presentations-year.html">by year</a></li>
<li><a $ct href="presentations-type.html">by type</a></li>
</ul>
EOO
;

  page_header("presentations",$o);

  include 'data/talks.php';
?>

<div id="content">

<?php

$months = array("January","Februray","March","April","May","June",
                "July","August","September","October","November",
                "December");

function p_talk ($id, $t, $type=0) {
  global $months;
  print "<li>"; 
  if ($t["slides"]) {
     print ("<a href=\"talks/" . $t["slides"] . "\">" .
            $t["title"] . "</a>");
  } else if ($t["link"]) {
     print ("<a href=\"" . $t["link"] . "\">" .
            $t["title"] . "</a>");
  } else {
     print $t["title"];
  }
  if ($t["note"] != "") {
    print ", " . $t["note"];
  }
  print ".<br />";
  if ($type) {
    if ($t["type"] == "invited") {
      if ($t["typetype"]) {
        print $t["typetype"] . ", ";
      } else {
        print "Invited talk, ";
      }
    } else if ($t["type"] == "lecture") {
      print "Invited lecture, ";
    } else if ($t["type"] == "panel") {
      print "Invited panelist, ";
    } else if ($t["type"] == "panel head") {
      print "Panel moderator, ";
    }
  }
  if ($t["event"] != "") {
    print $t["event"] . ", ";
  }
  print $t["address"] . ", ";
  print $months[$t["date"][1]-1] . " " . $t["date"][2];  
  print ".</li>\n";
}

if ($opt == "year") {
  $y = 0;
  $l = "";
  foreach ($talks as $id => $p) {
    if ($p["date"][2] != $y) {
      if ($y) {
        $l = $l . " | ";
      }
      $y = $p["date"][2];
      $l = $l . "<a href=\"#y$y\">$y</a>";
    }
  }
  print "<p class=\"navig\">[$l]</p>";
  $y = 0;
  foreach ($talks as $id => $p) {
    if ($p["date"][2] != $y) {
      if ($y) {
        print "</ul>";
      }
      $y = $p["date"][2];
      print "<h2 id=\"y$y\">$y</h2>";
      print "<ul>";
    }
    p_talk($id,$p,1);
  }
  print "</ul>";
} else if ($opt == "type") {

  ?>
<p class="navig">
[<a href="#invited">talks</a> |
 <a href="#panel">panels</a> |
 <a href="#lecture">lectures</a> |
 <a href="#conference">conferences</a> |
 <a href="#workshop">workshops</a>]
</p>
  <?php

  print "<h2 id=\"invited\">Invited Talks</h2>";
  print "<ul>";
  foreach ($talks as $id => $p) {
    if ($p["type"] == "invited") {
      p_talk($id,$p);
    }
  }
  print "</ul>";

  print "<h2 id=\"panel\">Participation in Panels</h2>";
  print "<ul>";
  foreach ($talks as $id => $p) {
    if (($p["type"] == "panel") || ($p["type"] == "panel head")) {
      p_talk($id,$p);
    }
  }
  print "</ul>";

  print "<h2 id=\"lecture\">Invited Lectures</h2>";
  print "<ul>";
  foreach ($talks as $id => $p) {
    if ($p["type"] == "lecture") {
      p_talk($id,$p);
    }
  }
  print "</ul>";

  print "<h2 id=\"conference\">Conference Presentations</h2>";
  print "<ul>";
  foreach ($talks as $id => $p) {
    if ($p["type"] == "conference") {
      p_talk($id,$p);
    }
  }
  print "</ul>";

  print "<h2 id=\"workshop\">Workshop Presentations</h2>";
  print "<ul>";
  foreach ($talks as $id => $p) {
    if ($p["type"] == "workshop") {
      p_talk($id,$p);
    }
  }
  print "</ul>";

} else {
  print "<p class= \"navig\">&nbsp;</p>";
  print "<h2>Recent Presentations</h2>";
  print "<ul>";
  foreach ($talks as $id => $p) {
    if ($p["date"][2] >= 2010) {
      p_talk($id,$p,1);
    }
  }
  print "</ul>";
}

?>
</div>

<?php
  page_footer("presentations");
?>








