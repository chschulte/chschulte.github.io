<?php

$C_RESP = "course responsible, examiner";
$C_LECT = "lecturing";

$C_KTH   = "KTH Royal Institute of Technology";
$C_PSLAB = "Saarland University";

$courses =
array("ID2202" => array(
            "name" => "Compilers and Execution Environments",
            "prev" => "ID1215",
            "prevprev" => "2G1533",
	    "inst" => $C_KTH,
            "data" => array(
            array("year"   => 2016, 
                  "period" => 2,
                  "role"   => $C_RESP),
            array("year"   => 2015, 
                  "period" => 2,
                  "role"   => $C_RESP),
            array("year"   => 2014, 
                  "period" => 2,
                  "role"   => $C_RESP),
            array("year"   => 2013, 
                  "period" => 2,
                  "role"   => $C_RESP),
            array("year"   => 2012, 
                  "period" => 2,
                  "role"   => $C_RESP),
            array("year"   => 2011, 
                  "period" => 2,
                  "role"   => $C_RESP),
            array("year"   => 2010, 
                  "period" => 2,
                  "role"   => $C_RESP),
            array("year"   => 2009, 
                  "period" => 2,
                  "role"   => $C_RESP),
            array("year"   => 2008, 
                  "period" => 2,
                  "role"   => $C_RESP),
            array("year"   => 2007, 
                  "period" => 2,
                  "role"   => $C_RESP),
            array("year"   => 2006, 
                  "period" => 2,
                  "role"   => $C_RESP))
            ),

      "IL3606" => array(
            "name" => "The Art of Doctoral Research (Ethics Module)",
	    "inst" => $C_KTH,
            "data" => array(
            array("year"   => 2016, 
                  "period" => 2,
                  "role"   => $C_LECT))
            ),

      "ID1218" => array(
            "hide" => 1,
            "name" => "Applied Programming",
	    "inst" => $C_KTH,
            "data" => array(
            array("year"   => 2009, 
                  "period" => 2,
                  "role"   => $C_RESP),
            array("year"   => 2008, 
                  "period" => 2,
                  "role"   => $C_RESP),
            array("year"   => 2007, 
                  "period" => 2,
                  "role"   => $C_RESP))
            ),

     "ID2204" => array(
            "name" => "Constraint Programming",
            "prev" => "2G1515",
	    "inst" => $C_KTH,
            "data" => array(
            array("year"   => 2016, 
                  "period" => 4,
                  "role"   => $C_RESP),
            array("year"   => 2015, 
                  "period" => 4,
                  "role"   => $C_RESP),
            array("year"   => 2014, 
                  "period" => 4,
                  "role"   => $C_RESP),
            array("year"   => 2013, 
                  "period" => 4,
                  "role"   => $C_RESP),
            array("year"   => 2012, 
                  "period" => 4,
                  "role"   => $C_RESP),
            array("year"   => 2011, 
                  "period" => 4,
                  "role"   => $C_RESP),
            array("year"   => 2010, 
                  "period" => 4,
                  "role"   => $C_RESP),
            array("year"   => 2009, 
                  "period" => 4,
                  "role"   => $C_RESP),
            array("year"   => 2008, 
                  "period" => 4,
                  "role"   => $C_RESP),
            array("year"   => 2007, 
                  "period" => 4,
                  "role"   => $C_RESP),
            array("year"   => 2006, 
                  "period" => 4,
                  "role"   => $C_RESP),
            array("year"   => 2005, 
                  "period" => 3,
                  "role"   => $C_RESP),
            array("year"   => 2004, 
                  "period" => 2,
                  "role"   => $C_RESP),
            array("year"   => 2003, 
                  "period" => 3,
                  "role"   => $C_RESP))
            ),

      
     "2G1508" => array(
            "hide" => 1,
            "name" => "Compilers and Virtual Machines",
	    "inst" => $C_KTH,
            "data" => array(
            array("year"   => 2005, 
                  "period" => 2,
                  "role"   => $C_RESP),
            array("year"   => 2004, 
                  "period" => 3,
                  "role"   => $C_RESP))
            ),

      "2G1509" => array(
            "hide" => 1,
            "name" => "Distributed Systems",
	    "inst" => $C_KTH,
            "data" => array(
            array("year"   => 2005, 
                  "period" => 1,
                  "role"   => $C_RESP),
            array("year"   => 2004, 
                  "period" => 1,
                  "role"   => $C_LECT))
            ),

      "2G1512" => array(
            "hide" => 1,
            "name" => "Datalogi II",
	    "inst" => $C_KTH,
            "dur"  => 2,
            "data" => array(
            array("year"   => 2003, 
                  "period" => 1,
                  "role"   => $C_RESP),
            array("year"   => 2002, 
                  "period" => 1,
                  "role"   => $C_RESP))
            ),

      "2G1519" => array(
            "hide" => 1,
            "name" => "Datalogi II (Computer Science II)",
	    "inst" => $C_KTH,
            "dur"    => 3,
            "data" => array(
            array("year"   => 2006, 
                  "period" => 1,
                  "role"   => $C_RESP),
            array("year"   => 2005, 
                  "period" => 1,
                  "role"   => "responsible for C++ module"),
            array("year"   => 2004, 
                  "period" => 1,
                  "role"   => "responsible for C++ module"))
            ),

      "2G1532" => array(
            "hide" => 1,
            "name" => "C++ Module for Datalogi II",
	    "inst" => $C_KTH,
            "data" => array(
            array("year"   => 2005, 
                  "period" => 3,
                  "role"   => $C_RESP),
            array("year"   => 2004, 
                  "period" => 3,
                  "role"   => $C_RESP))
            ),

      "6B3022" => array(
            "hide" => 1,
            "name" => "IT Project",
            "url"  => "http://www.isk.kth.se/kursinfo/6b3022/",
	    "inst" => $C_KTH,
            "dur"  => 2,
            "data" => array(
            array("year"   => 2004, 
                  "period" => 3,
                  "role"   => "technical mentor"),
            array("year"   => 2003, 
                  "period" => 3,
                  "role"   => "technical mentor"))
            )
);


?>