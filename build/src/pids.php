<?php
  include 'data/papers.php';
  include 'templates/papers.php';

function p_paper ($id, $p) {
  print ("  <li><a href=\"paper-" . $id . ".html\">" .
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

print "PAPERS = \\\n";
foreach ($papers as $id => $p) {
  $pid = str_replace(":","-",strtolower($id));
  print "papers/" . $pid . ".html papers/bibtex-" . $pid . ".html \\\n";
}

print "\n";

foreach ($papers as $id => $p) {
  $pid = str_replace(":","-",strtolower($id));
  print "papers/" . $pid . ".html: src/paper.php src/defaults.php\n";
  print "\tphp -f src/paper.php id=" . $id . " | $(CONV) > ";
  print "papers/" . $pid . ".html\n";
  print "papers/bibtex-" . $pid . ".html: src/bibtex.php src/defaults.php\n";
  print "\tphp -f src/bibtex.php id=" . $id . " | $(CONV) > ";
  print "papers/bibtex-" . $pid . ".html\n";
}

?>
