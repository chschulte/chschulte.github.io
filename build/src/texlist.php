<?php
include 'data/papers.php';
include 'templates/papers.php';

$id    = $_GET["id"];
include 'defaults.php';

?>

<PRE>
<?php

function p_paper($id,$paper) {
  
  print "\\item ";
  global $authors;
  $ma = array();
  foreach ($paper["author"] as $i => $a) {
      $ma[$i] = $authors[$a]["name"];
  }
  print implode($ma,", ") . ".\n";
  print get_title($paper). ".\n";

  if ($paper["type"] == "draft") {
    print "\\textbf{Draft}, " . $paper["year"] . ".";
  } else if ($paper["type"] == "doc") {
    print "\\textbf{Technical documentation}, " . $paper["year"] . ".";
  } else if ($paper["type"] == "report") {
    print "\\textbf{Report}, " . $paper["year"] . ".";
  } else if ($paper["type"] == "corr") {
    print "\\textbf{CoRR entry}, " . $paper["year"] . ".";
  } else {
    if (($paper["type"] == "phdthesis") || $paper["type"] == "masterthesis") {
      print $paper["typetype"] . ", " . $paper["school"];
      print ", " . $paper["year"] . ".";
    } else if ($paper["type"] == "book") {
      if ($paper["volume"] != "") {
	print "Volume " . $paper["volume"] . " of ";
      }
      print $paper["series"] . ", " . $paper["publisher"] . ", ";
      print $paper["year"];
    } else if ($paper["type"] == "proceedings") {
      print "(Editor) ";
      if ($paper["volume"] != "") {
	print "Volume " . $paper["volume"] . " of ";
      }
      print $paper["series"] . ", " . $paper["publisher"] . ", ";
      print $paper["year"];
    } else {
      if ($paper["accepted"]) {
	print "\\textbf{Accepted for publication in:} ";
      } else if ($paper["toappear"]) {
	print "\\textbf{To appear in:} ";
      } else {
	print "\\textbf{In:} ";
      }
      if ($paper["editor"] != "") {
	print get_editor($paper) . ", ";
      }
      if ($paper["booktitle"] != "") {
	print "\\emph{" . $paper["booktitle"] . "}";
      } else if ($paper["journal"] != "") {
	print "\\emph{" . $paper["journal"] . "}";
        if ($paper["volume"] != "" && $paper["number"] != "") {
          print " " . $paper["volume"] . "(" . $paper["number"] . ")";
        }
      }
      if (($paper["type"] == "workshop" ||
           $paper["type"] == "conference") && $paper["address"] != "") {
	print ", " . $paper["address"];
      }
      if ($paper["series"] != "") {
	if ($paper["volume"] != "") {
	  print ", volume " . $paper["volume"] . " of " . $paper["series"];
	} else {
	  print ", " . $paper["series"]; 
	}
      }
      if ($paper["pages"] != "") {
	print ", pages " . $paper["pages"][0] . "-" . $paper["pages"][1] . ". ";
      } else {
	print ". "; 
      }
      if ($paper["publisher"] != "") {
	print $paper["publisher"] . ", ";
      }
      if ($paper["month"] != "") {
	print get_month($paper) . ", ";
      }
      print $paper["year"] . ". ";
    }      
  }
  print "\n";
}

function p_begin($title) {
  print "\\subsubsection*{" . $title . "}\n\n";
  print "\\begin{enumerate}\n";
  print "\\setcounter{enumi}{\\value{saveenumi}}\n";
}

function p_end() {
  print "\\setcounter{saveenumi}{\\value{enumi}}\n";
  print "\\end{enumerate}\n\n";
}

  print "\\newcounter{saveenumi}\n\n";

  p_begin("Books");
  foreach ($papers as $id => $p) {
    if (($p["type"] == "book") || ($p["type"] == "proceedings")) {
      p_paper($id,$p);
    }
  }
  p_end();

  p_begin("Journal articles");
  foreach ($papers as $id => $p) {
    if ($p["type"] == "article") {
      p_paper($id,$p);
    }
  }
  p_end();

  p_begin("Book chapters");
  foreach ($papers as $id => $p) {
    if ($p["type"] == "incollection") {
      p_paper($id,$p);
    }
  }
  p_end();

  p_begin("Conference articles");
  foreach ($papers as $id => $p) {
    if ($p["type"] == "conference") {
      p_paper($id,$p);
    }
  }
  p_end();

  p_begin("Workshop articles");
  foreach ($papers as $id => $p) {
    if ($p["type"] == "workshop") {
      p_paper($id,$p);
    }
  }
  p_end();

  p_begin("Theses");
  foreach ($papers as $id => $p) {
    if (($p["type"] == "phdthesis") || ($p["type"] == "masterthesis")) {
      p_paper($id,$p);
    }
  }
  p_end();

?>

</PRE>
