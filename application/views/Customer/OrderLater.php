<?php include 'HnF/header.php'?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">The Food Menu</h4>
                        <p class="category">Most delicious and so many varities</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                            <th>Name</th>
                            <th>Unit price</th>
                            <th>View</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            </thead>
                            <tbody>
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

<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        Company
                    </a>
                </li>
                <li>
                    <a href="#">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                        Blog
                    </a>
                </li>
            </ul>
        </nav>
        <p class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
        </p>
    </div>
</footer>


</div>
</div>

<?php include 'HnF/footer.php'?>
