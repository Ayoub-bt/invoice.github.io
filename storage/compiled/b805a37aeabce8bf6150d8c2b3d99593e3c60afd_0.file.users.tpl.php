<?php
/* Smarty version 4.3.0, created on 2023-04-29 03:12:41
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_644cc369df2540_19179797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b805a37aeabce8bf6150d8c2b3d99593e3c60afd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\users.tpl',
      1 => 1673649396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644cc369df2540_19179797 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92337459644cc369dcc681_45481931', "head");
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_237811975644cc369dcd116_19158173', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2122149104644cc369deff47_44801735', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_92337459644cc369dcc681_45481931 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_92337459644cc369dcc681_45481931',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_237811975644cc369dcd116_19158173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_237811975644cc369dcd116_19158173',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage_Users'];?>
</h2>

                    <div class="panel-toolbar">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-add" class="btn btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_New_User'];?>
</a>

                    </div>

                </div>
                <div class="panel-container">
                    <div class="panel-content">

                        <div class="table-responsive">
                            <table class="table table-striped" id="clx_datatable">
                                <thead style="background: #f0f2ff">
                                <tr>
                                    <th style="width: 60px;background: #f0f2ff"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Avatar'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Details'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                                    <th class="text-end"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>
                                </thead>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                    <tr>
                                        <td><?php if ($_smarty_tpl->tpl_vars['ds']->value['img'] == 'gravatar') {?>
                                                <img src="http://www.gravatar.com/avatar/<?php echo md5(($_smarty_tpl->tpl_vars['ds']->value['username']));?>
?s=60" class="img-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['img'] == '') {?>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" style="max-height: 60px;" alt="">
                                            <?php } else { ?>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ds']->value['img'];?>
" class="img-circle" style="max-height: 60px;" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['fullname'];?>
">
                                            <?php }?></td>
                                        <td class="h6">
                                            <?php echo $_smarty_tpl->tpl_vars['ds']->value['fullname'];?>

                                            <br>  <?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>

                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['phonenumber'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['phonenumber'];?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['address_line_1'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['address_line_1'];?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['address_line_2'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['address_line_2'];?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['city'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['city'];?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['state'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['state'];?>
 - <?php echo $_smarty_tpl->tpl_vars['ds']->value['zip'];?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['country'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['country'];?>

                                            <?php }?>
                                        </td>

                                        <td class="h6 text-info">
                                            <?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['user_type']);?>


                                            <?php if ((isset($_smarty_tpl->tpl_vars['relations']->value[$_smarty_tpl->tpl_vars['ds']->value['id']]))) {?>
                                                <hr>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['relations']->value[$_smarty_tpl->tpl_vars['ds']->value['id']], 'relation');
$_smarty_tpl->tpl_vars['relation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['relation']->value) {
$_smarty_tpl->tpl_vars['relation']->do_else = false;
?>

                                                    <?php if ((isset($_smarty_tpl->tpl_vars['departments']->value[$_smarty_tpl->tpl_vars['relation']->value]))) {?>
                                                        <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['departments']->value[$_smarty_tpl->tpl_vars['relation']->value]->dname;?>
</span>
                                                    <?php }?>

                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>


                                        </td>
                                        <td>
                                            <div class="btn-group float-end">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-primary btn-sm"><i class="fal fa-pencil"></i> </a>
                                                <?php if (($_smarty_tpl->tpl_vars['_user']->value['username']) != ($_smarty_tpl->tpl_vars['ds']->value['username'])) {?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger btn-sm cdelete"><i class="fal fa-trash-alt"></i> </a>
                                                <?php }?>

                                            </div>

                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </table>
                        </div>


                    </div>





                </div>
            </div>



        </div>



    </div>



<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_2122149104644cc369deff47_44801735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2122149104644cc369deff47_44801735',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php echo '<script'; ?>
>
        $(function () {
            $('#clx_datatable').dataTable({
                responsive: true,
                "language": {
                    "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No items to display'];?>
",
                    "info":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                    "infoEmpty":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing 0 to 0 of 0 entries'];?>
",
                    buttons: {
                        pageLength: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Show all'];?>
'
                    },
                    searchPlaceholder: "<?php echo __('Search');?>
"
                },
            });
        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
