<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/index.css">
    <title>Dashboard</title>
    
</head>
<body>
    <?php
        include ("leftbar.php")
    ?>

    <section class="home_section">
        <nav>
            <?php
                include("heading.php")
            ?>
        </nav>

        <div class="home_content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="content-top">
                        <div class="box_topic">Students</div>
                        <div class="number" data-num="1500">1500</div>
                    </div>
                    <div class="image student"><img src="../../image/student-icon.png" class="obj_icon"></div>
                </div>

                <div class="box">
                    <div class="content-top">
                        <div class="box_topic">Teachers</div>
                        <div class="number" data-num="150">150</div>
                    </div>
                    <div class="image teacher"><img src="../../image/teacher-icon.jpg" class="obj_icon"></div>
                </div>

                <div class="box">
                    <div class="content-top">
                        <div class="box_topic">Parents</div>
                        <div class="number" data-num="3000">3000</div>
                    </div>
                    <div class="image parents"><img src="../../image/parent-icon.png" class="obj_icon"></div>
                </div>

                <div class="box">
                    <div class="content-top">
                        <div class="box_topic">Classes</div>
                        <div class="number" data-num="45">45</div>
                    </div>
                    <div class="image parents"><img src="../../image/class-icon.png" class="obj_icon"></div>
                </div>
            </div>

            <div class="content-box">
                <div class="calender">
                    <div id="cal">
                        <div id="header">
                          <div id="monthDisplay"></div>
                          <div>
                            <button id="backButton">Back</button>
                            <button id="nextButton">Next</button>
                          </div>
                        </div>
                  
                        <div id="weekdays">
                          <div>Sunday</div>
                          <div>Monday</div>
                          <div>Tueday</div>
                          <div>Wednesday</div>
                          <div>Thursday</div>
                          <div>Friday</div>
                          <div>Saturday</div>
                        </div>
                  
                        <div id="calendar"></div>
                      </div>
                  
                      <div id="newEventModal">
                        <h2>New Event</h2>
                  
                        <input id="eventTitleInput" placeholder="Event Title" />
                  
                        <button id="saveButton">Save</button>
                        <button id="cancelButton">Cancel</button>
                      </div>
                  
                      <div id="deleteEventModal">
                        <h2>Event</h2>
                  
                        <p id="eventText"></p>
                  
                        <button id="deleteButton">Delete</button>
                        <button id="closeButton">Close</button>
                      </div>
                  
                      <div id="modalBackDrop"></div>
                </div>
                <div class="sex_chart"> 
                    <span class="title">Học sinh</span>
                    <canvas id="myChart" style="margin-top: 40px;"></canvas>
                </div>
            </div>    
            
        </div>
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../../javascript/main.js"></script>
</body>
</html>