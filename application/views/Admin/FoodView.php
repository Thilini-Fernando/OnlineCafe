<?php include 'HnF/header.php' ?>

        <div class="content">

            <?php if($this->session->flashdata('msg')){
                echo "<h2>"."<center>"."<SMALL>".$this->session->flashdata('msg')."</center>"."</SMALL>"."</h2>";
            } ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Food Items</h4>
                                <p class="category">view and edit data</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>food id</th>
                                    	<th>food Name</th>
                                    	<th>Qty</th>
                                    	<th>Price (Rs/=)</th>
                                        <!--th>Action</th-->

                                    </thead>
                                    <tbody style="align-items: center;">
                                        <?php
                                            if ($p_val){
                                                # code...
                                                foreach ($p_val as $pvalue) {
                                                    # code...
                                                
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $pvalue->food_id ?></td>
                                                        <td><?php echo $pvalue->food_name ?></td>
                                                        <td><?php echo $pvalue->remaining_qty ?></td>
                                                        <td><?php echo $pvalue->unit_price ?></td>
                                                        <!--td>
                                                            <button class="btn btn-info btn-hover">Edit</button>
                                                        </td-->
                                                    </tr>
                                                    <?php 
                                                }
                                            }
                                                    ?>
                                    </tbody>
                                    
                                </table>

                            </div>
                        </div>
                    </div>                  

                </div>
            </div>
        </div>

        <!-- add food items -->

        <div class="content">
            <div class="container-fluid" style="text-align: left;">
                <!--div class="container" -->
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Food Items</h4>
                                
                            </div>
                            <div class="content">
                                <?php echo form_open('AdminCont/addFoods'); ?>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Food name</label>
                                                <input type="text" name="fd_nm" class="form-control" placeholder="Butter cake (1kg)">
                                            </div>
                                        </div>
                                        
                                        
                                    </div>

                                    

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Init Quantity</label>
                                                <input type="text" name = "qty" class="form-control" placeholder="Last name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Item price</label>
                                                <input type="text" name="itm_price" class="form-control" placeholder="xxx.yy">
                                            </div>
                                        </div>
                                    </div>                       
                                    
                                    <button type="submit" class="btn btn-success btn-fill pull-left">Add Food Item</button>
                                    <div class="clearfix"></div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                <!--/div-->
            </div>
        </div> 

        <!-- add food items -->

        <div class="content">
            <div class="container-fluid" style="text-align: left;">
                
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Food Items</h4>
                                
                            </div>
                            <div class="content">
                                <?php echo form_open('AdminCont/editFoods'); ?>
                                    
                                    <div class="row col-lg-12 col-md-12">
                                        
                                        <div class="form-group">
                                            <label>Food name</label>
                                            
                                            <!--select  class="form-control" style="height: 40px;" id="userIndex" name="fd_nm"-->
                                            <select  class="form-control co" name="fd_nm">
                                                <option>Select food item</option>

                                                <?php foreach ($p_val as $pvalue) { 
                                                ?>
                                                    <option style="color: black;"><?php echo $pvalue->food_name ?></option>

                                                <?php

                                                } 

                                                ?>

                                            </select>
                                        </div>
                                        
                                        
                                        
                                    </div>

                                    

                                    <div class="row" align="center" style="text-align: left">
                                        
                                            <div class="form-group col-lg-6 col-md-6">
                                                <label>Init Quantity</label>
                                                <input type="text" name = "qty" class="form-control" placeholder="Last name">
                                            </div>
                                        
                                        
                                            <div class="form-group col-lg-6 col-md-6">
                                                <label>Item price</label>
                                                <input type="text" name="itm_price" class="form-control" placeholder="xxx.yy">
                                            </div>
                                        
                                    </div>                       
                                    
                                    <button type="submit" class="btn btn-success btn-fill pull-left">Edit Food Item</button>
                                    <div class="clearfix"></div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>

    </div>
</div>


<?php include 'HnF/footer.php' ?>