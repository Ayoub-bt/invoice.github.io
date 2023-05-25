<?php
/* Smarty version 4.3.0, created on 2023-04-29 14:44:22
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\util_backups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_644d65868d62b9_59506597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7967ade5e947cc3e5fc0561c4608f048a43f0e95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\util_backups.tpl',
      1 => 1673649396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644d65868d62b9_59506597 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_493092857644d65868c6327_76163731', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1286886527644d65868d5c29_46386100', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_493092857644d65868c6327_76163731 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_493092857644d65868c6327_76163731',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="panel-hdr">
                <h2 class="ibilling-page-header"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Backup'];?>
</h2>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-container">
                    <div class="panel-content">
                        <ul class="nav nav-tabs">
                            <li class="active"><a class="nav-link active show" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/backups"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Database'];?>
</a></li>
                            <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/backup_files"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Files'];?>
</a></li>
                        </ul>


                        <div class="tab-content">
                            <div class="tab-pane active show">

                                <br>
                                <div>


                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/do-backup-db" id="btnBackup" class="btn btn-primary add_document waves-effect waves-light"><i class="fal fa-database"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Backup now'];?>
</a>

                                    <hr>

                                    <div class="row">
                                        <div class="col-lg-12">

                                            <?php if (count($_smarty_tpl->tpl_vars['files']->value) > 0) {?>

                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['files']->value, 'value', false, 'file');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>

                                                    <?php if ($_smarty_tpl->tpl_vars['file']->value == '..' || $_smarty_tpl->tpl_vars['file']->value == 'index.html' || $_smarty_tpl->tpl_vars['file']->value == 'task.log') {?>
                                                        <?php continue 1;?>
                                                    <?php }?>

                                                    <div class="file-box" style="margin-bottom: 15px;">
                                                        <div class="file">
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
util/download-db-backup/<?php echo base64_encode($_smarty_tpl->tpl_vars['value']->value['file_path']);?>
">
                                                                <span class="corner"></span>

                                                                <div class="icon">
                                                                    <i class="fa <?php echo $_smarty_tpl->tpl_vars['value']->value['icon_class'];?>
"></i>
                                                                </div>
                                                                <div class="file-name">
                                                                    <?php echo $_smarty_tpl->tpl_vars['file']->value;?>

                                                                    <br/>
                                                                    <small>
                                                                        <?php echo $_smarty_tpl->tpl_vars['value']->value['mod_time'];?>


                                                                    </small>
                                                                </div>

                                                            </a>


                                                        </div>

                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/delete-backup-db/<?php echo str_replace('/',':',$_smarty_tpl->tpl_vars['value']->value['file_path']);?>
" class="btn btn-danger mt-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>

                                                    </div>



                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>

                                            <?php }?>






                                        </div>
                                    </div>



                                </div>
                            </div>

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
/* {block 'script'} */
class Block_1286886527644d65868d5c29_46386100 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1286886527644d65868d5c29_46386100',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {
            $('#btnBackup').click(function () {
                $('#btnBackup').prop('disabled',true);
            });
        })

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
