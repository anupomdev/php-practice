<?php 
    require_once 'inc/header.php';
    $select = "SELECT * FROM Services";
    $service = mysqli_query($db, $select); 
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">

    <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40 mg-t-50">
            <h6 class="card-body-title">Bordered Table</h6>
            <p class="mg-b-20 mg-sm-b-30">Add borders on all sides of the table and cells.</p>

            <div class="table-responsive">
                <table class="table table-bordered mg-b-0">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>TITLE</th>
                            <th>SUMMARY</th>
                            <th>ICON</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($service as $key => $service): ?>
                        <tr>
                            <td><?= ++$key   ?></td>
                            <td><?= $service['title'] ?></td>
                            <td><?= $service['summary'] ?></td>
                            <td><i class="<?= str_replace(array('fab', 'fas'), "fa" , $service['icon']) ?>"></i></td>
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