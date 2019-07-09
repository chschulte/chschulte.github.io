<?php

function get_title($p) {
  $title = $p["title"];
  $title = str_replace("{","",$title);
  $title = str_replace("}","",$title);
  return $title;
}

function get_authors($p) {
    global $authors;
    $ma = array();
    if ($p["type"] == "proceedings") {
      $a = $p["editor"][0];
      return ("<a href=\"" . $authors[$a]["href"] . "\">" .
  	      $authors[$a]["name"] . " (Ed.)</a>");
    } else {
      foreach ($p["author"] as $i => $a) {
        $name = $authors[$a]["name"];
        if (array_key_exists("href",$authors[$a])) {
           $ma[$i] = ("<a href=\"" . $authors[$a]["href"] . "\">" .
  		    $name . "</a>");
        } else {
           $ma[$i] =  $name;
        }
      }
      return implode($ma,", ");
   }
}

function get_editor($p) {
    $e = implode($p["editor"],", ");
    if (count($p["editor"]) == 1) {
       return $e . ", editor";
    } else {
       return $e . ", editors";
    }
}

function get_month($p) {
    global $months;
    if (array_key_exists($p["month"],$months)) {
       return $months[$p["month"]];
    } else {
       return $p["month"];
    }
}


?>