<?php
include 'base.php';
?>

<div class="container" style="margin-top:150px;">
    <h3 class="text-center">Customers</h3>
    <div style="height:50px;background:#78C2AD;width:100%;">


        <img src="images/customer.png" class="rounded  pt-2 pb-2" alt="Product" style="height: 50px; width: 30px;    margin-left: 10px; ">


        <a href="createcustomer.php" class="btn btn-light float-right mt-2 mb-1 " style="color:black;text-decoration: none!important; float:right;    margin-right: 10px;">Create Customer</a>

    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Customer Name</th>
                <th scope="col">Address</th>
                <th scope="col">Contact Number</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'dbcon.php';

            $selectquery = $con -> real_query ("SELECT * from customer");
            $result = $con -> query($selectquery);

           
            print_r($selectquery);

            while ($row = $result -> fetch_array()) {

            ?>

                <tr>
                    <td><?php echo $row['cname'];   ?></td>
                    <td><?php echo $row['caddress'];   ?></td>
                    <td><?php echo $row['cnumber'];   ?></td>
                    <td class="text-center">
                        <div class="row">
                            <div class="col-6 ">
                                <a href="updatecustomer.php?id=<?php echo $row['cid'];   ?>"><i class="fas fa-pen-square"></i> Edit</a>
                            </div>
                            <div class="col-6">
                                <a href="deletecustomer.php?id=<?php echo $row['cid'];   ?>"><i class="fas fa-trash"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php
            }

            ?>
        </tbody>
    </table>
</div>