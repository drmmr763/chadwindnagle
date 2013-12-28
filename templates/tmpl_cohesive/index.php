<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Getting params from template
$params = $this->params;

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

// Add Stylesheets
$this->addStyleSheet('templates/'.$this->template.'/css/template.css');
//$this->addScript('templates/'.$this->template.'/js/jquery.sticky.js');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
	<!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
	<![endif]-->
</head>

<body>
    <header>
        <section class="container">
            <div class="logo">
                <h1><a href="<?php echo JUri::root(); ?>">
                        <img src="<?php echo JUri::root(); ?>/templates/<?php echo $this->template; ?>/images/logo.png" />
                    </a>
                </h1>
            </div>
            <nav class="navbar">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="nav-collapse collapse">
                    <jdoc:include type="modules" name="top-menu" style="none" />
                </div>
            </nav>
        </section>
    </header>
    <div class="header-offset"></div>
    <div class="main-banner">
        <div class="container">
            <jdoc:include type="modules" name="main-banner" style="none" />
        </div>
    </div>
    <main data-stellar-ratio="2">
        <section class="container">
            <?php if($this->countModules('sidebar')):?>
                <aside>
                    <jdoc:include type="modules" name="sidebar" style="xhtml" />
                </aside>
            <?php endif; ?>
            <div class="main<?php if ($this->countModules('sidebar')): ?>-with-sidebar<?php endif; ?>">
                <jdoc:include type="modules" name="above-content" />
                <jdoc:include type="message" />
                <jdoc:include type="component" />
                <jdoc:include type="modules" name="below-content" />
            </div>
        </section>
    </main >
	<!-- Footer -->
	<footer>
        <section class="container">
            <div class="row">
                <jdoc:include type="modules" name="footer-nav" style="xhtml" />
            </div>
        </section>
	    <jdoc:include type="modules" name="debug" style="none" />
    </footer>
    <script type="text/javascript">
        jQuery(document).ready(function()
        {
            /*
            jQuery('.main-banner').stellar({
                horizontalOffset: 0,
                verticalOffset: 150,
                // Refreshes parallax content on window load and resize
                responsive: true
            });
            jQuery('footer').stellar({
                horizontalOffset: 0,
                verticalOffset: 0
            });
            */
        });
    </script>
</body>

</html>