<?php
/* Smarty version 4.3.0, created on 2023-05-02 20:29:58
  from '/home/u878199715/domains/developpiaacademy.com/public_html/invoice/ui/theme/default/modal_add_contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_645164b6a8f1c9_13366513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0f64d36810418a2978770161bb9102250439d26' => 
    array (
      0 => '/home/u878199715/domains/developpiaacademy.com/public_html/invoice/ui/theme/default/modal_add_contact.tpl',
      1 => 1682984914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645164b6a8f1c9_13366513 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mx-auto" style="max-width: 800px;">

    <div class="panel mb-0 rounded-0">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Contact'];?>
</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <form class="form-horizontal" id="rform">

                    <div class="mb-3"><label for="account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full Name'];?>
</label>
                        <input type="text" id="account" name="account" class="form-control" >
                    </div>

                    <div class="mb-3"><label for="company"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
</label>

                        <input type="text" id="company" name="company" class="form-control">
                    </div>

                    <div class="mb-3"><label for="email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>

                        <input type="text" id="email" name="email" class="form-control" >

                    </div>
                    <div class="mb-3"><label for="phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>

                        <input type="text" id="phone" name="phone" class="form-control" >
                    </div>
                    <div class="mb-3"><label for="m_address"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>

                        <input type="text" id="m_address" name="m_address" class="form-control" >
                    </div>
                    <div class="mb-3"><label for="city"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</label>

                        <input type="text" id="city" name="city" class="form-control" >
                    </div>
                    <div class="mb-3"><label for="state"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</label>

                        <input type="text" id="state" name="state" class="form-control" >
                    </div>
                    <div class="mb-3"><label for="zip"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
 </label>

                        <input type="text" id="zip" name="zip" class="form-control" >
                    </div>
                    <div class="mb-3"><label for="country"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</label>

                        <select name="country" class="country" id="country" class="form-control">
                            <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Country'];?>
</option>
                            <?php echo $_smarty_tpl->tpl_vars['countries']->value;?>

                        </select>
                    </div>


                    <div class="mb-3">
                        <button class="btn btn-primary contact_submit" type="submit" id="contact_submit"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Contact'];?>
</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>






<?php }
}
