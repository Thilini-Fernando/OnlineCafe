<?php include 'HnF/header.php'?>

<div class="content">

    <?php if($this->session->flashdata('msg')){
        echo "<h2>"."<center>"."<SMALL>".$this->session->flashdata('msg')."</center>"."</SMALL>"."</h2>";
    } ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Order Now </h4>
                    </div>

                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">

                            <thead>
                            <th>Food ID</th>
                            <th>Food Items</th>
                            <th>Available Quantity</th>
                            <th>Add Quantity</th>
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

                                                            <input type="text" class="form-control" name="qty1"> </input>

                                                        </td>
                                                <td>

                                                    <button type="submit" onclick="Submit(this);" class="btn btn-info btn-hover"  value="<?php echo $nvalue->food_id;?>" >
                                                </td>



                                                <?php
                                                    }
                                            else{
                                                ?>
                                                <td>Unavailable</td>
                                                <td>Unavailable</td>

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


                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="card card-plain">

                    <div class="content table-responsive table-full-width">



                    </div>
                </div>

                <?php include 'HnF/footer.php'?>



                <script>

                    function Submit(object) {









                        var id = object.value;
                        var qty = object.parentElement.parentElement.childNodes[7].firstElementChild.value;

                        console.log(id);
                        console.log(qty);



                        $.ajax({
                            type:"POST",
                            url:"http://localhost/OnlineCafe/index.php/CustomerCont/addOrder",
                            data:{"qty1":qty,"fid":id},
                            dataType:'JSON',
                            success:function (json){

                                object.parentElement.parentElement.childNodes[7].firstElementChild.value="";



                            },
                            error:function () {

                                object.parentElement.parentElement.childNodes[7].firstElementChild.value="";

                            }










                        });



                    }








                </script>
