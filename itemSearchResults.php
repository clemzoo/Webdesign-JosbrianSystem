<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/scripts/validatePromotionForms.js" type="text/javascript"></script>
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<title>Josbrian Interface - Item Search Results</title>
	<style>
		@media (min-width: 768px)
   .sidebar {
      position: fixed;
      top: 51px;
      bottom: 0;
      left: 0;
      z-index: 1000;
      display: block;
      padding: 20px;
      overflow-x: hidden;
      overflow-y: auto;
      background-color: #f5f5f5;
      border-right: 1px solid #eee;
   }

   textarea:focus {
    height: 10em;
   }      

    tr:hover td {background:#36465d; cursor: pointer;}
    tr:hover p  {color:#ffffff;}   
    p{
           font-size: 100%; 
    }    
	</style>
	
</head>

<body style="background: #36465d;">
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                     <span class="sr-only">Toggle Navigation</span>   
                     <span class="icon-bar"></span>      
                     <span class="icon-bar"></span>      
                     <span class="icon-bar"></span>             
                 </button>  
                <div class="navbar-collapse collapse">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.html">Josbrian Interface</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="index.html">Homepage</a></li>
                    <li class="active"><a href="items.html">Items</a>
					<li><a href="promotions.html">Promotions</a>
					</li>
				</ul>
			</div>
            </div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
			<nav id="left-sidebar-nav" class="sidebar-nav">
              <div class="navbar-collapse collapse">
              <div id="left-sidebar" class="sidebar">
				<ul id="main-menu" class="metismenu">
                    <center><li style="padding-top: 10px; padding-bottom: 10px;"><b>Items</b></li></center>
					<li name="newItem" id="newItem"><a href="#addNewItem" data-toggle="pill">Item Promotion</a></li>
					 <li name="updateItem" id="updateItem"><a href="#updateExistingItem" data-toggle="pill">Update Existing Item</a></li>
					 <li name="searchItem" id="searchItem" class="active"><a href="#searchExistingItem" data-toggle="pill"><span class="glyphicon glyphicon-search"></span> Search Items</a></li>
				</ul>
                </div>
                </div>
			</nav>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">
				<!-- Screen Reader -->
				<h1 class="sr-only">Item Manipulation</h1>
				<!-- Item Manipulation Panel -->
			<!--	<form accept-charset="UTF-8" role="form" action="" method="POST"> -->
					<div class="tab-content">
						<div id="updateExistingItem" class="tab-pane fade">
							<!-- This is for the panel creation -->
							<div class="col-md-4 col-md-offset-4">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title"><b>Edit Item:</b></h3>
									</div>
									<div class="panel-body">
								   <fieldset>
 									<div class="form-group">
 										<input class="form-control" placeholder="Promotion Name" name="promotionName" id="promotionName" type="text">
 									</div>
 									<div class="form-group">
                                        <textarea rows="1" class="form-control" placeholder="Promotion Description" name="promotionDescription" id="promotionDescription" type="text"></textarea>
 									</div>
 									<div class="form-group">
 										<select style="color: rgba(0,0,0,0.5);" class="form-control" id="promotionType" name="promotionType">
                                            <option style="color: rgba(0,0,0,0);" value="" disabled selected>Promotion Type</option>
                                            <option value="amountOff">Dollar</option>
                                            <option value="percentOff">Percent</option>
                                        </select>
 									</div>
 									<div class="form-group">
 										<input class="form-control" placeholder="Amount Off" name="amountOff" id="amountOff" type="text">
 									</div>
 									    <button class="btn btn-lg btn-success btn-block" type="submit" value="Submit">Submit</button>
                                        <button class="btn btn-lg btn-danger btn-block" type="rest" value="Rest">Clear</button>
 									</fieldset>
									</div>
								</div>
							</div>
						</div>
    <!--                    
						<div id="searchExistingItem" class="tab-pane fade">
							
							<div class="col-md-4 col-md-offset-4">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title"><b>Search Promotions:</b></h3>
									</div>
									<div class="panel-body">
								    <fieldset>
                                    <form name="promotionSearchForm" onsubmit="validatePromotionSearch()">
 									<div class="form-group">
 										<input class="form-control" placeholder="Promotion Name" name="promotionName" id="promotionName" type="text">
 									</div>
 									<div class="form-group">
                                     <center><h4><b>OR</b></h4></center>
 									</div>
 									<div class="form-group">
 										<select style="color: rgba(0,0,0,0.5);" class="form-control" id="promotionType" name="promotionType">
                                            <option style="color: rgba(0,0,0,0);" value="" disabled selected>Promotion Type</option>
                                            <option value="amountOff">Dollar</option>
                                            <option value="percentOff">Percent</option>
                                        </select>
 									</div>
 									<div class="form-group">
 										<input class="form-control" placeholder="Amount Off" name="promotionAmountOff" id="promotionAmountOff" type="text">
 									</div>
                                        <button class="btn btn-lg btn-success btn-block" type="submit" value="Submit">Submit</button>
                                        <button class="btn btn-lg btn-danger btn-block" type="rest" value="Rest">Clear</button>
                                    </form>    
 									</fieldset>
									</div>
								</div>
							</div>
						</div>
-->                
        <!--  TABLE TO RETURN DATA TO  -->            
                        <div id="searchResults" class="container">
                         <div class="jumbotron">    
                            <h2 style="padding-bottom: 20px;"><b>Item Search Results:</b></h2> 
                            <center>    
                            <table class="table" id="table">
                                <thead>
                                  <tr>    
                                    <th>Example 1</th>
                                    <th>Example 2</th>
                                    <th>Example 3</th>
                                    <th>Example 4</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr data-toggle="modal" data-target="#itemDetailModal">
                                    <td><p>Result 1</p></td>
                                    <td><p>Result 1</p></td>
                                    <td><p>Result 1</p></td>
                                    <td><p>Result 1</p></td>
                                  </tr>
                                  <tr data-toggle="modal" data-target="#itemDetailModal">
                                    <td><p>Result 1</p></td>
                                    <td><p>Result 1</p></td>
                                    <td><p>Result 1</p></td>
                                    <td><p>Result 1</p></td>
                                  </tr>      
                                </tbody>
                            </table>
                            </center>               
                        </div>
                        </div>
					</div>				
	<!--			</form>  -->
			</div>
		</div>
		<!-- END MAIN CONTENT -->
		<div class="clearfix"></div>
	</div>
	<!-- END WRAPPER -->
    
    <!-- START OF MODAL PROMOTION PROMPTS -->
    
      
    <!-- Button trigger details modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#itemDetailModal">
  Row to click on.
</button>

<!-- Promotion Details Modal -->
<div class="modal fade" id="itemDetailModal" tabindex="-1" role="dialog" aria-labelledby="itemDetailTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="itemDetailTitle" style="bottom-padding: 10px;"><b>Item Details:</b></h3>
        <button type="button" class="close" data-dismiss="modal" style="bottom-padding: 10px;" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table" id="itemDetailsTable" name="itemDetailsTable">
            <thead>
              <tr>
                <th>Detail 1</th>
                <th>Detail 2</th>
                <th>Detail 3</th>
                <th>Detail 4</th>
                <th>Detail 5</th>
              </tr>          
            </thead>
            <tbody>
              <tr>
                <td>Data</td>
                <td>Data</td>      
                <td>Data</td>      
                <td>Data</td>      
                <td>Data</td>        
              </tr>
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button style="float: left;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#itemEditModal"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Edit</button>   
      </div>
    </div>
  </div>
</div>
    
    
    
<!-- Promotion Edit Modal -->
<div class="modal fade" id="itemEditModal" tabindex="-1" role="dialog" aria-labelledby="itemEditModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="itemEditModal" style="bottom-padding: 10px;"><b>Edit Item:</b></h3>
        <button type="button" class="close" data-dismiss="modal" style="bottom-padding: 10px;" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="itemUpdateForm" onsubmit="validateItemUpdate()">
             <div class="form-group">
               <h5>Item Number:</h5>     
 			   <input class="form-control" placeholder="Item Number" name="itemNumber" id="itemNumber" type="text">
 			 </div> 
 			<div class="form-group">
              <h5>Item Description:</h5>    
 			  <input class="form-control" placeholder="Item Description" name="description" id="description" type="text">
 			</div>
 			<div class="form-group">
                <h5>Item Category:</h5> 
                <input class="form-control" placeholder="Item Category" name="category" id="category" type="text" value="">
 			</div>
 			<div class="form-group">
              <h5>Department Name:</h5>     
 			  <input class="form-control" placeholder="Department Name" name="department" id="department" type="text" value="">
 			</div>
 			<div class="form-group">
              <h5>Purchase Cost:</h5>     
 			  <input class="form-control" placeholder="Purchase Cost" name="cost" id="cost" type="text" value="">
 			</div>
 			<div class="form-group">
              <h5>Full Retail Price:</h5>     
 			  <input class="form-control" placeholder="Full Retail Price" name="price" id="price" type="text" value="">
 			</div>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" type="submit" value="Submit"><span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;Save changes</button>
      </div>
      </form>      
    </div>
  </div>
</div>    
    
<!-- END OF MODAL PROMOTION PROMPTS -->    
	
</body>

</html>