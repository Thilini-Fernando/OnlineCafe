<?php include 'HnF/header.php'?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">

                        <h3 class="title" align="center">Order Later</h3>

                        <h6>You can order for later..................</h6>

                    </div>

                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">

                            <thead>

                            <th>Food ID</th>
                            <th>Food Name</th>
                            <th>Add Quantity</th>
                            <th>Date you want</th>
                            <th>Add to Order</th>



                            <th>Name</th>
                            <th>Unit price</th>
                            <th>View</th>
                            <th>Quantity</th>
                            <th>Total</th>

                            </thead>

                            <tbody>


                            <?php
                            if($l_val)
                            {
                                foreach($l_val as $lvalue)
                                {


                                    ?>


                                    <tr>
                                        <td><?php echo $lvalue->food_id?></td>
                                        <td><?php echo $lvalue->food_name?></td>



                                        <td>

                                            <input type="text" class="form-control" name="qty1"> </input>

                                        </td>

                                        <td>

                                            <input type="text" class="form-control" name="dueDate"> </input>

                                        </td>


                                            <td>

                                                <button type="submit" onclick="Submit(this);" class="btn btn-info btn-hover"  value="<?php echo $lvalue->food_id;?>" >
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


            <div class="col-md-12">
                <div class="card card-plain">

                    <div class="content table-responsive table-full-width">



                    </div>
                </div>

                <?php include 'HnF/footer.php'?>


                              <?php
                            /*  foreach ($food_itemses as $food_items) {
                            echo '<tr>';
                            echo '<td>'.$food_items->food_name.'</td>';
                            echo '<td>'.$food_items->unit_price.'</td>';
                            echo '</tr>';
                          }*/
                          ?>
                          <tr>
                            <td> Fish Bun </td>
                            <td> 85 /= </td>
                            <td> <form action="https://www.youtube.com/watch?v=HNZERFW8lYQ" method="post">
                                <button type="submit" class="btn btn-block btn-success" > How we make it </button>
                                </form> </td>
                            <td>  </td>
                            <td>  </td>
                          </tr>
                          <tr>
                            <td> Pastry </td>
                            <td> 65 /= </td>
                            <td> <form action="https://www.youtube.com/watch?v=HNZERFW8lYQ" method="post">
                                <button type="submit" class="btn btn-block btn-success" > How we make it </button>
                                </form> </td>
                            <td>  </td>
                            <td>  </td>
                          </tr>
                          <tr>
                            <td> Fish role </td>
                            <td> 8o /= </td>
                            <td> <form action="https://www.youtube.com/watch?v=HNZERFW8lYQ" method="post">
                                <button type="submit" class="btn btn-block btn-success" > How we make it </button>
                                </form> </td>
                            <td>  </td>
                            <td>  </td>
                          </tr>
                          <tr>
                            <td> Egg Bun </td>
                            <td> 100 /= </td>
                            <td> <form action="https://www.youtube.com/watch?v=HNZERFW8lYQ" method="post">
                                <button type="submit" class="btn btn-block btn-success" > How we make it </button>
                                </form> </td>
                            <td>  </td>
                            <td>  </td>
                          </tr>
                          <tr>
                            <td> Chicken devol </td>
                            <td> 145 /= </td>
                            <td> <form action="https://www.youtube.com/watch?v=HNZERFW8lYQ" method="post">
                                <button type="submit" class="btn btn-block btn-success" > How we make it </button>
                                </form> </td>
                            <td>  </td>
                            <td>  </td>
                          </tr>

                            </tbody>
                        </table>
                        <form action="https://www.youtube.com/watch?v=HNZERFW8lYQ" method="post">
                            <button type="submit" class="btn btn-block btn-primary" > ORDER </button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



                <script>

                    function Submit(object) {



                        var id = object.value;
                        var qty = object.parentElement.parentElement.childNodes[5].firstElementChild.value;
                        var Duedate=object.parentElement.parentElement.childNodes[7].firstElementChild.value;

                        console.log(id);
                        console.log(qty);
                        console.log(Duedate);


                        $.ajax({
                            type:"POST",
                            url:"http://localhost/OnlineCafe/index.php/CustomerCont/addOrderLater",
                            data:{"qty1":qty,"fid":id,"dueDate":Duedate},
                            dataType:'JSON',
                            success:function (json){

                                object.parentElement.parentElement.childNodes[5].firstElementChild.value="";
                                object.parentElement.parentElement.childNodes[7].firstElementChild.value="";




                            },
                            error:function () {

                                object.parentElement.parentElement.childNodes[5].firstElementChild.value="";
                                object.parentElement.parentElement.childNodes[7].firstElementChild.value="";


                            }

                        });



                    }


                </script>
