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
 
 
 <!--***********************
      Modal Form
  *********************** -->
 <button class="btn btn btn-info" data-toggle="modal" data-target="#myModal_edit">
                        <i class="glyphicon   glyphicon-plus text-Danger fa-1x"></i>
                         <span class="text-Danger">Edit</span>
                        </button>
 <div style="display: none;" class="modal fade" id="myModal_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18" aria-hidden="true" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                        <h4 class="modal-title text-align-center fw-bold mt" id="myModalLabel18">Meedun Registrasi</h4>  
                                        </div> 
                                    <div class="modal-body bg-gray-lighter">  
                                        <p class="text-align-center fs-mini text-muted mt-sm"> 
                                           <div id="info" ></div> 
                                        </p>

                <form id="addklien"  method="post" onsubmit="return checkForm(this)">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                       
                                                        <!--input name="email" id="email"  class="form-control" placeholder="Email" type="text" onchange="if(this.value !=" ") callAjax("checkEmail", this.value, this.id);"--> 
                                                        <input name="namas" id="namas"  class="form-control" placeholder="nama" type="text" > <br>
                                                        <input name="umur" id="umur"  class="form-control" placeholder="umur" type="text" > 
                                                                                                           
                                                    </div>
                                                    <p class="text-align-center fs-mini text-muted mt-sm">
                                                    Gunakan alamat <strong>email</strong> anda untuk login, jika belum  <strong>terdaftar </strong> silahkan daftar email anda! 
                                                    </p>
                                                </div>   
                                            </div> 
                                    </div>
                                    <div class="modal-footer">
                                         <button  type="button" class="btn btn-warning" id="cls" >Reset</button>
                                         <button  type="button" class="btn btn-warning" id="kirim" >save</button>
                                     
                                      
                                    </div> 
                                    
                                  </form> 
                                </div>
                            </div>
                        </div>
                    </div>
