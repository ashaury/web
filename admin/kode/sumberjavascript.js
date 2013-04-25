// JavaScript Document
			$(document).ready(function(){			
				$('.detail').elastic();
			});	
			// ]]>
			
function delcontent(x,y)
{
	var r=confirm("Anda Yakin Akan Menghapus??");
	if(r==true)
	{
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
 	 xmlhttp=new XMLHttpRequest();
 	 }
	else
  	{// code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 	 }
	xmlhttp.onreadystatechange=function()
	{
 	 if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		var res=xmlhttp.responseText;
		if (res=="a"){
		alert("berhasil dihapus");
		window.location.reload();
		}
		else{
		alert("gagal dihapus, karena "+res);
		}
    }
  	}
	switch (x){
case 1 : {xmlhttp.open("GET","kategori_hapus.php?id="+y,true);break}
case 2 : {xmlhttp.open("GET","produk_hapus.php?id="+y,true);break}
case 3 : {xmlhttp.open("GET","produk_hapus.php?id="+y,true);break}
case 4 : {xmlhttp.open("GET","promo_hapus.php?id="+y,true);break}
case 5 : {xmlhttp.open("GET","berita_hapus.php?id="+y,true);break}
case 6 : {xmlhttp.open("GET","acara_hapus.php?id="+y,true);break}
	}
xmlhttp.send();
	}
	else
	{
		alert("Batal Dihapus");
	}
}

function show()
{
	document.getElementById("upload").style.display="";
	document.getElementById("gbuton").style.display="none";
}
function kosongin()
{
  document.getElementById("load").style.display="none";
  document.getElementById("alert").innerHTML="";
}
	function simpan()
{

	document.getElementById("load").style.display="";
	var a=document.getElementById("resto").value;
	var b=document.getElementById("papar").value;
	var c=document.getElementById("ip").value;
	
if ((a=="")||(b=="")||(c==""))
  {
  document.getElementById("load").style.display="none";
  document.getElementById("alert").innerHTML="Jangan Ada Yang Kosong!!";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
{
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	document.getElementById("alert").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","kuliner_iklanbaris_simpan.php?x="+a+"&y="+b+"&z="+c,true);
xmlhttp.send();
}