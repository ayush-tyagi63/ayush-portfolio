// <!DOCTYPE html>
// <html lang="en">
// <head>
//   <meta charset="UTF-8">
//   <meta name="viewport" content="width=device-width, initial-scale=1.0">
//   <title>form</title>
// <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
// <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
// <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
// <!-- <style>
//   i{
//     color: #19634f;
//   } -->
// </style>
// </head>
// <body>
  

// <div class="w3-container w3-card w3-white w3-margin-bottom">
//         <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
//           <h2 class="w3-text-grey">Contact Me</h2>
//           <hr style="width:200px" class="w3-opacity">
      
//           <div class="w3-section">
//             <!-- <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> -->
//               <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i> Muzaffar Nagar, UP</p></p>
//             <!-- <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> -->
//               <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i> Phone: +91 6395351438</p></p>
//             <!-- <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> -->
//                <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i> Email: ayushtyagi6395351438@gmail.com</p></p>
//           </div><br>
//           <p>Let's get in touch. Send me a message:</p>
  
  
//   <?php
//       if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//           $name = $_POST['name'];
//           $mobilenumber = $_POST['mobilenumber'];
//           $email = $_POST['email'];
//           $subject = $_POST['subject'];
//           $message = $_POST['message'];
          
        
//         // Connecting to the Database 
  
//         $servername = "localhost";
//         $username = "root";
//         $password = "";
//         $database = "portfolio";
  
//         // Create a connection
//         $conn = mysqli_connect($servername, $username, $password, $database);
//         // Die if connection was not successful
//         if (!$conn){
//             die("Sorry we failed to connect: ". mysqli_connect_error());
//         }
//         else{ 
//           // Submit these to a database
//           // Sql query to be executed 
//           $sql = "INSERT INTO `contact` (`name`,`mobilenumber`,`email`,`subject`,`message`,`dt`) 
//            VALUES ('$name','$mobilenumber','$email','$subject','$message', current_timestamp())";
//           $result = mysqli_query($conn, $sql);
   
//           if($result){
//             echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//             <strong>Success!</strong> Your entry has been submitted successfully!
//             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//               <span aria-hidden="true">×</span>
//             </button>
//           </div>';
//           }
//           else{
//               // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
//               echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//             <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
//             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//               <span aria-hidden="true">×</span>
//             </button>
//           </div>';
//           }
  
//         }
  
//       }  
//   ?>
  
      
//   <form action="/portfolio/index.php" method="post">
//             <p><input class="w3-input w3-padding-16" type="text" name="name" placeholder="Name" id="name"></p>
//             <p><input class="w3-input w3-padding-16" type="text" name="mobilenumber" placeholder="Mobile Number" id="mobilenumber"></p>
//             <p><input class="w3-input w3-padding-16" type="text" name="email" placeholder="Email" id="email"></p>
//             <p><input class="w3-input w3-padding-16" type="text" name="subject" placeholder="Subject" id="subject"></p>
//             <p><input class="w3-input w3-padding-16" type="text" name="message" placeholder="Message" id="message"></p>
//             <p>
//               <button class="w3-button w3-light-grey w3-padding-large" type="submit">
//                 <i class="fa fa-paper-plane"></i> SEND MESSAGE
//               </button>
//             </p>
//           </form>
//       </div>
  
  
//       <!-- End Right Column -->
//       </div>

//       </body>
// </html>
