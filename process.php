<?php
////////////////////////////////////// 
// Author : meedun                  //
// web    : www.meedun.com          //
// email  : refyandra@gmail.com     //
// Date   : may 06 ,2015            //
////////////////////////////////////// 
// filename ; meedun.js
/////////////////////////////////////
include_once('db.php');
//function funKirim(){
if (!empty($_POST["namas"])&&!empty($_POST["umur"])&&isset($_POST['kirim'])) {
    $namas=$_POST["namas"];
    $umur=$_POST["umur"];
    $query=mysql_query("INSERT INTO usr (nama,umur) values('$namas','$umur') ");
 
 // if($query){
    echo ' <div class="alert alert-success"> 
		   <ul class="fa-ul">
           <li>
           <i class="fa fa-exclamation-triangle fa-li fa-lg"></i>
           <strong>Your data has been save</strong> !  
           </li>
           </ul>
           </div>';
  }
  else{
  	    echo ' <div class="alert alert-danger"> 
               <ul class="fa-ul">
               <li>
               <i class="fa fa-exclamation-triangle fa-li fa-lg"></i>
               <strong>Error save your data</strong> !  
               </li>
               </ul>
               </div>';
  }
//}

function funEdit(){
if (!empty($_POST["namas"])&&!empty($_POST["umur"])&&isset($_GET["edit"])) {
      $namas=$_POST["namas"];
      $umur=$_POST["umur"];
      $query=mysql_query("INSERT INTO usr (nama,umur) values('$namas','$umur') ");
 
 // if($query){
    echo ' <div class="alert alert-success"> 
       <ul class="fa-ul">
           <li>
           <i class="fa fa-exclamation-triangle fa-li fa-lg"></i>
           <strong>Your data has been edit</strong> !  
           </li>
           </ul>
           </div>';
  }
  else{
        echo ' <div class="alert alert-danger"> 
               <ul class="fa-ul">
               <li>
               <i class="fa fa-exclamation-triangle fa-li fa-lg"></i>
               <strong>Error edit your data</strong> !  
               </li>
               </ul>
               </div>';
  }
}
?>
