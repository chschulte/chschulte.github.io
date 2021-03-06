<?php
  include 'src/defaults.php';
  page_header("Coordinating Constraint Propagation");
?>

<div id="content">

<h2>Project Description</h2>

<p>
Constraint programming has become the method of choice for
modeling and solving combinatorial optimization problems such as
planning of personnel and resources, computing time tables,
packing and placement problems.
</p>

<p>
The success of constraint programming is based on the fact that
it allows to simultaneously use several powerful propagation
algorithms. The 'glue' for simultaneously using algorithms has
not seen much advance.  As a result, the strength of the used
algorithms might be compromised, the overall efficiency might be
poor, and modeling becomes more and more difficult with the
advent of ever new and more powerful algorithms.
</p>

<p>
We will investigate how to truly coordinate constraint
propagation in constraint programming systems. This will lead to
stronger and more efficient constraint propagation and will
simplify using constraint programming. We will devise
coordination mechanisms for the glue. These mechanisms will be
based on maintaining properties of the used algorithms and
coordinating the execution of the algorithms on information
computed from these properties.
</p>

<p>
Given the ever increasing number of powerful algorithms becoming
available, the project will help that constraint programming
continues to be the method of choice for solving hard
combinatorial optimization problems in the future.
</p>

<p class="box">
The project has been funded by the Swedish Research Council
(VR) under grant 621-2004-4953, 2005&ndash;2007. Volume: 1875
KSEK, role: principal investigator.  
</p>

<h2>Project Results</h2>

<p>
Results of the research conducted are contained in the following papers:
</p>
<ul>
  <li><a href="http://www.ict.kth.se/~zayenz/papers/LagerkvistPesant_BPPC_2008.pdf"
  >Modeling Irregular Shape Placement Problems with Regular Constraints</a>, 
  <span class="authors"><a href="http://web.it.kth.se/~zayenz/">Mikael Z. Lagerkvist</a>, Gilles Pesant</span>.<br />
  First Workshop on Bin Packing and Placement Constraints BPPC'08.
  </li>
<li><a href="http://www.gecode.org/~schulte/paper.html?id=SchulteStuckey:TOPLAS:2008"
    >Efficient Constraint Propagation Engines</a>,
      <span class="authors"><a href="http://www.gecode.org/~schulte/">Christian Schulte</a>, <a href="http://www.cs.mu.oz.au/~pjs/">Peter J. Stuckey</a></span>.<br />
Transactions on Programming Languages and Systems, 2008. </li>
<li><a href="http://www.gecode.org/~schulte/paper.html?id=LagerkvistSchulte:CP:2007"
    >Advisors for Incremental Propagation</a>,
      <span class="authors"><a href="http://web.it.kth.se/~zayenz/">Mikael Z. Lagerkvist</a>, <a href="http://www.gecode.org/~schulte/">Christian Schulte</a></span>.<br />
Thirteenth International Conference on Principles and Practice of Constraint Programming, 2007. </li>
  <li><a href="http://www.gecode.org/~schulte/paper.html?id=TackSchulteSmolka:CP:2006"
    >Generating Propagators for Finite Set Constraints</a>,
      <span class="authors"><a href="http://www.ps.uni-sb.de/~tack/">Guido Tack</a>, <a href="http://www.gecode.org/~schulte/">Christian Schulte</a>, <a href="http://www.ps.uni-sb.de/~smolka/">Gert Smolka</a></span>.<br />
Twelfth International Conference on Principles and Practice of Constraint Programming, 2006. </li>
  <li><a href="http://www.gecode.org/~schulte/paper.html?id=SchulteCarlsson:CPH:2006"
    >Finite Domain Constraint Programming Systems</a>,
      <span class="authors"><a href="http://www.gecode.org/~schulte/">Christian Schulte</a>, <a href="http://www.sics.se/~matsc/">Mats Carlsson</a></span>.<br />
Handbook of Constraint Programming, 2006. </li>
  <li><a href="http://www.gecode.org/~schulte/paper.html?id=SchulteTack:Advances:2006"
    >Views and Iterators for Generic Constraint Implementations</a>,
      <span class="authors"><a href="http://www.gecode.org/~schulte/">Christian Schulte</a>, <a href="http://www.ps.uni-sb.de/~tack/">Guido Tack</a></span>.<br />
Recent Advances in Constraints (2005), 2006. </li>
<li><a href="http://www.gecode.org/~schulte/paper.html?id=SchulteTack:CP:2005"
    >Views and Iterators for Generic Constraint Implementations</a>,
      <span class="authors"><a href="http://www.gecode.org/~schulte/">Christian Schulte</a>, <a href="http://www.ps.uni-sb.de/~tack/">Guido Tack</a></span>.<br />
Eleventh International Conference on Principles and Practice of Constraint Programming, 2005.</li>
</ul>

<p>
These results have been implemented in the <a
href="http://www.gecode.org/~schulte/software.html#gecode">Gecode</a> constraint programming
system. Gecode and hence the implemented results are widely used in research and education as well as by companies.
</p>
 
</div>

<?php
  page_footer("projects/cocoprop");
?>








