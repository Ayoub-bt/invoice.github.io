<?php
/* Smarty version 4.3.0, created on 2023-05-03 18:34:51
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\hostbilling\admin\contact_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64529b3b4a14e7_34077815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a97b8f300b29ee7889fb5d5c2685a0e9a67a0a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\hostbilling\\admin\\contact_edit.tpl',
      1 => 1682984958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64529b3b4a14e7_34077815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34148724764529b3b47e5b4_33510379', "inner_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170798699764529b3b4a0bb4_42049795', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/admin/contact_base.tpl");
}
/* {block "inner_content"} */
class Block_34148724764529b3b47e5b4_33510379 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'inner_content' => 
  array (
    0 => 'Block_34148724764529b3b47e5b4_33510379',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <style>
        #edit_form label {
            margin-bottom: 10px;
        }
    </style>

    <div class="alert alert-danger" id="emsg" style="display: none;">
        <span id="emsgbody"></span>
    </div>

    <form class="form-horizontal" id="edit_form">

        <!-- Full Name / Company -->
        <div class="row mt-2">
            <div class="col-md-6 ">
                <div class="mb-3"><label for="account"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account Name'];?>
</span></label>
                    <input type="text" id="account" name="account" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->account;?>
">
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="mb-3 h6"><label for="company_id"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</span></label>
                    <select id="company_id" name="company_id" class="form-control">
                        <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['contact']->value->cid == ($_smarty_tpl->tpl_vars['company']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
        </div>

        <!-- Email / Secondary Email -->
        <div class="row mt-2">
            <div class="col-md-6">
                <div class="mb-3 h6"><label for="edit_email"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</span></label>
                    <input type="text" id="edit_email" name="edit_email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['email'];?>
">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3 h6"><label for="edit_secondary_email"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Secondary Email'];?>
</span></label>
                    <input type="text" id="edit_secondary_email" name="secondary_email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['secondary_email'];?>
">
                </div>
            </div>
        </div>

        <!-- Phone / Business number -->
        <div class="row mt-2">
            <div class="col-md-6">
                <div class="mb-3 h6">
                    <label for="phone"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</span></label>
                    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['phone'];?>
">
                </div>
            </div>

            <div class="col-md-6">
                <?php if ($_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>
                    <div class="mb-3 h6">
                        <label for="business_number"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Business Number'];?>
</span></label>
                        <input type="text" id="business_number" name="business_number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['business_number'];?>
">
                    </div>
                <?php }?>
            </div>
        </div>

        

        <!-- Fax -->
        <?php if ($_smarty_tpl->tpl_vars['config']->value['fax_field']) {?>
            <div class="mb-3 h6"><label for="phone"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Fax'];?>
</span></label>
                <input type="text" id="fax" name="fax" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['fax'];?>
">
            </div>
        <?php }?>

        <!-- Adress -->
        <div class="mb-3 h6"><label for="address"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</span></label>
            <input type="text" id="address" name="address" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['address'];?>
">
        </div>

        <!-- Country / State-Region / City -->
        <div class="row mt-2">
            <div class="col-md-3">
                <div class="mb-3 h6"><label for="country"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</span></label>
                    <select name="country" id="country" class="form-control">
                        <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Country'];?>
</option>
                        <?php echo $_smarty_tpl->tpl_vars['countries']->value;?>

                    </select>
                </div>
            </div>
            <div class="col-md-5">
                <div class="mb-3 h6"><label for="state"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</span></label>
                    <input type="text" id="state" name="state" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['state'];?>
">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3 h6"><label for="city"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</span></label>
                    <input type="text" id="city" name="city" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['city'];?>
">
                </div>
            </div>
        </div>

        <!-- Group / ZIP Postal Code -->
        <div class="row mt-2">
            <div class="col-md-4">
                <div class="mb-3 h6"><label for="zip"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
 </span></label>
                    <input type="text" id="zip" name="zip" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['zip'];?>
">
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3 h6"><label for="group"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>
 </span></label>
                    <select class="form-select" name="group" id="group">
                        <option value="0" <?php if (($_smarty_tpl->tpl_vars['contact']->value['gid']) == 0) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gs']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['contact']->value['gid']) == ($_smarty_tpl->tpl_vars['g']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['g']->value['gname'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

            </div>
        </div>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fs']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
            <div class="mb-3"><label for="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['fieldname'];?>
</label>
                <?php if (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'text') {?>


                    <input type="text" id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control" value="<?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['contact']->value['id']) != '') {?> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['contact']->value['id']);
}?>">
                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                    <?php }?>

                <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'password') {?>

                    <input type="password" id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control" value="<?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['contact']->value['id']) != '') {?> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['contact']->value['id']);
}?>">
                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                    <?php }?>

                <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'dropdown') {?>
                    <select id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(',',$_smarty_tpl->tpl_vars['f']->value['fieldoptions']), 'fo');
$_smarty_tpl->tpl_vars['fo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fo']->value) {
$_smarty_tpl->tpl_vars['fo']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['fo']->value;?>
" <?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['contact']->value['id']) == $_smarty_tpl->tpl_vars['fo']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['fo']->value;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                    <?php }?>

                <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'textarea') {?>

                    <textarea id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control" rows="3"><?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['contact']->value['id']) != '') {?> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['contact']->value['id']);
}?></textarea>
                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                    <?php }?>

                <?php } else { ?>
                <?php }?>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <div class="mb-3"><label for="tags"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tags'];?>
</span></label>
            <select name="tags[]" id="tags"  class="form-control" multiple="multiple">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['tag']->value['text'],$_smarty_tpl->tpl_vars['contacttags']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>



        <div class="mb-3">
            <button class="btn btn-primary" type="submit" id="submit"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
        </div>



        <input type="hidden" name="fcid" id="fcid" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
">


    </form>


<?php
}
}
/* {/block "inner_content"} */
/* {block "script"} */
class Block_170798699764529b3b4a0bb4_42049795 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_170798699764529b3b4a0bb4_42049795',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {

            $("#country").select2();


            $('#tags').select2({
                tags: true,
                tokenSeparators: [','],
            });

            $('#company_id').select2();


            let $edit_form = $('#edit_form');

            $edit_form.on('submit',function (event) {
                event.preventDefault();
                $.post(base_url + 'contacts/edit-post/', $edit_form.serialize())
                    .done(function (data) {

                        if ($.isNumeric(data)) {

                            location.reload();
                        }
                        else {

                            $("#emsgbody").html(data);
                            $("#emsg").show("slow");
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
