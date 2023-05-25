<?php
/* Smarty version 4.3.0, created on 2023-01-07 14:36:51
  from '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/client_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b9c9d399ad82_83967430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a90540abc9ee2b1cdfb0abe3b20da7a6dd01a170' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/client_profile.tpl',
      1 => 1672095351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b9c9d399ad82_83967430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195537315463b9c9d3953228_38864889', 'account_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141492117363b9c9d39980c3_59670639', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./account.tpl");
}
/* {block 'account_content'} */
class Block_195537315463b9c9d3953228_38864889 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'account_content' => 
  array (
    0 => 'Block_195537315463b9c9d3953228_38864889',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-4">
            <div class="panel">

                <div class="panel-container">
                    <div class="panel-content">
                        <div class="">
                            <form enctype="multipart/form-data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/profile-picture-upload" id="form_profile_picture">
                                <input type="file" id="file_profile_picture" name="file" style="display: none;" />
                            </form>

                            <h4 style="margin-top: 20px; margin-bottom: 20px;"><span ><?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
</span></h4>

                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['user']->value->phone;?>

                            <br>
                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>


                            <?php if ($_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>

                                <br>

                                <strong><?php echo $_smarty_tpl->tpl_vars['config']->value['label_business_number'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['user']->value->business_number;?>


                            <?php }?>
                            <br>
                            <br>

                            <address>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->company != '') {?>
                                    <?php echo $_smarty_tpl->tpl_vars['user']->value->company;?>

                                    <br>
                                    <?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>

                                    <br>
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>

                                    <br>
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->address;?>
 <br>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->city;?>
 <br>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->state;?>
 - <?php echo $_smarty_tpl->tpl_vars['user']->value->zip;?>
 <br>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->country;?>

                                <br>


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cf']->value, 'cfs');
$_smarty_tpl->tpl_vars['cfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cfs']->value) {
$_smarty_tpl->tpl_vars['cfs']->do_else = false;
?>
                                    <br>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['cfs']->value['fieldname'];?>
: </strong> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['cfs']->value['id'],$_smarty_tpl->tpl_vars['user']->value->id);?>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </address>


                            <a class="btn btn-success" href="javascript:;" onclick="upload_profile_picture();"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Upload Picture'];?>
</a>

                            <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] != '') {?>
                                <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/remove-profile-picture"><?php echo $_smarty_tpl->tpl_vars['_L']->value['No Image'];?>
</a>


                            <?php }?>

                            <br>

                            <a class="btn btn-warning mt-3" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/shipping-addresses"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Shipping Addresses'];?>
</a>



                        </div>


                    </div>
                </div>


            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">

                    <h5><span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Profile'];?>
</span></h5>

                </div>
                <div class="card-body">


                    <form class="form-horizontal" id="iform">

                        <div class="mb-3"><label  for="account"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account Name'];?>
</span></label>

                            <input type="text" id="account" name="account" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>
">
                        </div>

                        <div class="mb-3"><label  for="company"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
</span></label>

                            <input type="text" id="company" name="company" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['company'];?>
">
                        </div>

                        <div class="mb-3"><label  for="edit_email"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</span></label>

                            <input type="text" id="edit_email" name="edit_email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
">
                        </div>
                        <div class="mb-3"><label  for="phone"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</span></label>

                            <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['phone'];?>
">
                        </div>

                        <?php if (!(isset($_smarty_tpl->tpl_vars['hide_client_address']->value))) {?>

                            <div class="mb-3"><label  for="address"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</span></label>

                                <input type="text" id="address" name="address" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['address'];?>
">
                            </div>
                            <div class="mb-3"><label  for="city"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</span></label>

                                <input type="text" id="city" name="city" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['city'];?>
">
                            </div>
                            <div class="mb-3"><label  for="state"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</span></label>

                                <input type="text" id="state" name="state" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['state'];?>
">
                            </div>
                            <div class="mb-3"><label for="zip"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
</span> </label>

                                <input type="text" id="zip" name="zip" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['zip'];?>
">
                            </div>
                            <div class="mb-3"><label  for="country"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</span></label>

                                <select name="country" id="country" class="form-control">
                                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Country'];?>
</option>
                                    <?php echo $_smarty_tpl->tpl_vars['countries']->value;?>

                                </select>
                            </div>

                        <?php }?>





                        <div class="mb-3"><label  for="password"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
 </span></label>

                            <input type="password" id="password" name="password" class="form-control">

                            <span class="help-block text-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['password_change_help'];?>
</span>

                        </div>



                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" id="submit"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        </div>

                    </form>


                </div>


            </div>
        </div>
    </div>


<?php
}
}
/* {/block 'account_content'} */
/* {block "script"} */
class Block_141492117363b9c9d39980c3_59670639 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_141492117363b9c9d39980c3_59670639',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>

        var $file_profile_picture = $("#file_profile_picture");

        function upload_profile_picture()
        {
            $file_profile_picture.click();
        }

        $(function () {


            $file_profile_picture.change(function() {
                $('#form_profile_picture').submit();
            });


            var btn_form_action = $("#submit");


            var iform = $('#iform');


            var _url = $("#_url").val();

            btn_form_action.on('click', function(e) {
                e.preventDefault();
                iform.block({ message: block_msg });
                $.post( _url + "client/profile_edit_post/", iform.serialize())
                    .done(function (data) {
                        if ($.isNumeric(data)) {

                            location.reload();

                        }
                        else {



                            // OR

                            iform.unblock();


                            toastr.error(data)





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
