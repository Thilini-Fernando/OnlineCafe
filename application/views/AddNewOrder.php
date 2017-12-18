<?php include 'HnF/header.php' ?>

<br>

<div class="Regcontainer"  style="color: whitesmoke">
    <br>
    <h1><b>
            <center>Enter Quantity</center>
        </b></h1>

    <?php if($this->session->flashdata('msg')){
        echo "<h2>"."<center>"."<SMALL>".$this->session->flashdata('msg')."</center>"."</SMALL>"."</h2>";
    } ?>

    <hr>
    <?php echo form_open('CustomerCont/addOrder'); ?>

    <div class="container col-sm-4 col-sm-offset-4" style="background-color: black ; border-radius: 10px">
        <br>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Require Quantity</b></label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="eg: Nimal" name ="qty">
        </div>


        <div>
            <button type="submit" class="btn btn-success"><b> Submit </b></button>
        </div>

        <br>

    </div>

    <?php echo form_close(); ?>

    <br>

</div>

<br>

<?php include 'HnF/footer.php' ?>