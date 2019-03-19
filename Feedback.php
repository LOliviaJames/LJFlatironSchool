<!DOCTYPE html>

    <head>
        <title>Thank You for Your Feedback!</title>
        <link rel = "stylesheet" href= "LeadershipStyle.css">
    </head>

    <body>

        <div id = "head" class="header">
            <img class ="a" src="LJPic2.jpg" style = "width:75px; height:75px; margin-top:20px;">
            <img class ="a" src="flatiron2.jpg" style = "width:75px; height:75px; margin-top:20px;">
            <h4>LESLIE JAMES FOR FLATIRON SCHOOL</h4>                
        </div>

        <div>
            <ul class="nav">
                <li class="nav"><a href="index.html">Why Leslie James for Flatiron School?</a></li>
                <li class="nav"><a href="PastEmploy.html">Past Employment Experiences</a></li>
                <li class="nav"><a href="Leadership.html">Leadership and Accomplishments</a></li>
                <li class="nav"><a href="Quiz.html">How Well Do You Know Leslie James?</a></li>
                <li class="nav"><a href="Feedback.php">Feedback</a></li>
            </ul>
        </div>

        <?php

            $email = "";
            $emailErr = "";


            //remove e-mail requirement
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

        ?>



        <div>
            <h1>I Appreciate Your Feedback!</h1>
        </div>

        <div id = "feedback">

            <p class="subhead">I would like to learn more about the qualities and skills that Flatiron School looks for in its employees. 
                Therefore, if you wouldn't mind please taking a moment to fill out the below survey, I would greatly appreciate your insight. 
                Thank you in advance.</p></br>

            <form action="feedbacktest.php" method="post">

                <p>Please enter your first name: <input type="text" name="fname"></p></br>

                <p>Please rank how important the below qualities are to you when evaluating 
                    an candidate who is looking to join the Flatiron School community. </p>

                <p>The rating scale is as follows:</br>
                1 = Not important at all, throw it away</br>
                2 = It would be nice, but I could do without it</br>
                3 = I would like to see this trait/skill in a candidate, but it won't make or break the deal</br>
                4 = Having (or not having) this trait/skill will most likely sway my hiring decision</br>
                5 = This is a dealbreaker. The candidate MUST have this trait/skill if they want to be hired</p></br>
            
                <p>(S)he works well as part of a team: 
                    <select name="q1">
                        <option value=1>1: Not important</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5: Very important</option>
                    </select>
                </p>

                <p>(S)he works well independently: 
                    <select name="q2">
                        <option value=1>1: Not important</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5: Very important</option>
                    </select>
                </p> 
        
                <p>(S)he takes initiative:
                    <select name="q3">
                        <option value=1>1: Not important</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5: Very important</option>
                    </select>
                </p>

                <p>(S)he has great interpersonal skills:
                    <select name="q4">
                        <option value=1>1: Not important</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5: Very important</option>
                    </select>
                </p>
            
                <p>(S)he is resourceful:
                    <select name="q5">
                        <option value=1>1: Not important</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5: Very important</option>
                    </select>
                </p>

                <p>(S)he is customer-service oriented:
                    <select name="q6">
                        <option value=1>1: Not important</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5: Very important</option>
                    </select>
                </p>

                <p>(S)he has data analysis skills:
                    <select name="q7">
                        <option value=1>1: Not important</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5: Very important</option>
                    </select>
                </p>

                <p>(S)he has programming skills:
                    <select name="q8">
                        <option value=1>1: Not important</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5: Very important</option>
                    </select>
                </p>

                </br></br>

        
                <p>Do you have any questions or comments for me, or anything you generally wish to share? Any insight on 
                    the best way for me to pursue a position at Flatiron School? Other qualities or skills that you value 
                    in an employee that I didn't list? Suggestions on how to improve this website? Information about you, 
                    your role or what you enjoy most about working at Flatiron School? All feedback is welcomed! </p></br>
                <textarea name="freeresponse"
                    rows = "10"
                    cols = "100"></textarea></br></br>

                <p>If you have questions and would like a response, please feel free to enter your e-mail address below:</br>
                    <textarea name="email"
                    rows = "1"
                    cols = "50"></textarea></p></br>


                <div style="text-align:center;">
                    <input  type="submit" name="submit" value="Submit">
                </div>
        
            </form>

            <p>Many thanks again!</p>

        </div>
        
    </body>
</html>