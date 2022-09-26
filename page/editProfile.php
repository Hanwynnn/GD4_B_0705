<?php
    include '../component/sidebar.php'

?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    <div class="body d-flex justify-content-between">
        <h4>Edit Profile</h4> 
        <a href="../page/showProfile.php"><i class="fa fa-user" aria-hidden="true" style="color: #D40013;"></i></a>
    </div>
    <hr>

    <form action="../process/editProfileProcess.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input
                  class="form-control"
                  id="name"
                  name="name"
                  value="<?php echo $_SESSION['user']['name']?>"
                  aria-describedby="emailHelp"
                  Required/>
            </div>

            <div class="mb-3">
                <label for="phonenum" class="form-label">Phone Number</label>
                <input
                  class="form-control"
                  id="phonenum"
                  name="phonenum"
                  value="<?php echo $_SESSION['user']['phonenum']?>"
                  aria-describedby="emailHelp"
                  Required/>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                  class="form-control"
                  id="email"
                  name="email"
                  value="<?php echo $_SESSION['user']['email']?>"
                  aria-describedby="emailHelp"
                  Required/>
            </div>

            <div class="mb-3">
                <label for="job" class="form-label"
                  >Job</label>
                <select
                  class="form-select"
                  aria-label="Default select example"
                  name="job"
                  id="job" >
                  <option value="Reguler">Student</option>
                  <option value="Platinum">Teacher</option>
                  <option value="Gold">Other</option>
                  value="<?php echo $_SESSION['user']['job']?>"
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                  >Membership</label
                >
                <select
                  class="form-select"
                  aria-label="Default select example"
                  name="membership"
                  id="membership" 
                  disabled>
                  <option><?php echo $_SESSION['user']['membership']?></option>
                  <option value="Reguler">Reguler</option>
                  <option value="Platinum">Platinum</option>
                  <option value="Gold">Gold</option>                  
                </select>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-secondary" name="edit">
                  Update
                </button>
            </div>
    </form>
    
</div>
</aside>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
</body>
</html>
