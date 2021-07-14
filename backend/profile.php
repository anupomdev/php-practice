<?php
    require_once 'inc/header.php';

    $users_id = $_SESSION['users_id'];
    $select = "SELECT * FROM anupom WHERE id = $users_id";
    $q = mysqli_query($db, $select);
    $assoc = mysqli_fetch_assoc($q);
?>

<div class="sl-mainpanel">
    <!-- sl-page-title -->
    <div class="row row-sm mg-t-50">
        <div class="col-lg-8 m-auto">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-4">admin profile</h6>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card bd-0 wd-xs-300">
                            <img id="image_id" class="card-img-top img-fluid" src="upload/<?php echo $assoc['images'] ?>" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="profile_update.php" method="post" enctype="multipart/form-data">

                            <label for="name">Name</label>
                            <input class="form form-control" type="text" name="name" id="name"
                                value="<?php echo $assoc['name']; ?>">
                            <label for="email">Email</label>
                            <input class="form form-control" type="text" name="email" id="email"
                                value="<?php echo $assoc['email'] ; ?>">
                            <label for="phone">Phone</label>
                            <input class="form form-control" type="text" name="phone" id="phone"
                                value="<?php echo $assoc['phone'] ; ?>">
                            <label for="image">Image</label>
                            <input class="form form-control mb-2" type="file" name="image" id="image"
                                onchange="document.getElementById('image_id').src = window.URL.createObjectURL(this.files[0])">
                            <button type="submit" class="btn btn-primary w-100">Submit</button>

                        </form>
                    </div>
                </div>

            </div><!-- card -->
        </div>

    </div><!-- row -->

<?php
    require_once 'inc/footer.php'
?>