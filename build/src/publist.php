<?php
include 'data/papers.php';
include 'templates/papers.php';

$id    = $_GET["id"];
include 'defaults.php';

?>

<PRE>
<?php

function bib_header($id,$t) {
  print ("@" . $t . "{" . $id . ",\n");
}

function bib_author($paper) {
  global $authors;
  $ma = array();
  foreach ($paper["author"] as $i => $a) {
    if ($authors[$a]["bibtex"] != "") {
      $ma[$i] = $authors[$a]["bibtex"];
    } else {
      $ma[$i] = $authors[$a]["name"];
    }
  }
  print ("   Author =    \"" . implode($ma," and ") . "\",\n");
}

function bib_title($paper) {
  print ("   Title =     \"" . $paper["title"] . "\",\n");
}

function bib_booktitle($paper) {
  print ("   Booktitle = \"" . $paper["booktitle"] . "\",\n");
}

function bib_journal($paper) {
  print ("   Journal =   \"" . $paper["journal"] . "\",\n");
}

function bib_editor($paper) {
  if ($paper["editor"] != "") {
    print ("   Editor =    \"" . implode($paper["editor"]," and ") . "\",\n");
  }
}

function bib_year($paper) {
  print ("   Year =      " . $paper["year"] . ",\n");
}

function bib_month($paper) {
  if ($paper["month"] != "") {
    print ("   Month =     " . strtolower($paper["month"]) . ",\n");
  }
}

function bib_address($paper) {
  if ($paper["address"] != "") {
    print ("   Address =   \"" . $paper["address"] . "\",\n");
  }
}

function bib_publisher($paper) {
  if ($paper["publisher"] != "") {
    print ("   Publisher = \"" . $paper["publisher"] . "\",\n");
  }
}

function bib_series($paper) {
  if ($paper["series"] != "") {
    print ("   Series =    \"" . $paper["series"] . "\",\n");
  }
}

function bib_chapter($paper) {
  if ($paper["chapter"] != "") {
    print ("   Chapter =   \"" . $paper["chapter"] . "\",\n");
  }
}

function bib_volume($paper) {
  if ($paper["volume"] != "") {
    print ("   Volume =    \"" . $paper["volume"] . "\",\n");
  }
}

function bib_number($paper) {
  if ($paper["number"] != "") {
    print ("   Number =    \"" . $paper["number"] . "\",\n");
  }
}

function bib_type($paper) {
  if ($paper["type"] != "") {
    print ("   Type =      \"" . $paper["type"] . "\",\n");
  }
}

function bib_school($paper) {
  if ($paper["school"] != "") {
    print ("   School =    \"" . $paper["school"] . "\",\n");
  }
}

function bib_pages($paper) {
  if ($paper["pages"] != "") {
    print ("   Pages =     \"" . $paper["pages"][0] . "--" . $paper["pages"][1] . "\",\n");
  }
}

function bib_footer($id,$paper) {
  global $urlroot;
  if ($paper["toappear"] != "") {
    print ("   Note =      \"To appear.\",\n");
  }
  print ("   URL =       \"" . $urlroot . "paper.php?id=" . $id . "\"\n");
  print "}\n\n";
}


foreach ($papers as $id => $paper) {
 
  if ($paper["type"] == "workshop" ||
      $paper["type"] == "conference") {
    bib_header($id,"InProceedings");
    bib_author($paper);
    bib_title($paper);
    bib_editor($paper);
    bib_booktitle($paper);
    bib_year($paper);
    bib_month($paper);
    bib_address($paper);
    bib_publisher($paper);
    bib_series($paper);
    bib_volume($paper);
    bib_pages($paper);
    bib_footer($id,$paper);
  } else if ($paper["type"] == "incollection") {
    bib_header($id,"InCollection");
    bib_author($paper);
    bib_title($paper);
    bib_editor($paper);
    bib_booktitle($paper);
    bib_year($paper);
    bib_month($paper);
    bib_address($paper);
    bib_publisher($paper);
    bib_series($paper);
    bib_volume($paper);
    bib_chapter($paper);
    bib_pages($paper);
    bib_footer($id,$paper);
  } else if ($paper["type"] == "article") {
    bib_header($id,"Article");
    bib_author($paper);
    bib_title($paper);
    bib_journal($paper);
    bib_year($paper);
    bib_month($paper);
    bib_publisher($paper);
    bib_volume($paper);
    bib_number($paper);
    bib_pages($paper);
    bib_footer($id,$paper);
  } else if ($paper["type"] == "book") {
    bib_header($id,"Book");
    bib_author($paper);
    bib_title($paper);
    bib_publisher($paper);
    bib_series($paper);
    bib_volume($paper);
    bib_year($paper);
    bib_footer($id,$paper);
  }

}

?>
</PRE>
