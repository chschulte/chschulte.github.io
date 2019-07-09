<?php
include 'defaults.php';
include 'data/papers.php';
include 'templates/papers.php';

$id    = $_GET["id"];
$paper = $papers[$id];

$o = <<<EOO
<ul>
<li><a href="${urlroot}papers.html">selected</a></li>
<li><a href="${urlroot}papers-year.html">by year</a></li>
<li><a href="${urlroot}papers-type.html">by type</a></li>
</ul>
EOO
;

page_header("Papers",$o);

?>

<div id="content">
<pre>
<?php

function bib_header($t) {
  global $id;
  print ("@" . $t . "{" . $id . ",\n");
}

function bib_author() {
  global $authors, $paper;
  $ma = array();
  foreach ($paper["author"] as $i => $a) {
    if (array_key_exists("bibtex",$authors[$a])) {
      $ma[$i] = $authors[$a]["bibtex"];
    } else {
      $ma[$i] = $authors[$a]["name"];
    }
  }
  print ("   Author =    \"" . implode($ma," and ") . "\",\n");
}

function bib_title() {
  global $paper;
  print ("   Title =     \"" . $paper["title"] . "\",\n");
}

function bib_booktitle() {
  global $paper;
  print ("   Booktitle = \"" . $paper["booktitle"] . "\",\n");
}

function bib_journal() {
  global $paper;
  print ("   Journal =   \"" . $paper["journal"] . "\",\n");
}

function bib_editor() {
  global $paper;
  global $bibeditors;
  if (array_key_exists("editor",$paper)) {
    foreach ($paper["editor"] as $i => $a) {
    if (array_key_exists($a,$bibeditors)) {
      $e[$i] = $bibeditors[$a];
    } else {
      $e[$i] = $a;
    }}
    print ("   Editor =    \"" . implode($e," and ") . "\",\n");
  }
}

function bib_year() {
  global $paper;
  print ("   Year =      " . $paper["year"] . ",\n");
}

function bib_month() {
  global $paper;
  global $months;
  if (array_key_exists("month",$paper)) {
    if (array_key_exists($paper["month"],$months)) {
       print ("   Month =     " . strtolower($paper["month"]) . ",\n");
    } else {
       print ("   Month =     \"" . $paper["month"] . "\",\n");
    }
  }
}

function bib_address() {
  global $paper;
  if (array_key_exists("address",$paper)) {
    print ("   Address =   \"" . $paper["address"] . "\",\n");
  }
}

function bib_publisher() {
  global $paper;
  if (array_key_exists("publisher",$paper)) {
    print ("   Publisher = \"" . $paper["publisher"] . "\",\n");
  }
}

function bib_note() {
  global $paper;
  if (array_key_exists("note",$paper)) {
    print ("   Note      = \"" . $paper["note"] . "\",\n");
  }
}

function bib_series() {
  global $paper;
  if (array_key_exists("series",$paper)) {
    print ("   Series =    \"" . $paper["series"] . "\",\n");
  }
}

function bib_volume() {
  global $paper;
  if (array_key_exists("volume",$paper)) {
    print ("   Volume =    \"" . $paper["volume"] . "\",\n");
  }
}

function bib_number() {
  global $paper;
  if (array_key_exists("number",$paper)) {
    print ("   Number =    \"" . $paper["number"] . "\",\n");
  }
}

function bib_type() {
  global $paper;
  if (array_key_exists("type",$paper)) {
    print ("   Type =      \"" . $paper["type"] . "\",\n");
  }
}

function bib_typetype() {
  global $paper;
  if (array_key_exists("typetype",$paper)) {
    print ("   Type =      \"" . $paper["typetype"] . "\",\n");
  }
}

function bib_chapter() {
  global $paper;
  if (array_key_exists("chapter",$paper)) {
    print ("   Chapter =   " . $paper["chapter"] . ",\n");
  }
}

function bib_school() {
  global $paper;
  if (array_key_exists("school",$paper)) {
    print ("   School =    \"" . $paper["school"] . "\",\n");
  }
}

function bib_pages() {
  global $paper;
  if (array_key_exists("pages",$paper)) {
    print ("   Pages =     \"" . $paper["pages"][0] . "--" . $paper["pages"][1] . "\",\n");
  }
}

function bib_footer() {
  global $paper, $id, $urlroot;
  if (array_key_exists("toappear",$paper)) {
    print ("   Note =      \"To appear.\",\n");
  }
  if (array_key_exists("accepted",$paper)) {
    print ("   Note =      \"Accepted for publication.\",\n");
  }
  if (array_key_exists("DOI",$paper)) {
     print ("   DOI =       \"" . $paper["DOI"] . "\",\n");
  }
  if (array_key_exists("link",$paper)) {
     print ("   URL =       \"" . $paper["link"] . "\"\n");
  } else {
     $pid = str_replace(":","-",strtolower($id));
     print ("   URL =       \"" . $urlroot . "papers/" . $pid . ".html\"\n");
  }
  print "}\n";
}

if (($paper["type"] == "workshop") ||
    ($paper["type"] == "conference")) {
  bib_header("InProceedings");
  bib_author();
  bib_title();
  bib_editor();
  bib_booktitle();
  bib_year();
  bib_month();
  bib_address();
  bib_publisher();
  bib_series();
  bib_volume();
  bib_pages();
  bib_footer();
} else if ($paper["type"] == "doc") {
  bib_header("Misc");
  bib_author();
  bib_title();
  bib_year();
  bib_month();
  bib_footer();
} else if ($paper["type"] == "corr") {
  bib_header("Misc");
  bib_author();
  bib_title();
  bib_year();
  bib_month();
  bib_footer();
} else if ($paper["type"] == "incollection") {
  bib_header("InCollection");
  bib_author();
  bib_title();
  bib_editor();
  bib_booktitle();
  bib_chapter();
  bib_year();
  bib_month();
  bib_address();
  bib_publisher();
  bib_series();
  bib_volume();
  bib_pages();
  bib_footer();
} else if ($paper["type"] == "article") {
  bib_header("Article");
  bib_author();
  bib_title();
  bib_journal();
  bib_year();
  bib_month();
  bib_publisher();
  bib_volume();
  bib_number();
  bib_pages();
  bib_footer();
} else if ($paper["type"] == "book") {
  bib_header("Book");
  bib_author();
  bib_title();
  bib_publisher();
  bib_series();
  bib_volume();
  bib_year();
  bib_footer();
} else if ($paper["type"] == "proceedings") {
  bib_header("Proceedings");
  bib_editor();
  bib_booktitle();
  bib_publisher();
  bib_series();
  bib_volume();
  bib_year();
  bib_footer();
} else if ($paper["type"] == "draft") {
  bib_header("Misc");
  bib_author();
  bib_title();
  bib_year();
  bib_month();
  bib_footer();
} else if ($paper["type"] == "report") {
  bib_header("Misc");
  bib_author();
  bib_title();
  bib_year();
  bib_month();
  bib_footer();
} else if ($paper["type"] == "phdthesis") {
  bib_header("PhDThesis");
  bib_author();
  bib_title();
  bib_typetype();
  bib_school();
  bib_address();
  bib_year();
  bib_footer();
} else if ($paper["type"] == "masterthesis") {
  bib_header("MasterThesis");
  bib_author();
  bib_title();
  bib_typetype();
  bib_school();
  bib_address();
  bib_year();
  bib_month();
  bib_note();
  bib_footer();
}
?>
</pre>
</dev>

<?php
  page_footer("papers");
?>
