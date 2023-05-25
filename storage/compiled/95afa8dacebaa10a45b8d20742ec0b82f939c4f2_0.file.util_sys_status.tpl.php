<?php
/* Smarty version 4.3.0, created on 2023-04-28 22:34:33
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\util_sys_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_644c8239657cd6_23587668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95afa8dacebaa10a45b8d20742ec0b82f939c4f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\util_sys_status.tpl',
      1 => 1673649396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644c8239657cd6_23587668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_634170537644c8239651954_18532383', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_634170537644c8239651954_18532383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_634170537644c8239651954_18532383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Application Environment'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <table class="table table-bordered sys_table">
                            <tbody>



                            <tr>
                                <td>BASE URL</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
</td>
                            </tr>

                            <tr>
                                <td>Application Stage</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['app_stage']->value;?>
</td>
                            </tr>

                            <tr>
                                <td>Default Language</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['config']->value['language'];?>
</td>
                            </tr>


                            </tbody>
                        </table>
                    </div>



                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Server Environment'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <?php echo $_smarty_tpl->tpl_vars['pinfo']->value;?>

                    </div>




                </div>
            </div>
        </div>

    </div>
<?php
}
}
/* {/block "content"} */
}
