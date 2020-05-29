<?php include 'link.php'; ?>
<?php include 'header.php'; ?>
      <div class="container pt-5 pb-5 ">
          <div class="join-container">
            <form action="joindata.php" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" placeholder="First name" name="fname" id="firstname">
                      </div>
                      <div class="form-group col-md-6">
                            <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last name" name="lname" id="lastname">
                      </div>
                    </div>
                    <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Email</label>
                              <input type="email" class="form-control" name="email"  id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" name="address"  id="inputAddress" placeholder="1234 Main St">
                                  </div>
                          </div>
                        
                          
                          <div class="form-row">
                           
                            <div class="form-group col-md-6">
                              <label for="University">University</label>
                              <select id="University" name="university" class="form-control">
                                <option selected>Choose...</option>
                                <option>Shanto Mariam University of Creative Technology</option>
                                <option>Independent University, Bangladesh</option>
                                <option>American International University-Bangladesh</option>
                                <option>Ahsanullah University of Science and Technology</option>
                                <option>East West University</option>
                                <option>BGMEA University of Fashion & Technology</option>
                                <option>BRAC University</option>
                                <option>Daffodil International University</option>
                                <option>Others....</option>
                              </select>
                            </div>
                            <div class="form-group col-md-4">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" name="city"  id="inputCity">
                            </div>
                            <div class="form-group col-md-2">
                              <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" name="zip"  id="inputCity">
                            </div>
                          </div>
                          <div class="form-row">
                                <div class="form-group col-md-9">
                                        <label for="Program">Program</label>
                                        <select id="program" name="programme" class="form-control">
                                          <option selected>Choose...</option>
                                          <option>B. A. (Hons) in Fashion Design & Technology</option>
                                          <option>B. A. (Hons) in Apparel Manufacturing Management & Technology</option>
                                          <option>B. Sc. (Hons) in Computer Science & Engineering</option>
                                          <option>B. Sc. (Hons) in Computer Science & Information Technology</option>
                                          <option>Bachelor of Business Administration (BBA)</option>
                                          <option>B. A. (Hons) in English (Language & Literature)</option>
                                          <option>Others...</option>
                                        </select>
                                      </div>
                          </div>
                          <div class="form-row">
                                <div class="form-group col-md-9">
                                        <label for="specialization">Specialization</label>
                                        <textarea class="form-control" id="specialization" name="skill" rows="3"></textarea>
                                        <small class="form-text text-muted">Languages you know and other skills</small>
                                      </div>
                          </div>
                        
                          <button type="submit" class="btn " style="background-color: #ff6600; color: #fff;">Join Me</button>
                </form>
            </div>
      </div>
<?php include 'footer.php'; ?>