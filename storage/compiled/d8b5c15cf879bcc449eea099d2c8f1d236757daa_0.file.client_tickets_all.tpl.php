<?php
/* Smarty version 4.3.0, created on 2023-01-07 14:36:40
  from '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/client_tickets_all.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b9c9c8e52540_96744556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8b5c15cf879bcc449eea099d2c8f1d236757daa' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/client_tickets_all.tpl',
      1 => 1672095351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b9c9c8e52540_96744556 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45541980763b9c9c8e38a23_47555233', 'account_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./account.tpl");
}
/* {block 'account_content'} */
class Block_45541980763b9c9c8e38a23_47555233 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'account_content' => 
  array (
    0 => 'Block_45541980763b9c9c8e38a23_47555233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="card shadow mb-3">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <h5 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Tickets'];?>
</h5>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/new/" class="btn btn-primary mb-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Open New Ticket'];?>
</a>
                    </div>
                </div>



                <table class="table table-hover table-vcenter">
                    <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                        <tr>
                            <td style="width: 140px;"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['tid'];?>
/">#<?php echo $_smarty_tpl->tpl_vars['d']->value['tid'];?>
</a></td>
                            <td class="hidden-xs hidden-sm hidden-md text-center" style="width: 100px;">
                                    <span class="badge badge-success"><?php if ((isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['d']->value['status']]))) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['d']->value['status']];?>

                                    <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['d']->value['status'];?>

                                    <?php }?></span>
                            </td>
                            <td>
                                <a class="h6" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['tid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['d']->value['subject'];?>
</a>
                                <div class="text-primary  mt-2">
                                    <em><?php echo $_smarty_tpl->tpl_vars['_L']->value['Updated'];?>
 </em> <em class="mmnt"><?php echo strtotime($_smarty_tpl->tpl_vars['d']->value['updated_at']);?>
</em> by <a class="fw-bolder text-dark" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/client/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['tid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['d']->value['last_reply'];?>
</a>
                                </div>
                            </td>


                        </tr>

                        <?php
}
if ($_smarty_tpl->tpl_vars['d']->do_else) {
?>
                        <tr><td align="center" style="border-top: none"><?php echo $_smarty_tpl->tpl_vars['_L']->value['You do not have any Tickets'];?>
</td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'account_content'} */
}
