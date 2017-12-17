<?php include 'HnF/header.php'?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Our Foods</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <th>Food ID</th>
                                    <th>Food Items</th>
                                    <th>Item price</th>
                                    </thead>
                                    <tbody>

                                    <?php
                                        if($f_val){
                                            foreach($f_val as $fvalue){
                                                ?>

                                                <tr>
                                                    <td><?php echo $fvalue->food_id?></td>
                                                    <td><?php echo $fvalue->food_name?></td>
                                                    <td><?php echo $fvalue->unit_price?></td>


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
