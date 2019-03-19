<!DOCTYPE html>

    <head>
        <title>Thank You For Your Feedback!</title>
        <link rel = "stylesheet" href= "LeadershipStyle.css">
    </head>

    <body>

        <div id = "head" class="header">
            <img class ="a" src="LJPic2.jpg" style = "width:75px; height:75px; margin-top:20px;">
            <img class ="a" src="flatiron2.jpg" style = "width:75px; height:75px; margin-top:20px;">
            <h4>LESLIE JAMES FOR FLATIRON SCHOOL</h4>                
        </div>

        <div id= "navbar">
            <ul class="nav">
                <li class="nav"><a href="index.html">Why Leslie James for Flatiron School?</a></li>
                <li class="nav"><a href="PastEmploy.html">Past Employment Experiences</a></li>
                <li class="nav"><a href="Leadership.html">Leadership and Accomplishments</a></li>
                <li class="nav"><a href="Quiz.html">How Well Do You Know Leslie James?</a></li>
                <li class="nav"><a href="Feedback.php">Feedback</a></li>
            </ul>
        </div>

        <div id="feedbackbody">

            <?php

                $fname=$_POST['fname'];
                $q1=$_POST['q1'];
                $q2=$_POST['q2'];
                $q3=$_POST['q3'];
                $q4=$_POST['q4'];
                $q5=$_POST['q5'];
                $q6=$_POST['q6'];
                $q7=$_POST['q7'];
                $q8=$_POST['q8'];
                $freeresponse=$_POST['freeresponse'];
                $email=$_POST['email'];
                $emailErr = "";


                if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                } 
                else {
                    $email = test_input($_POST["email"]);
                    // check if e-mail address is well-formed
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format"; 
                    }
                        else {
                            $emailErr = "Thank you for entering your e-mail address.";
                        }
                }

                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                // create database connection
                $conn = new mysqli('server201.web-hosting.com', 'leslyfts_lojames', '1M#myF2JP5y', 'leslyfts_flatironfeedback');
                //$conn = new mysqli('localhost', 'root', '', 'flatironfeedback');

                // check connection
                if (mysqli_connect_errno()){
                    exit('Connection Failed.'.mysqli_connect_error());
                }
                
                $sql = "INSERT INTO hiringfeedback (fname, q1, q2, q3, q4, q5, q6, q7, q8, freeresponse, email) VALUES ('$fname', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$freeresponse', '$email')";

                if($conn->query($sql) === TRUE) {
                    $email = test_input($_POST["email"]);
                    // check if e-mail address is well-formed
                    if (filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)) {
                        echo "</br>";
                        echo "<div style ='font:35px Garamond; font-weight:bold'>Thank you for your feedback!</div>"."</br></br>";
                        echo "<div style ='font:30px Garamond'>$fname, thank you for taking the time to complete my survey! Your responses 
                        have been added to my database, and I will apply your feedback to improve my job applications 
                        and interview prepration process moving forward.</div>"."</br></br>";
                        
                        echo "<div style ='font:30px Garamond'>My final shameless plug: If you highly value any or all of the aforementioned qualities from the survey, 
                            then I am the person you are looking for! If there are any other skills or certifications that you prefer in an employee, 
                            I assure you that I can and will acquire them. Just let me know what you need.</div>"."</br></br>";
                        echo "<div style ='font:30px Garamond'>Moreover, I look forward to reading your feedback on how I can best position myself
                            to become a member of your team at Flatiron School or learning more about you and your role at the company.</div>"."</br></br>";
                        echo "<div style ='font:30px Garamond'>Thank you again for visiting my site!</div>";
                    }

                    else {
                        echo "</br>";
                        echo "<div style ='font:35px Garamond; font-weight:bold'>Ooops!</div>"."</br>";
                        echo '<img src="oops.gif">'."</br></br>";
                        echo "<div style ='font:30px Garamond;color:#ff0000; text-align:center'>You enterted an invalid e-mail address.</div>"."</br></br>";
                        echo "<div style ='font:30px Garamond; text-align:center'>It happens to the best of us. If you could please click the below button to return to the previous page 
                        and re-enter your e-mail address, I would greatly appreciate it. Don't worry, your responses to the survery will still be there.</div>"."</br></br>";
                        echo '
                            <button onclick="goBack()">Go Back To Previous Page</button>

                            <script>
                                function goBack() {
                                    window.history.go(-1);
                                }
                            </script>
                        '."</br></br>";
                    }
                }


                else {
                    echo 'Error: ' .$sql . "</br" .$conn->error;
                }

                $conn->close();

            ?>

        </div>

    </body>
</html>