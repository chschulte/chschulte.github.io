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

  <h2><?php echo get_title($paper); ?></h2>

  <p><?php echo get_authors($paper); ?>.</p>

  <p>
  [<?php
    $pid = str_replace(":","-",strtolower($id));
    if (array_key_exists("nopdf",$paper)) {
      ;
    } else if (array_key_exists("link",$paper)) {
      print ("<a href=\"" . $paper["link"] . "\">more</a> | ");
    } else {
      print ("<a href=\"" . $pid . ".pdf\">pdf</a> | ");      
    }
    if (array_key_exists("acm",$paper)) {
      print ("<a href=\"" . $paper["acm"] . "\">ACM version</a> | ");
    }
    print "<a href=\"bibtex-" . $pid . ".html\">bibtex</a>";
  ?>]
  </p>

  <?php
    if (array_key_exists("abstract",$paper)) {
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
      if (array_key_exists("volume",$paper)) {
	print "Volume " . $paper["volume"] . " of ";
      }
      print $paper["series"] . ", " . $paper["publisher"] . ", ";
      print $paper["year"];
    } else if ($paper["type"] == "proceedings") {
      if (array_key_exists("volume",$paper)) {
	print "Volume " . $paper["volume"] . " of ";
      }
      print $paper["series"] . ", " . $paper["publisher"] . ", ";
      print $paper["year"];
    } else {
      if (array_key_exists("accepted",$paper)) {
	print "<b>Accepted for publication in:</b> ";
      } else if (array_key_exists("toappear",$paper)) {
	print "<b>To appear in:</b> ";
      } else {
	print "<b>In:</b> ";
      }
      if (array_key_exists("editor",$paper)) {
	print get_editor($paper) . ", ";
      }
      if (array_key_exists("booktitle",$paper)) {
	print "<i>" . $paper["booktitle"] . "</i>";
      } else if (array_key_exists("journal",$paper)) {
	print "<i>" . $paper["journal"] . "</i>";
        if (array_key_exists("volume",$paper) && 
            array_key_exists("number",$paper)) {
          print " " . $paper["volume"] . "(" . $paper["number"] . ")";
        }
      }
      if (($paper["type"] == "workshop" ||
           $paper["type"] == "conference") &&
           array_key_exists("address",$paper)) {
	print ", " . "<i>" . $paper["address"] . "</i>";
      }
      if (array_key_exists("series",$paper)) {
	if (array_key_exists("volume",$paper)) {
	  print ", volume " . $paper["volume"] . " of " . $paper["series"];
	} else {
	  print ", " . $paper["series"]; 
	}
      }
      if (array_key_exists("pages",$paper)) {
	print ", pages " . $paper["pages"][0] . "-" . $paper["pages"][1] . ". ";
      } else {
	print ". "; 
      }
      if (array_key_exists("publisher",$paper)) {
	print $paper["publisher"] . ", ";
      }
      if (array_key_exists("month",$paper)) {
	print get_month($paper) . ", ";
      }
      print $paper["year"] . ". ";
      if (array_key_exists("DOI",$paper)) {
        print "<a href=\"http://dx.doi.org/" . $paper["DOI"] . "\">DOI " . $paper["DOI"] . "</a>.";
      }
      if (array_key_exists("note",$paper)) {
        print "</p><p>" . $paper["note"] . ".";
      }
      if (array_key_exists("copyright",$paper)) {
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
