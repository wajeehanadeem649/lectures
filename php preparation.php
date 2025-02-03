<?php

/*
                                  //variables $ datatypes
$x="hhh 23 ? >";//string
$y=22;//int
$z=3.00;//float
$v=false ;//boolian
echo $x;
print $x;



$name="wajeeha";
$x="<p>My name is $name </p>";
echo $x;

                                 //concatnation

$name="wajeeha";
$x="<p>My name is $name ";
$y="i really like it </p>";
echo $x.$y;


                               //Mathematical with and without string
$num1="45";
$num2="44";
$total=$num1+$num2 ;
echo $total ;    


$no1="30+30*20";
echo $no1;

$no=30+30*20;
echo $no;

echo "<br>";                   ///for line break

$wakk=3;                        //two variables
$v="wakk";
echo $$v;



                                  //arrays
 echo "<br>"  ;                              
$arrays=array("wajeeha","shoaib","khadija");
print_r($arrays);

echo $arrays[2];
echo "<br><br>";


                                    //associative array
$array=array("Name"=>"Wajeeha","Class"=>"BSSE");
print_r($array);
echo "<br>";
echo $array["Name"];


//multidimensional array
echo "<br>";
$users=array(      array("Name"=>"Wajeeha","Age"=>23,"gender"=>"Female"),
           array("Degree"=>"BSSE","University"=>"UAF","Year"=>2024));
print_r($users);
echo "<br>";
echo $users[0]["Age"];



                                                   //if statements
echo "<br><br>";
if(0){
    echo "true";
}else{
    echo "false";
}

echo "<br><br>";

$x="Wajeeha";
if($x == "wajeeha"){
    echo "true";
}else{
    echo "false";
}

echo "<br>";
$x="Wajeeha";
$y=123;
if($x == "wajeeha" AND $y==123){
    echo "true";
}else{
    echo "false";
}



//for and for each loop
$a=1;
$a++;
$a--;
$a--;
$a--;
$a++;
echo $a;



echo"<br><br>";
for($a=10; $a>=0; $a--){
   // echo $a;
    //echo"<br>";
//echo "<p>hello</p>";
echo $a."hello\n";
}
                                                                //foreach loop
echo"<br>";
$x=array("waj","nadeem");
//foreach ( $x as $block) {
 foreach ( $x as $value) {
     
echo $value;
}



echo"<br><br>";
$x=0;
while($x<=4){

echo $x."\n";
$x++;

}




echo"<br>";
$c= array("Wajeeha",23,"Female");
$i=0;
while($i<3){
    echo $c[$i]."\n";
    $i++;
}

//by chance add some value
echo"<br>";
$c= array("Wajeeha",23,"Female","jj","gg");
$i=0;
while($i< sizeof($c)){
    echo $c[$i]."\n";
    $i++;
}


echo"<br>";

$i=0;
while($i<= 10){
    $j=$i *2;
    echo $j."\n";
    $i++;
}


if (isset($_POST['submit'])){

$username =$_POST['username'];
$password =$_POST['password'];
$email =$_POST['email'];


echo "<br> <b>Email</b>  ".$email."<br> <b>UserNane</b>".$username."<br> <b>Password</b> ".$password;
}
*/


                                      //contents with other pages(include) & sites(file_get_contents)
 
  include("emailsend.php");

//include("mail.php");
//echo file_get_contents("https://www.google.com");

 

?>


<!--
<div class="container" >
    

<form method="POST">
<p><input type="username" name="username" placeholder="UserName"></p>
<p><input type="password" name="password" placeholder="Password"></p>
<p><input type="email" name="email"  placeholder="Email"></></p>
<input type="submit" style="background-color: grey"  name="submit" value="Send">
</form>
</div>


                                            //send data to other sites  inki php formsee form py ha
 <div >
        <form action="formsee.php" method="post" >
        <p><input type="username" name="name" placeholder="UserName"></p>
<p><input type="password" name="password" placeholder="Password"></p>
<p><input type="email" name="email"  placeholder="Email"></></p>
<input type="submit" style="background-color: grey"  name="submit" value="Send">
        </form>
    </div>
-->
