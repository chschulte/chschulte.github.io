<?php
  include 'defaults.php';
  include 'data/courses.php';
  include 'data/students.php';
  page_header("education");
  $full  = $_GET["full"];
?>

<div id="content">

<p class="navig">
[<a href="#courses">courses</a> |
 <a href="#doctoral">doctoral students</a> |
 <a href="#master">master students</a> |
 <a href="#bachelor">bachelor students</a>]
</p>

<h2 id="courses">Courses</h2>

<ul>
<?php
foreach ($courses as $code => $info) {
   if ($info["hide"] && !$full) {
      continue;
   }
   if ($info["url"]) {
      $u = $info["url"];
   } else {
      $u = "http://www.ict.kth.se/courses/$code/";
   }
   if ($info["prevprev"]) {
      $prevprev = $info["prevprev"];
      $prev = $info["prev"];
      $c = "$code, $prev, $prevprev";
   } else if ($info["prev"]) {
      $prevprev = "gaga";
      $prev = $info["prev"];
      $c = "$code, $prev";
   } else {
      $prevprev = "gaga";
      $prev = "gaga";
      $c = "$code";
   }
   print "<li>";
   if (!$full) {
     $limit = 3;
   } else {
     $limit = 1000;
   }
   print ("<a href=\"$u\">" .
	  $info["name"] . " (" . $c . ")</a>, " .
          $info["inst"] . ".");
   foreach ($info["data"] as $i => $c) {
      $limit--;
      if ($limit <= 0) {
        continue;
      }
      $d = $info["dur"];
      $y = $c["year"];
      $ye = $y+1;
      $p = $c["period"];
      $evalf1 = "teaching/evaluation/$code-$y-$p.pdf";
      $evalf2 = "teaching/evaluation/$prev-$y-$p.pdf";
      $evalf3 = "teaching/evaluation/$prevprev-$y-$p.pdf";
      $time = "";
      if ($d > 1) {
         $e = $p+$d-1;
         if ($p > 2) {
           $time = "$y/<strong>$ye</strong>, periods $p-$e";
         } else if ($p+$d-1 > 2) {
           $e = $p+$d-1;
           $time = "<strong>$y</strong>/<strong>$ye</strong> periods $p-$e";
         } else {
           $time = "<strong>$y</strong>/$ye, periods $p-$e";
         }
      } else {
         if ($p > 2) {
           $time = "$y/<strong>$ye</strong>, period $p";           
         } else {
           $time = "<strong>$y</strong>/$ye, period $p";
         }
      } 
      $text = $time . ", " . $c["role"];
      if (file_exists("$docroot/$evalf1")) {
         $text = $text . " [<a href=\"$evalf1\">evaluation</a>]";
      }
      if (file_exists("$docroot/$evalf2")) {
         $text = $text . " [<a href=\"$evalf2\">evaluation</a>]";
      }
      if (file_exists("$docroot/$evalf3")) {
         $text = $text . " [<a href=\"$evalf3\">evaluation</a>]";
      }
      print "<br />" . $text;
   }
   print "</li>";
}
?>
</ul>

<?php
  if (!$full) {
?>
   <p class="readmore">
     <a href="education.html?full=1">more courses</a> &raquo;
   </p>
<?php
  }
?>


<?php
  if ($full) {
print <<<EOT
     <ul>
     <li><a href="http://www.ps.uni-sb.de/courses/gc-ws01/"
         >Seminar Garbage Collection</a>, 
         Saarland University, WS 2001/02.</li>
     <li><a href="http://www.ps.uni-sb.de/courses/lsv-ss01/"
         >Logik, Semantik und Verifikation</a>, 
         Saarland University, SS 2001.</li>
     <li><a href="http://www.ps.uni-sb.de/courses/lsv-ss00/"
         >Logik, Semantik und Verifikation</a>, 
         Saarland University, SS 2000.</li>
     <li><a href="http://www.ps.uni-sb.de/courses/typen-ws99/"
         >Seminar Typsysteme</a>, 
         Saarland University, WS 1999/2000.</li>
     <li><a href="http://www.ps.uni-sb.de/courses/java-ws97.html"
         >Java-Seminar</a>, 
         Saarland University, WS 1997/1998.</li>
     <li><a href="http://www.ps.uni-sb.de/courses/info-i.html"
         >Informatik I (Computer Science I)</a>, 
         Saarland University, WS 1995/1996.</li>
     <li><a href="http://www.ps.uni-sb.de/courses/lp-course93.html"
         >Logische Programmierung (Logic Programming)</a>, 
         Saarland University, SS 1993.</li>
     </ul>

EOT
;
  }
?>

<h2 id="doctoral">Doctoral Students</h2>
      
     <ul>
     <li><a href="https://www.kth.se/profile/diarmuid/">Diarmuid Corcoran</a>, 
         KTH Royal Institute of Technology, Sweden.
     </li>
     <li><a href="http://web.ict.kth.se/~ghb/">Gabriel Hjort Blindell</a>, 
         KTH Royal Institute of Technology, Sweden.
     </li>
     <li><a href="http://www.sics.se/~rcas/">Roberto Casta�eda Lozano</a>, 
         KTH Royal Institute of Technology, Sweden.
         <div class="lit"
         ><a href="http://urn.kb.se/resolve?urn=urn:nbn:se:kth:diva-154599">Integrated Register Allocation and Instruction Scheduling with Constraint Programming</a>. Licentiate degree, 2014.
         </div>
     </li>
     <li><a href="https://www.sics.se/people/akhila-rao">Akhila Rao</a>, 
         KTH Royal Institute of Technology, Sweden. Assistant supervisor.
     </li>
     <li><a href="http://people.kth.se/~dlunde/">Daniel Lund�n</a>, 
         KTH Royal Institute of Technology, Sweden. Assistant supervisor.
     </li>
     <li><a href="http://people.kth.se/~ugeorge/">George Ungureanu</a>, 
         KTH Royal Institute of Technology, Sweden. Assistant supervisor.
     </li>
     <li><a href="https://www.kth.se/profile/saranyan/">Saranya Natarajan</a>, 
         KTH Royal Institute of Technology, Sweden. Assistant supervisor.
     </li>
     <li><a href="https://www.kth.se/profile/dannmann/">Kathrin Rosvall</a>, 
         KTH Royal Institute of Technology, Sweden. Assistant supervisor.
     </li>
     <li><a href="https://www.kth.se/profile/kalavri/">Vasiliki Kalavri</a>, 
         KTH Royal Institute of Technology, Sweden. Assistant supervisor.
         <div class="lit"
         ><a href="http://urn.kb.se/resolve?urn=urn:nbn:se:kth:diva-145329">Performance Optimization Techniques and Tools for Data-Intensive Computation Platforms</a>. Licentiate degree, 2014.
         </div>
         <div class="lit"
         ><a href="http://urn.kb.se/resolve?urn=urn:nbn:se:kth:diva-192471">Performance Optimization Techniques and Tools for Distributed Graph Processing</a>. Doctoral degree, 2016. Winner of the <a href="https://www.kth.se/en/ict/nyheter/nyheter/doctor-vasiliki-kalavri-wins-prestigious-award-1.765657">IBM Innovation Award 2017</a>.
         </div>
     </li>
     <li><a href="http://www.kth.se/en/ict/2.11193/phd-katharina-rasch-1.422207">Katharina Rasch</a>,
         KTH Royal Institute of Technology, Sweden.
         <div class="lit"
         ><a href="http://urn.kb.se/resolve?urn=urn:nbn:se:kth:diva-129171">Smart assistants for smart homes</a>. Doctoral degree, 2013. Co-supervisor.
         </div>
     </li>
     <li><a href="http://www.bakicakici.com/">Baki Cakici</a>, 
         KTH Royal Institute of Technology, Sweden.
         <div class="lit"
         ><a href="http://urn.kb.se/resolve?urn=urn:nbn:se:kth:diva-33661">Disease surveillance systems</a>. Licentiate degree, 2011. Assistant supervisor.
         </div>
     </li>
     <li><a href="http://www.csse.monash.edu/~guidot/"
         >Guido Tack</a>, 
         Programming Systems Lab, Saarland University, Germany.
         <div class="lit"
         >
         <a href="http://www.ps.uni-sb.de/Papers/abstracts/tackDiss.html">Constraint Propagation: Models, Techniques,
         Implementation</a>. Doctoral degree, 2009.
         Guido's dissertation has won the
  <a href="http://www.a4cp.org/awards/doctoral-research-award">Doctoral Research Award</a> 2010 of the Association of Constraint
  Programming. Co-supervisor.
         </div>
     </li>
     <li><a href="http://web.ict.kth.se/~zayenz/">Mikael Lagerkvist</a>, 
         KTH Royal Institute of Technology, Sweden.
         <div class="lit"
         ><a href="http://urn.kb.se/resolve?urn=urn:nbn:se:kth:diva-9511">Techniques for Efficient Constraint Propagation</a>. Licentiate degree, 2008.
         </div>
     </li>
     <li><a href="http://www.hshl.de/vita-prof-dr-rene-krenz-baath"
         >Ren� Krenz-B��th</a>, 
         KTH Royal Institute of Technology, Sweden.
         <div class="lit"
         ><a href="http://urn.kb.se/resolve?urn=urn:nbn:se:kth:diva-4579">Dominator-based Algorithms in Logic Synthesis and Verification</a>. Doctoral degree, 2008.
          Co-supervisor. 
         </div>
     </li>
     <li>Dragan Havelka, 
         KTH Royal Institute of Technology, Sweden.
         <div class="lit"
         ><a href="http://urn.kb.se/resolve?urn=urn:nbn:se:kth:diva-282">Thread-based Mobility for a Distributed Dataflow Language</a>.
	  Licentiate degree, 2005.
          Co-supervisor.
         </div>
     </li>
     <li><a href="http://www.sics.se/~frej/"
         >Frej Drejhammar</a>, 
         KTH Royal Institute of Technology, Sweden.
         <div class="lit"
         ><a href="http://urn.kb.se/resolve?urn=urn:nbn:se:kth:diva-287">Flow Java: Declarative Concurrency for Java</a>. Licentiate degree, 
          2005.
          Co-supervisor.
         </div>
     </li>
     </ul>


     <h2 id="master">Master Students</h2>

	<ul>
<?php
if ($full) {
  $n = 10000;
} else {
  $n = 10;	
}
foreach ($mstudents as $i => $info) {
   if ($info["idle"] || ($n <= 0)) {
     continue;
   }
   $n--;
   print "<li>";
   $name = implode($info["name"], ", ");
   if ($info["purl"]) {
     print "<a href=\"" . $info["purl"] . "\">" . $name . "</a>";
   } else {
     print $name;
   }
   print ", ";
   if ($info["number"]) {
     if ($info["hidden"]) {
       print ($info["title"]);
     } else {
       print ("<a href=\"teaching/theses/" . str_replace("/","-",$info["number"]) . ".pdf\">" .
              $info["title"] . "</a>");
     }
   } else if ($info["url"]) {
     print ("<a href=\"" . $info["url"] . "\">" .
            $info["title"] . "</a>");
   } else {
     print $info["title"];
   }
   print ".<br />";
   print $info["inst"] . ", Master thesis, ";
   if ($info["number"]) {
      print $info["number"] . ", ";
   }
   if ($info["year"]) {
      print $info["year"];
   } else {
      print "ongoing";
   }
   print ".";
   if ($info["note"]) {
     print "<br>" . $info["note"] . ".";
   }
   print "</li>";
}
?>
</ul>

<?php
  if (!$full) {
?>
   <p class="readmore">
     <a href="education.html?full=1">more students</a> &raquo;
   </p>
<?php
  }
?>

     <h2 id="bachelor">Bachelor Students</h2>

	<ul>
<?php
if ($full) {
  $n = 10000;
} else {
  $n = 10;	
}
foreach ($bstudents as $i => $info) {
   if ($info["idle"] || ($n <= 0)) {
     continue;
   }
   $n--;
   print "<li>";
   $name = implode($info["name"], ", ");
   if ($info["purl"]) {
     print "<a href=\"" . $info["purl"] . "\">" . $name . "</a>";
   } else {
     print $name;
   }
   print ", ";
   if ($info["number"]) {
     if ($info["hidden"]) {
       print ($info["title"]);
     } else {
       print ("<a href=\"teaching/theses/" . str_replace("/","-",$info["number"]) . ".pdf\">" .
              $info["title"] . "</a>");
     }
   } else if ($info["url"]) {
     print ("<a href=\"" . $info["url"] . "\">" .
            $info["title"] . "</a>");
   } else {
     print $info["title"];
   }
   print ".<br />";
   print $info["inst"] . ", Bachelor thesis, ";
   if ($info["number"]) {
      print $info["number"] . ", ";
   }
   if ($info["year"]) {
      print $info["year"];
   } else {
      print "ongoing";
   }
   print ".";
   if ($info["note"]) {
     print "<br>" . $info["note"] . ".";
   }
   print "</li>";
}
?>
</ul>

<?php
  if (!$full) {
?>
   <p class="readmore">
     <a href="education.html?full=1">more students</a> &raquo;
   </p>
<?php
  }
?>

</div>

<?php
  page_footer("education");
?>







