<!-- Vertical navbar -->
<?php 
include("./header.php") ?>


<body>
  <div class="d-flex justify-content-start ">
  <div class="nav flex-column vertical-nav nav-pills me- content-navv bd-hightlight" id="v-pills-tab" role="tablist" aria-orientation="vertical">

      <div class="nav-title padd"> 
        <img src="./assets/img/profile.png" class="nav-img" alt="">
        <span class="nav-user">John Doe</span>
      </div>

        <button class="nav-link active navbar-tabs" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-cog icon-nav"></i>Settings</button>
        <button class="nav-link navbar-tabs" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-skills" type="button" role="tab" aria-controls="v-pills-skills" aria-selected="false"><i class="fas fa-user-circle icon-nav"></i>Skills</buttona>
        <button class="nav-link navbar-tabs" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-envelope icon-nav"></i>Messages</button>
        <button class="nav-link navbar-tabs" id="v-pills-projects-tab" type="button"><i class="fas fa-project-diagram icon-nav"></i>Projects</button>

        <button class="nav-link navbar-tabs sub-tabs" id="v-pills-myprojects-tab" data-bs-toggle="pill" data-bs-target="#v-pills-myprojects" type="button" role="tab" aria-controls="v-pills-myprojects" aria-selected="false"><i class="fas fa-user-tag icon-nav"></i>My Projects</button>
        <button class="nav-link navbar-tabs sub-tabs" id="v-pills-otherprojects-tab" data-bs-toggle="pill" data-bs-target="#v-pills-otherprojects" type="button" role="tab" aria-controls="v-pills-otherprojects" aria-selected="false"><i class="fas fa-user-friends icon-nav"></i>Other Projects</button>
  </div>


   <!-- SETTINGS TAB -->

  <div class="tab-content" id="v-pills-tabContent" style="max-width:60vw" >
    <div class="tab-pane fade show active" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
      <div class="row">
        <div class="col">
      
          <h3>Edit Profile</h3><br>
          <form action="">
            <center>
            <img src="./assets/img/profile.png" class='profile-img' alt="">
            </center>
            <br>
            <div class=" input-group">
              <div class="form-group padd">
              <label for="fname">First Name</label>
              <input type="text" id="fname" class="form-control ">
            </div>
            <div class="form-group padd">
              <label for="lname">Last Name</label>
              <input type="text" id="lname" class="form-control ">
              </div>
            </div>
            <div class="form-group padd">
              <label for="email">Email</label>
              <input type="text" id="email" class="form-control">
            </div>
            <div class="form-group padd">
              <label for="contact">Mobile</label>
              <input type="text" id="contact" class="form-control">
            </div>
            <div class="form-group padd">
              <label for="university">University</label>
              <input type="text" id="university" readonly="readonly" class="form-control">
            </div><br>




            <span class="form-head padd">Reset Password</span>
             <div class="input-group">
             

            <div class="form-group padd">
              <label for="curpassword">Current Password</label>
              <input type="password" id="curpassword" class="form-control ">
            </div>
            <div class="form-group padd">
              <label for="newpassword">New Password</label>
              <input type="password" id="newpassword" class="form-control ">
              </div>
            </div>
            <br>
            <button class="btn btn-primary" type="submit">Save</button>
          </form>
        </div>
      </div>
    </div>

    <!-- SKILLS TAB -->

    <div class="tab-pane fad bd-hightlight " style="max-width:60vw" id="v-pills-skills" role="tabpanel" aria-labelledby="v-pills-skills-tab">
      <form action="">
            <center>
            <h3>Skills</h3><br>
            </center>
            <br>

            <div id="wide-tab"></div>


            <span class="form-head">Mandatory</span><br>
            <div class="input-group mb-3 padd">
              <span class="input-group-text" id="linkedin"><i class="fab fa-linkedin"></i></span>
              <input type="text" class="form-control" placeholder="LinkedIn Profile" aria-label="Username" aria-describedby="linkedin">
            </div>


            <div class="input-group mb-3 padd">
              <span class="input-group-text" id="github"><i class="fab fa-github"></i></span>
              <input type="text" class="form-control" placeholder="GitHub Profile" aria-label="Username" aria-describedby="github">
            </div>


            <span class="form-head ">Optional</span><br>
            <div class="input-group mb-3 padd">
              <span class="input-group-text" id="insta"><i class="fab fa-instagram-square"></i></span>
              <input type="text" class="form-control" placeholder="Instagram Profile" aria-label="Username" aria-describedby="insta">
            </div>
            <div class="input-group mb-3 padd">
              <span class="input-group-text" id="fb"><i class="fab fa-facebook"></i></span>
              <input type="text" class="form-control" placeholder="Facebook Profile" aria-label="Username" aria-describedby="fb">
            </div>

            <div class="row">
              <div class="col">
                  <span class="form-head ">Bio</span><br>
            <div class="form-group mb-3 padd">
               <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="bio" style="height: 150px"></textarea>
                <label for="bio">About you</label>
              </div>
            </div>
              </div>
              <div class="col">
                 <span class="form-head ">Experience</span><br>
            <div class="form-group mb-3 padd">
               <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="exp" style="height: 150px"></textarea>
                <label for="exp" class="">Work/Study Experience </label>
              </div>
            </div>
              </div>
            </div>

          

          <span class="form-head">Skills</span><br>
            <div class="row padd">
              <div class="col">
                <span class="badge rounded-pill bg-dark mgin">PHP <div class="cross">x</div></span>
                <span class="badge rounded-pill bg-dark mgin">TensorFlow <div class="cross">x</div></span>
                <span class="badge rounded-pill bg-dark mgin">Python <div class="cross">x</div></span>
                <span class="badge rounded-pill bg-dark mgin">Photography <div class="cross">x</div></span>
                <span class="badge rounded-pill bg-dark mgin">Debating <div class="cross">x</div></span>
                <span class="badge rounded-pill bg-dark mgin">UI/UX <div class="cross">x</div></span>
                <span class="badge rounded-pill bg-dark mgin">Social Engineering <div class="cross">x</div></span>
                <span class="badge rounded-pill bg-dark mgin">Flask <div class="cross">x</div></span>

                <span class="plus-mgin"><i class="fas fa-plus-circle"></i></span>

            </div>
          </div>
          


            

            <br>
            <button class="btn btn-primary" type="submit">Save</button>
          </form>
    </div>

    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
      
        <div class="container">
        <h3 class=" text-center">Messages</h3>
        <div class="messaging">
          <div class="inbox_msg">
            <div class="inbox_people">
              <div class="headind_srch">
                <div class="recent_heading">
                  <h4>Recent</h4>
                </div>
                <div class="srch_bar">
                  <div class="stylish-input-group">
                    <input type="text" class="search-bar"  placeholder="Search" >
                    <span class="input-group-addon">
                    <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                    </span> </div>
                </div>
              </div>
              <div class="inbox_chat">
                <div class="chat_list active_chat">
                  <div class="chat_people">
                    <div class="chat_img"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="sunil"> </div>
                    <div class="chat_ib">
                      <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                      <p>Test, which is a new approach to have all solutions 
                        astrology under one roof.</p>
                    </div>
                  </div>
                </div>
                <div class="chat_list">
                  <div class="chat_people">
                    <div class="chat_img"> <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="sunil"> </div>
                    <div class="chat_ib">
                      <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                      <p>Test, which is a new approach to have all solutions 
                        astrology under one roof.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mesgs">
              <div class="msg_history">
                <div class="incoming_msg">
                  <div class="incoming_msg_img"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="sunil"> </div>
                  <div class="received_msg">
                    <div class="received_withd_msg">
                      <p>Test which is a new approach to have all
                        solutions</p>
                      <span class="time_date"> 11:01 AM    |    June 9</span></div>
                  </div>
                </div>
                <div class="outgoing_msg">
                  <div class="sent_msg">
                    <p>Test which is a new approach to have all
                      solutions</p>
                    <span class="time_date"> 11:01 AM    |    June 9</span> </div>
                </div>
                <div class="incoming_msg">
                  <div class="incoming_msg_img"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="sunil"> </div>
                  <div class="received_msg">
                    <div class="received_withd_msg">
                      <p>Test, which is a new approach to have</p>
                      <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
                  </div>
                </div>
                <div class="outgoing_msg">
                  <div class="sent_msg">
                    <p>Apollo University, Delhi, India Test</p>
                    <span class="time_date"> 11:01 AM    |    Today</span> </div>
                </div>
                <div class="incoming_msg">
                  <div class="incoming_msg_img"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="sunil"> </div>
                  <div class="received_msg">
                    <div class="received_withd_msg">
                      <p>We work directly with our designers and suppliers,
                        and sell direct to you, which means quality, exclusive
                        products, at a price anyone can afford.</p>
                      <span class="time_date"> 11:01 AM    |    Today</span></div>
                  </div>
                </div>
              </div>
              <div class="type_msg">
                <div class="input_msg_write">
                  <input type="text" class="write_msg" placeholder="Type a message" />
                  <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>



    <div class="tab-pane fade" id="v-pills-myprojects" role="tabpanel" aria-labelledby="v-pills-myprojects-tab">
      <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <center>
              <img src="./assets/img/python.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body">
                <h5 class="card-title">Python TkInter Game First Year</h5>
                <p class="card-text">DESCRIPTION</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Date Posted : </small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <center>
              <img src="./assets/img/flask.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body">
                <h5 class="card-title">Simple Flask App Third Year</h5>
                <p class="card-text">DESCRIPTION</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Date Posted : </small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <center>
              <img src="./assets/img/angular.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body">
                <h5 class="card-title">Angular Portfolio Fourth Year</h5>
                <p class="card-text">DESCRIPTION</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Date Posted : </small>
              </div>
            </div>
          </div>
        </div>
    </div>


    <div class="tab-pane fade" id="v-pills-otherprojects" role="tabpanel" aria-labelledby="v-pills-otherprojects-tab">
      <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <center>
              <img src="./assets/img/python.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body">
                <h5 class="card-title">Python TkInter Game First Year</h5>
                <p class="card-text">DESCRIPTION</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Date Posted : </small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <center>
              <img src="./assets/img/angular.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body">
                <h5 class="card-title">Angular Portfolio Fourth Year</h5>
                <p class="card-text">DESCRIPTION</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Date Posted : </small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <center>
              <img src="./assets/img/angular.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body">
                <h5 class="card-title">Angular Portfolio Fourth Year</h5>
                <p class="card-text">DESCRIPTION</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Date Posted : </small>
              </div>
            </div>
          </div>
        </div>
    </div>



  </div>
</div>
</body>

</html>
