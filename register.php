
<?php include ('header.php');?>
<body>

    <div id="wrapper">
    	
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
			
					<div class="form-panel">
                      
                        <div class="form-body"> 

                         <form method ="post" action="registersave.php" enctype = "multipart/form-data">
                         	
                                <div class="form-heading">
                         		<center>Student Voter Registeration</center>
                         		</div>
                                            <center>
											<div class="form-field">
												<label>Matric No</label><br/>
												<input class ="form-control" type ="text" name ="matric_no" placeholder ="Matric No" required="true">
													
											</div>

                                            <div class="form-field">											
												<label>Password</label><br/>
													<input class="form-control"  type ="password" name ="password" id ="pass" placeholder="Password" required="true"/>
											</div>
											<div class="form-field">											
												<label>Retype Password</label><br/>
													<input class="form-control"  type ="password" name ="password1" id ="pass" placeholder="Retype Password" required="true"/>
											</div>

											<div class="form-field">
												<label>First Name</label><br/>
													<input class="form-control" type ="text" name ="firstname" placeholder="First Name" required="true">
											</div>
											
											<div class="form-field">
												<label>Last Name</label><br/>
													<input class="form-control"  type ="text" name ="lastname" placeholder="Last Name" required>
											</div>

											<div class="form-field">
												<label>Gender</label> <br/>
													<select class = "form-control" name ="gender">
														<option >Male</option>
														<option >Female</option>														
													</select>
											</div>

											<div class="form-field">
												<label>Select Study Level</label> <br/>
													<select class = "form-control" name = "year_level">
														<option>1st Year/100Lv</option>
														<option>2nd Year/200Lv</option>
														<option>3rd Year/300Lv</option>
														<option>4th Year/400Lv</option>
                                                        <option>5th Year/500Lv</option>
														
													</select>
											</div>

                                            
                                            </center>

												<br/>
																	
											 	 <center><button name ="save" type="submit">Create My Account</button></center>
                                            <div class="link">
											 	 <h2><center><a href="login.php" style = "font-size:16px;">Login to vote</a></center></h2>
											</div>

						  				 </div>
                                       
										
										</form>
								
							
						</div>
						    
					</form>
					
                    </div>
                </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        <?php 
        include ('footer.php');
        ?>

    </div>
    <!-- /#wrapper -->
</body>

</html>

