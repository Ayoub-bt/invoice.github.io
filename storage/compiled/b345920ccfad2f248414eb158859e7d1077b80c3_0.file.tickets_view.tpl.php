<?php
/* Smarty version 4.3.0, created on 2023-01-07 14:36:43
  from '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/tickets_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b9c9cb9463f7_60631984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b345920ccfad2f248414eb158859e7d1077b80c3' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/tickets_view.tpl',
      1 => 1672095351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b9c9cb9463f7_60631984 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154770531863b9c9cb90e367_14114450', "account_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105914047163b9c9cb9422c0_21812558', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./account.tpl");
}
/* {block "account_content"} */
class Block_154770531863b9c9cb90e367_14114450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'account_content' => 
  array (
    0 => 'Block_154770531863b9c9cb90e367_14114450',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h4><?php echo $_smarty_tpl->tpl_vars['d']->value->subject;?>
</h4>

    <div class="vstack gap-4 mt-5">
        <!-- Review item -->
        <div class="row g-3 g-lg-4">
            <div class="col-md-4 col-xxl-3">
                <!-- Avatar and info -->
                <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <div class="avatar  me-2 flex-shrink-0">
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == 'gravatar') {?>
                            <img src="http://www.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['user']->value['email']);?>
?s=30" class="img-time-line avatar rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                            <img class="img-time-line avatar rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" alt="">
                        <?php } else { ?>
                            <img src="<?php echo APP_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="img-time-line avatar rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['account'];?>
">
                        <?php }?>
                    </div>
                    <!-- Info -->
                    <div class="ms-2">
                        <h6 class="mb-1"><?php echo $_smarty_tpl->tpl_vars['d']->value->account;?>
</h6>
                        <p class="mb-0"> <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value->created_at));?>
</p>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-xxl-9">
                <!-- Rating -->


                <p>  <?php echo $_smarty_tpl->tpl_vars['d']->value->message;?>
</p>

                <!-- Button -->
                <?php if (($_smarty_tpl->tpl_vars['d']->value->attachments) != '') {?>
                    <div class="timeline-footer">
                        <?php echo Tickets::gen_link_attachments($_smarty_tpl->tpl_vars['d']->value->attachments);?>

                    </div>
                <?php }?>


            </div>
        </div>

        <hr class="m-0">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['replies']->value, 'reply');
$_smarty_tpl->tpl_vars['reply']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
$_smarty_tpl->tpl_vars['reply']->do_else = false;
?>
            <div class="row g-3 g-lg-4">
                <div class="col-md-4 col-xxl-3">
                    <!-- Avatar and info -->
                    <div class="d-flex align-items-center">
                        <!-- Avatar -->
                        <div class="avatar  me-2 flex-shrink-0">
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == 'gravatar') {?>
                                <img src="http://www.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['user']->value['email']);?>
?s=30" class="img-time-line rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                            <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                                <img class="img-time-line rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" alt="">
                            <?php } else { ?>
                                <img src="<?php echo APP_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="img-time-line rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['account'];?>
">
                            <?php }?>
                        </div>
                        <!-- Info -->
                        <div class="ms-2">
                            <h6 class="mb-1"><?php echo $_smarty_tpl->tpl_vars['reply']->value['replied_by'];?>
</h6>
                            <p class="mb-0"> <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['reply']->value['created_at']));?>
</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-xxl-9">
                    <!-- Rating -->


                    <p> <?php echo $_smarty_tpl->tpl_vars['reply']->value['message'];?>
</p>
                    <?php if (($_smarty_tpl->tpl_vars['reply']->value['attachments']) != '') {?>
                        <div class="timeline-footer">
                            <?php echo Tickets::gen_link_attachments($_smarty_tpl->tpl_vars['reply']->value['attachments']);?>

                        </div>
                    <?php }?>

                    <!-- Button -->

                    <div class="collapse show" >
                        <div class="d-flex mt-3">
                            <div class="">
                                <form id="create_ticket" class="form-horizontal push-10-t push-10" method="post">
                                    <div class="mb-3">
                                        <div class="">

                                            <textarea id="content"  class="form-control" name="content"></textarea>
                                            <div class="help-block"><a data-bs-toggle="modal" href="#modal_add_item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Attach File'];?>
</a> </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="col-xs-12">

                                            <input type="hidden" name="attachments" id="attachments" value="">
                                            <input type="hidden" name="f_tid" id="f_tid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
">

                                            <button class="btn btn-primary" id="ib_form_submit" type="submit"><i class="fal fa-send push-5-r"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


        <hr class="m-0"> <!-- Divider -->

        <!-- Review item -->


        <!-- Pagination START -->
        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
            <!-- Content -->
            <p class="mb-sm-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
            <!-- Pagination -->
            <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
                <ul class="pagination pagination-sm pagination-primary-soft mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Prev</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Pagination END -->
    </div>

    <!-- row -->

    <!-- /.row -->


    <div id="modal_add_item" class="modal fade" tabindex="-1" data-width="600" style="display: none;">
        <div class="modal-header">
            <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title"><?php echo __('Add File');?>
</h4>
        </div>
        <div class="modal-body">
            <div class="row">

                <div class="col-md-12">
                    <form action="" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i> Drop File Here</h3>
                            <br />
                            <span class="note"><?php echo __('Or Click to Upload');?>
</span>
                        </div>

                    </form>


                </div>


            </div>
        </div>
        <div class="modal-footer">

            <button type="button" data-bs-dismiss="modal" class="btn btn-danger">Close</button>

        </div>
    </div>

<?php
}
}
/* {/block "account_content"} */
/* {block "script"} */
class Block_105914047163b9c9cb9422c0_21812558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_105914047163b9c9cb9422c0_21812558',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        Dropzone.autoDiscover = false;
        $(function () {

            $( ".mmnt" ).each(function() {
                var ut = $( this ).html();
                $( this ).html(moment.unix(ut).fromNow());
            });

            var _url = base_url;

            var $ib_form_submit = $("#ib_form_submit");

            var $create_ticket = $("#create_ticket");


            $('#content').redactor({
                buttonsHide: ['html'],
            });


            var upload_resp;


            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "client/tickets/upload_file/",
                    maxFiles: 10,
                    acceptedFiles: "image/jpeg,image/png,image/gif"
                }
            );

            ib_file.on("sending", function() {

                $ib_form_submit.prop('disabled', true);

            });

            ib_file.on("success", function(file,response) {

                $ib_form_submit.prop('disabled', false);

                upload_resp = response;

                if(upload_resp.success == 'Yes'){

                    toastr.success(upload_resp.msg);

                    $('#attachments').val(function(i,val) {
                        return val + (!val ? '' : ',') + upload_resp.file;
                    });


                }
                else{
                    toastr.error(upload_resp.msg);
                }


            });



            $ib_form_submit.on('click', function(e) {
                e.preventDefault();
                $create_ticket.block({ message: block_msg });
                $.post( _url + "client/tickets/add_reply/", {  message: $('#content').val(), attachments: $("#attachments").val(), f_tid: $("#f_tid").val()} )
                    .done(function( data ) {

                        if(data.success == "Yes"){
                            location.reload();
                        }

                        else {
                            $create_ticket.unblock();
                            toastr.error(data.msg);
                        }

                    });


            });

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
