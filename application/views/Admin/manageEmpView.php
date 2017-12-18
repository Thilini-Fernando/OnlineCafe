<?php include 'HnF/header.php' ?>

        <div class="content">

            <?php if($this->session->flashdata('msg')){
                echo "<h2>"."<center>"."<SMALL>".$this->session->flashdata('msg')."</center>"."</SMALL>"."</h2>";
            } ?>
            <hr>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Employee Details</h4>
                                <p class="category">view and edit data <br> You can delete System admin and normal employees</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>emp id</th>
                                    	<th>First Name</th>
                                    	<th>Last Name</th>
                                    	<th>Position</th>
                                        <th>Email</th>
                                        <th>DOB</th>
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
                                                        <td><?php echo $pvalue->emp_id ?></td>
                                                        <td><?php echo $pvalue->emp_fname ?></td>
                                                        <td><?php echo $pvalue->emp_lname ?></td>
                                                        <td><?php echo $pvalue->position ?></td>
                                                        <td><?php echo $pvalue->email ?></td>
                                                        <td><?php echo $pvalue->dob ?></td>
                                                        <td>

                                                        <?php
                                                        if ($pvalue->position == 'System Admin') {?>

                                                            Not available for <br> editing or delete
                                                        
                                                        <?php }else{ ?>
                                                            <a href="<?php echo base_url('index.php/AdminCont/editEmp/'.$pvalue->emp_id); ?>" class="btn btn-info">Edit</a>
                                                            <a href="<?php echo base_url('index.php/AdminCont/deleteEmp/'.$pvalue->emp_id); ?>" class="btn btn-warning">Delete</a>

                                                        <?php

                                                        }

                                                        ?>
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
                </div>
            </div>
        </div>

        


    </div>
</div>


<?php include 'HnF/footer.php' ?>