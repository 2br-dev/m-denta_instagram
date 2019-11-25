<?php
/* Smarty version 3.1.32, created on 2019-10-12 18:27:30
  from 'G:\OpenServer\OSPanel\domains\mdenta.local\protected\themes\base\smarty\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5da1f0e25067b4_34797678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8fcc478d830406b2d5e5ac71ccb8d516dfcc936' => 
    array (
      0 => 'G:\\OpenServer\\OSPanel\\domains\\mdenta.local\\protected\\themes\\base\\smarty\\test.tpl',
      1 => 1570894049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da1f0e25067b4_34797678 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title>ThaiCreate.Com PHP & PowerPoint.Application</title>
</head>
<body>
<?php echo '<?php
	';?>$ppApp = new COM("PowerPoint.Application");
	$ppApp->Visible = True;

$strPath = realpath(basename(getenv($_SERVER["SCRIPT_NAME"]))); // C:/AppServ/www/myphp

$ppName = "MySlides.ppt";
$FileName = "MyPP/MyPPt";

//*** Open Document ***//
$ppApp->Presentations->Open(realpath($ppName));

//*** Save Document ***//
$ppApp->ActivePresentation->SaveAs($strPath."/".$FileName,14);
//$ppApp->ActivePresentation->SaveAs(realpath($FileName),14);

$ppApp->Quit;
$ppApp = null;
<?php echo '?>';?>
PowerPoint Created <a href="<?php echo '<?php ';?>echo $FileName<?php echo '?>';?>.htm">Click here</a> to View.
</body>
</html><?php }
}
