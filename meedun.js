////////////////////////////////////// 
// Author : meedun                  //
// web    : www.meedun.com          //
// email  : refyandra@gmail.com     //
// Date   : may 06 ,2015            //
////////////////////////////////////// 
// filename ; meedun.js
/////////////Clear////////////////////////
  $(document).ready(function cls(){
    $("#cls").click( function() {
       //$(this).val('');
       $("#info").html('');
        $("#namas").val('');
        $("#umur").val('');

    });
  });
  ////////////END CLEAR////////////
/////////////INPUT ADD/////////////////
               $(document).ready(function funKirim(){
                    $("#kirim").click(function()){
                        var namas=$("#namas").val();   
                        var umur=$("#umur").val();
                        //var kirim=$("#kirim").val('kirim');
                          $.ajax({
                              type:"post",
                              url:"process.php",
                              data:"namas="+namas+"&umur="+umur,
                              success:function(data){
                                 $("#info").html(data);
                                 $("#namas").val('Tombol Save');
                               //  $("#umur").val('');
                              }
                          });
 
                    });
               });
///////////////END ADD//////////////////////////

////////////////EDIT///////////////////////////
  $(document).ready(function funEdit(){
    $("#edit").click( function() {
       //$(this).val('');
         var namas=$("#namas").val();
         var namas=$("#umur").val();
         var kirim=$("#kirim").val();
                        $.ajax({
                              type:"post",
                              url:"process.php",
                              data:"namas="+namas+"&umur="+umur,
                              //data: "functionName=save",
                              success:function(data){
                                 $("#info").html(data);
                                 $("#namas").val('Tombol Edit');
                                 $("#umur").val('');
                              }
                          });
 

    });
  });
