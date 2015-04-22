<!DOCTYPE Html>
<html>
<head>
	<meta name="author" content="ArghaKamalSahoo">
	<meta name="abstract" content="data logging page">
	<link href="../css/datalog.css" rel="stylesheet">
	<link href=".../css/font-awesome.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel ="stylesheet">
	<link href="../script/bootstrap.css" rel="stylesheet">
	<link href="../script/bootstrap.min.css" rel="stylesheet">
	<script src="../script/bootstrap.min.js"></script>
	</head>
	<body style="background-color:#CCFF66">
		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Data Logging</a>
				</div>
				<form class="navbar-form navbar-right">
					<button type="submit" class="btn btn-success">Sign Out</button>
				</form>
			</div>
        </nav>
         <div class="container">
      <div class="row">
         <div class="row text-center content-row">
                <div class="col-md-4 col-sm-6">
                        <i class="fa fa-user-plus fa-5x"></i>
                        <h3>Memeber Registration </h3>
                        <p>Fill all data for successful registration.</p>
                        <form class="form-horizontal" role="form" method="post" action="../register/index.php" >
                            <div class="indent">
                        	    <div class="form-group">
                        		    <label for="firstname" class="col-sm-4 control-label">Name</label>
                        	           <div class="col-sm-8">
                        		             <input type="text" placeholder="First name" class="form-control input-lg" id="name" name="name">
                        	           </div>
                        	    </div>
                             </div>
                            <div class="indent">
                        	    <div class="form-group">
                        		  <label for="data registration" class="col-sm-4 control-label">Reg No:</label>
                        		         <div class="col-sm-8">
                        			         <input type="text" class="form-control input-lg" placeholder="Registration no:" id="reg" name="reg">
                        	             </div>
                                </div>
                            </div>
                            <div class="indent">
                                <div class="form-group">
                        		    <label for="data registration" class="col-sm-4 control-label">Stream</label>
                        		         <div class="col-sm-8">
                        			         <input type="text" class="form-control input-lg" placeholder="Stream" id="reg" name="stream">
                        	              </div>
                                </div>
                            </div>
                            <div class="indent">
                                 <div class="form-group">
                        		     <label for="data registration" class="col-sm-4 control-label">Session</label>
                        		          <div class="col-sm-8">
                        			         <input type="text" class="form-control input-lg" placeholder="session-year" id="sesssion" name="session">
                        	               </div>
                                  </div>
                            </div>
                        <button type="submit" class="btn btn-success">Register </button>
                        </form>
                </div>
                    <div class="col-md-4 col-sm-6">
                        <i class="fa fa-user-times fa-5x"></i>
                        <h3>Memeber Deregistration</h3>
                        <p>Enter member's valid Registration No and Passsword to deregister </p>
                        <form class="form-horizontal" role="form" method="post" action="../deregister/deregister.php">
                            <div class="indent">
                        	   <div class="form-group">
                        		    <label for="firstname" class="col-sm-4 control-label">Reg No:</label>
                        		         <div class="col-sm-8">
                        		             <input type="text" placeholder="Registration No" class="form-control input-lg" id="reg" name="regno">
                        	             </div>
                        	    </div>
                            </div>
                            <!--<div class="indent">
                        	    <div class="form-group">
                        		     <label for="data registration" class="col-sm-4 control-label">Password</label>
                        		         <div class="col-sm-8">
                        			         <input type="password" class="form-control input-lg" placeholder="password" id="pwd" class="pwd">
                        	             </div>
                                 </div>
                             </div>-->
                        <button type="submit" class="btn btn-success">Deregister</button>
                    </form>
                </div>
                <div class="col-md-4 col-sm-6">
                        <i class="fa fa-search fa-5x"></i>
                        <h3>Search</h3>
                        <p>search student with valid registration No: and Password</p>
                        <form class="form-horizontal" role="form" method="post" action="../search/search.php">
                            <div class="indent">
                        	    <div class="form-group">
                        		    <label for="firstname" class="col-sm-4 control-label">Reg No:</label>
                        		         <div class="col-sm-8">
                        		              <input type="text" placeholder="Registration No" class="form-control input-lg" id="reg" name="regno">
                        	             </div>
                        	    </div>
                            </div>
                           <!-- <div class="indent">
                        	     <div class="form-group">
                        		     <label for="data registration" class="col-sm-4 control-label">password</label>
                        		         <div class="col-sm-8">
                        			          <input type="text" class="form-control input-lg" placeholder="password" id="pwd" name="pwd">
                        	             </div>
                                 </div>
                             </div>-->
                        <button type="submit" class="btn btn-success">Search</button>
                    </form>
              </div>
            </div>
          </div>
        </div>
      
	</body>
</html>