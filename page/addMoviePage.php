<?php
    include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    <div class="body d-flex justify-content-between">
        <h4>Add New Movie</h4> 
    </div>
    <hr>

    <form action="../process/addMovieProcess.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input
                  class="form-control"
                  id="name"
                  name="name"
                  aria-describedby="emailHelp"
                  Required/>
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input
                  class="form-control"
                  id="genre"
                  name="genre"
                  aria-describedby="emailHelp"
                  Required/>
            </div>

            <div class="mb-3">
                <label for="release" class="form-label">Release</label>
                <input
                  class="form-control"
                  id="release"
                  name="release"
                  aria-describedby="emailHelp"
                  Required/>
            </div>

            <div class="mb-3">
                <label for="season" class="form-label">Season</label>
                <input
                  class="form-control"
                  id="season"
                  name="season"
                  aria-describedby="emailHelp"
                  Required/>
            </div>

            <div class="mb-3">
                <label for="synopsis" class="form-label">Synopsis</label>
                <input
                  class="form-control"
                  id="synopsis"
                  name="synopsis"
                  aria-describedby="emailHelp"
                  Required/>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-secondary" name="addMovie">
                  Save
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
