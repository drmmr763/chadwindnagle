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
$this->addScript('templates/'.$this->template.'/js/jquery.sticky.js');

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

<body data-spy="scroll" data-target=".navbar">
    <header>
        <section class="container">
            <div class="logo">
                <img class="header" src="<?php echo JUri::root(); ?>/templates/<?php echo $this->template; ?>/images/chad_cartoon.png" />
                <h1>
                    <a href="<?php echo JUri::root(); ?>">Chad Windnagle</a>
                </h1>
            </div>
        </section>
    </header>
    <section class="main-banner">
        <div class="container">
            <div class="intro-background">
                <div class="intro">
                    <h3>I'm Chad Windnagle. I'm a web expert specializing in building
                     <i> joomla websites</i>
                     that are <i>responsive</i>, high quality
                     in design, <i>accessible</i>, and <i>user-friendly</i>.
                </div>
            </div>
        </div>
    </section>
    <section class="navigation">
        <div class="container">
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
        </div>
    </section>
    <main>
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
    </main>
    <section id="about">
        <div class="container">
            <article class="span4">
                <h3>In June of 2013 I moved from Upstate New York to a little beach town in Florida called New Smyrna Beach. I spend my days building great websites, working with a talented team and contributing to the Joomla project.</h3>
            </article>
            <article>
                <div id="smyrna"></div>
            </article>
        </div>
    </section>
    <div id="speaking">
        <p>speaking</p>
    </div>
    <div id="contact">
        <p>contact</p>
    </div>
	<!-- Footer -->
	<footer>
        <section class="container">
            <div class="row">
                <jdoc:include type="modules" name="footer-nav" style="xhtml" />
            </div>
        </section>
	    <jdoc:include type="modules" name="debug" style="none" />
    </footer>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2xtIA8Ev1UCOtI6TmVlYPWGcjIv63ns4&sensor=true">
    </script>

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
            jQuery(".navigation").sticky({topSpacing:115});
        });
        function initialize() {
            var mapOptions = {
                center: new google.maps.LatLng(29.025819, -80.926998),
                zoom: 8
            };
            var map = new google.maps.Map(document.getElementById("smyrna"),
                mapOptions);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>

</html>