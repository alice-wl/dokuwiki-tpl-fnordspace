<?php
/* notomorrow.de std tpl */
if (!defined('DOKU_INC')) die();

?><!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    <?php tpl_pagetitle()?><?php echo strip_tags($conf['title'])?>
  </title>
  <?php tpl_metaheaders()?>
  <link rel="shortcut icon" href="<?php echo $DOKU_TPL?>images/favicon.ico" />

  <?php tpl_include( 'meta.html' ); ?>

</head>
<body class='std'>
<div id='container'>

<?php tpl_include( 'header.html' ); ?>

<?php html_msgarea()?>

<div id='content' class='dokuwiki'>

<?php tpl_content( 1 )?>

<p class='clear' />
</div>

<!-- content ende -->
</div>

  <?php flush()?>

  <?php tpl_include( 'controls.html' ); ?>
  <?php tpl_include( 'footer.html' ); ?>

<!-- container ende -->
</div>

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
</body>
</html>
