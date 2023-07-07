<?php
    // TODO:
    // ~ count no of student entries
    // ~ hold names (firstnames + lastnames)
    // X check their emails if it exists in database already
    // ~ generate studentID, accountID, batchID, schoolID
    // X sanitize inputs; throw errors if incorrect format
    //
    // ~ insert data into applicanttabl
    // ~ insert (student's) data into studenttbl

    session_start();
    require_once('connection.php');

    // Validate user input

    // If school acc is logged in ...
    if(isset($_SESSION['accountID'])) {
        $students_count = 0; // counter for student inputs

        // DEBUG: print out students
        // If inputs for students' details was created ... 
        if(isset($_POST["fname"])) {
            // Get inputted students name and print them out
            $student_names = $_POST["fname"]; // get input values
            foreach($student_names as $key=>$value){ // loop thru and print each input 
                echo "<br/> Student: ".$value." ".$_POST["lname"][$key].", ".$_POST["email"][$key];
                $students_count++;
            }
        }
        // no student details was inputted.
        else {
            echo "<br/> Student list empty.";
        }
        echo "<br/>";

        // Applicant table req'd params
        $schoolID = $_SESSION['schoolID'];
        $batchID = 1; // TODO: Replace arbitrary value (1) with an inputted value
        $programAdviser = $_POST['advFname']." ".$_POST['advLname'];    // Type: str
        $adviserEmail = $_POST['advEmail'];                             // Type: str
        $dateSubmitted = date("Y-m-d");                                 // Type: str
        $duration = $_POST["duration"]; // Program duration in hours;   // Type: int

        // DEBUG: print out adviser details
        echo "<br/><hr/>Application table entry: <br/><br/>" 
            ."School ID: ".$schoolID."<br/>"
            ."Batch ID: ".$batchID."<br/>"
            ."Advisor: ".$programAdviser."<br/>"
            ."Advisor Email: ".$adviserEmail."<br/>"
            ."Date Submitted: ".$dateSubmitted."<br/>"
            ."Duaration: ".$duration;

        // Upload application data into database
        $insert_applicant_query = $con->prepare("INSERT INTO applicanttbl (schoolID, batchID, programAdviser, adviserEmail, dateSubmitted, duration) VALUES (?, ?, ?, ?, ?, ?)");
        $insert_applicant_query->bind_param("iissss", $schoolID, $batchID, $programAdviser, $adviserEmail, $dateSubmitted, $duration);
        $insert_applicant_query->execute();

        $insert_applicant_query->close();

        // Student table req'd params
        $accountIDs;        // Type: int
        $batchIDs;          // Type: int
        $schoolIDs;         // Type: int
        $studentNames;      // Type: str
        $course;            // Type: str
        $hoursRendered;     // Type: str
        $status;            // Type: str

        // DEBUG: print out student details -- header --
        echo "<hr/><br/>Students<br/>";

        // NOTE to future dev(s): change arbitary values
        $accountID = $_SESSION['accountID'];
        $batchID = 1; // arbitrary value
        $schoolID = $_SESSION['schoolID'];
        $student_names = array();
        foreach($_POST["fname"] as $key=>$value) {
            array_push($student_names, $value." ".$_POST['lname'][$key]);
        }
        $course = $_POST['course'];
        $hoursRendered = "0";
        $status = "pending";

        // DEBUG: print out student details -- content -- 
        echo "<br/>Account ID: ".$accountID
            ."<br/>Batch ID: ".$batchID
            ."<br/>School ID: ".$schoolID
            ."<br/>Student Names: ".join("\n  ", $student_names)
            ."<br/>Course: ".$course
            ."<br/>Hrs Rendered : ".$hoursRendered
            ."<br/>Status: ".$status;

        // Upload student data into database
        for($i = 0; $i < $students_count; $i++) {
            echo "<br/>" ."$i -> $accountID, $batchID, $schoolID, $student_names[$i], $course, $hoursRendered, $status";
            $insert_student_query = $con->prepare("INSERT INTO studenttbl (accountID, batchID, schoolID, studentName, course, hoursRendered, status) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $insert_student_query->bind_param("iiissss", $accountID, $batchID, $schoolID, $student_names[$i], $course, $hoursRendered, $status);
            $insert_student_query->execute();
        }

        $insert_student_query->close();
        $con->close();

        // Redirect to school dashboard after application
        header("Location:school-dashboard.php");
    }
    // If school acc is not logged in, return to login page.
    else {
        header("Location:login.php");
    }
?>