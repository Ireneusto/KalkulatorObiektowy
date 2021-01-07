<?php
/* Smarty version 3.1.36, created on 2021-01-07 21:10:27
  from 'D:\xampp\htdocs\usOopKalkulatorKredytowy\app\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff76ab3b621a8_30761399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6b15092c6cba730b1ce8a0069f1dd66ac5d42c1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\usOopKalkulatorKredytowy\\app\\CalcView.html',
      1 => 1606661731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff76ab3b621a8_30761399 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7347897925ff76ab38f7505_43851114', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14982667595ff76ab38fa5d8_15338231', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_7347897925ff76ab38f7505_43851114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7347897925ff76ab38f7505_43851114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora.<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_14982667595ff76ab38fa5d8_15338231 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14982667595ff76ab38fa5d8_15338231',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Prosty kalkulator kredytowy</h2>


    <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
        <fieldset>
            <label>Kwota kredytu: </label>
            <input type="number" placeholder="Kwota pożyczki" min="1" name="loanValue" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->loanValue;?>
"/><br/>
            <label>Na ile lat: </label>
            <input type="number" min="1" placeholder="Okres" name="yearsOfCredit" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->yearsOfCredit;?>
"/><br/>
            <label>Oprocentowanie: </label>
            <input type="number" min="1" placeholder="Oprocentowanie" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percent;?>
"/><br/>
        </fieldset>
        <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
    </form>

    <div class="messages">

        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
        <h4>Wystąpiły błędy: </h4>
        <ol class="err">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
        <h4>Informacje: </h4>
        <ol class="inf">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
        <h4>Wynik</h4>
        <p class="res">
            Miesięczna rata będzie wynosić: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
zł
        </p>
        <?php }?>

    </div>

    <?php
}
}
/* {/block 'content'} */
}
