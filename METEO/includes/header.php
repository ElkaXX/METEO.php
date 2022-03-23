
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid ">
    
   
    <div class="collapse navbar-collapse navigation" id="navbarNavAltMarkup">
       
      <div class="Lundi">
         <a href="index.php?test"><button>Lundi</button></a>
      </div>
      <div class="Mardi">
         <a href="index.php?test1"><button>Mardi</button></a>
      </div>
      <div class="Mercredi">
         <a href="index.php?test2"><button>Mercredi</button></a>
      </div>
      <div class="Jeudi">
         <a href="index.php?test3"><button>Jeudi</button></a>
      </div>
      <div class="Vendredi">
         <a href="index.php?test4"><button>Vendredi</button></a>
      </div>
      <div class="Samdi">
         <a href="index.php?test5"><button>Samdi</button></a>
      </div>
      <div class="Dimanche">
         <a href="index.php?test6"><button>Dimanche</button></a>
      </div>
      
    </div>
  </div>
</nav>
<?php
$Lundi = array(
  "NORD"=>array("10","12","10","15"),
  "SUD"=>array("20","22","20","25"),
  "OUEST"=>array("12","13","14","15"),
  "EST"=>array("11","14","14","14")
);

$Mardi = array(
  "NORD"=>array("11","11","14","13"),
  "SUD"=>array("20","23","22","22"),
  "OUEST"=>array("14","13","14","14"),
  "EST"=>array("12","13","10","15")
);

$Mercredi = array(
  "NORD"=>array("11","15","14","16"),
  "SUD"=>array("18","18","19","20"),
  "OUEST"=>array("14","16","16","15"),
  "EST"=>array("17","16","16","18")
);

$Jeudi = array(
  "NORD"=>array("18","17","17","18"),
  "SUD"=>array("21","22","22","23"),
  "OUEST"=>array("17","19","20","18"),
  "EST"=>array("16","16","16","15")
);

$Vendredi = array(
  "NORD"=>array("14","14","14","15"),
  "SUD"=>array("19","18","18","19"),
  "OUEST"=>array("14","13","14","10"),
  "EST"=>array("10","12","10","15")
);

$Samdi = array(
  "NORD"=>array("14","12","14","14"),
  "SUD"=>array("18","17","17","17"),
  "OUEST"=>array("13","11","13","13"),
  "EST"=>array("10","12","10","15")
);

$Dimanche = array(
  "NORD"=>array("12","12","12","12"),
  "SUD"=>array("18","18","17","17"),
  "OUEST"=>array("14","14","14","15"),
  "EST"=>array("10","14","10","14")
);

if(isset($_GET['test'])){ 
foreach($Lundi as $key=>$Value){ 
     echo "<div id=\"$key\">$key";
foreach($Value as $Value1){
    echo "<div>$Value1</div></div>";
}}}

if(isset($_GET['test1'])){
  foreach($Mardi as $key=>$Value){ 
    echo "<div id=\"$key\">$key";
  foreach($Value as $Value1) {
    echo "<div>$Value1</div></div>";
}}}
if(isset($_GET['test2'])){
  foreach($Mercredi as $key=>$Value){
    echo "<div id=\"$key\">$key";
  foreach($Value as $Value1) {
    echo "<div>$Value1</div></div>";
}}}
 if(isset($_GET['test3'])){
   foreach($Jeudi as $key=>$Value){
    echo "<div id=\"$key\">$key";
   foreach($Value as $Value1) {
    echo "<div>$Value1</div></div>";
}}}
  if(isset($_GET['test4'])){
    foreach($Vendredi as $key=>$Value){
      echo "<div id=\"$key\">$key";
    foreach($Value as $Value1) {
      echo "<div>$Value1</div></div>";
}}}
if(isset($_GET['test5'])){
  foreach($Samdi as $key=>$Value){
    echo "<div id=\"$key\">$key";
  foreach($Value as $Value1) {
    echo "<div>$Value1</div></div>";
}}}
if(isset($_GET['test6'])){
  foreach($Dimanche as $key=>$Value){
    echo "<div id=\"$key\">$key";
  foreach($Value as $Value1) {
    echo "<div>$Value1</div></div>";
}}}
       

?>
