<?php
    require_once('../connection.php');
    session_start();

    // Check if a registered account is logged in ...    
    if(isset($_SESSION['accounID'])) {
        $accountID = $_SESSION['accounID'];

        $sql = "SELECT accountID FROM accounttbl WHERE accountID = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("i", $accID);
        $stmt->execute();
        $stmt->bind_result($accountID);
        $stmt->fetch();
        $stmt->close();

        // If account ID is not located in database ... return to login page
        if(!$accountID){
            // header("Location: ../login.php");
            // exit(); // Added exit() to stop further execution
        }

    }
    // Else return to index.php
    else{
        // header("Location: ../login.php");
        // exit(); // Added exit() to stop further execution
    }

    $accountid = $_SESSION['accountID'];
    $schools_list = array();

    // Initializing variables
    $card_count_per_page = 8;
    $card_count_per_row = 4;

    // Count Total Number of Schools Registered in the Database
    $SchoolNum = $con->prepare("SELECT COUNT(schoolID) AS schoolCount FROM schooltbl");
    $SchoolNum->execute();
    $SchoolNum_result = $SchoolNum->get_result();
    $SchoolNum_row = $SchoolNum_result->fetch_assoc();
    $SchoolNum->close();
    $schoolCount = $SchoolNum_row['schoolCount'];

    $card_details = array();
    // Get School Names with their IDs and Addresses
    $SchoolQuery = $con->prepare("SELECT schoolName, schoolID, address, schoolLogo FROM schooltbl");
    $SchoolQuery->execute();
    $SchoolQuery_result = $SchoolQuery->get_result();

    while($SchoolQuery_row = $SchoolQuery_result->fetch_assoc()) {
        $card_details[] = $SchoolQuery_row;
    }

    $SchoolQuery->close();

    // Page offset for displaying card in specific pages
    $page_offset = 0
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Facilitator Dashboard</title>
    <link rel="stylesheet" href="facilitator-assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="facilitator-assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="facilitator-assets/css/Bootstrap-Cards-v2.css">
    <link rel="stylesheet" href="facilitator-assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="facilitator-assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
    <link rel="stylesheet" href="facilitator-assets/css/Navbar-With-Button-icons.css">
    <link rel="stylesheet" href="facilitator-assets/css/Profile-Edit-Form-styles.css">
    <link rel="stylesheet" href="facilitator-assets/css/Profile-Edit-Form.css">

</head>

<body>
    <div>
        <section id="sec-header" style="height: 150px;">
            <div>
            </div>
        </section>
        <section id="acc-form">
            <div class="container">
                <h1 style="text-align: center;font-weight: bold;margin-bottom: 39px;">School Partners</h1>

                    <div id="schoolCards">
                        <?php
                            // Card Paging
                            $page = isset($_GET['page']) ? abs(intval($_GET['page'])) : 1;

                            // Setting page offset based on which page number it is currently in
                            $page_offset = ($page - 1) * $card_count_per_page;

                            // Define number of rows 
                            $no_of_row = $card_count_per_page / $card_count_per_row;
                            
                            // Create rows
                            for($i = 0; $i < $no_of_row; $i++) {
                                echo '<div class="row">';
                                // Create cards
                                for($c = 0; $c < $card_count_per_row; $c++) {
                                    // Break out if end of array reached
                                    if(($page_offset + $i*$card_count_per_row) + $c >= count($card_details)) break;

                                    // Current card index at the array
                                    $curr_card = $card_details[$page_offset + ($i*$card_count_per_row) + $c];

                                    echo "
                                        <div class=\"col-md-3\">
                                            <a href=\"FacilitatorStudentList.php?school_index=".$card_details[$page_offset + ($i*$card_count_per_row) + $c]['schoolID']."\" style=\"text-decoration: none; color:black;\">
                                                <div class=\"card\" style=\"border-radius: 25px;border-style: none;\">
                                                    <div class=\"card-body\" style=\"border-radius: 25px;box-shadow: 0px 4px 20px rgba(0,0,0,0.15);border-style: none;\"><img src=\"../School-Logo/".$curr_card['schoolLogo']."\" width=\"100\" height=\"80\" style=\"height: 20%;width: 100%;\">
                                                        <h4 class=\"card-title\" style=\"margin-top: 5%;text-align: center;font-weight: bold;margin-bottom: 25px;\">".$curr_card['schoolName']."</h4>
                                                        <h6 class=\"text-muted card-subtitle mb-2\" style=\"text-align: center;font-size: 14px;margin-top: 25px;margin-bottom: 30px;\">".$curr_card['address']."</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    ";
                                }
                                echo '</div>';

                            }
                        ?>
                    </div>

                    <div class="col" style="padding:50px 30px;">
                        <nav class="d-flex d-lg-flex justify-content-center justify-content-lg-center" style="text-align: center;">
                            <ul class="pagination">
                                <?php
                                    // Determine how many page numbers to show
                                    $total_items = count($card_details);
                                    $total_pages = ceil($total_items / $card_count_per_page);

                                    if ($total_pages > 1) {
                                        // Validate the current page number
                                        $page = max($page, 1);
                                        $page = min($page, $total_pages);
                                    
                                        // Generate the "Previous" button link
                                        $prev_page = $page - 1;
                                        if ($prev_page >= 1) {
                                            echo '<li class="page-item"><a class="page-link" aria-label="Previous" href="FacilitatorSchoolDashboard.php?page=' . $prev_page . '">«</a></li>';
                                        }
                                    
                                        // Create the pagination links
                                        for ($i = 1; $i <= $total_pages; $i++) {
                                            if ($i == $page) {
                                                echo '<li class="page-item active"><a class="page-link" href="#acc-form">' . $i. '</a></li>';
                                            } else {
                                                echo '<li class="page-item"><a class="page-link" href="FacilitatorSchoolDashboard.php?page=' .$i. '">'.$i. '</a></li>';
                                            }
                                        }
                                    
                                        // Generate the "Next" button link
                                        $next_page = $page + 1;
                                        if ($next_page <= $total_pages) {
                                            echo '<li class="page-item"><a class="page-link" aria-label="Next" href="FacilitatorSchoolDashboard.php?page=' . $next_page . '">»</a></li>';
                                        }
                                    }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <script src="facilitator-assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
