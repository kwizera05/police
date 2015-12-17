<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/coldstone/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/coldstone/css/menu.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/coldstone/css/joomla.css" type="text/css" />

<!--[if lte IE 6]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ieonly.css" rel="stylesheet" type="text/css" />
<![endif]-->

</head>
<body>
<div class="htop"></div>

<div id="wrapp_">

<a href="http://www.dosonaro.com"><h1 id="logo">Dosonaro.com - Free Joomla Templates and more</h1></a>

<div class="tnavwrap">
    <div class="tnavileft"></div>
        <div class="tnavinner"><jdoc:include type="modules" name="topmenu" style="none" /></div>
    <div class="tnavend"></div>
</div>

<?php if($this->countModules('menu')) : ?>
<div class="bnavwrap">
<div class="bnavileft"></div>
<div class="bnavinner"><jdoc:include type="modules" name="menu" style="none" /></div>
<div class="bnavend"></div>
</div>
<?php endif; ?>

<?php if($this->countModules('top')) : ?>
<div class="feature_wrap">
<jdoc:include type="modules" name="top" style="xhtml" />
</div>
<?php endif; ?>

<?php if($this->countModules('user + user1 + user2')) : ?>
<div class="subpost_wrap2">
 <div class="subpost_wrap">
  <?php if($this->countModules('user1')) : ?>
   <div class="user1"><jdoc:include type="modules" name="user1" style="xhtml" /></div>
  <?php endif; ?>
  <?php if($this->countModules('user2')) : ?>
   <div class="user2"><jdoc:include type="modules" name="user2" style="xhtml" /></div>
  <?php endif; ?>
 </div>
</div>
<img alt="coldstoneper" style=" clear:both; margin-top:-30px;" src="<?php echo $this->baseurl ?>/templates/coldstone/img/pearl-Stone.jpg"/>
<?php endif; ?>

<div class="single_wrap">
<?php if($this->countModules('breadcrumb')) : ?><div style="margin:10px 0px;  font-size:75%; padding-left:10px; overflow:hidden">You`re here:<jdoc:include type="modules" name="breadcrumb" /></div><?php endif; ?>
<jdoc:include type="component" />
</div>

<div class="footer">
<jdoc:include type="modules" name="footer" style="xhtml" />
<p>Template adapted by <a href="http://www.dosonaro.com">Dosonaro</a>
</div>

</div>
</body>
</html>
