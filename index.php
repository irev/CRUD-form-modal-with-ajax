 <?php
 ////////////////////////////////////// 
// Author : meedun                  //
// web    : www.meedun.com          //
// email  : refyandra@gmail.com     //
// Date   : may 06 ,2015            //
////////////////////////////////////// 
// filename ; index.php
/////////////////////////////////////
 ?>
 <html>
  <head>
   <title>CRUD form modal with ajax</title>
		<link href="bootstrap.css" rel="stylesheet">
		<script src="jquery-2.1.4.min.js"></script>
		<script src="bootstrap.min.js"></script>	
		<script src="bootstrap.js"></script>
		<script src="meedun.js"></script>
 </head>
 <body>
 <!--***********************
      Modal Form
  *********************** -->

					<br/><br/><br/>

				<div style="display: block;" class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
						        <h4 class="modal-title" id="myModalLabel"><p>Meedun</p></h4>
						      </div>
						      <div class="modal-body">
							  <div id="info" ></div> 
							    <form>
														<input name="namas" id="namas"  class="form-control" placeholder="nama" type="text" required> <br>
                                                        <input name="umur" id="umur"  class="form-control" placeholder="umur" type="number" min="1" max="100"> 
                                     </form>                                                                      
						      </div>
						      <div class="modal-footer">
						          <button  type="button" class="btn btn-warning" name="cls" id="cls" onclik='cls()'>Reset</button>
						          <button  type="button" class="btn btn-warning" name="edit" id="edit" onclick="funEdit()" >Edit</button>
						          <button  type="button" class="btn btn-warning" name="kirim" id="kirim"  onclick="funKirim()">save</button>
						      </div>
							  
						    </div>
						  </div><center><a href="http://www.meedun.com/">Created by Meedun Copyright &copy;2015</a></center>
						</div>
						
						
</body>
</html>
