<?php
/* Smarty version 4.3.0, created on 2023-05-03 18:35:01
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\modal_add_company.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64529b459cbd80_04171888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '312b4599457f58d1a7bb81a985632fd8893fc425' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\modal_add_company.tpl',
      1 => 1682984914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64529b459cbd80_04171888 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <div class="card shadow-none mb-0">
        <div class="card-header">
            <h2>
                <?php if ($_smarty_tpl->tpl_vars['f_type']->value == 'edit') {?>
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Company'];?>

                <?php }?>
            </h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <div class="card-body">

                    <form class="form-horizontal" id="ib_modal_form">

                        <div class="row">
                            <div class="col-md-6">

                                <!-- Company Name -->
                                <div class="mb-3">
                                    <label for="company_name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
<small class="red">*</small></label>
                                    <div>
                                        <input type="text" id="company_name" name="company_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['company_name'];?>
">
                                    </div>
                                </div>

                                <!-- Code -->
                                <div class="mb-3">
                                    <label for="code"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Code'];?>
<small class="red">*</small></label>
                                    <div>
                                        <input type="text" id="code" name="code" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['code'];?>
">
                                    </div>
                                </div>

                                <!-- Business number -->
                                <?php if ($_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>
                                    <div class="mb-3">
                                        <label for="business_number"><?php echo $_smarty_tpl->tpl_vars['config']->value['label_business_number'];?>
</label>
                                        <div>
                                            <input type="text" id="business_number" name="business_number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['business_number'];?>
">
                                        </div>
                                    </div>
                                <?php }?>

                                <!-- Url (display none) -->
                                <div class="mb-3" style="display: none;"><label for="url"><?php echo $_smarty_tpl->tpl_vars['_L']->value['URL'];?>
</label>
                                    <div>
                                        <input type="text" id="url" name="url" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
">
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="mb-3"><label for="email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>
                                    <div>
                                        <input type="text" id="email" name="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['email'];?>
">
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="mb-3"><label for="phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>
                                    <div>
                                        <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['phone'];?>
">
                                    </div>
                                </div>

                                <!-- Fax -->
                                <?php if ($_smarty_tpl->tpl_vars['config']->value['fax_field'] == '1') {?>
                                    <div class="mb-3"><label for="fax"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Fax'];?>
</label>
                                        <div>
                                            <input type="text" id="fax" name="fax" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['fax'];?>
">
                                        </div>
                                    </div>
                                <?php }?>

                            </div>

                            <div class="col-md-6">

                                <!-- Logo URL (display none) -->
                                <div class="mb-3" style="display: none;"><label for="logo_url"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo URL'];?>
</label>
                                    <div>
                                        <input type="text" id="logo_url" name="logo_url" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['logo_url'];?>
">
                                    </div>
                                </div>
                                
                                <!-- Country -->
                                <div class="mb-3"><label for="c_country"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</label>
                                    <select name="country" id="c_country" class="form-control country">
                                        <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Country'];?>
</option>
                                        <?php echo $_smarty_tpl->tpl_vars['countries']->value;?>

                                    </select>
                                </div>

                                <!-- State Region -->
                                <div class="mb-3"><label for="c_state"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</label>
                                    <div>
                                        <input type="text" id="c_state" name="state" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['state'];?>
">
                                    </div>
                                </div>

                                <!-- City -->
                                <div class="mb-3"><label for="c_city"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</label>
                                    <div>
                                        <input type="text" id="c_city" name="city" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['city'];?>
">
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="mb-3"><label for="c_address1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
                                    <input type="text" id="c_address1" name="address1" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['address1'];?>
">
                                </div>

                                <!-- ZIP Postal Code -->
                                <div class="mb-3"><label for="c_zip"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
</label>
                                    <input type="text" id="c_zip" name="zip" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['zip'];?>
">
                                </div>

                            </div>
                        </div>

                        <!-- Save button -->
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary modal_submit mt-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="f_type" id="f_type" value="<?php echo $_smarty_tpl->tpl_vars['f_type']->value;?>
">
                        <input type="hidden" name="cid" id="cid" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['cid'];?>
">

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
<?php }
}
