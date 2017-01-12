
<?php
function category_add()
{
    $dbObj = new DBUtility();
    if (isset($_POST['ok'])) {

        $category= $_REQUEST["category"];
       
       $sql = "insert into category (cat_name)values('$category')";
        $res = $dbObj->insert($sql);
		
        echo "<h2 align='center' style='color:#000000'>Successfully Save Category</h2>";
	    echo "<meta http-equiv='refresh' content='1; URL=dashboard.php?page=catadd'/>";
        exit;

    }

        ?>
        
        <div class="row">
                <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Add Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <form role="form" action="" method="post">
                                      <div class="form-group">
                                        <label>Category name</label>
                                         <input class="form-control" name ="category" required/>
                                          
                                        </div>
									   
									   <div>
									    <input class="btn btn-info btn-sm" type="submit" name="ok" value="Save"/></td>
									   </div>
										</form>
								     </div>
									</div>
								</div>
							</div>
						</div>
					</div>
 <?php
}
?>




<?php
function  category_view(){
	 
	  $dbObj =	new DBUtility();
	  $sql="select * from category";
       $res= $dbObj->select($sql);
	 ?>

   <div class="col-lg-12">
    <table class="table table-bordered">
    <thead>
      <tr>
	   <th>Categoriy ID</th>
        <th>cat_name</th>
		 <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
	<?php for ($i = 0; $i < count($res); $i++) {
	   $id = $res[$i]["cat_id"];
	   $cat_name = $res[$i]["cat_name"];
     ?>
    <tbody>
      <tr>
        <td><?php echo $id;?></td>
		
        <td><?php echo $cat_name;?></td>			
		<td>
		<a href="dashboard.php?id=<?php echo $id; ?>&page=editcat" title="Edit">
           <i class="glyphicon glyphicon-pencil"></i></a>
		</td>
		<td>
		<a href="dashboard.php?id=<?php echo $id; ?>&page=delcat" onclick="return confirm('Are you sure you want to delete this category?');" title="Delete">
           <i class="glyphicon glyphicon-trash"></i></a>
		</td>
		
      </tr>
    </tbody>
	 <?php
  }
  ?>
  </table>
 
</div>
<?php 
}

?>



<?php
 function delete_cate(){
	$dbObj =	new DBUtility();
	$id = $_GET['id'];
	 
   $sql="DELETE FROM category WHERE cat_id=$id";
   $ressult = $dbObj->update($sql);
   
    echo "<h2 align='center' style='color:#000000'>Successfully Deleted</h2>";
    echo "<meta http-equiv='refresh' content='1; URL=dashboard.php?page=catev'>";
    exit;
	 
 }

?>



<?php
 function edit_cate(){
	
	   $dbObj =	new DBUtility();
	   $id = $_GET['id'];
	   $sql="select * from category where cat_id=$id";
       $res= $dbObj->select($sql);
   
	   $cat_name = $res[0]["cat_name"];

		if(isset($_POST['ok']))
		{
			
		$cat_name = $_REQUEST["cat_name"];
       
	
		$sql = "update category set
				cat_name='$cat_name'
				 where cat_id = '$id'";
          $result = $dbObj->update($sql);
			
			echo "<h2 align='center' style='color:#000000;'>Successfully Updated.</h2>";
			echo "<meta http-equiv='refresh' content='1 URL=dashboard.php?page=catev'>";
			exit;
			
			
		}
		
	?>
	
      <div class="row">
                <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Shop Category Update
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <form role="form" action="" method="post" enctype="multipart/form-data">
									 <div class="form-group">
                                            <label>Category name</label>
                                            <input class="form-control" name="cat_name" value="<?php echo $cat_name;?>"required >
                                        </div>
										
									   <div>
									    <input class="btn btn-info btn-sm" type="submit" name="ok" value="Save"/></td>
									   </div>
										</form>
								     </div>
									</div>
								</div>
							</div>
						</div>
					</div>
<?php 
}

?>


<?php
function shop_add()
{
    $dbObj = new DBUtility();
    if (isset($_POST['ok'])) {

        $name= $_REQUEST["name"];
		$category= $_REQUEST["category"];
		$shop_des= $_REQUEST["shop_des"];
		$url= $_REQUEST["url"];
		$picture = $_REQUEST["picture"];
		$coupon_code = $_REQUEST["coupon_code"];
		$cashback = $_REQUEST["cashback"];
		
        if ($_FILES["picture"]["name"] != "") {
            $picture = $_FILES["picture"]["name"];
			//echo $picture;
            move_uploaded_file($_FILES["picture"]["tmp_name"], "../images/img/" . $picture);
	
        }
		
       $sql = "insert into shop(name, cat_id, picture, shop_des, url,coupon_code,cashback)
	   values('$name','$category','$picture','$shop_des','$url','$coupon_code','$cashback')";
       $res = $dbObj->insert($sql);
		
        echo "<h2 align='center' style='color:#000000'>Successfully Save Category</h2>";
	    echo "<meta http-equiv='refresh' content='1; URL=dashboard.php?page=shopadd'/>";
        exit;

    }
    ?>
        
    <div class="row">
       <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
                Add Shop
            </div>
               <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-9">
                        <form role="form" action="" method="post" enctype="multipart/form-data">
                                      
			                     <div class="form-group">
                                    <label>Shop Name</label>
                                     <input class="form-control" name="name" required/>
                                  </div>
										  
				              <div class="form-group">
                                <label>Upload Photo</label>
                               <input class="form-control" type ="file" name="picture" requried/>
                               </div>
							  
							<div class="form-group">
                            <label for="noise">Categoriy</label>							
						 <select name="category" id="className">
						 <option value="">category</option>
						<?php
                           $sql = "select * from category";
                           $result = $dbObj->select($sql);
                            for ($i = 0; $i < count($result); $i++) {
                            ?>
                            <option value="<?php echo $result[$i]["cat_id"]; ?>"><?php echo $result[$i]["cat_name"]; ?></option>
							<?php } ?>
							 </select>
						</div>	
						<div class="form-group">
                           <label for="noise">Shop Description:</label>
				            <textarea id="noise" name="shop_des" class="widgEditor nothing"   rows="5"></textarea>
				         </div>
						 <div class="form-group">
                            <label>Shop URL</label>
                            <input class="form-control" name ="url" required/>
                        </div>
						<div class="form-group">
                            <label>Coupon Code</label><span>(Optional)</span>
                            <input class="form-control" name ="coupon_code"/>
                        </div>
						<div class="form-group">
                            <label>Cashback in %</label>
                            <input class="form-control" name ="cashback" required/>
                        </div>
									   
				         <div>
	               <input class="btn btn-info btn-sm" type="submit" name="ok" value="Save"/></td>
	            </div>
				</form>
		</div>
	</div>
	</div>
</div>
</div>
</div>
 <?php
}
?>



<?php
function shop_view(){
	 
	  $dbObj =	new DBUtility();
	  $sql="select * from shop";
       $res= $dbObj->select($sql);
	 ?>

   <div class="col-lg-12">
    <table class="table table-bordered">
    <thead>
      <tr>
	   <th>Shop ID</th>
        <th>Shop Name</th>
		<th>Shop Description</th>
		<th>Shop Logo</th>
		<th>Cashback</th>
		<th>Site URL</th>
		 <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
	<?php for ($i = 0; $i < count($res); $i++) {
	   $shop_id = $res[$i]["shop_id"];
	   $name = $res[$i]["name"];
	   $shop_des = $res[$i]["shop_des"];
	   $picture = $res[$i]["picture"];
	   $cashback = $res[$i]["cashback"];
	   $url = $res[$i]["url"];
	    
     ?>
    <tbody>
      <tr>
        <td><?php echo $shop_id;?></td>
        <td><?php echo $name;?></td>
        <td><?php echo $shop_des;?></td>
		<td>
	 <img width="100" height="100"
     src="../images/img/<?php echo $picture;?>"/>
	</td>
        <td><?php echo $cashback;?></td>
        <td><?php echo $url;?></td>		
		<td>
		<a href="dashboard.php?id=<?php echo $shop_id; ?>&page=editshop" title="Edit">
           <i class="glyphicon glyphicon-pencil"></i></a>
		</td>
		<td>
		<a href="dashboard.php?id=<?php echo $shop_id; ?>&page=delshop" onclick="return confirm('Are you sure you want to delete this shop?');" title="Delete">
           <i class="glyphicon glyphicon-trash"></i></a>
		</td>
		
      </tr>
    </tbody>
	 <?php
  }
  ?>
  </table>
 
</div>
<?php 
}

?>

<?php
 function shop_edit(){
	
	   $dbObj =	new DBUtility();
	   $id = $_GET['id'];
	   $sql="select * from shop where shop_id=$id";
       $res= $dbObj->select($sql);
   
	    $name= $res[0]["name"];
		$shop_des= $res[0]["shop_des"];
		$url= $res[0]["url"];
		$picture = $res[0]["picture"];
		$cashback = $res[0]["cashback"];
		

		if(isset($_POST['ok']))
		{
			
		$name= $_REQUEST["name"];
		$shop_des= $_REQUEST["shop_des"];
		$url= $_REQUEST["url"];
		$picture = $_REQUEST["picture"];
		$cashback = $_REQUEST["cashback"];
		
		 if ($_FILES["picture"]["name"] != "") {
            $picture = $_FILES["picture"]["name"];
			//echo $picture;
            move_uploaded_file($_FILES["picture"]["tmp_name"], "../images/img/" . $picture);
	
        }
       
	
		$sql = "update shop set
				name='$name',
				shop_des='$shop_des',
				url='$url',
				picture='$picture',
				cashback='$cashback'
			   where shop_id = '$id'";
          $result = $dbObj->update($sql);
			
			echo "<h2 align='center' style='color:#000000;'>Successfully Updated.</h2>";
			echo "<meta http-equiv='refresh' content='1 URL=dashboard.php?page=shopview'>";
			exit;
			
			
		}
		
	?>
	
      <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Shop Update
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                 <form role="form" action="" method="post" enctype="multipart/form-data">
									 <div class="form-group">
                                    <label>Shop Name</label>
                                     <input class="form-control" name="name" value="<?php echo   $name;?>"/>
                                  </div>
										  
				              <div class="form-group">
                                <label>Upload Photo</label>
                               <input class="form-control" type ="file" name="picture" value="<?php echo $picture;?>"/>
                               </div>
							  
						 <div class="form-group">
                           <label for="noise">Shop Description:</label>
				            <textarea id="noise" name="shop_des" class="widgEditor nothing"   rows="5"><?php echo $shop_des;?></textarea>
				         </div>
						 <div class="form-group">
                            <label>Shop URL</label>
                            <input class="form-control" name ="url" value="<?php echo $url;?>"/>
                        </div>
						<div class="form-group">
                            <label>Cashback in %</label>
                            <input class="form-control" name ="cashback" value="<?php echo $cashback;?>"/>
                        </div>
						<div>
							<input class="btn btn-info btn-sm" type="submit" name="ok" value="Save"/></td>
						</div>
										</form>
								     </div>
									</div>
								</div>
							</div>
						</div>
					</div>
<?php 
}

?>

<?php
 function shop_delete(){
	$dbObj =	new DBUtility();
	$id = $_GET['id'];
	 
   $sql="DELETE FROM shop WHERE shop_id=$id";
   $ressult = $dbObj->update($sql);
   
    echo "<h2 align='center' style='color:#000000'>Successfully Deleted</h2>";
    echo "<meta http-equiv='refresh' content='1; URL=dashboard.php?page=shopview'>";
    exit;
	 
 }

?>

 