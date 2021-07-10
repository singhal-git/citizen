<?php




if (isset($_POST['submit'])) {
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['mail'];
  $feild = $_POST['feild'];
  $feild1 = $_POST['feild1'];

 $html = "<table><tr><td>FirstName:</td><td>$fname</td></tr>
	       <tr><td>LastName:</td><td>$lname</td></tr>
	       <tr><td>Email:</td><td>$email</td></tr>
		   <tr><td>Feild:</td><td>$feild</td></tr>
		   <tr><td>Expertize:</td><td>$feild1</td></tr>
		   </table>";

  include('smtp/PHPMailerAutoload.php');
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587;
  $mail->SMTPSecure = "tls";
  $mail->SMTPAuth = true;
  $mail->Username = "singhalsejal89@gmail.com";
  $mail->Password = "Sejal@07";
  $mail->SetFrom("singhalsejal89@gmail.com");
  $mail->addAddress("singhalsejal89@gmail.com");

  $mail->IsHTML(true);
  $mail->Subject = "New Submission";
  $mail->Body = $html;
  $mail->SMTPOptions = array('ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => false
  ));
  if ($mail->send()) {
    //echo "Mail send";

  } else {
    //echo "Error occur";

  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<script src="SweetAlert.js"></script>




<style>
  /* Style inputs, select elements and textareas */
  input[type=text],
  input[type=email],
  select,
  textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
  }

  /* Style the label to display next to the inputs */
  label {
    padding: 12px 12px 12px 0;
    display: inline-block;
  }

  /* Style the submit button */
  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
  }

  /* Style the container */
  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }

  /* Floating column for labels: 25% width */
  .col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
  }

  /* Floating column for inputs: 75% width */
  .col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  .row {
    margin-top: 0.5rem;
  }

  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {

    .col-25,
    .col-75,
    input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }
</style>

<body>

  <div class="container">
    <form method="post" onsubmit="handleform(event)">
      <div class="row">
        <div class="col-25">
          <label for="fname">First Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Last Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="mail">E-Mail</label>
        </div>
        <div class="col-75">
          <input type="email" id="mail" name="mail" placeholder="Your e-mail name.." required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="feild">Feild</label>
        </div>
        <div class="col-75">
          <select id="feild" name="feild">
            <option value="Game developement">Game Developement</option>
            <option value="web developement">Web Developement</option>

          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="feild1">How skilled are you at your feild</label>
        </div>
        <div class="col-75">
          <select id="feild1" name="feild1">
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="expert">Advanced</option>
          </select>
        </div>
      </div>

      <div class="row">
        <input type="submit" name="submit" value="Submit">
      </div>
      <span style="color: red;" id="msg"></span>

    </form>
  </div>

</body>
<script>
  function handleform(e) {

    swal({
      title: "Thank you!",
      text: "We will get back to you soon!",
      icon: "success",
    });
  }
</script>

</html>