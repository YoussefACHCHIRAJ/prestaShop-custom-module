<?php
/* Smarty version 4.3.4, created on 2024-08-29 20:54:12
  from '/var/www/html/prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66d0d1e4d2a869_28400091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c57d521f48c9387410c4fbec3d93de882f8a3e57' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/page.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d0d1e4d2a869_28400091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91646639266d0d1e4d26e88_46398176', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_124371071066d0d1e4d27917_16725394 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_152524747366d0d1e4d27457_80127956 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124371071066d0d1e4d27917_16725394', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_158899276466d0d1e4d28e41_07636969 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_119159030366d0d1e4d29390_59676532 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_45634582266d0d1e4d28aa9_36327257 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158899276466d0d1e4d28e41_07636969', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119159030366d0d1e4d29390_59676532', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_106407150666d0d1e4d29eb2_68946543 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_82439786766d0d1e4d29b79_47619195 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106407150666d0d1e4d29eb2_68946543', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_91646639266d0d1e4d26e88_46398176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_91646639266d0d1e4d26e88_46398176',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_152524747366d0d1e4d27457_80127956',
  ),
  'page_title' => 
  array (
    0 => 'Block_124371071066d0d1e4d27917_16725394',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_45634582266d0d1e4d28aa9_36327257',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_158899276466d0d1e4d28e41_07636969',
  ),
  'page_content' => 
  array (
    0 => 'Block_119159030366d0d1e4d29390_59676532',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_82439786766d0d1e4d29b79_47619195',
  ),
  'page_footer' => 
  array (
    0 => 'Block_106407150666d0d1e4d29eb2_68946543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152524747366d0d1e4d27457_80127956', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45634582266d0d1e4d28aa9_36327257', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82439786766d0d1e4d29b79_47619195', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
