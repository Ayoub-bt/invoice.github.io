<?php
/* Smarty version 4.3.0, created on 2023-01-07 14:29:28
  from '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b9c818cad315_65334648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e028066ae974c4d222cf664a6c7841495ff5f6a8' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/hosting_x/dashboard.tpl',
      1 => 1672095351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b9c818cad315_65334648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_368764763b9c818c351e9_57450980', 'account_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./account.tpl");
}
/* {block 'account_content'} */
class Block_368764763b9c818c351e9_57450980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'account_content' => 
  array (
    0 => 'Block_368764763b9c818c351e9_57450980',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<div class="container">
    <h5>Dashboard</h5>
    <div class="">
        <div class="row g-4 mb-5">
            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <div class="card card-body bg-warning bg-opacity-10 border border-warning border-opacity-25 p-4 h-100">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Digit -->
                        <div>
                            <h4 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['invoices_count']->value;?>
</h4>
                            <span class="h6 fw-light mb-0"><?php ob_start();
echo __('Invoices');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</span>
                        </div>
                        <!-- Icon -->
                        <div class="icon-lg rounded-circle bg-warning text-white mb-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <div class="card card-body bg-success bg-opacity-10 border border-success border-opacity-25 p-4 h-100">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Digit -->
                        <div>
                            <h4 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['domains_count']->value;?>
</h4>
                            <span class="h6 fw-light mb-0"><?php ob_start();
echo __('Domains');
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</span>
                        </div>
                        <!-- Icon -->
                        <div class="icon-lg rounded-circle bg-success text-white mb-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <div class="card card-body bg-primary bg-opacity-10 border border-primary border-opacity-25 p-4 h-100">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Digit -->
                        <div>
                            <h4 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['tickets_count']->value;?>
</h4>
                            <span class="h6 fw-light mb-0"><?php echo __('Tickets');?>
</span>
                        </div>
                        <!-- Icon -->
                        <div class="icon-lg rounded-circle bg-primary text-white mb-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <div class="card card-body bg-info bg-opacity-10 border border-info border-opacity-25 p-4 h-100">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Digit -->
                        <div>
                            <h4 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['hosting_orders_count']->value;?>
</h4>
                            <span class="h6 fw-light mb-0"><?php echo __('Services');?>
</span>
                        </div>
                        <!-- Icon -->
                        <div class="icon-lg rounded-circle bg-info text-white mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar START -->
        <!-- Main content START -->
        <div class="">
                                                                                    
                                                                                                            
                                    
                                                            
                                                                                                            
            
            
                                                                        
                                                                                                            
                                                                                                
                                                                                                            
                        
                        <div class="card shadow  mb-4">
                <div class="card-header">
                    <h5 class="card-header-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Orders'];?>
</h5>
                </div>
                <div class="card-body">

                    <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                        <thead class="table-light">
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order'];?>
</th>
                            <th> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Domain'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_orders']->value, 'recent_order');
$_smarty_tpl->tpl_vars['recent_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_order']->value) {
$_smarty_tpl->tpl_vars['recent_order']->do_else = false;
?>

                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/view-order/<?php echo $_smarty_tpl->tpl_vars['recent_order']->value->id;?>
/" class="font-weight-bold">
                                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['recent_order']->value->tracking_id, ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                </td>
                                <td>
                                    <?php ob_start();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['recent_order']->value->domain, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

                                </td>
                                <td>
                                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_order']->value->created_at));?>

                                </td>
                                <td>
                                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['recent_order']->value->total,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                                </td>
                                <td>
                                    <?php echo cloudonex_get_order_status_with_badge($_smarty_tpl->tpl_vars['recent_order']->value->status);?>

                                </td>
                            </tr>


                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card shadow mt-4">
                <div class="card-header shadow-bottom">

                    <h5 class="card-header-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Tickets'];?>
</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="table-light">
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Ticket'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Last Update'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_tickets']->value, 'recent_ticket');
$_smarty_tpl->tpl_vars['recent_ticket']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_ticket']->value) {
$_smarty_tpl->tpl_vars['recent_ticket']->do_else = false;
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/tickets/view/<?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->tid;?>
" class="font-weight-bold">
                                        <?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->tid;?>

                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/tickets/view/<?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->tid;?>
" class="font-weight-bold">
                                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['recent_ticket']->value->subject, ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                </td>
                                <td>
                                    <?php echo cloudonex_get_ticket_status_with_badge(htmlspecialchars((string)$_smarty_tpl->tpl_vars['recent_ticket']->value->status, ENT_QUOTES, 'UTF-8', true));?>

                                </td>
                                <td>
                                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_ticket']->value->updated_at));?>

                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
                </d
            </div>




            <!-- Main content END -->
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="">


                    <div class="card shadow  mb-3">
                        <div class="card-header shadow-bottom">


                            <h5 class="card-header-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Invoices'];?>
</h5>


                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                    <thead class="table-light">
                                    <tr>
                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices']->value, 'recent_invoice');
$_smarty_tpl->tpl_vars['recent_invoice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_invoice']->value) {
$_smarty_tpl->tpl_vars['recent_invoice']->do_else = false;
?>

                                        <tr>
                                            <td>
                                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['recent_invoice']->value->id;?>
/token_<?php echo $_smarty_tpl->tpl_vars['recent_invoice']->value->vtoken;?>
/">
                                                    <?php echo cloudonex_get_invoice_number($_smarty_tpl->tpl_vars['recent_invoice']->value);?>

                                                </a>
                                            </td>
                                            <td>
                                                <?php echo cloudonex_get_invoice_status_with_badge($_smarty_tpl->tpl_vars['recent_invoice']->value->status);?>

                                            </td>
                                            <td>
                                                <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_invoice']->value->date));?>

                                            </td>
                                        </tr>

                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Domains'];?>
</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead class="table-light">
                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Domain'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_domains']->value, 'recent_order');
$_smarty_tpl->tpl_vars['recent_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_order']->value) {
$_smarty_tpl->tpl_vars['recent_order']->do_else = false;
?>

                                <tr>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/view-domain/<?php echo $_smarty_tpl->tpl_vars['recent_order']->value->id;?>
/" class="font-weight-bold">
                                            <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['recent_order']->value->tracking_id, ENT_QUOTES, 'UTF-8', true);?>

                                        </a>
                                    </td>
                                    <td>
                                        <?php ob_start();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['recent_order']->value->domain, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

                                    </td>
                                    <td>
                                        <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_order']->value->created_at));?>

                                    </td>
                                    <td>
                                        <?php echo formatCurrency($_smarty_tpl->tpl_vars['recent_order']->value->total,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                                    </td>
                                    <td>
                                        <?php echo cloudonex_get_order_status_with_badge($_smarty_tpl->tpl_vars['recent_order']->value->status);?>

                                    </td>
                                </tr>


                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
}
}
/* {/block 'account_content'} */
}
