<?php

include 'conn.php';

$select = "SELECT * FROM customer";
$selectsql = $conn->query($select);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="css/index.css"/>
    <title>Customer's List</title>
</head>
<body>

    <div class="customer-header">
        <h1>Customer's List</h1>
    </div>

    <div class="table-content">

        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Fistname</th>
                    <th>Lastname</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            <?php while($row = mysqli_fetch_array($selectsql)){ ?>
                <tr>
                    <td><?php echo $row['customer_id'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['lastname'];?></td>
                    <td>2<?php echo $row['address'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td>
                        <a href="update.php?customer_id=<?php echo $row['customer_id'];?>"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 
                        focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 
                        dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>
                        </a>
                        <a href="delete.php?customer_id=<?php echo $row['customer_id']; ?>"><button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 
                        focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 dark:bg-red-600 
                        dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                        </a>
                    </td>
                </tr>

            <?php  } ?>
            </tbody>

        </table>
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script defer src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script defer src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>
</html>

