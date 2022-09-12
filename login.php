<?php include ('header.php');?>
<body>
    

    <div class="container">
        <div class="row">
           
               
                        <form role="form" method = "post" enctype = "multipart/form-data" class="index-form">
                            <div class="form-heading">
                            <center>Student Login</center>
                            </div>
                            
                                
                                <div class="form-field">
									<label for = "username">Matric No</label><br/>
										<input class="form-control" placeholder="Enter Matric No" name="matric_no" type="text" required = "required" autofocus>
                                </div>
								
                                <div class="form-field">
									<label for = "username" >Password: </label>
										<input class="form-control" placeholder="Enter Password" name="password" type="password" required = "required">
                                </div>
                             <br/>
                                <center><button class="btn btn-lg btn-success btn-block" name ="login" style="margin-bottom:0px;" width="50">Login</button>
                                &nbsp; 
                            <a  href="register.php"><button type="button" class="btn btn-lg btn-success btn-block" data-dismiss="modal" style= " margin-bottom:0px;">Register</button></a>
            
                                &nbsp;

                               
                                
                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <?php    
        include ('footer.php');
    ?>

</body>

</html>
