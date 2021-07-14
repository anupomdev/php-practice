<?php 
session_start();
require_once 'inc/header.php';

$select = "SELECT * FROM contacts WHERE deleted = 1 ORDER BY id DESC";
$message = mysqli_query($db , $select);

?>

<div class="sl-mainpanel">
    <div class="mailbox-sideleft ps ps--theme_default" data-ps-id="b702fe90-b9db-2f3f-81c5-1cf03dc02acd">
        <a href="" class="btn btn-primary btn-block">Compose</a>

        <nav class="nav nav-mailbox flex-column mg-y-20">
            <a href="" class="nav-link active">
                <i class="icon ion-ios-filing-outline tx-24"></i>
                <span>Inbox</span>
                <span class="mg-l-auto tx-12">20</span>
            </a>
            <a href="" class="nav-link">
                <i class="icon ion-ios-folder-outline tx-20"></i>
                <span>Drafts</span>
                <span class="mg-l-auto tx-12">8</span>
            </a>
            <a href="" class="nav-link"><i class="icon ion-ios-paperplane-outline tx-24"></i> Sent</a>
            <a href="" class="nav-link"><i class="icon ion-ios-trash-outline tx-24"></i> Trash</a>
            <a href="" class="nav-link">
                <i class="icon ion-ios-folder-outline tx-20"></i>
                <span>Spam</span>
                <span class="mg-l-auto tx-12">228</span>
            </a>
        </nav>
        <form action="message_delete.php" method="post">
            <label class="pd-l-10 tx-11 tx-uppercase">My Folder</label>
            <nav class="nav nav-mailbox flex-column">
                <a href="" class="nav-link"><i class="icon ion-ios-folder-outline tx-20"></i> Updates</a>
                <a href="" class="nav-link"><i class="icon ion-ios-folder-outline tx-20"></i> Promotions</a>
                <a href="" class="nav-link"><i class="icon ion-ios-folder-outline tx-20"></i> Social</a>
                <a href="" class="nav-link"><i class="icon ion-ios-folder-outline tx-20"></i> Technology</a>
                <a href="" class="nav-link"><i class="icon ion-ios-folder-outline tx-20"></i> Advertising</a>
            </nav>
            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;">
                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
    </div><!-- mailbox-sideleft -->

    <div class="mailbox-content">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Starlight</a>
            <a class="breadcrumb-item" href="index.html">Mailbox</a>
            <span class="breadcrumb-item active">Inbox</span>
        </nav>

        <div class="pd-t-25 pd-x-25">
            <div class="mailbox-content-header">
                <div>
                    <div class="btn-group mg-b-0 mg-r-5 hidden-lg-up">
                        <button id="showMailboxLeft" class="btn btn-dark"><i
                                class="icon ion-navicon-round tx-16"></i></button>
                    </div>
                    <div class="btn-group mg-b-0 hidden-xs-down">
                        <button class="btn btn-secondary"><i class="icon ion-ios-trash-outline tx-20"></i></button>
                    </div><!-- btn-group -->
                </div>
                <div class="mg-l-auto">
                    <span class="mg-r-5 hidden-xs-down">1 - 30 of 2,322</span>
                    <div class="btn-group mg-b-0">
                        <button class="btn btn-secondary disabled"><i
                                class="icon ion-ios-arrow-back tx-20"></i></button>
                        <button class="btn btn-secondary"><i class="icon ion-ios-arrow-forward tx-20"></i></button>
                    </div><!-- btn-group -->

                    <div class="btn-group mg-b-0 mg-l-5">
                        <button class="btn btn-secondary"><i class="icon ion-ios-gear-outline tx-20"></i></button>
                    </div><!-- btn-group -->
                </div>
            </div><!-- d-flex -->
        </div>

        <style type="text/css">
            .clr_bold {
                font-weight: 700;
            }
        </style>
        <table class="table table-hover mg-t-25 mg-b-0">
            <tbody>

                <thead>

                    <td class="valign-middle">
                        <label class="ckbox mg-b-0">
                            <input id="checkAll" type="checkbox"><span></span>
                        </label>
                    </td>
                    <td class="valign-middle">
                        <h6>Email</h6>
                    </td>
                    <td class="valign-middle">
                        <h6>Name</h6>
                    </td>
                    <td class="valign-middle">
                        <h6>Message</h6>
                    </td>

                </thead>
                <?php foreach ($message as $key => $message): ?>

                <tr <?php if ($message['read_status'] == 2 ):?> class="clr_bold" ; <?php endif  ?>>
                    <td class="valign-middle">
                        <label class="ckbox mg-b-0">
                            <input name="msg_id[]" value=<?= $message['id'] ?>" type="checkbox"><span></span>
                        </label>
                    </td>
                    <td>
                        <?= $message['email'] ?>
                    </td>
                    <td>
                        <span><?= $message['name'] ?></span>
                    </td>
                    <td class="valign-middle">
                        <p class="mg-b-0"><?= $message['message'] ?></p>
                    </td>
                    <td class="valign-middle"><?= $message['create_time'] ?>
                </tr>
                <?php endforeach ?>
                
            </tbody>
        </table>

    </div><!-- mailbox-content -->
    </form>
</div>





<?php 
require_once 'inc/footer.php';

?>