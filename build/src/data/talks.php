<?php

$LEUVEN = "Leuven, Belgium";
$KISTA  = "Kista, Sweden";
$SICS   = "Swedish Insitute for Computer Science";
$PSLAB  = "Programming Systems Lab, Saarland University, Saarbrücken, Germany";
   
$talks =
array(
      array("title" =>   "Gecode - an open constraint solving library",
	    "address" => "NordConsNet Workshop, Gothenburg, Sweden",
            "slides" =>  "Gecode 2018.pdf",
            "type"  =>   "invited",
            "date" =>    array(29,5,2018)),

      array("title" =>   "Rethinking Code Generation in Compilers",
	    "address" => "Workshop on Constraint Solvers in Testing, Verification and Analysis, Melbourne, Australia",
            "slides" =>  "Code Generation CP2017.pdf",
            "type"  =>   "invited",
            "date" =>    array(28,8,2017)),

      array("title" =>   "Academic Recruitment 101",
	    "address" => "Doctoral Program, CP 2017, Melbourne, Australia",
            "slides" =>  "Academic Recruitment 101.pdf",
            "type"  =>   "invited",
            "date" =>    array(28,8,2017)),

      array("title" =>   "Rethinking Code Generation in Compilers",
	    "address" => "Data61 Decision Sciences Seminar, CSIRO, Melbourne, Australia",
            "slides" =>  "Code Generation Monash 2017.pdf",
            "type"  =>   "invited",
            "date" =>    array(24,2,2017)),

      array("title" =>   "Modeling and Solving Code Generation for Real",
	    "address" => "Lund University, Department of Computer Science, Sweden",
            "slides" =>  "Code Generation LU 2016.pdf",
            "type"  =>   "invited",
            "date" =>    array(3,11,2016)),

      array("title" =>   "Modeling and Solving Code Generation for Real",
	    "address" => "Theoretical Computer Science Seminar, KTH Royal Institute of Technology, Sweden",
            "slides" =>  "Code Generation KTH 2016.pdf",
            "type"  =>   "invited",
            "date" =>    array(11,4,2016)),

      array("title" =>   "The Constraint Programmer's Toolbox",
	    "address" => "Ericsson Research, Kista, Sweden",
            "type"  =>   "invited",
            "date" =>    array(27,11,2015)),

      array("title" =>   "Modeling and Solving Code Generation for Real",
	    "address" => "Université Paris Diderot (7), France",
            "slides" =>  "Paris 2015.pdf",
            "type"  =>   "invited",
            "date" =>    array(10,9,2015)),

      array("title" =>   "Modeling and Solving Code Generation for Real",
	    "address" => "ModRef 2015, Cork, Ireland",
            "slides" =>  "ModRef2015.pdf",
            "type"  =>   "invited",
            "date" =>    array(31,8,2015)),

      array("title" =>   "The Constraint Programmer's Toolbox",
	    "address" => "SweConsNet 2015, Chalmers, Göteborg, Sweden",
            "slides" =>  "SweConsNet2015.pdf",
            "type"  =>   "workshop",
            "date" =>    array(7,5,2015)),

      array("title" =>   "Generate Your Tools!",
            "type"  =>   "invited",
	    "event" =>   "Ericsson Software Technology Research",
            "address" => "Kista, Sweden",
            "date" =>    array(8,12,2014)),

      array("title" =>   "Rethinking Code Generation in Compilers",
            "slides" =>  "ECS 2014.pdf",
            "type"  =>   "conference",
	    "event" =>   "Embedded Conference Scandinavia",
            "address" => "Kista, Sweden",
            "date" =>    array(4,11,2014)),

      array("title" =>   "View-based Propagator Derivation",
            "slides" =>  "View-based Propagator Derivation CP 2014.pdf",
            "type"  =>   "conference",
            "event"  =>  "Twentieth International Conference on Principles and Practice of Constraint Programming",
	    "address" => "Lyon, France",
            "date" =>    array(11,9,2014)),

      array("title" =>   "Gecode - an open constraint solving library",
	    "address" => "IRILL - Research and Innovation on Free Software, Paris, France",
            "slides" =>  "Gecode - Irill.pdf",
            "type"  =>   "invited",
            "date" =>    array(19,3,2014)),

      array("title" =>   "The Constraint Programmer's Toolbox",
	    "address" => "Theoretical Computer Science Seminar, KTH Royal Institute of Technology, Sweden",
            "slides" =>  "CPToolboxKTH2014.pdf",
            "type"  =>   "invited",
            "date" =>    array(3,2,2014)),

      array("title" =>   "The Constraint Programmer's Toolbox",
	    "address" => "Optimization and Systems Theory Seminar, KTH Royal Institute of Technology, Sweden",
            "slides" =>  "CPToolboxKTH2013.pdf",
            "type"  =>   "invited",
            "date" =>    array(8,11,2013)),

      array("title" =>   "Implementing Counters with Decay",
	    "address" => "Techniques foR Implementing Constraint programming Systems, Uppsala, Sweden",
            "slides" =>  "Decaying Counters.pdf",
            "type"  =>   "workshop",
            "date" =>    array(16,9,2013)),

      array("title" =>   "Gecode - an open constraint solving library",
	    "address" => "CP Solvers: Modeling, Applications, Integration, and Standardization, Uppsala, Sweden",
            "slides" =>  "Gecode - CP Solvers.pdf",
            "type"  =>   "workshop",
            "date" =>    array(16,9,2013)),

      array("title" =>   "Rethinking Code Generation in Compilers",
            "slides" =>  "Linkoping2013.pdf",
            "type"  =>   "invited",
	    "address" => "Linköping University, Department of Computer and Information Science, Sweden",
            "event"  =>  "Software and Systems Research Seminar",
            "date" =>    array(5,9,2013)),

      array("title" =>   "Search Techniques",
            "type"  =>   "invited",
	    "address" => "<a href=\"http://www.tacton.com/\">Tacton AB</a>, Stockholm, Sweden",
            "date" =>    array(14,9,2012)),

      array("title" =>   "Gecode - an open constraint solving library",
            "slides" =>  "Gecode 2012.pdf",
            "type"  =>   "conference",
            "event"  =>  "International Symposium on Mathematical Programming",
	    "address" => "Berlin, Germany",
            "date" =>    array(22,8,2012)),

      array("title" =>   "Rethinking Code Generation in Compilers",
	    "address" => "SICS (" . $SICS . "), Open House, " . $KISTA,
            "slides" =>  "Rethinking Code Generation.pdf",
            "type"  =>   "workshop",
            "date" =>    array(26,4,2012)),

      array("title" =>   "Advanced Search Techniques",
	    "address" => "<a href=\"http://www.quintiq.com/\">Quintiq</a>, 's-Hertogenbosch, The Netherlands",
            "type"  =>   "invited",
            "date" =>    array(16,3,2012)),

      array("title" =>   "Confidence-based Work Stealing in Parallel Constraint Programming",
	    "address" => "TAO research group, INRIA Saclay &amp; CNRS &amp; LRI, Université Paris-Sud, France",
            "type"  =>   "invited",
            "date" =>    array(24,1,2012)),

      array("title" =>   "Constraint Programming: Strength and Challenges",
	    "address" => "Ericsson AB, Kista, Sweden",
            "type"  =>   "invited",
            "date" =>    array(5,10,2011)),

      array("title" =>   "Dynamic Variable Elimination During Propagation Solving",
            "type"  =>   "invited",
	    "address" => "Lund University, Department of Computer Science, Sweden",
            "date" =>    array(3,10,2011)),

      array("title" =>   "Dynamic Variable Elimination During Propagation Solving",
            "type"  =>   "workshop",
            "event"  =>  "Tenth SweConsNet Workshop",
	    "address" => "Örebro, Sweden",
            "date" =>    array(30,5,2011)),

      array("title" =>   "Gecode - an open constraint solving library",
            "slides" =>  "Gecode 2011.pdf",
            "type"  =>   "workshop",
            "event"  =>  "Constraint Programming meets Machine Learning and Data Mining",
	    "address" => "Dagstuhl, Germany",
            "date" =>    array(19,5,2011)),

      array("title" =>   "Dynamic Variable Elimination During Propagation Solving",
            "type"  =>   "invited",
	    "address" => "Universidade Nova de Lisboa, Lisbon, Portugal",
            "date" =>    array(10,12,2010)),

      array("title" =>   "Multicore Programming",
            "type" =>    "panel head",
            "event"  =>  "ICES Seminar",
	    "address" => "Kista, Sweden",
            "link" =>    "http://www.kth.se/en/itm/centra/ices/previous-events/multicore-programming-1.72773",
            "date" =>    array(24,11,2010)),

      array("title" =>   "Modeling with Regular",
            "type"  =>   "lecture",
	    "address" => "Uppsala University, Sweden",
            "date" =>    array(16,11,2010)),

      array("title" =>   "Standardisation in Constraint Programming",
            "type" =>    "panel",
            "event"  =>  "Fifteenth International Conference on Principles and Practice of Constraint Programming",
	    "address" => "Lisbon, Portugal",
            "date" =>    array(23,9,2009)),

      array("title" =>   "Constraint Programming for Real",
            "event" =>   "Swedish AI Workshop (SAIS)",
            "slides" =>  "CP_SAIS_2009.pdf",
            "type"  =>   "invited",
	    "address" => "Linköping, Sweden",
            "date" =>    array(27,5,2009)),

      array("title" =>   "Constraint Programming: Strength and Challenges",
	    "address" => "<a href=\"http://www.quintiq.com/\">Quintiq</a>, 's-Hertogenbosch, The Netherlands",
            "type"  =>   "invited",
            "date" =>    array(17,3,2009)),

      array("title" =>   "Constraint Programming Systems",
            "type"  =>   "lecture",
	    "address" => "École des Mines de Nantes, France",
            "date" =>    array(0,3,2009)),

      array("title" =>   "Dynamic Variable Elimination During Propagation Solving",
            "type"  =>   "invited",
	    "address" => "École des Mines de Nantes, France",
            "date" =>    array(23,2,2009)),

      array("title" =>   "Constraint Programming",
            "type"  =>   "invited",
	    "address" => "Scania, Södertälje, Sweden",
            "date" =>    array(11,2,2009)),

      array("title" =>   "Dynamic Variable Elimination During Propagation Solving",
            "type"  =>   "conference",
            "event" =>   "Tenth International ACM SIGPLAN Symposium on Principles and Practice of Declarative Programming",
	    "address" => "Valencia, Spain",
            "date" =>    array(23,7,2008)),

      array("title" =>   "Gecode: A Generic Constraint Development Environment",
            "type"  =>   "conference",
            "slides" =>  "CP2007 - Gecode.pdf",
            "event" =>   "Presentation of Recent CP Solvers, Thirteenth International Conference on Principles and Practice of Constraint Programming",
	    "address" => "Providence, RI, USA",
            "date" =>    array(25,9,2007)),

      array("title" =>   "Constraint Programming Systems",
            "type"  =>   "lecture",
            "event" =>   "Third International Summer School on Constraint Programming",
	    "address" => "Lloret de Mar, Spain",
            "date" =>    array(0,6,2007)),

      array("title" =>   "Constraint Programming... and Oz",
            "type"  =>   "lecture",
            "address" =>   "Department of Computer and Information Science, Linköping University, Sweden",
            "date" =>    array(25,4,2007)),

      array("title" =>   "Generating Propagators for Finite Set Constraints",
            "type"  =>   "invited",
            "event" =>   "CLA Distinguished Lecture Series",
	    "address" => "IT University, Copenhagen, Denmark",
            "date" =>    array(23,2,2007)),

      array("title" =>   "Constraint Programming: Introduction, State of the Art &amp; Trends",
            "type"  =>   "lecture",
	    "slides" =>  "ITU Copenhagen - Constraint Programming.pdf",
	    "address" => "IT University, Copenhagen, Denmark",
            "date" =>    array(22,2,2007)),

      array("title" =>   "Generating Propagators for Finite Set Constraints",
            "type"  =>   "workshop",
            "event"  =>  "Sixth SweConsNet Workshop",
	    "address" => "Uppsala, Sweden",
	    "date" =>    array(6,2,2007)),

      array("title" =>   "Gecode: A Generic Constraint Development Environment",
            "type"  =>   "conference",
            "slides" =>  "INFORMS - Gecode.pdf",
            "event" =>   "INFORMS Annual Meeting",
	    "address" => "Pittsburgh, PA, USA",
            "date" =>    array(5,11,2006)),

      array("title" =>   "System Design - Taking Informed Decisions",
            "type"  =>   "invited",
	    "slides" =>  "CP Tools - Taking Informed Decisions.pdf",	    
            "event" =>   "CP Tools 06 - First International Day on Constraint Programming Systems and Tools",
	    "address" => "Nantes, France",
            "date" =>    array(24,9,2006)),

      array("title" =>   "Technical Awareness &amp; Research Directions",
            "type"  =>   "panel",
            "event" =>   "CP Tools 06 - First International Day on Constraint Programming Systems and Tools",
	    "address" => "Nantes, France",
            "date" =>    array(24,9,2006)),

      array("title" =>   "Generating Propagators for Finite Set Constraints",
            "type"  =>   "invited",
	    "address" => "School of Computer Science and Engineering, University of New South Wales, Sydney, Australia",
            "date" =>    array(3,7,2006)),

      array("title" =>   "Generating Propagators for Finite Set Constraints",
            "type"  =>   "invited",
	    "address" => "Department of Computer Science and Software Engineering, Melbourne University, Australia",
            "date" =>    array(27,6,2006)),

      array("title" =>   "Views and Iterators for Generic Constraint Implementations",
            "type"  =>   "workshop",
            "event" =>   "CICLOPS 2005, Colloquium on Implementation of Constraint and LOgic Programming Systems",
            "address" => "Sitges, Spain",
            "date" =>    array(5,10,2005)),

      array("title" =>   "Challenges for Constraint Programming Systems",
            "type"  =>   "invited",
            "event" =>   "Second International Workshop on Constraint Propagation and Implementation",
            "address" => "Sitges, Spain",
            "date" =>    array(1,10,2005)),

      array("title" =>   "Modern Optimization Technology in Compilation",
            "type"  =>   "invited",
	    "address" => "BEA Systems Stockholm Engineering, Stockholm, Sweden",
	    "date" =>    array(5,4,2005)),
    
      array("title" =>   "Speeding Up Constraint Propagation",
            "type"  =>   "workshop",
            "event"  =>  "Fourth SweConsNet Workshop",
	    "address" => "Lund, Sweden",
	    "date" =>    array(7,3,2005)),
    
      array("title" =>   "Constraint Programming with Mozart - An Appetizer",
            "type"  =>   "invited",
	    "slides" =>  "Constraint Programming MOZ 2004.pdf",	    
            "event"  =>  "Second International Conference Mozart/Oz Conference",
	    "address" => "Charleroi, Belgium",
	    "date" =>    array(7,10,2004)),
    
      array("title" =>   "Speeding Up Constraint Propagation",
            "type"  =>   "conference",
            "event"  =>  "Tenth International Conference on Principles and Practice of Constraint Programming",
	    "address" => "Toronto, Canada",
	    "date" =>    array(30,9,2004)),
    
      array("title" =>   "Finite Domain Constraint Programming Systems",
            "type"  =>   "workshop",
	    "slides" =>  "FD Systems.pdf",	    
            "event"  =>  "Third SweConsNet Workshop",
	    "address" => "Dept. of Computer and Information Science, Linköping University, Sweden",
	    "date" =>    array(15,1,2004)),
    
      array("title" =>   "Flow Java: Declarative Concurrency for Java",
            "type"  =>   "invited",
	    "address" => $PSLAB,
	    "date" =>    array(23,10,2003)),
    
      array("title" =>   "Finite Domain Constraint Programming Systems",
            "type"  =>   "invited",
	    "slides" =>  "FD Systems.pdf",	    
	    "address" => $PSLAB,
	    "date" =>    array(22,10,2003)),
    
      array("title" =>   "Flow Java: Declarative Concurrency for Java",
            "type"  =>   "invited",
	    "address" => "Department of Computer Science and Software Engineering, Melbourne University, Australia",
	    "date" =>    array(1,7,2003)),
    
      array("title" =>   "Finite Domain Constraint Programming Systems",
            "type"  =>   "invited",
            "typetype" => "Invited tutorial",
	    "slides" =>  "FD Systems.pdf",	    
	    "event" =>   "International Conference on Principles and Practice of Constraint Programming",
	    "address" => "Ithaca, NY, USA",
	    "note" =>    "joint presentation with Mats Carlsson",
	    "date" =>    array(11,9,2002)),
      
      array("title" =>   "Constraints @ KTH",
            "type"  =>   "workshop",
	    "slides" =>  "Constraints@KTH.pdf",	    
	    "event" =>   "Kick-off meeting for SweConsNet",
	    "address" => "Uppsala University, Uppsala, Sweden",
	    "note" =>    "joint presentation with Sven Lämmermann and Thomas Sjöland",
	    "date" =>    array(24,5,2002)),
      
      array("title" =>   "When Do Bounds and Domain Propagation Lead to the Same Search Space",
            "type"  =>   "invited",
	    "address" => "4C Research Center, Cork, Irland",
	    "date" =>    array(16,11,2001)),
      
      array("title" =>   "When Do Bounds and Domain Propagation Lead to the Same Search Space",
            "type"  =>   "invited",
	    "address" => "School of Computing, National University of Singapore",
	    "date" =>    array(27,9,2001)),
      
      array("title" =>   "When Do Bounds and Domain Propagation Lead to the Same Search Space",
            "type"  =>   "conference",
	    "event" =>   "Third International Conference on Principles and Practice of Declarative Programming",
	    "address" => "Florence, Italy",
	    "date" =>    array(6,9,2001)),
      
      array("title" =>   "Trailing, Copying, Recomputation: A Comparison",
            "type"  =>   "invited",
	    "address" => "IC Parc, Imperial College, London, UK",
	    "date" =>    array(29,1,2001)),
      
      array("title" =>   "Parallel Search Made Simple",
            "type"  =>   "workshop",
	    "event" =>   ("Techniques foR Implementing Constraint " .
			  "programming Systems, a post-conference " .
			  "workshop of CP 2000"),
	    "address" => "Singapore",
	    "date" =>    array(22,9,2000)),
      
      array("title" =>   "Programming Deep Concurrent Constraint Combinators",
            "type"  =>   "conference",
	    "event" =>   "Practical Aspects of Declarative Languages",
	    "address" => "Boston, MA, USA",
	    "date" =>    array(18,1,2000)),
      
      array("title" =>   "Comparing Trailing and Copying for Constraint Programming",
            "type"  =>   "conference",
	    "event" =>   ("Sixteenth International Conference on Logic " .
			  "Programming"),
	    "address" => "Las Cruces, NM, USA",
	    "date" =>    array(30,11,1999)),
      
      array("title" =>   "Constraintprogrammierung mit Mozart",
            "type"  =>   "invited",
	    "address" => "TZI, Bremen, Germany",
	    "date" =>    array(26,6,1999)),
      
      array("title" =>   "Mozart: Eine Plattform für verteiltes Programmieren",
            "type"  =>   "invited",
	    "address" => "DaimlerChrysler AG, Research and Technology 3, Berlin, Germany",
	    "date" =>    array(25,6,1999)),
      
      array("title" =>  "Distributed Search Engines",
            "type"  =>   "workshop",
	    "event" =>  ("Workshop on Intelligent Distributed Computing with Mozart, " .
			 $SICS),
	    "address" => $KISTA,
	    "date" =>    array(5,6,1998)),
      
      array("title" =>  "Prototypical Networked Applications",
            "type"  =>   "workshop",
	    "event" =>  ("Workshop on Intelligent Distributed Computing with Mozart, " .
			 $SICS),
	    "address" => $KISTA,
	    "date" =>    array(5,6,1998)),
      
      array("title" =>   "Programming Constraint Inference Engines",
            "type"  =>   "conference",
	    "event" =>   ("Third International Conference on Principles and Practice " .
			  "of Constraint Programming (CP'97)"),
	    "address" => "Schloß Hagenberg, Austria",
	    "date" =>    array(1,11,1997)),

      array("title" =>   "Oz Explorer: A Visual Constraint Programming Tool",
            "type"  =>   "workshop",
	    "event" =>   ("Concurrent Constraint Programming: The Next " .
			  "Ten Years"),
	    "address" => "Castle Dagstuhl, Germany",
	    "date" =>    array(8,10,1997)),

      array("title" =>   ("Using the Oz Explorer for the Development of " .
			  "Constraint Programs"),
            "type"  =>   "workshop",
	    "event" =>   "The Eigth Workshop on Logic Programming Environments",
	    "address" => $LEUVEN,
	    "date" =>    array(11,7,1997)),

      array("title" =>   "Oz Explorer: A Visual Constraint Programming Tool",
            "type"  =>   "conference",
	    "event" =>   ("Fourteenth International Conference on Logic " .
			  "Programming (ICLP'97)"),
	    "address" => $LEUVEN,
	    "date" =>    array(10,7,1997)),
    
      array("title" =>   "Oz Explorer: A Visual Constraint Programming Tool",
            "type"  =>   "invited",
	    "event" =>   "AFPL/AFCET",
	    "address" => "Paris, France",
	    "date" =>    array(21,1,1997)),
    
      array("title" =>   "Constraint Programming and Scheduling in Oz",
            "type"  =>   "invited",
	    "event" =>   "Daimler-Benz AG",
	    "address" => "Berlin, Germany",
	    "date" =>    array(11,4,1996)),
    
      array("title" =>   "Constraint Programming in Oz",
            "type"  =>   "invited",
	    "address" => "DFKI, Saarbrücken, Germany",
	    "date" =>    array(5,3,1996)),

      array("title" =>   "Solver - An Oz Search Debugger",
            "type"  =>   "workshop",
	    "event" =>   "International Workshop on Oz Programming (WOz'95)",
	    "address" => "Martigny, Switzerland",
	    "date" =>    array(1,12,1995)),
    
      array("title" =>   "Constraint Programming in Oz",
            "type"  =>   "invited",
            "typetype"  => "Invited tutorial",
	    "event" =>   "International Workshop on Oz Programming (WOz'95)",
	    "address" => "Martigny, Switzerland",
	    "date" =>    array(30,11,1995)),
    
      array("title" =>   "An Abstract Machine for Oz",
            "type"  =>   "conference",
	    "event" =>   ("Programming Languages, Implementations and " .
			  "Programs, Seventh International Symposium (PLILP'95)"),
	    "address" => "Arnhem, The Netherlands",
	    "date" =>    array(20,9,1995)),
    
      array("title" =>   "Concurrent Object-Oriented Programming in Oz",
            "type"  =>   "workshop",
	    "event" =>   ("Workshop on Object-Orientation with Parallelism " .
			  "and Persistence (OOPP)"),
	    "address" => "Castle Dagstuhl, Germany",
	    "date" =>    array(3,4,1995)),

      array("title" =>   ("Encapsulated Search for Higher-order Concurrent " .
			  "Constraint Languages"),
            "type"  =>   "conference",
	    "event" =>   "International Logic Programming Symposium (ILPS'94)",
	    "address" => "Ithaca, NY, USA",
	    "date" =>    array(16,11,1994)),

      array("title" =>   "Encapsulated Search and Constraint Programming in Oz",
            "type"  =>   "invited",
	    "event" =>   "Computing Science Department, Uppsala University",
	    "address" => "Uppsala, Sweden",
	    "date" =>    array(3,10,1994)),

      array("title" =>   "Encapsulated Search in Oz",
            "type"  =>   "invited",
	    "event" =>   $SICS,
	    "address" => $KISTA,
	    "date" =>    array(28,9,1994)),

      array("title" =>   "A Crash-Course in Oz - An Object-Oriented Concurrent Constraint Language",
            "type"  =>   "lecture",
	    "event" =>   $SICS,
	    "address" => $KISTA,
	    "date" =>    array(21,9,1994)),
    
      array("title" =>   "Oz - An Object-Oriented Concurrent Constraint Language",
            "type"  =>   "invited",
	    "event" =>   $SICS,
	    "address" => $KISTA,
	    "date" =>    array(12,9,1994))
      );
      
?>
