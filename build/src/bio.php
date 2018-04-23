<?php
  include 'defaults.php';
  include 'data/organizational.php';
  include 'data/external.php';
  page_header("bio");
?>

<div id="content">

<p class="navig">
[<a href="#projects">grants</a> |
 <a href="#awards">awards</a> |
 <a href="#conference">conferences</a> |
 <a href="#workshop">workshops</a> |
 <a href="#schools">graduate schools</a> |
 <a href="#edit">editorial</a> |
 <a href="#thesis">external examiner</a> |
 <a href="#misc">misc</a> |
 <a href="#degrees">degrees</a> |
 <a href="#work">work</a>]
</p>

  <h2 id="projects">Recent Grants</h2>

  <ul>
  <li><a href="https://strategiska.se/forskning/pagaende-forskning/big-data-och-berakningsvetenskap/projekt/8208/">Continuous Deep Analytics</a>, Swedish Foundation for Strategic Research (SSF), BD15-0006, 2017&ndash;2021. Volume: 33000 KSEK, role: co-principal investigator.</li>
  <li>Grant for being placed part time at LM Ericsson AB, 2015&ndash;2016. Volume: 150 KSEK. Part of <a href="https://www.kth.se/samverkan/kloss/kloss-akut/om-kloss-akut-1.586315">KLOSS AkUt</a>.</li>
  <li>Constraint-based compiler backend, LM Ericsson AB [conducted at SICS], 2015&ndash;2017. Volume: 5760 KSEK, role: principal investigator.</li>
  <li>Conference grant for <a href="http://cp2013.a4cp.org">CP 2013</a>.
Swedish Research Council (VR), 624-2013-6330, 2013. Volume: 60 KSEK, role: grant holder (as program chair of CP 2013).</li>
  <li>Constraint-based compiler backend, LM Ericsson AB [conducted at SICS], 2013&ndash;2015. Volume: 5800 KSEK, role: principal investigator.</li>
  <li><a href="projects/unison.html">Unison: Robust, Scalable, and Open Code Generation by Combinatorial Problem Solving</a>, Swedish Research Council (VR), 621-2011-6229, 2012&ndash;2014. Volume: 2400 KSEK, role: principal investigator.</li>
  <li>Constraint-based compilation, LM Ericsson AB [conducted at SICS], 2012&ndash;2013. Volume: 4100 KSEK, role: principal investigator.</li>
  <li>Constraint-based compilation, LM Ericsson AB [conducted at SICS], 2010&ndash;2012. Volume: 3700 KSEK, role: principal investigator.</li>
  <li><a href="projects/cocoprop.html">Coordinating Constraint Propagation</a>,      Swedish Research Council (VR), 621-2004-4953, 2005&ndash;2007. Volume: 1875 KSEK, role: principal investigator.</li>
  </ul>

  <h2 id="awards">Awards, Prizes, and Competition Entries</h2>

     <ul>
     <li>Gold medal winner MiniZinc Challenge (all categories)
     <a href="http://www.g12.cs.mu.oz.au/minizinc/challenge2012/results2012.html">2012</a>,
     <a href="http://www.g12.cs.mu.oz.au/minizinc/challenge2011/results2011.html">2011</a>,
     <a href="http://www.g12.cs.mu.oz.au/minizinc/challenge2010/results2010.html">2010</a>, 
     <a href="http://www.g12.cs.mu.oz.au/minizinc/challenge2009/results2009.html">2009</a>,
     <a href="http://www.g12.csse.unimelb.edu.au/minizinc/results.html">2008</a> (using <a href="software.html#gecode">Gecode</a>, with Mikael Lagerkvist, 
         Guido Tack).</li>
     <li>Teacher of the year 2009, 2003 for the IT program, KTH Royal Institute of Technology, Sweden.</li>
     <li>Winner of the Prolog Programming Contest 2003 (with Vitaly Lagoon, Peter J. Stuckey), 2002 (with Kostis Sagonas, Peter J. Stuckey).</li>
     <li>Best application <a href="paper.html?id=DrejhammarSchulteEa:ICLP:2003">paper</a> award, ICLP 2003.</li>
     </ul>

  <h2 id="conference">Conference Involvement</h2>

     <?php print_org($conf_org); ?>


  <h2 id="workshop">Workshop Involvement</h2>

     <?php print_org($ws_org); ?>


  <h2 id="schools">Graduate Schools</h2>


    <ul>
    <li>Invited lecturer, The Solver Side of Constraint Programming.
<a href="http://school.a4cp.org/summer2018/">ACP Summerschool 2018</a>, Jackson, WY, USA. June 2018
    </li>
    <li>Co-organizer, ACP Summer School 2011: Hybrid Methods for Constraint Programming, Turunç, Turkey,
       June/July 2011.
    </li>
    <li>Invited lecturer, Constraint Programming Systems.
<a href="http://www.iiia.csic.es/summerschools/sscp2007/">Third International Summer School on Constraint Programming</a>, Lloret de Mar, Spain, June 2007.
    </li>
    </ul>



  <h2 id="edit">Editorial Work</h2>

    <ul>
    <li>Member of editorial board, 
        <a href="http://www.springer.com/computer/ai/journal/10601"
        >Constraints</a>, 2011-2013; Letters editor, 2014-2017.
    </li>
    <li>Member of editorial board, 
        <a href="http://www.constraint-programming-letters.org/"
        >Constraint Programming Letters</a> (area editor: programming systems and implementation).
    </li>
    </ul>

  <h2 id="thesis">External Thesis Examiner</h2>

     <ul>
     <?php
$months = array("January","Februray","March","April","May","June",
                "July","August","September","October","November",
                "December");
foreach ($external as $i => $e) {
  print "<li>"; 
  print $e["name"] . ", " . $e["title"] . ", ";
  print $months[$e["date"][1]-1] . " " . $e["date"][2] . ". ";
  print $e["role"] . " defense, " . $e["where"] . ".";
  print "</li>";
}
     ?>
     </ul>

  <h2 id="misc">Miscellaneous</h2>

  <ul>
  <li>Member of Research Advisory Board of <a href="http://www.friartuck.net">Friar Tuck Corporation</a>, a company in constraint-based event scheduling.</li>
  <li>Elected member of the Executive Committee of the <a href="http://slash.math.unipd.it/acp/">Association for Constraint Programming</a> (2006-2009).</li>
  </ul> 

  <h2 id="degrees">Degrees</h2>

     <ul>
     <li>Docent in Computer Systems, School of Information and Communication Technology, KTH Royal Institute of Technology, Sweden, 2009.</li>
     <li>Dr.-Ing., Naturwissenschaftlich-Technische Fakultät I, Saarland University, Germany, 2001.</li>
     <li>Diplom in Informatik (computer science), Institut
	für Logik, Komplexität und Deduktionssysteme, Universität
	Karlsruhe (TH), Germany, 1992.</li>
     </ul> 

  <h2 id="work">Work Experience</h2>

    <ul>
    <li>Since January 2013, program director for the graduate program "Information and Communication Technology".</li>
    <li>Since July 2012,
     professor, <a href="http://www.kth.se/"
    >KTH Royal Institute of Technology</a>, Sweden.</li>
    <li>Since August 2010, expert researcher (part-time) at the <a
    href="http://www.sics.se/csl">Computer Systems Laboratory</a>
    of the <a href="http://www.sics.se/">Swedish Institute of
    Computer Science (SICS)</a>.</li>
    <li>January 2017 - December 2017, director of studies (doctoral level) for the department Software and Computer Systems.</li>
    <li>April 2015 - December 2017, deputy head of recruitment committee ICT (School of Information and Communication Technology), KTH Royal Institute of Technology.</li>
    <li>May 2014 - December 2017, deputy head of docent (academic degree roughly equivalent to habilitation) committee ICT (School of Information and Communication Technology), KTH Royal Institute of Technology.</li>
    <li>March 2013 - June 2017. Elected member of strategic council (strategiska rådet), School of Information and Communication Technology, KTH Royal Institute of Technology.</li> 
    <li>October 2013 - March 2015, member of appointments committee CSC/ICT (School of Computer Science and Communication and School of Information and Communication Technology), KTH Royal Institute of Technology.</li>
    <li>April 2002 - June 2012,
     associate professor, <a href="http://www.kth.se/"
    >KTH Royal Institute of Technology</a>, Sweden.</li>
    <li>February 2010 - March 2012, director of undergraduate studies (master/advanced level).</li>
    <li>April 1999 - March 2002, researcher, <a
        href="http://www.ps.uni-sb.de/">Programming Systems Lab</a>, <a
        href="http://www.uni-sb.de/">Saarland University</a>, 
        Germany.</li>
    <li>October 1992 - March 1999, researcher, <a
    href="http://www.dfki.de">German Research Center for
    Artificial Intelligence (DFKI)</a>. Project leader from June
    1995.</li>
    </ul>

</div>

<?php
  page_footer("bio");
?>
