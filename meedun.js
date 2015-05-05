////////////////////////////////////// 
// Author : meedun                  //
// web    : www.meedun.com          //
// email  : refyandra@gmail.com     //
// Date   : may 06 ,2015            //
////////////////////////////////////// 
// filename ; meedun.js
/////////////////////////////////////
  $(document).ready(function(){
    $("#cls").click( function() {
       //$(this).val('');
        $("#namas").val('');
        $("#umur").val('');
    });
  });
/////////////INPUT ADD/////////////////
               $(document).ready(function(){
                    $("#kirim").click(function(){

                        var namas=$("#namas").val();   
                        var umur=$("#umur").val();  
               
                          $.ajax({
                              type:"post",
                              url:"function/process.php",
                              data:"namas="+namas+"&umur="+umur,
                              success:function(data){
                                 $("#info").html(data);
                                 $("#namas").val('');
                                 $("#umur").val('');
                              }
                          });
 
                    });
               });
///////////////END ADD//////////////////////////
