<?php include 'HnF/header.php'?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Order Details</h4>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                            <th>Order ID</th>
                            <th>Taken Date</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Price</th>

                            </thead>
                            <tbody>

                            <?php
                            if($o_val){
                                foreach($o_val as $ovalue){
                                    ?>

                                    <tr>
                                        <td><?php echo $ovalue->order_id?></td>
                                        <td><?php echo $ovalue->taken_date?></td>
                                        <td><?php echo $ovalue->due_date?></td>
                                        <td><?php echo $ovalue->status?></td>
                                        <td><?php echo $ovalue->price?></td>



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


            <div class="col-md-12">
                <div class="card card-plain">

                    <div class="content table-responsive table-full-width">



                    </div>
                </div>

                <?php include 'HnF/footer.php'?>
