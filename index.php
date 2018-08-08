<?php include("header-index.php"); ?>
<body class="index-page">
  <div class="wrapper light-wrapper">
    <div class="container inner">
      <h2 class="section-title mb-40 text-center">Auto Provision Tool</h2>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel-group panel-group-lined" id="accordion3">
            <div class="panel">
              <div class="panel-heading">
                <div class="panel-title"><a data-toggle="collapse" class="panel-toggle active" data-parent="#accordion3" href="#accordion3-1">Feature 1 - Create a form that will populate the criteria to create a new product</a></div>
              </div>
              <div id="accordion3-1" class="panel-collapse collapse in">
                <div class="panel-body">
                	<form action="feature1.php" method="get" onsubmit="return checkSubmit();">
					
								<label class="control-label">SKU Number</label>
								<input id="customMargins" type="text" name="skuNumber" />
								<label class="control-label">Product Name:</label>
								<input id="customMargins" type="text" name="productName" />
					
							<input id="noBmargin" class="btn btn-info btn-rounded" type="submit" value="Submit" />
					</form>
                </div>
              </div>
            </div>
            <!-- /.panel -->
            <div class="panel">
              <div class="panel-heading">
                <div class="panel-title"><a data-toggle="collapse" class="panel-toggle" data-parent="#accordion3" href="#accordion3-2">Feature 2.1 - Generate a list of all the products and their associated product numbers</a></div>
              </div>
              <div id="accordion3-2" class="panel-collapse collapse">
                <div class="panel-body">
                  <form action="feature2-1.php" method="get">
				  	<button id="noBmargin" class="btn btn-info btn-rounded pull-right" type="submit">List all Products</button>
				  </form>
                </div>
              </div>
            </div>
            <!-- /.panel -->
            <div class="panel">
              <div class="panel-heading">
                <div class="panel-title"><a data-toggle="collapse" class="panel-toggle" data-parent="#accordion3" href="#accordion3-3">Feature 2.2 - Generate a limited list of all products</a></div>
              </div>
              <div id="accordion3-3" class="panel-collapse collapse">
                <div class="panel-body">
					<form action="feature2-2.php" method="get">
					
								<label class="control-label">Limit Results to:</label>
								<input id="customMargins" type="text" name="limit" />
								
						<button id="noBmargin" class="btn btn-info btn-rounded" type="submit">List Products</button>
					</form>
                </div>
              </div>
            </div>
            <!-- /.panel -->
            <div class="panel">
              <div class="panel-heading">
                <div class="panel-title"><a data-toggle="collapse" class="panel-toggle" data-parent="#accordion3" href="#accordion3-4">Feature 2.3 - Generate a list of all the products with "test" in name</a></div>
              </div>
              <div id="accordion3-4" class="panel-collapse collapse">
                <div class="panel-body">
					<form action="feature2-3.php" method="get">

						<label class="control-label">Limit Results to:</label>
						<input id="customMargins" type="text" name="name" />
			
						<button id="noBmargin" class="btn btn-info btn-rounded" type="submit">List Products</button>
					</form>
                </div>
              </div>
            </div>
            <!-- /.panel -->
            <div class="panel">
              <div class="panel-heading">
                <div class="panel-title"><a data-toggle="collapse" class="panel-toggle" data-parent="#accordion3" href="#accordion3-5">Feature 3 - Get full single product information based Product ID #</a></div>
              </div>
              <div id="accordion3-5" class="panel-collapse collapse">
                <div class="panel-body">
					<form action="feature3-1.php" method="get">
					
								<label class="control-label">Product ID:</label>
								<input id="customMargins" type="text" name="pid" />
								<button id="noBmargin" class="btn btn-info btn-rounded" type="submit">List Product</button>
					</form>
                </div>
              </div>
            </div>
            <!-- /.panel -->
<? /*
            <div class="panel">
              <div class="panel-heading">
                <div class="panel-title"><a data-toggle="collapse" class="panel-toggle" data-parent="#accordion3" href="#accordion3-6">Feature 3.2 - Update a product by using product number from list to change product description</a></div>
              </div>
              <div id="accordion3-6" class="panel-collapse collapse">
                <div class="panel-body">
					<form action="feature3-2.php" method="get">
								<label class="control-label">Product ID</label>
								<input id="customMargins" type="text" name="pid" />
					<br />
					
								<label class="control-label">Product Name</label>
								<input id="customMargins" type="text" name="name" />
					<br />
					
								<label class="control-label">Addendum / Description</label>
								<input id="customMargins" type="text" name="sku_addendum" />
					<br />
					
								<label class="control-label">SKU Number</label>
								<input id="customMargins" type="text" name="sku_number" />
					<br />
					
								<label class="control-label">Product Class</label>
								<input id="customMargins" type="text" name="sku_class" />
								<select>
									<option>Colocation Spaces</option>
								</select>	
					<br />
					
								<label class="control-label">Non-recurring Cost</label>
								<input id="customMargins" type="text" name="nrc" />
					<br />
					
								<label class="control-label">Monthly recurring cost</label>
								<input id="customMargins" type="text" name="mrc" />
					<br />
					
								<label class="control-label">Resource Type (Choose from organization, Interface, device)</label>
								<input id="customMargins" type="text" name="restype" />
								<select>
									<option>Colocation Spaces</option>
								</select>	
					<br />
						<button id="noBmargin" class="btn btn-info btn-rounded" type="submit">Update Product</button>
					</form>
                </div>
              </div>
            </div>
            <!-- /.panel -->
*/ ?>
            <div class="panel">
              <div class="panel-heading">
                <div class="panel-title"><a data-toggle="collapse" class="panel-toggle" data-parent="#accordion3" href="#accordion3-7">Feature 4 - Delete a product by supplying the product number</a></div>
              </div>
              <div id="accordion3-7" class="panel-collapse collapse">
                <div class="panel-body">
					<form action="feature4.php" method="get">

								<label class="control-label">Product ID:</label>
								<input id="customMargins" type="text" name="pid" />
						<button id="noBmargin" class="btn btn-info btn-rounded" type="submit">Delete Product</button>
					</form>
                </div>
              </div>
            </div>
            <!-- /.panel -->
            <div class="panel">
              <div class="panel-heading">
                <div class="panel-title"><a data-toggle="collapse" class="panel-toggle" data-parent="#accordion3" href="#accordion3-8">Feature 5.1 - Get Device ID Information</a></div>
              </div>
              <div id="accordion3-8" class="panel-collapse collapse">
                <div class="panel-body">
					<form action="feature5-1.php" method="get">
					
								<label class="control-label">Device ID:</label>
								<input id="customMargins" type="text" name="did" />
						<button id="noBmargin" class="btn btn-info btn-rounded" type="submit">List Product</button>
					</form>
                </div>
              </div>
            </div>
            <!-- /.panel -->
            <div class="panel">
              <div class="panel-heading">
                <div class="panel-title"><a data-toggle="collapse" class="panel-toggle" data-parent="#accordion3" href="#accordion3-9">Feature 5.2 - Get Device Information based on IP address:</a></div>
              </div>
              <div id="accordion3-9" class="panel-collapse collapse">
                <div class="panel-body">
					<form action="feature5-2.php" method="get">
					
								<label class="control-label">Device IP address:</label>
								<input id="customMargins" type="text" name="dip" />
						<button id="noBmargin" class="btn btn-info btn-rounded" type="submit">List Product</button>
					</form>
                </div>
              </div>
            </div>
            <!-- /.panel -->
             
          </div>
          <!-- /.panel-group --> 
        </div>
        <!-- /column --> 
      </div>
      <!-- /.row -->
  </div>
</div>
</body>
<?php include("footer-index.php"); ?>