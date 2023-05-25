<?php
/* Smarty version 4.3.0, created on 2023-04-29 10:31:18
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\categories-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_644d2a36c31684_41416028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08ef293ff6e903b305b9f58a2607ce2f827a7389' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\categories-edit.tpl',
      1 => 1673649396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644d2a36c31684_41416028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57207948644d2a36c2c770_07927300', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_57207948644d2a36c2c770_07927300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_57207948644d2a36c2c770_07927300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Categories'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/categories-edit-post">
                            <div class="mb-3">
                                <label for="name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>

                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
">
                            </div>



                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        </form>
                    </div>

                </div>
            </div>
        </div> <!-- Widget-1 end-->
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Deleting Categories will'];?>
 </p>
                         <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/categories-delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-danger"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Widget-2 end-->
    </div>
<?php
}
}
/* {/block "content"} */
}
