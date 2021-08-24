<?php
	

if(isset($_POST['SUBMIT'])){



$age = $_POST['age'];
	$gender = $_POST['gender'];
	$whoareyou = $_POST['whoareyou'];
	$Employeename = $_POST['Employeename'];
	

	
          $Employeelocation = $_POST['Employeelocation'];
	$studentname = $_POST['studentname'];

	$studentlocation = $_POST['studentlocation'];
	$retiredname = $_POST['retiredname'];

         $workername = $_POST['workername'];

	$workerlocation = $_POST['workerlocation'];
	$visitorname = $_POST['visitorname'];

$visitortrip = $_POST['visitortrip'];
$visitorstay = $_POST['visitorstay'];





	$youareoutsider = $_POST['youareoutsider'];
           $purposeoftrip = $_POST['purposeoftrip'];
	$staylocation = $_POST['staylocation'];
         $households = $_POST['households'];
	$p1name = $_POST['p1name'];
	$p1age = $_POST['p1age'];
	$p2name1 = $_POST['p2name1'];
	$p2age1 = $_POST['p2age1'];
	$p2name2 = $_POST['p2name2'];

           $p2age2 = $_POST['p2age2'];
          

	$goingchildren = $_POST['goingchildren'];
	$vehicleowned = $_POST['vehicleowned'];


$othervehicleno = $_POST['othervehicleno'];


           $motorcycle = $_POST['motorcycle'];
           $wheeler = $_POST['wheeler'];
	$bicycle = $_POST['bicycle'];
         $income = $_POST['income'];

	$forwardstart = $_POST['forwardstart'];
	$forwardend = $_POST['forwardend'];
	$forwardstarttime = $_POST['forwardstarttime'];
	$forwardendtime = $_POST['forwardendtime'];
	$forwardjourney = $_POST['forwardjourney'];
           $forwardmode = $_POST['forwardmode'];
	$forwardpeople = $_POST['forwardpeople'];
           $forwardintermediate = $_POST['forwardintermediate'];

             $f1first = $_POST['f1first'];
	$f2first = $_POST['f2first'];
         $f2second = $_POST['f2second'];
	$f3first = $_POST['f3first'];
	$f3second = $_POST['f3second'];
	$f3third = $_POST['f3third'];
	
           
	$fmodeused= $_POST['fmodeused'];

	$f1mode = $_POST['f1mode'];
	$f2mode1 = $_POST['f2mode1'];
	$f2mode2 = $_POST['f2mode2'];
            $f3mode1 = $_POST['f3mode1'];
	$f3mode2 = $_POST['f3mode2'];
         $f3mode3 = $_POST['f3mode3'];
	
	
	$fstopped = $_POST['fstopped'];
         $fresumed = $_POST['fresumed'];
	$purposestop = $_POST['purposestop'];
	$returnstart = $_POST['returnstart'];
	$returnend = $_POST['returnend'];

	$returnstarttime = $_POST['returnstarttime'];
	$returnendtime = $_POST['returnendtime'];
	$returnjourney = $_POST['returnjourney'];
	

	$returntrip = $_POST['returntrip'];

	$returnvehicle = $_POST['returnvehicle'];
	$returnintermediate = $_POST['returnintermediate'];
	$r1first = $_POST['r1first'];
          $r2first = $_POST['r2first'];
            $r2second = $_POST['r2second'];
	$r3first = $_POST['r3first'];
         $r3seconds = $_POST['r3seconds'];
	$r3third = $_POST['r3third'];



         $returntransport = $_POST['returntransport'];
	$r1mode = $_POST['r1mode'];
	$r2mode1 = $_POST['r2mode1'];
	$r2mode2 = $_POST['r2mode2'];

	$r3mode1 = $_POST['r3mode1'];
	$r3mode2 = $_POST['r3mode2'];
$r3mode3 = $_POST['r3mode3'];
	
          
	$returnstopped = $_POST['returnstopped'];
	$returnresumed = $_POST['returnresumed'];
	$returnstop = $_POST['returnstop'];
	$rkm = $_POST['rkm'];
	$cost = $_POST['cost'];
	$route = $_POST['route'];
	$viceversa = $_POST['viceversa'];

$email = $_POST['email'];
	$comments = $_POST['comments'];





        
	$driver1 = $_POST['driver1'];
	$driver2 = $_POST['driver2'];
	$driver3 = $_POST['driver3'];
	$driver4 = $_POST['driver4'];
	$driver5= $_POST['driver5'];
	$driver6 = $_POST['driver6'];
	$driver7 = $_POST['driver7'];

$driver8 = $_POST['driver8'];
	$driver9 = $_POST['driver9'];


	$driver10 = $_POST['driver10'];

$driver11 = $_POST['driver11'];
	$driver12 = $_POST['driver12'];
	
	
	
	
	
		$m1 = $_POST['m1'];
	$ap1 = $_POST['ap1'];
	
	$m2 = $_POST['m2'];
	$ap2 = $_POST['ap2'];
	
	$m3= $_POST['m3'];
	$ap3 = $_POST['ap3'];
	
	$m4 = $_POST['m4'];

$ap4 = $_POST['ap4'];

	$m5 = $_POST['m5'];


	$ap5 = $_POST['ap5'];

$m6 = $_POST['m6'];
	$ap6 = $_POST['ap6'];
	
	
	
	$m7 = $_POST['m7'];
	$ap7 = $_POST['ap7'];
	
	
	
	$m8 = $_POST['m8'];
	$ap8 = $_POST['ap8'];
	
	
	
	
	
	$week = $_POST['week'];

$lhr = $_POST['lhr'];
	$lmin = $_POST['lmin'];
	
	
	
	$lap = $_POST['lap'];
	$rhr = $_POST['rhr'];
	
	
	
	$rmin = $_POST['rmin'];
	$rp = $_POST['rp'];
	
	
	
	$jodhpurcity = $_POST['jodhpurcity'];
	
	
	
	
	













}



// Database connection
	$conn = new mysqli('sql6.freemysqlhosting.net','sql6427286','MRDNmyNMWN','sql6427286');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration (email,age, gender, whoareyou, Employeename, Employeelocation, studentname, studentlocation, retiredname, workername, workerlocation, visitorname,visitortrip,visitorstay, youareoutsider, purposeoftrip, staylocation, households, p1name, p1age, p2name1, p2age1, p2name2, p2age2, goingchildren,vehicleowned,othervehicleno ,motorcycle,wheeler,bicycle, income, forwardstart, forwardend, forwardstarttime,m1,ap1,forwardendtime,m2,ap2, forwardjourney, forwardmode ,forwardpeople ,forwardintermediate,   f1first, f2first,f2second,f3first, f3second, f3third, fmodeused,f1mode ,driver1,f2mode1 ,driver2,f2mode2 ,driver3,f3mode1 ,driver4,f3mode2,driver5,f3mode3 ,driver6, fstopped,m3,ap3,fresumed ,m4,ap4,purposestop, returnstart ,returnend, returnstarttime,m5,ap5,returnendtime,m6,ap6, returnjourney, returntrip, returnvehicle, returnintermediate, r1first , r2first , r2second ,r3first ,r3seconds ,r3third ,returntransport,r1mode,driver7,r2mode1,driver8,r2mode2,driver9,r3mode1,driver10,r3mode2,driver11,r3mode3,driver12,returnstopped,m7,ap7,returnresumed,m8,ap8,returnstop,rkm,cost,route,viceversa,week,jodhpurcity,lhr,lmin,lap,rhr,rmin,rp,comments) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

   $stmt->bind_param("sssssssssssssssssisisisiisiiiisssiisiisssiissssssisisisisisisiiisiissssiisiisssiissssssisisisisisisiiisiissiisiisiisiiss", $email,$age, $gender, $whoareyou, $Employeename, $Employeelocation, $studentname, $studentlocation, $retiredname, $workername,  $workerlocation, $visitorname, $visitortrip,$visitorstay ,$youareoutsider, $purposeoftrip, $staylocation, $households, $p1name, $p1age, $p2name1, $p2age1, $p2name2, $p2age2,  $goingchildren,$vehicleowned,$othervehicleno, $motorcycle,$wheeler,$bicycle, $income, $forwardstart, $forwardend, $forwardstarttime,$m1,$ap1,$forwardendtime,$m2,$ap2, $forwardjourney, $forwardmode ,$forwardpeople ,$forwardintermediate,   $f1first, $f2first,$f2second,$f3first, $f3second, $f3third, $fmodeused,$f1mode ,$driver1,$f2mode1 ,$driver2,$f2mode2 ,$driver3,$f3mode1 ,$driver4,$f3mode2,$driver5,$f3mode3 ,$driver6,$fstopped,$m3,$ap3,$fresumed ,$m4,$ap4,$purposestop, $returnstart ,$returnend, $returnstarttime,$m5,$ap5, $returnendtime,$m6,$ap6, $returnjourney, $returntrip, $returnvehicle, $returnintermediate, $r1first , $r2first , $r2second ,$r3first ,$r3seconds ,$r3third ,$returntransport,$r1mode,$driver7,$r2mode1,$driver8,$r2mode2,$driver9,$r3mode1,$driver10,$r3mode2,$driver11,$r3mode3,$driver12,$returnstopped,$m7,$ap7,$returnresumed,$m8,$ap8,$returnstop,$rkm,$cost,$route,$viceversa,$week,$jodhpurcity,$lhr,$lmin,$lap,$rhr,$rmin,$rp,$comments);


$execval = $stmt->execute();
		echo $execval;
	  
	  
	  
	  echo "We Appreciate Your Patience........";
    	  echo "Thank You!!!";
	  $stmt->close();
		$conn->close();
	}
?>

