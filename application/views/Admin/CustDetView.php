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
                                <h4 class="title">Customer Details</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>cust id</th>
                                    	<th>First Name</th>
                                    	<th>Last Name</th>                    	
                                        <th>Email</th>
                                        <th>contact no</th>
                                        <th>Address</th>
                                        <th>Action</th>

                                    </thead>
                                    <tbody style="align-items: center;">
                                        <?php
                                            if ($p_val){
                                                # code...
                                                foreach ($p_val as $pvalue) {
                                                    # code...
                                                
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $pvalue->cust_id ?></td>
                                                        <td><?php echo $pvalue->cust_fname ?></td>
                                                        <td><?php echo $pvalue->cust_lname ?></td>
                                                        <td><?php echo $pvalue->email ?></td>
                                                        <td><?php echo $pvalue->contact_no ?></td>
                                                        <td><?php echo $pvalue->address ?></td>    
                                                        <td>
                                                            <!--a href="" class="btn btn-info">Edit</a-->
                                                            <a href="<?php echo base_url('index.php/AdminCont/deleteCust/'.$pvalue->cust_id); ?>" class="btn btn-warning">Delete</a>
                                                        </td>
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


                    <!--div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Table on Plain Background</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Salary</th>
                                    	<th>Country</th>
                                    	<th>City</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Dakota Rice</td>
                                        	<td>$36,738</td>
                                        	<td>Niger</td>
                                        	<td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Minerva Hooper</td>
                                        	<td>$23,789</td>
                                        	<td>Curaçao</td>
                                        	<td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Sage Rodriguez</td>
                                        	<td>$56,142</td>
                                        	<td>Netherlands</td>
                                        	<td>Baileux</td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>Philip Chaney</td>
                                        	<td>$38,735</td>
                                        	<td>Korea, South</td>
                                        	<td>Overland Park</td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>Doris Greene</td>
                                        	<td>$63,542</td>
                                        	<td>Malawi</td>
                                        	<td>Feldkirchen in Kärnten</td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>Mason Porter</td>
                                        	<td>$78,615</td>
                                        	<td>Chile</td>
                                        	<td>Gloucester</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div-->


                </div>
            </div>
        </div>

        


    </div>
</div>


<?php include 'HnF/footer.php' ?>