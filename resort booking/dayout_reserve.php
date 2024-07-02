<?php 
 include("connection.php");
session_start()

 ?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}
h1{
  text-align: center;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Admin</a>
    </div>
    <ul class="nav navbar-nav">
    <li class="active"><a href="indexadmin.php">Home</a></li>
          <li><a href="table_reserve.php">Table booking</a></li>
          <li><a href="reservation.php">Room booking</a></li>
          <li><a href="hallreservation.php">Event hall booking</a></li>
          <li><a href="dayout_reserve.php">Adventure zone</a></li>
          <li><a href="contactdetails.php">Contact us</a></li>
          <li><a href="feedbackdetails.php">Feedback details</a></li>
          <li><a href="logindetails.php">Customer logged in</a></li>

      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="adminlogout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

  


  
<h1>DAY-OUT RESERVATION</h1>
<table border="2">
  <tr>
    <th>Sl.no</th>
    <th >Checkin</th>
    <th >Package</th>
    <th >No of Adults</th>
    <th >No of Children</th>
    <th colspan="2" align="center">Action </th>
  </tr>
  
  <?php
  include("connection.php");
  error_reporting(0);
  $query = "select * from adventure";
  $data = mysqli_query($conn,$query);

  $total = mysqli_num_rows($data);

  if($total!=0)
  {
    while($result=mysqli_fetch_assoc($data))
    {
      ?>
      <tr>
      <input type="hidden" class="delete_val" value="<?php echo $result['id']; ?>">
      <td><?php echo$result['user_id'];?></td>
      <td><?php echo$result['checkin'];?></td>
      <td><?php echo$result['package'];?></td>
      <td><?php echo$result['adults'];?></td>
      <td><?php echo$result['kids'];?></td>
      <td>
      <form action="del_dayout.php" method="POST">
          <input type="hidden" name="delete_id" class="delete_id_value" value="<?php echo $result['id']; ?>">
          <button type="submit" name="delete_btn" class="btn btn-danger delete_btn ">Delete</button>
      </form>
      
      </td>
      </tr>
      
      <?php
    }
  }
  else{
    echo "No records found";
  }
  ?>
  

  </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   
    <script src="sweetalert.min.js"></script>
            <script>
            $(document).ready(function() {


                        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

               $('.delete_btn').click(function (e) {
                 e.preventDefault();
                  var delete_id = $(this).closest("tr").find('.delete_id_value').val()
                
                      swal({
                      title: "Are you sure?",
                      text: "Once deleted, you will not be able to recover the Dayout data!",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                    })
                    .then((willDelete) => {
                      if (willDelete) {
                         var_data = {
                           "_token": $('input[name="csrf-token"]').val(),
                           "id": delete_id,
                         };
                          $.ajax({
                            type:"POST",
                            url:"del_dayout.php",
                            data: {
                              "delete_btn_set":1,
                              "delete_id":delete_id,
                            },
                            success: function(response) {
                              swal(" Dayout data has been deleted Successfully!", {
                                    icon: "success",
                                  }) .then((result) => {
                                    location.reload();
                                  });
                            }
                          });
                        
                       
                      } 
                    });
                
               
            });

         });
            
            </script>

    
  </body>
</html>
      
      
   