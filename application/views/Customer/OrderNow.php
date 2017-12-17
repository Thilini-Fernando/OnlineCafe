<?php include 'HnF/header.php'?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Our Foods</h4>
                    </div>
                    <?php echo form_open('CustomerCont/addOrder'); ?>

                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                            <th>Food ID</th>
                            <th>Food Items</th>
                            <th>Available Quantity</th>
                            <th>Add to Order</th>

                            </thead>
                            <tbody>

                            <?php
                            if($n_val)
                            {
                                foreach($n_val as $nvalue)
                                {
                                    ?>

                                    <tr>
                                        <td><?php echo $nvalue->food_id?></td>
                                        <td><?php echo $nvalue->food_name?></td>
                                        <td><?php echo $nvalue->remaining_qty?></td>
                                        <?php
                                            if(($nvalue->remaining_qty)>0)
                                                    {
                                                ?>
                                                <td>
                                                    <button class="btn btn-info btn-hover" name="orderAdd">Add </button>
                                                </td>


                                                <?php
                                                    }

                                                ?>
                                    </tr>

                                 <?php

                                }
                            }
                                 ?>




                            </tbody>
                        </table>
                        <?php echo form_close(); ?>


                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="card card-plain">

                    <div class="content table-responsive table-full-width">



                    </div>
                </div>

                <?php include 'HnF/footer.php'?>
