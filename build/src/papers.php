<?php
  include 'defaults.php';

$opt  = $_GET["opt"];

if ($opt == "year") { 
  $cy = "class=\"gray\""; $cs=""; $ct="";
} else if ($opt == "type") { 
  $ct = "class=\"gray\""; $cs=""; $cy="";
} else {
  $cs = "class=\"gray\""; $cy=""; $ct="";
}
  
$o = <<<EOO
<ul>
<li><a $cs href="papers.html?opt=selected">selected</a></li>
<li><a $cy href="papers.html?opt=year">by year</a></li>
<li><a $ct href="papers.html?opt=type">by type</a></li>
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
  print ("  <li><a href=\"paper.html?id=" . $id . "\">" .
	 get_title($p) . "</a>, <span class=\"authors\">" . 
         get_authors($p) . "</span>.<br />");
  if ($p["type"] == "book") {
    print $p["series"] . ", " . $p["publisher"] . ", ";
  } else if ($p["type"] == "proceedings") {
    print $p["series"] . " " . $p["volume"] . ", " . $p["publisher"] . ", ";
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
  } else if ($p["booktitle"] != "") {
    print $p["booktitle"] . ", ";
  } else if ($p["journal"] != "") {
    print $p["journal"] . ", ";
  }
  print $p["year"] . ". ";
  if ($p["toappear"]) {
    print "To appear. ";
  }
  if ($p["note"] != "") {
    print $p["note"] . ". ";
  }
  print "</li>";
}

if ($opt == "year") {
  $y = 0;
  $l = "";
  foreach ($papers as $id => $p) {
    if ($p["year"] != $y) {
      if ($y) {
        $l = $l . " | ";
      }
      $y = $p["year"];
      $l = $l . "<a href=\"#y$y\">$y</a>";
    }
  }
  print "<p class=\"navig\">[$l]</p>";
  $y = 0;
  foreach ($papers as $id => $p) {
    if ($p["year"] != $y) {
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
    if ($p["selected"]) {
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







