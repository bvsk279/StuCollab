<?php 
require("server.php");
?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StuCollab</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body> -->
    <?php
      require_once("assets/classes/functions.php");
      $user_id = $_SESSION['user_id'];
      
      
    //   $data = [];
      
    //   $result = $this->ownerConnect()->query($sql);
    //   $numRows = $result->num_rows;
    //   if($numRows>0){
    //       while ($row = $result->fetch_assoc()) {
    //           $data['car_reg'] = $row['car_reg_no'];
    //           $data['model'] = ucwords($row['model_name']);
    //           $data['model_img'] = $row['model_pic_url'];
    //           $data['model_img_mini'] = $row['model_pic_img_mini'];

    //           $data['car_city'] = ucwords($row['city_name']);

    //           if($row['fuel_type'] == 'D'){
    //               $data['fuel_type'] = "Diesel";
    //           }else($row['fuel_type'] == 'P'){
    //               $data['fuel_type'] = "Petrol";
    //           }
    //       }
    //   }
    ?>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <header>
        <div class="header-wrapper">
            <div class="logo">Stu<span>Collab</span></div>

            <div class="header-right">
                <nav id="nav-bar">
                    <a href="#" class="nav-link">Home</a>
                    <a href="#" class="nav-link">Collab Now</a>
                    <a href="#" class="nav-link">Projects</a>
                </nav>
                <div class="profile-picture"></div>
            </div>
        </div>
    </header>
    <div class="body-main">
        <div class="body-wrapper">
            <div class="search-col">
                <div class="search">
                    <input type="text" class="searchTerm" placeholder="Find People | Skills(ex: Devops, Nodejs)  |  Activitys(ex: Dance , Yoga)  |  Events(ex: Hackathon) ">
                    <button type="submit" class="searchButton">
                      <i class="fa fa-search"></i>
                    </button>
                 </div>
                 <div class="new-collab-btn">
                     <button>Create New Collab</button>
                 </div>
            </div>


            <hr class="content-gap-hr">

            <div class="sections">
                <section class="activity_sec">
                    <h4 class="section-head">Activities</h4>
                    <div class="elements__wrapper">
                        <?php
                            $sql = "select * from `ACTIVITIES` where user_id = $user_id";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                                $audios[] = $row;
                                // var_dump($row);
                                $title = $row['activity_title'];
                                $desc = $row['activity_desc'];
                                echo "
                                <div class='element_item'>
                                    <h4 class='title'>$title</h4>
                                    <p class='post_detail'>by <a href='#' class='creator'>Matheev</a> at <span class='posted_on'>20th Mar, 12:00AM</span></p>
                                    <p class='desc'>&ensp;$desc</p>

                                    <p class='start_time'><b>Startes on:</b> <span>(sat)20th Mar, 6:00PM</span></p>

                                    <p class='location'><b>Join at:</b> <a href='#'>www.xyz.com/123</a></p>
                                    <div class='tags'><span class='tag_elm'>Video Conference</span></div>
                                </div>
                                ";
                            }
                        ?>

                        <div class="element_item"></div>
                        <div class="element_item"></div>
                    </div>
                </section>

                <section class="projects">
                    <h4 class="section-head">Join a Project</h4>
                    <div class="elements__wrapper">
                        <div class="element_item">
                            <div class="upper_part">
                                <h3 class="title">A Student Collaboration Platform</h3>
                                <div class="posted_on">Posted on <span>20 Mar 2020</span></div>
                            </div>
                            <div class="lower_part">
                                <div class="tech_stack">
                                    <h4>Tech Stack</h4>
                                    <div class="tech_stack__wrapperr">
                                        <span class="stack_elm">PHP</span>
                                        <span class="stack_elm">Javascript</span>
                                        <span class="stack_elm">Angular</span>
                                    </div>
                                </div>
                                <div class="action-btn">
                                    <button>Explore Project</button>
                                </div>
                            </div>
                        </div>

                        <div class="element_item">
                            <div class="upper_part">
                                <h3 class="title">A Student Collaboration Platform</h3>
                                <div class="posted_on">Posted on <span>20 Mar 2020</span></div>
                            </div>
                            <div class="lower_part">
                                <div class="tech_stack">
                                    <h4>Tech Stack</h4>
                                    <div class="tech_stack__wrapperr">
                                        <span class="stack_elm">PHP</span>
                                        <span class="stack_elm">Javascript</span>
                                        <span class="stack_elm">Angular</span>
                                    </div>
                                </div>
                                <div class="action-btn">
                                    <button>Explore Project</button>
                                </div>
                            </div>
                        </div>

                        <div class="element_item">
                            <div class="upper_part">
                                <h3 class="title">A Student Collaboration Platform</h3>
                                <div class="posted_on">Posted on <span>20 Mar 2020</span></div>
                            </div>
                            <div class="lower_part">
                                <div class="tech_stack">
                                    <h4>Tech Stack</h4>
                                    <div class="tech_stack__wrapperr">
                                        <span class="stack_elm">PHP</span>
                                        <span class="stack_elm">Javascript</span>
                                        <span class="stack_elm">Angular</span>
                                    </div>
                                </div>
                                <div class="action-btn">
                                    <button>Explore Project</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <style>
                    section.events .element_item{
                        height: 300px;
                    }
                </style>
                <section class="events">
                    <h4 class="section-head">Events </h4>
                    <div class="elements__wrapper">
                        <div class="element_item"></div>
                        <div class="element_item"></div>
                        <div class="element_item"></div>
                    </div>
                </section>
            </div>

        </div>
    </div>
</body>
</html>