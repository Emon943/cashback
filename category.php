<?php
			  $sql="select * from category";
              $res= $dbObj->select($sql);
			?>
            <div class="middle">
                        <ul id="categories">
                            <li><a href="retailers.php">All Stores</a></li>
                            <ul style='padding-left:0px;margin:0;'>
                                <?php for ($i = 0; $i < count($res); $i++) {?>
                                    <li>
                                        <a href="cat_shop.php?id=<?php echo $res[$i]["cat_id"];?>">
                                            <?php echo $res[$i]["cat_name"];?>
                                        </a>
                                    </li>
                                    <?php } ?>
                            </ul>

                        </ul>
                    </div>