<?php
include 'defaults.php';
include 'data/papers.php';
include 'templates/papers.php';

$id    = $_GET["id"];
$paper = $papers[$id];

$o = <<<EOO
<ul>
<li><a href="$urlroot/papers.html">selected</a></li>
<li><a href="$urlroot/papers-year.html">by year</a></li>
<li><a href="$urlroot/papers-type.html">by type</a></li>
</ul>
EOO
;

page_header("Papers",$o);

?>

<div id="content">

  <h2><?php echo get_title($paper); ?></h2>

  <p><?php echo get_authors($paper); ?>.</p>

  <p>
  [<?php
    $pid = str_replace(":","-",strtolower($id));
    if ($paper["nopdf"] == 1) {
      ;
    } else if ($paper["link"] != "") {
      print ("<a href=\"" . $paper["link"] . "\">more</a> | ");
    } else {
      print ("<a href=\"" . $pid . ".pdf\">pdf</a> | ");      
    }
    if ($paper["acm"] != "") {
      print ("<a href=\"" . $paper["acm"] . "\">ACM version</a> | ");
    }
    print "<a href=\"bibtex-" . $pid . ".html\">bibtex</a>";
  ?>]
  </p>

  <?php
    if ($paper["abstract"] != "") {
      print $paper["abstract"];
    }
  ?>

  <p>
  <?php
  if ($paper["type"] == "draft") {
    print "<b>Draft</b>, " . $paper["year"] . ".";
  } else if ($paper["type"] == "doc") {
    print "<b>Technical documentation</b>, " . $paper["year"] . ".";
  } else if ($paper["type"] == "report") {
    print "<b>Report</b>, " . $paper["year"] . ".";
  } else if ($paper["type"] == "corr") {
    print "<b>CoRR entry</b>, " . $paper["year"] . ".";
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
      if ($paper["volume"] != "") {
	print "Volume " . $paper["volume"] . " of ";
      }
      print $paper["series"] . ", " . $paper["publisher"] . ", ";
      print $paper["year"];
    } else {
      if ($paper["accepted"]) {
	print "<b>Accepted for publication in:</b> ";
      } else if ($paper["toappear"]) {
	print "<b>To appear in:</b> ";
      } else {
	print "<b>In:</b> ";
      }
      if ($paper["editor"] != "") {
	print get_editor($paper) . ", ";
      }
      if ($paper["booktitle"] != "") {
	print "<i>" . $paper["booktitle"] . "</i>";
      } else if ($paper["journal"] != "") {
	print "<i>" . $paper["journal"] . "</i>";
        if ($paper["volume"] != "" && $paper["number"] != "") {
          print " " . $paper["volume"] . "(" . $paper["number"] . ")";
        }
      }
      if (($paper["type"] == "workshop" ||
           $paper["type"] == "conference") && $paper["address"] != "") {
	print ", " . "<i>" . $paper["address"] . "</i>";
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
      if ($paper["DOI"] != "") {
        print "<a href=\"http://dx.doi.org/" . $paper["DOI"] . "\">DOI " . $paper["DOI"] . "</a>.";
      }
      if ($paper["note"] != "") {
        print "</p><p>" . $paper["note"] . ".";
      }
      if ($paper["copyright"] != "") {
        print "</p><p class=\"box\">" . $paper["copyright"];
      }
    }      
  }
?>
  </p>

</div>

<?php
  page_footer("paper");
?>
