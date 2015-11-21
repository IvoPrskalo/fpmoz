<?php

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();

$doc->setHtml5(true);

// Postavi meta podatke
$doc->setMetaData('X-UA-Compatible', 'IE=edge', true);
$doc->setMetaData('viewport', 'width=device-width, initial-scale=1');

// Dodaj CSS
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/bootstrap.min.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/template.css');

// Dodaj JS
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/jquery-2.1.4.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/bootstrap.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/template.js');

// Odredi širinu sadržaja
if ($this->countModules('left') && $this->countModules('right'))
    $component_class = 'col-md-6';

elseif ($this->countModules('left') || $this->countModules('right'))
    $component_class = 'col-md-9';

else
    $component_class = 'col-md-12';

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <jdoc:include type="head" />
</head>
<body class="boxed-layout">
<div id="wrapper">

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10 hidden-sm">
                    <jdoc:include type="modules" name="topmenu" />
                </div>
                <div class="col-sm-12 col-md-2">
                    <jdoc:include type="modules" name="search" />
                </div>
            </div>
        </div>
    </div>

    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <div class="logo">
                        <a title="FPMOZ" href="<?php echo $this->baseurl ?>">
                            <img alt="FPMOZ" src="<?php echo $this->baseurl . '/templates/' . $this->template . '/images/logo.png' ?>">
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9">
                    <jdoc:include type="modules" name="mainmenu" />
                </div>
            </div>
        </div>
    </div>

    <?php if ($this->countModules('slideshow')) : ?>
        <div class="slideshow">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <jdoc:include type="modules" name="slideshow" />
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($this->countModules('breadcrumbs')) : ?>
        <div class="breadcrumb-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <jdoc:include type="modules" name="breadcrumbs" />
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="content">
        <div class="container">

            <?php if ($this->countModules('top')) : ?>
                <div class="row">
                    <div class="col-sm-12">
                        <jdoc:include type="modules" name="top" />
                    </div>
                </div>
            <?php endif; ?>

            <div class="row">

                <?php if ($this->countModules('left')) : ?>
                <div class="col-sm-12 col-md-3">
                    <jdoc:include type="modules" name="left" />
                </div>
                <?php endif; ?>

                <div class="col-sm-12 <?php echo $component_class ?>">
                    <jdoc:include type="message" />
                    <jdoc:include type="modules" name="abovecontent" />
                    <jdoc:include type="component" />
                    <jdoc:include type="modules" name="belowcontent" />
                </div>

                <?php if ($this->countModules('right')) : ?>
                <div class="col-sm-12 col-md-3">
                    <jdoc:include type="modules" name="right" />
                </div>
                <?php endif; ?>

            </div>

            <?php if ($this->countModules('bottom')) : ?>
                <div class="row">
                    <div class="col-sm-12">
                        <jdoc:include type="modules" name="bottom" />
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>


    <?php if ($this->countModules('bottom1') || $this->countModules('bottom2') || $this->countModules('bottom3') || $this->countModules('bottom4')) : ?>
        <div class="bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <jdoc:include type="modules" name="bottom1" />
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <jdoc:include type="modules" name="bottom2" />
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <jdoc:include type="modules" name="bottom3" />
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <jdoc:include type="modules" name="bottom4" />
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright">Copyright © <?php echo date('Y') ?> FPMOZ. Sva prava pridržana.</div>
                </div>
            </div>
        </div>
    </div>

    <jdoc:include type="modules" name="debug" />

</div>
</body>
</html>
