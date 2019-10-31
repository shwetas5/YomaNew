<?php $this->load->view('header'); ?>

<!--- Navbar-->
 
  <section>
    <div class="container">
      <div class="form-group">
        <div class="row mt-4 offset">
          <div class="col-md-5 card card-body">
            <h3 class="weltext">Welcome To</h3>
            <img src="<?php echo base_url();?>assets/images/fav.jpg" alt="YOMA" srcset="">
          </div>
          <div class="col-md-6 offset card card-body form-group">
            <div class="hd">
              <h3 class="weltext">LOG IN</h3>
            </div>
            <form action="<?php echo base_url();?>stitcher/login" method="post">
              <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" placeholder="Enetr Yor User Name" class="form-control"
                  required>
              </div>
              <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Enter Your Password"
                  class="form-control" required>
              </div>
              <div class="mt-4">
                <input data-val="true" data-val-required="The RememberMe field is required." id="RememberMe"
                  name="RememberMe" type="checkbox" value="true" />
                <input name="RememberMe" type="hidden" value="false" />
                <label class="Remember_Style"> Remember me</label>
                <span class="forps"><a href="http://">Forgot Password</a></span>
              </div>

              <div class="text-center mt-4 ">
                <button class="btn btn-primary mt-2">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container-fluid bg-pink ct-sec">
      <div class="container">    
      <div class="row">  
        <div class="y-tx"> <p>© YOMA</p></div>  
     
      </div>      
      </div>      
      </div>
  
