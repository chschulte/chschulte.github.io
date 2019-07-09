<?php
  include 'defaults.php';

if (array_key_exists("opt",$_GET)) {
  $opt  = $_GET["opt"];
} else {
  $opt = "";
}

if ($opt == "year") { 
  $cy = "class=\"gray\""; $cs=""; $ct="";
} else if ($opt == "type") { 
  $ct = "class=\"gray\""; $cs=""; $cy="";
} else {
  $cs = "class=\"gray\""; $cy=""; $ct="";
}
  
$o = <<<EOO
<ul>
<li><a $cs href="papers.html">selected</a></li>
<li><a $cy href="papers-year.html">by year</a></li>
<li><a $ct href="papers-type.html">by type</a></li>
</ul>
EOO
;

  page_header("papers",$o);

  include 'data/papers.php';
  include 'templates/papers.php';
?>

<div id="content">

<?php

function p_paper ($id, $p) {
  $pid = str_replace(":","-",strtolower($id));
  print ("  <li><a href=\"papers/" . $pid . ".html\">" .
	 get_title($p) . "</a>, <span class=\"authors\">" . 
         get_authors($p) . "</span>.<br />");
  if ($p["type"] == "book") {
    print $p["series"] . ", ";
  } else if ($p["type"] == "proceedings") {
    print $p["series"] . " " . $p["volume"] . ", ";
  } else if ($p["type"] == "report") {
    print "Report, ";
  } else if ($p["type"] == "draft") {
    print "Draft, ";
  } else if ($p["type"] == "doc") {
    print "Technical documentation, ";
  } else if ($p["type"] == "corr") {
    print "CoRR entry, ";
  } else if ($p["type"] == "phdthesis") {
    print $p["typetype"] . ", " . $p["school"] . ", ";
  } else if ($p["type"] == "masterthesis") {
    print $p["typetype"] . ", " . $p["school"] . ", ";
  } else if (array_key_exists("booktitle",$p)) {
    print $p["booktitle"] . ", ";
  } else if (array_key_exists("journal",$p)) {
    print $p["journal"] . ", ";
  }
  if (array_key_exists("publisher",$p)) {
    print $p["publisher"] . ", ";
  }
  print $p["year"] . ". ";
  if (array_key_exists("accepted",$p) && $p["accepted"]) {
    print "Accepted for publication. ";
  }
  if (array_key_exists("toappear",$p) && $p["toappear"]) {
    print "To appear. ";
  }
  if (array_key_exists("note",$p)) {
    print $p["note"] . ". ";
  }
  print "</li>";
}

if ($opt == "year") {
  $y = 0;
  foreach ($papers as $id => $p) {
    if ($p["year"] > 2004) {
      if ($p["year"] != $y) {
        $y = $p["year"];
        $l = $l . "<a href=\"#y$y\">$y</a> | ";
      }
    }
  }
  $l = $l . "<a href=\"#old\">2004-1992</a>";
  print "<p class=\"navig\">[$l]</p>";
  $y = 0;
  $old = 0;
  foreach ($papers as $id => $p) {
    if ($p["year"] < 2005) {
      if (!$old) {
        print "</ul>";
        print "<h2 id=\"old\">2004-1992</h2>";
        print "<ul>";
        $old = 1;
      }
    } else if ($p["year"] != $y) {
      if ($y) {
        print "</ul>";
      }
      $y = $p["year"];
      print "<h2 id=\"y$y\">$y</h2>";
      print "<ul>";
    }
    p_paper($id,$p);
  }
  print "</ul>";
} else if ($opt == "type") {

  ?>
<p class="navig">
[<a href="#book">books</a> |
 <a href="#journal">journals</a> |
 <a href="#chapter">book chapters</a> |
 <a href="#conference">conferences</a> |
 <a href="#workshop">workshops</a> |
 <a href="#report">reports &amp; drafts</a> |
 <a href="#theses">theses</a> |
 <a href="#doc">documentation</a>]
</p>
  <?php
  print "<h2 id=\"book\">Books</h2>";
  print "<ul>";
  foreach ($papers as $id => $p) {
    if (($p["type"] == "book") || ($p["type"] == "proceedings")) {
      p_paper($id,$p);
    }
  }
  print "</ul>";

  print "<h2 id=\"journal\">Journal Articles</h2>";
  print "<ul>";
  foreach ($papers as $id => $p) {
    if ($p["type"] == "article") {
      p_paper($id,$p);
    }
  }
  print "</ul>";

  print "<h2 id=\"chapter\">Book Chapters</h2>";
  print "<ul>";
  foreach ($papers as $id => $p) {
    if ($p["type"] == "incollection") {
      p_paper($id,$p);
    }
  }
  print "</ul>";

  print "<h2 id=\"conference\">Conference Articles</h2>";
  print "<ul>";
  foreach ($papers as $id => $p) {
    if ($p["type"] == "conference") {
      p_paper($id,$p);
    }
  }
  print "</ul>";

  print "<h2 id=\"workshop\">Workshop Articles</h2>";
  print "<ul>";
  foreach ($papers as $id => $p) {
    if ($p["type"] == "workshop") {
      p_paper($id,$p);
    }
  }
  print "</ul>";

  print "<h2 id=\"report\">Reports and Drafts</h2>";
  print "<ul>";
  foreach ($papers as $id => $p) {
    if (($p["type"] == "draft") || ($p["type"] == "corr")) {
      p_paper($id,$p);
    }
  }
  print "</ul>";

  print "<h2 id=\"theses\">Theses</h2>";
  print "<ul>";
  foreach ($papers as $id => $p) {
    if (($p["type"] == "phdthesis") || ($p["type"] == "masterthesis")) {
      p_paper($id,$p);
    }
  }
  print "</ul>";

  print "<h2 id=\"doc\">Technical Documentation</h2>";
  print "<ul>";
  foreach ($papers as $id => $p) {
    if ($p["type"] == "doc") {
      p_paper($id,$p);
    }
  }
  print "</ul>";

} else {
  print "<p class= \"navig\">&nbsp;</p>";
  print "<h2>Selected Papers</h2>";
  print "<ul>";
  foreach ($papers as $id => $p) {
    if (array_key_exists("selected",$p) && $p["selected"]) {
      p_paper($id,$p);
    }
  }
  print "</ul>";
}



?>

</div>

<?php
page_footer("papers");
?>








