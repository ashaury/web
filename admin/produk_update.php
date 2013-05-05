<?php
session_start();
include('sumberkekayaan.php');
session_log();

$update=$_POST['id'];
$nama=$_POST['nama'];
$kate=$_POST['kate'];
//$detail=nl2br($_POST['detail']);
$harga=$_POST['harga'];
//$tgl=$_POST['date'];

//define a maxim size for the uploaded images in Kb
 define ("MAX_SIZE","500"); 

//This function reads the extension of the file. It is used to determine if the file  is an image by checking the extension.
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }

//This variable is used as a flag. The value is initialized with 0 (meaning no error  found)  
//and it will be changed to 1 if an errro occures.  
//If the error occures the file will not be uploaded.
 $errors=0;
//checks if the form has been submitted
 if(isset($_POST['submit'])) 
 {
 	//reads the name of the file the user submitted for uploading
 	$image=$_FILES['image']['name'];
 	//if it is not empty
 	if ($image) 
 	{
 	//get the original name of the file from the clients machine
 		$filename = stripslashes($_FILES['image']['name']);
 	//get the extension of the file in a lower case format
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
 	//if it is not a known extension, we will suppose it is an error and will not  upload the file,  
	//otherwise we will do more tests
 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
 		{
		//print error message
 			echo '<h1>Unknown extension!</h1>';
 			$errors=1;
 		}
 		else
 		{
//get the size of the image in bytes
 //$_FILES['image']['tmp_name'] is the temporary filename of the file
 //in which the uploaded file was stored on the server
 $size=filesize($_FILES['image']['tmp_name']);

//compare the size with the maxim size we defined and print error if bigger
if ($size > MAX_SIZE*1024)
{
	echo '<h1>You have exceeded the size limit!</h1>';
	$errors=1;
}

//we will give an unique name, for example the time in unix time format
$image_name="$update".'.'.$extension;
//the new name will be containing the full path where will be stored (images folder)
//$newname="../jajadung/$kategori/".$image_name;
$newname="../acara/".$image_name;
//we verify if the image has been uploaded, and print error instead
$copied = copy($_FILES['image']['tmp_name'], $newname);
if (!$copied) 
{
	echo '<h1>Copy unsuccessfull!</h1>';
	$errors=1;
}}}}

//If no errors registred, print the success message
 if(isset($_POST['submit']) && !$errors) 
 {
	$link=koneksiku();
	if($image_name=="")
	$sql="UPDATE produk SET prod_nama = '$nama', kate_id = '$kate', prod_hrg = '$harga' WHERE prod_id ='$update'";
	else
	$sql="UPDATE produk SET prod_nama = '$nama', kate_id = '$kate', prod_hrg = '$harga', url = '$image_name' WHERE acara_id ='$update'"; 
	
	$res=mysql_query($sql,$link);
	if($res)
	{
	
	header("location:produk.php");
	}
	else
	{
	echo "Error connection ".mysql_error();
	}
 }
 else
 echo"eh";

 ?>