<?php 
    require_once 'inc/header.php';
    $eduselect = "SELECT * FROM education";
    $edu = mysqli_query($db, $eduselect); 
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">

    <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40 mg-t-50">
            <h6 class="card-body-title">Education Table</h6>

            <div class="table-responsive">
                <table class="table table-bordered mg-b-0">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>TITLE</th>
                            <th>YEAR</th>
                            <th>PROGRESS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($edu as $key => $edu): ?>
                        <tr>
                            <td><?= ++$key   ?></td>
                            <td><?= $edu['title'] ?></td>
                            <td><?= $edu['year'] ?></td>
                            <td><?= $edu['progress'] ?></td>
                        </tr>
                        <?php endforeach  ?>
                    </tbody>
                </table>
            </div><!-- table-responsive -->
        </div>

    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php 
require_once 'inc/footer.php';
?>