<?php

$R_PCM  = "pc member";
$R_SPCM  = "senior pc member";
$R_CORG = "co-organizer";
 
$conf_org =
array(      
      "CC" =>
      array("name" => "International Conference on Compiler Construction",
	    "data" => array(
            array("year"  => 2020,
                  "month" => "FEB",
                  "role"  => $R_PCM,
                  "url"   => "https://conf.researchr.org/home/CC-2020",
		  "place" => "San Diego, CA, USA"))),

      "AAAI" =>
      array("name" => "AAAI Conference on Artificial Intelligence",
	    "data" => array(
            array("year"  => 2020,
                  "month" => "FEB",
                  "role"  => $R_PCM,
		  "place" => "New York, NY, USA",
		  "url"   => "https://www.aaai.org/Conferences/AAAI-20/"),

            array("year"  => 2019,
                  "month" => "JAN",
                  "role"  => $R_PCM,
		  "place" => "Honolulu, HI, USA",
		  "url"   => "http://www.aaai.org/Conferences/AAAI-19/"),

            array("year"  => 2015,
                  "month" => "JAN",
                  "role"  => $R_PCM,
		  "place" => "Austin, TX, USA",
		  "url"   => "http://www.aaai.org/Conferences/AAAI/aaai15.php"),
            array("year"  => 2010,
                  "month" => "JUL",
                  "role"  => $R_PCM,
		  "place" => "Atlanta, GA, USA",
		  "url"   => "http://www.aaai.org/Conferences/AAAI/aaai10.php"),
            array("year"  => 2008,
                  "month" => "JUL",
                  "role"  => $R_PCM,
		  "place" => "Chicago, IL, USA",
		  "url"   => "http://www.aaai.org/Conferences/AAAI/aaai08.php"),
            array("year"  => 2007,
                  "month" => "JUL",
                  "role"  => $R_PCM,
		  "place" => "Vancouver, BC, Canada",
		  "url"   => "http://www.aaai.org/Conferences/AAAI/aaai07.php"))),
	
      "PAPP" =>
      array("name" => "Practical Aspects of High-Level Parallel Programming",
	    "data" => array(
            array("year"  => 2018,
                  "month" => "APR",
                  "role"  => $R_PCM,
                  "url"   => "http://frederic.loulergue.eu/PAPP2018/",
		  "place" => "Pau, France"))),

      "LCTES" =>
      array("name" => "ACM SIGPLAN/SIGBED Conference on Languages, Compilers, Tools and Theory for Embedded Systems (LCTES)",
	    "data" => array(
            array("year"  => 2019,
                  "month" => "JUN",
                  "role"  => $R_PCM,
                  "url"   => "https://conf.researchr.org/home/LCTES-2019",
		  "place" => "Phoenix, AZ, USA"),
            array("year"  => 2018,
                  "month" => "JUN",
                  "role"  => $R_PCM,
                  "url"   => "https://conf.researchr.org/home/LCTES-2018",
		  "place" => "Philadelphia, PA, USA"),
            array("year"  => 2017,
                  "month" => "JUN",
                  "role"  => $R_PCM,
		  "url"   => "http://conf.researchr.org/home/LCTES-2017",
		  "place" => "Barcelona, Spain"),
            array("year"  => 2016,
                  "month" => "JUN",
                  "role"  => $R_PCM,
		  "url"   => "http://lctes16.citi.sinica.edu.tw/",
		  "place" => "Santa Barbara, CA, USA"))),

      "IJCAI" =>
      array("name" => "International Joint Conference on Artificial Intelligence",
	    "data" => array(
            array("year"  => 2019,
                  "month" => "AUG",
                  "role"  => $R_PCM,
		  "place" => "Macao, China",
		  "url"   => "http://ijcai-19.org"),
            array("year"  => 2018,
                  "month" => "JUL",
                  "role"  => $R_SPCM,
		  "place" => "Stockholm, Sweden",
		  "url"   => "http://ijcai-18.org"),
            array("year"  => 2017,
                  "month" => "AUG",
                  "role"  => $R_SPCM,
		  "place" => "Melbourne, Australia",
		  "url"   => "http://ijcai-17.org"),
            array("year"  => 2015,
                  "month" => "JUL",
                  "role"  => $R_SPCM,
		  "place" => "Buenos Aires, Argentina",
		  "url"   => "http://ijcai-15.org"),
            array("year"  => 2013,
                  "month" => "AUG",
                  "role"  => $R_SPCM,
		  "place" => "Beijing, China",
		  "url"   => "http://www.ezconf.net/ijcai13/"),
            array("year"  => 2011,
                  "month" => "JUL",
                  "role"  => $R_PCM,
		  "place" => "Barcelona, Spain",
		  "url"   => "http://ijcai-11.iiia.csic.es/"))),
	
      "CP" => 
      array("name" => "International Conference on Principles and Practice of Constraint Programming",
	    "data" => array(
            array("year"  => 2019,
                  "month" => "SEP",
                  "role"  => $R_PCM,
                  "url"   => "http://cp2019.a4cp.org",
		  "place" => "Stamford, CT, USA"),
            array("year"  => 2018,
                  "month" => "AUG",
                  "role"  => $R_PCM,
                  "url"   => "http://cp2018.a4cp.org",
		  "place" => "Lille, France"),
            array("year"  => 2017,
                  "month" => "AUG",
                  "role"  => "pc member, application track",
                  "url"   => "http://cp2017.a4cp.org",
		  "place" => "Melbourne, Australia"),
            array("year"  => 2016,
                  "month" => "SEP",
                  "role"  => $R_PCM,
                  "url"   => "http://cp2016.a4cp.org",
		  "place" => "Toulouse, France"),
            array("year"  => 2015,
                  "month" => "SEP",
                  "role"  => $R_SPCM,
                  "url"   => "http://booleconferences.ucc.ie/cp2015",
		  "place" => "Cork, Ireland"),
            array("year"  => 2014,
                  "month" => "SEP",
                  "role"  => $R_SPCM,
                  "url"   => "http://cp2014.a4cp.org",
		  "place" => "Lyon, France"),
            array("year"  => 2013,
                  "month" => "SEP",
                  "role"  => "program chair",
                  "url"   => "http://cp2013.a4cp.org",
		  "place" => "Uppsala, Sweden"),
            array("year"  => 2012,
                  "month" => "OCT",
                  "role"  => $R_PCM,
		  "place" => "Québec City, Canada",
		  "url"   => "http://www.cp2012.org/"),
            array("year"  => 2011,
                  "month" => "SEP",
                  "role"  => "workshop/tutorial chair, pc member",
		  "place" => "Perugia, Italy",
		  "url"   => "http://www.dmi.unipg.it/cp2011/"),
            array("year"  => 2010,
                  "month" => "SEP",
                  "role"  => $R_PCM,
		  "place" => "St Andrews, UK",
		  "url"   => "http://cp2010.cs.st-andrews.ac.uk/"),
            array("year"  => 2008,
                  "month" => "SEP",
                  "role"  => $R_PCM,
		  "place" => "Sydney, Australia",
		  "url"   => "http://www.cs.mu.oz.au/cp2008/"),
            array("year"  => 2007,
                  "month" => "SEP",
                  "role"  => $R_PCM,
		  "place" => "Providence, RI, USA",
		  "url"   => "http://www.cp2007.org/"),
            array("year"  => 2006,
                  "month" => "SEP",
                  "role"  => "publicity chair, pc member",
		  "place" => "Nantes, France",
		  "url"   => "http://www.sciences.univ-nantes.fr/cp06/"),
            array("year"  => 2005,
                  "month" => "OCT",
                  "role"  => $R_PCM,
		  "place" => "Sitges (Barcelona), Spain"),
            array("year"  => 2002,
                  "month" => "SEP",
                  "role"  => $R_PCM,
                  "place" => "Ithaca, NY, USA",
		  "url"   => "http://www.cs.cornell.edu/cp2002/"),
            array("year"  => 2001,
                  "month" => "NOV",
                  "role"  => $R_PCM,
                  "place" => "Paphos, Cyprus",
		  "url"   => "http://www2.cs.ucy.ac.cy/~iclpcp01/CP01home.html"),
            array("year"  => 2000,
                  "month" => "SEP",
                  "place" => "Singapore",
                  "role"  => $R_PCM))),

      "CASES" =>
      array("name" => "International Conference on Compilers, Architecture, and Synthesis of Embedded Systems",
	    "data" => array(
            array("year"  => 2019,
                  "month" => "OCT",
                  "role"  => $R_PCM,
                  "url"   => "https://www.esweek.org/cases/",
		  "place" => "New York City, NY, USA"),
            array("year"  => 2018,
                  "month" => "SEP",
                  "role"  => $R_PCM,
                  "url"   => "https://www.esweek.org/cases/",
		  "place" => "Turin, Italy"))),

      "CPAIOR" =>
      array("name" => "International Conference on Integration of AI and OR Techniques in Constraint Programming for Combinatorial Optimisation Problems",
	    "data" => array(
            array("year"  => 2017,
                  "month" => "JUN",
                  "role"  => $R_PCM,
                  "url"   => "http://cpaior2017.dei.unipd.it",
		  "place" => "Padova, Italy"),
            array("year"  => 2016,
                  "month" => "MAY",
                  "role"  => $R_PCM,
		  "place" => "Banff, Canada",
		  "url"   => "https://symposia.cirrelt.ca/CPAIOR2016/en"),
            array("year"  => 2014,
                  "month" => "MAY",
                  "role"  => $R_PCM,
		  "place" => "Cork, Ireland",
		  "url"   => "http://4c.ucc.ie/cpaior2014/"),
            array("year"  => 2013,
                  "month" => "MAY",
                  "role"  => $R_PCM,
		  "place" => "Yorktown Heights, NY, USA",
		  "url"   => "http://www.cis.cornell.edu/ics/cpaior2013/"),
            array("year"  => 2004,
                  "month" => "APR",
                  "role"  => $R_PCM,
		  "place" => "Nice, France",
		  "url"   => "http://www-sop.inria.fr/coprin/cpaior04/"))),

      "ECAI" =>
      array("name" => "European Conference on Artificial Intelligence",
	    "data" => array(
            array("year"  => 2012,
                  "month" => "AUG",
                  "role"  => $R_PCM,
		  "place" => "Montpellier, France",
		  "url"   => "http://www2.lirmm.fr/ecai2012/"),
            array("year"  => 2008,
                  "area"  => "Constraints and search",
                  "month" => "JUL",
                  "role"  => $R_PCM,
		  "place" => "Patras, Greece",
		  "url"   => "http://www.ece.upatras.gr/ecai2008/"))),

      "APLAS" =>
      array("name" => "Asian Symposium on Programming Languages and Systems",
	    "data" => array(
            array("year"  => 2010,
                  "month" => "NOV",
                  "role"  => $R_PCM,
		  "place" => "Shanghai, China",
		  "url"   => "http://basics.sjtu.edu.cn/conference/aplas2010/"))),
	
      "AI" =>
      array("name" => "Australian Joint Conference on Artificial Intelligence",
	    "data" => array(
            array("year"  => 2007,
                  "month" => "DEC",
                  "role"  => $R_PCM,
		  "place" => "Gold Coast, Queensland, Australia",
		  "url"   => "http://www.austai.org"))),
	
      "PPDP" =>
      array("name" => "International Conference on Principles and Practice of Declarative Programming",
	    "data" => array(
            array("year"  => 2007,
                  "month" => "JUL",
                  "role"  => $R_PCM,
		  "place" => "Wroc&#322;aw, Poland",
		  "url"   => "http://ppdp07.ii.uni.wroc.pl/"),
            array("year"  => 2006,
                  "month" => "MAR",
                  "role"  => $R_PCM,
		  "place" => "Venice, Italy",
		  "url"   => "http://www.dsi.unive.it/ppdp2006/"),
            array("year"  => 2003,
                  "month" => "AUG",
                  "role"  => "publicity chair",
		  "place" => "Uppsala, Sweden",
		  "url"   => "http://www.it.uu.se/ppdp03/"),
            array("year"  => 2001,
                  "month" => "SEP",
                  "role"  => $R_PCM,
		  "place" => "Florence, Italy",
		  "url"   => "http://music.dsi.unifi.it/pli01/ppdp/"))),

      "PADL" =>
      array("name" => "International Symposium on Practical Aspects of Declarative Languages",
            "data" => array(
            array("year"  => 2007,
                  "month" => "JAN",
                  "role"  => $R_PCM,
                  "place" => "Nice, France",
                  "url"   => "http://www.informatik.uni-kiel.de/~mh/padl07/"),
            array("year"  => 2006,
                  "month" => "JAN",
                  "role"  => $R_PCM,
                  "place" => "Charleston, SC, USA",
                  "url"   => "http://www.cs.brown.edu/people/pvh/PADL06.html"))),
                  
      "ICLP" =>
      array("name" => "International Conference on Logic Programming",
	    "data" => array(
            array("year"  => 2006,
                  "month" => "AUG",
                  "role"  => "workshop chair",
		  "place" => "Seattle, WA, USA",
		  "url"   => "http://www.cs.uky.edu/iclp06/"),
            array("year"  => 2002,
                  "month" => "JUL",
                  "role"  => $R_PCM,
		  "place" => "Copenhagen, Denmark",
		  "url"   => "http://floc02.diku.dk/ICLP/"))),
	
      "MOZ" =>
      array("name" => "International Mozart/Oz Conference",
	    "data" => array(
            array("year"  => 2004,
                  "month" => "OCT",
                  "role"  => $R_PCM,
		  "place" => "Charleroi, Belgium"))),
	

      "CL" =>
      array("name" => "International Conference on Computational Logic",
	    "data" => array(
            array("year"  => 2000,
                  "month" => "JUL",
                  "role"  => "pc member, constraint stream",
		  "place" => "London, UK",
		  "url"   => "http://www.doc.ic.ac.uk/cl2000/")))

);



$ws_org =
array(
      "MCC" => 
      array("name" => "Nordic Workshop on Multi-Core Computing",
	    "data" => array(
            array("year"  => 2019,
                  "month" => "NOV",
                  "role"  => "pc member",
                  "url"   => "https://sites.google.com/view/mcc2019",
		  "place" => "Karlskrona, Sweden"),
            array("year"  => 2018,
                  "month" => "NOV",
                  "role"  => "pc member",
                  "url"   => "https://sites.google.com/site/mccworkshop2018/home",
		  "place" => "Gothenburg, Sweden"),
            array("year"  => 2017,
                  "month" => "DEC",
                  "role"  => "pc member",
                  "url"   => "https://www.it.uu.se/research/upmarc/events/MCC2017",
		  "place" => "Uppsala, Sweden"))
      ),

      "PaSeO" => 
      array("name" => "Parallel Methods for Search &amp; Optimization",
	    "data" => array(
            array("year"  => 2014,
                  "month" => "JUL",
                  "role"  => "pc member",
                  "url"   => "http://vsl2014.at/pages/ParSearchOpt-index.html",
		  "place" => "Vienna, Austria"))
      ),

      "CoCoMile" => 
      array("name" => "Workshop on combining constraint solving with mining and learning",
	    "data" => array(
            array("year"  => 2012,
                  "month" => "AUG",
                  "role"  => "pc member",
                  "url"   => "http://cocomile.disi.unitn.it/2012/",
		  "place" => "Montpellier, France"))
      ),

  "SweConsNet" =>
      array("name" => "Swedish Constraint Network Workshop",
	    "data" => array(
            array("year"  => 2014,
                  "month" => "JUN",
                  "role"  => "organizer",
		  "place" => "Kista, Sweden"),
            array("year"  => 2012,
                  "month" => "MAY",
                  "role"  => "organizer",
		  "place" => "Örebro, Sweden"),
            array("year"  => 2006,
                  "month" => "MAR",
                  "role"  => "organizer",
		  "place" => "Kista, Sweden"))),

      "DAMP" => 
      array("name" => "International Workshop on Declarative Aspects of Multicore Programming",
	    "data" => array(
            array("year"  => 2012,
                  "month" => "JAN",
                  "role"  => "pc member",
                  "url"   => "http://www.mpi-sws.org/~umut/damp2012/",
		  "place" => "Philadelphia, PA, USA"))
      ),

  "PMCS" =>
      array("name" => "Workshop on Parallel Methods for Constraint Solving",
	    "data" => array(
            array("year"  => 2011,
                  "month" => "SEP",
                  "role"  => $R_PCM,
		  "place" => "Perugia, Italy",
                  "url"   => "http://webia.lip6.fr/~codognet/PMCS11"))),

  "LoCoCo" =>
      array("name" => "Workshop on Logics for Component Configuration",
	    "data" => array(
            array("year"  => 2010,
                  "month" => "JUL",
                  "role"  => $R_PCM,
		  "place" => "Edinburgh, Scotland",
                  "url"   => "http://lococo2010.mancoosi.org/"))),

  "Open Source Tools for Constraint Programming and Mathematical 
        Programming" =>
      array("name" => "Open Source Tools for Constraint Programming and Mathematical 
        Programming",
	    "data" => array(
            array("year"  => 2010,
                  "month" => "JUN",
                  "role"  => $R_PCM,
		  "place" => "Bologna, Italy",
                  "url"   => "http://coral.ie.lehigh.edu/~cpaior/"))),

      "TRICS" =>
      array("name" => "Techniques for Implementing Constraint Programming Systems",
	    "data" => array(
            array("year"  => 2010,
                  "month" => "SEP",
                  "role"  => $R_PCM,
                  "url"   => "http://www.cs.kuleuven.be/~guido.tack/2010TRICS/",
		  "place" => "St Andrews, Scotland"),
            array("year"  => 2002,
                  "month" => "SEP",
                  "role"  => $R_CORG,
		  "place" => "Ithaca, NY, USA"),
            array("year"  => 2000,
                  "month" => "SEP",
                  "role"  => $R_CORG,
		  "place" => "Singapore"))),

  "CP-TOOLS" =>
      array("name" => "International Days on Constraint Programming Tools",
	    "data" => array(
            array("year"  => 2006,
                  "month" => "SEP",
                  "role"  => $R_CORG,
		  "place" => "Nantes, France"))),

   "CICLOPS" =>
      array("name" => "Colloquium on Implementation of Constraint and Logic Programming Systems",
	    "data" => array(
            array("year"  => 2006,
                  "month" => "AUG",
                  "role"  => $R_PCM,
		  "place" => "Seattle, WA, USA",
		  "url"   => "http://www.cs.nmsu.edu/lldap/CICLOPS06/"),
            array("year"  => 2005,
                  "month" => "OCT",
                  "role"  => $R_CORG,
		  "place" => "Sitges (Barcelona), Spain",
		  "url"   => "http://www.dcc.fc.up.pt/ciclops05/"),
            array("year"  => 2004,
                  "month" => "SEP",
                  "role"  => $R_PCM,
		  "place" => "Saint-Malo, France",
		  "url"   => "http://clip.dia.fi.upm.es/Conferences/CICLOPS-2004/"),
            array("year"  => 2003,
                  "month" => "DEC",
                  "role"  => $R_PCM,
		  "place" => "Mumbai, India"),
            array("year"  => 2002,
                  "month" => "JUL",
                  "role"  => $R_PCM,
		  "place" => "Copenhagen, Denmark",
		  "url"   => "http://www.cs.kuleuven.ac.be/~bmd/ciclops02.html"),
            array("year"  => 2001,
                  "month" => "NOV",
                  "role"  => $R_PCM,
		  "place" => "Paphos, Cyprus",
		  "url"   => "http://www.CS.NMSU.Edu/~complog/conferences/iclp01/"))),
	
      "COSOLV" =>
      array("name" => "Cooperative Solvers in Constraint Programming",
            "data" => array(
            array("year"  => 2005,
                  "month" => "OCT",
                  "role"  => $R_PCM,
		  "place" => "Sitges (Barcelona), Spain",
                  "url"   => "http://www.sciences.univ-nantes.fr/info/perso/permanents/granvil/cosolv/2005/")
            )),

      "CoLogNet" =>
      array("name" => "Component-based Software Development and Implementation Technology for Computational Logic Systems",
	    "data" => array(
            array("year"  => 2003,
                  "month" => "SEP",
                  "role"  => $R_PCM,
		  "place" => "Pisa, Italy",
		  "url"   => "http://clip.dia.fi.upm.es/COLOGNET-WS/"))),

      "MultiCPL" =>
      array("name" => "Multiparadigm Constraint Programming Languages",
	    "data" => array(
            array("year"  => 2002,
                  "month" => "SEP",
                  "role"  => $R_PCM,
		  "place" => "Ithaca, NY, USA",
		  "url"   => "http://uebb.cs.tu-berlin.de/~ph/MultiCPL02/"))),

      "Analysis and Visualization of Constraint Programs and Solvers" =>
      array("name" => "Analysis and Visualization of Constraint Programs and Solvers",
	    "data" => array(
            array("year"  => 2000,
                  "month" => "SEP",
                  "role"  => $R_CORG,
		  "place" => "Singapore",
		  "url"   => "http://www.pms.informatik.uni-muenchen.de/ereignisse/debug.html"))),

      "Tools and Environments for (Constraint) Logic Programming" =>
      array("name" => "Tools and Environments for (Constraint) Logic Programming",
	    "data" => array(
            array("year"  => 1997,
                  "month" => "OCT",
                  "role"  => $R_CORG,
		  "place" => "Port Jefferson, NY, USA",
		  "url"   => "http://www.clip.dia.fi.upm.es/Tools_Environ/call_for_papers.html"))),


      "Concurrent Constraint Programming" =>
      array("name" => "Concurrent Constraint Programming",
	    "data" => array(
            array("year"  => 1993,
                  "month" => "JUN",
                  "role"  => $R_CORG,
		  "place" => "Budapest, Hungary")))

);

function print_org ($org) {
   print "<ul>";
   foreach ($org as $acro => $series) {
      print "<li>" . $series["name"];
      print "<div class=\"lit\">";
      $text = array();
      foreach ($series["data"] as $i => $event) {
         $name = $acro . " " . $event["year"];
         if ($event["url"] != "") {
            $name = "<a href=\"" . $event["url"] . "\">" . $name . "</a>";
         }
         $text[$i] = $name . " (" . $event["role"] . ")";
      }
      print implode($text, ",\n");
      print ".</div></li>";
   }
   print "</ul>";
}

?>
