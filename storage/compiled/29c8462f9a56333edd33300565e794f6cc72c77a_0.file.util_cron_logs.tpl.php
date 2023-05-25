<?php
/* Smarty version 4.3.0, created on 2023-04-29 00:07:42
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\util_cron_logs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_644c980e23d8f1_60709515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29c8462f9a56333edd33300565e794f6cc72c77a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\util_cron_logs.tpl',
      1 => 1673649396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644c980e23d8f1_60709515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_764171889644c980e229775_95477913', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_764171889644c980e229775_95477913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_764171889644c980e229775_95477913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Records'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['found'];?>

                        . <?php echo $_smarty_tpl->tpl_vars['_L']->value['Page'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['page'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['of'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['lastpage'];?>
. </h2>

                </div>
                <div class="panel-container" id="application_ajaxrender">
                    <div class="panel-content">
                        <table class="table table-bordered sys_table" id="sys_logs">
                            <thead>
                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['ID'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                <th width="60%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Message'];?>
</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</td>
                                    <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                    <td><?php echo nl2br($_smarty_tpl->tpl_vars['ds']->value['logs']);?>
</td>

                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                        <?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

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
