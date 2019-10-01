<?php
include 'dbconnect.php';

$seller= $_POST['seller_name'];
$mail= $_POST['mail'];
$contact= $_POST['contact'];
$addr= $_POST['address'];
$leg_name= $_POST['leg_name'];
$brand= $_POST['brand'];
//$address=$_POST['address'];
$acc_no= $_POST['acc_no'];
$ifsc= $_POST['ifsc'];
$acc_type = $_POST['acc_type'];
$sig_pic= $_POST['sig_pic'];
$sigw_pic= $_POST['sigw_pic'];
$pan= $_POST['pan'];
$gst= $_POST['gst'];
$address_proof= $_POST['address_proof'];
$mp = $_POST['mp'];
$omp= $_POST['omp'];


print "1 " . $seller . PHP_EOL;
print "2 " . $mail . PHP_EOL;
print "3" . $contact . PHP_EOL;
print "4 " . $addr . PHP_EOL;
print "5 " . $leg_name. PHP_EOL; 
print "6" . $brand. PHP_EOL;
//print "7" . $address. PHP_EOL;
print "7" . $acc_no. PHP_EOL;
print "8" . $ifsc. PHP_EOL;
print "9" . $acc_type. PHP_EOL;
print "10" . $sig_pic. PHP_EOL;
print "11" . $sigw_pic. PHP_EOL;
print "12" . $pan. PHP_EOL;
print "13" . $gst. PHP_EOL;
print "14" . $address_proof. PHP_EOL;
    print "15" . $_POST['mp'] . PHP_EOL;
print "16" . $omp. PHP_EOL;

//$stmt = $pdo -> prepare("INSERT INTO registration (seller_name, seller_email, contact, address, legal_name, brand_name, bank_name, bank_account_no, ifsc_code, account_type, signature_seal, signature_without_seal, pan_no, gstin, address_proof, market_place, other_market_place) VALUES (:seller_name, :seller_email, :contact, :address, :legal_name, :brand_name, :bank_account_no, :ifsc_code, :account_type, signature_seal, signature_without_seal, :pan_no, :gstin, :address_proof, market_place, other_market_place)");

$stmt = $pdo -> prepare("INSERT INTO registration (seller_name, seller_email, contact, address, legal_name, brand_name, bank_account_no, ifsc_code, account_type, signature_seal, signature_without_seal, pan_no, gstin, address_proof, market_place) VALUES (:seller_name, :seller_email, :contact, :address, :legal_name, :brand_name, :bank_account_no, :ifsc_code, :account_type, :signature_seal, :signature_without_seal, :pan_no, :gstin, :address_proof, :market_place)");

$stmt->bindParam(':seller_name', $seller, PDO::PARAM_STR);
$stmt->bindParam(':seller_email', $mail, PDO::PARAM_STR);
$stmt->bindParam('contact', $contact, PDO::PARAM_STR);
$stmt->bindParam(':address', $addr, PDO::PARAM_STR);
$stmt->bindParam(':legal_name', $leg_name, PDO::PARAM_STR);

$stmt->bindParam(':brand_name', $brand, PDO::PARAM_STR);
$stmt->bindParam(':bank_account_no', $acc_no, PDO::PARAM_STR);

$stmt->bindParam(':ifsc_code', $ifsc, PDO::PARAM_STR);
$stmt->bindParam(':account_type', $acc_type, PDO::PARAM_STR);
$stmt->bindParam(':signature_seal', $sig_pic, PDO::PARAM_STR);
$stmt->bindParam(':signature_without_seal', $sigw_pic, PDO::PARAM_STR);
$stmt->bindParam(':pan_no', $pan, PDO::PARAM_STR);
$stmt->bindParam(':gstin', $gst, PDO::PARAM_STR);
$stmt->bindParam(':address_proof', $address_proof, PDO::PARAM_STR);
$stmt->bindParam(':market_place', $mp, PDO::PARAM_STR);

//$stmt->bindParam(':other_market_place', $omp, PDO::PARAM_STR);
//
$stmt->execute();
//print_r($stmt);


//
////code to fetch to form unique seller id 
//$qry="select count(*) from (seller)";//counts the no of sellers 
////$db_qry=mysqli_query($conn,$qry);
//$result = $conn->query($qry);
////var_dump($result);
//
//
//$id=mysqli_fetch_row($db_qry)+1;
//$sel='sel-';
//$sor='sor-0';
//$id=$sel+$sor+strval($id);//creates new id in the form sel-sor-01
//if($omp!=='none')
//{
//$market_place=$mp+','+$omp;//code to include other market places into list
//} 
//else
//{
//	$market_place=$mp;
//}
////code to insert data into database 
//$sql="INSERT INTO seller(seller_id,seller_name,seller_email,contact,address,legal_name,brand_name,bank_account_no,ifsc_code,account_type, signature_seal,signature_without_seal,pan_no,gstin,address_proof,market_place, other_market_place) VALUES($id,$seller,$mail,$contact,$address,$leg_name,$brand,$acc_no,$ifsc,$acc_type,$sig_pic,$sigw_pic,$pan,$gst, $address_proof,$mp,$omp)";
//
//
//
//if($conn->query($qry))
//{
//	echo '<script language="javascript">';
//	echo 'alert(details entered successfully)';
//	echo '</script>';
////    print "true";
//
////	header('location:selleregistration.html');//provide the next location
//}
//else
//{   
////    print "faulse";
//	echo '<script>';
//	echo 'alert(failed to enter data)';
//	echo '</script>';
//
////	header('location:selleregistration.html');
//}
//
//
