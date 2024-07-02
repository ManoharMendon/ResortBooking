<!DOCTYPE html>
<html>
    <head>
        <title>HALL BOOK PAGE</title>
        <link rel="stylesheet" type="text/css" href="eventhallbooking.css">
    </head>
<body>
   <div id="bookbox">

      <form id="bookingpage" action="connecthall.php" method="post">
         <center><h1>Booking & Contact</h1></center>
            <input type="text" class="binput" name="name" placeholder="Name" required/>
            <br>
            <input type="text" class="binput" name="email" placeholder="Email" required/>
            <br>
            <input type="text" class="binput" name="phone" placeholder="Phone Number" required/>
            <br>
            <center><h2>Details</h2></center>
            <p> On :
               <br><input type="date" class="binput" name="a_date" placeholder="date" required/></p>

            <p> Time at:
               <br><input type="date" class="binput" name="timeat" placeholder="time" required/></p>
            <br>

            <label>People : </label><select class="binputbox" name="people" required/>
               <option value = "blank"></option>
               <option value = "100">100</option>
               <option value = "200">200</option>
               <option value = "300">300</option>
               <option value = "400">400</option>
               <option value = "500">500</option>
               <option value = "600">600</option>
               <option value = "700">700</option>
               <option value = "800">800</option>
             </select>

            <br>
            <label>Hall : </label><select class="binputbox" name="hall" required/>
               <option value = "blank"></option>
               <option value = "Utsav Lawn">Utsav Lawn</option>
               <option value = "Conference Hall">Conference Hall</option>
               <option value = "Wild Grass Conference Hall">Wild Grass Conference Hall</option>
               <option value = "Mexican Hut">Mexican Hut</option>
               <option value = "Art Gallery">Art Gallery</option>
             </select>
            <br>
            <br>
            <input name="book" type="submit" class="bsubmitbutton" value="SUBMIT">


      </form>

   </div>

</body>

</html>