<?php

   // $connection = mysqli_connect('localhost','root','','book_db');

   // if(isset($_POST['send'])){
   //    $name = $_POST['name'];
   //    $email = $_POST['email'];
   //    $phone = $_POST['phone'];
   //    $address = $_POST['address'];
   //    $location = $_POST['location'];
   //    $guests = $_POST['guests'];
   //    $arrivals = $_POST['arrivals'];
   //    $leaving = $_POST['leaving'];

   //    $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
   //    mysqli_query($connection, $request);

   //    header('location:book.php'); 

   // }else{
   //    echo 'something went wrong please try again!';
   // }

if (isset($_POST['submit'])) {
   $name  = $_POST['name'];
   $guest  = $_POST['guest'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];
   $no_wa = $_POST['noWa'];
   // header("location:https://api.whatsapp.com/send?phone=$no_wa&text=Nama:%20$name%20%0DEmail:%20$email%20%0DPesan:%20$message");

    header("location:https://api.whatsapp.com/send?phone=$no_wa&text=Nama:%20$name%20%0Dguest:%20$guest%20%0Darrivals:%20$arrivals%20%0Dleaving:%20$leaving");

} else {
   echo "
      <script>
      window.location=history.go(-1);
      </script>
   ";
}

?>

