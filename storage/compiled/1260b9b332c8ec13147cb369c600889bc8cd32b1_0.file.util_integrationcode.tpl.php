<?php
/* Smarty version 4.3.0, created on 2023-04-29 00:07:41
  from 'C:\xampp\htdocs\Websites\invoice2-laravel\ui\theme\default\util_integrationcode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_644c980d13be53_22093825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1260b9b332c8ec13147cb369c600889bc8cd32b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Websites\\invoice2-laravel\\ui\\theme\\default\\util_integrationcode.tpl',
      1 => 1673649396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644c980d13be53_22093825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1605796113644c980d137135_80841588', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_516795119644c980d137b86_94069460', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1564905475644c980d13b812_86397300', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_1605796113644c980d137135_80841588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1605796113644c980d137135_80841588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/themes/prism.min.css" />
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_516795119644c980d137b86_94069460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_516795119644c980d137b86_94069460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-md-8 col-xs-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Integration Code'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Login'];?>
</h4>
                        <pre><code class="language-html"><?php echo $_smarty_tpl->tpl_vars['form_client_login']->value;?>
</code></pre>
                        <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Registration'];?>
</h4>
                        <pre><code class="language-html"><?php echo $_smarty_tpl->tpl_vars['form_client_register']->value;?>
</code></pre>
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
class Block_1564905475644c980d13b812_86397300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1564905475644c980d13b812_86397300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/prism.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(function () {

        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
