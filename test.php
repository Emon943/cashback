<?php
			 $sql = ("SELECT * FROM category WHERE cat_id IN (SELECT cat_id FROM shop)");
			 //$sql="select * from category";
              $res= $dbObj->select($sql);
			  //var_dump($res);
			?>
            <div class="middle">
                <ul id="categories">
                    <li><a href="retailers.php">All Stores</a></li>
                    <ul style='padding-left:0px;margin:0;'>
					<?php for ($i = 0; $i < count($res); $i++) {
						  $id = $res[$i]["cat_id"];
						  $link = 'retailers-guest.php?id=' . $id;
						   $name = $res[$i]['cat_name'];
						?>
					
					<li> <?php echo '<span><a href="' . $link . '">' . $name. '</a></span>';?></li>
					 <?php } ?>
					  </ul>       