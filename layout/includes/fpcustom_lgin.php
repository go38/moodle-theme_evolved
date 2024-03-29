<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?>">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="<?php echo $CFG->wwwroot;?>"><?php echo $SITE->shortname; ?></a>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                    <li class="navbar-text"><?php echo $OUTPUT->login_info() ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div id="page" class="container-fluid">

<?php require_once(dirname(__FILE__).'/alerts.php'); ?>

    <header id="page-header" class="clearfix">
        <div id="page-navbar" class="clearfix">
            <div class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></div>
            <nav class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></nav>
        </div>
        <?php echo $html->heading; ?>
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
    </header>

    <div id="page-content" class="row-fluid">

        <?php
if (!$left) { ?>
    <section id="region-main" class="span9 pull-left">
<?php } else { ?>
    <section id="region-main" class="span9">
<?php } ?>
<div class="block" style="width:96%;display:block;float:left;padding:10px;">
<div style="display:inline;float:left;"><a href="<?php echo new moodle_url('/my/'); ?>"><img src="<?php echo $OUTPUT->pix_url('myhome', 'theme'); ?>" width="64" height="75" alt="My Personal Dashboard" style="margin-left: 15px; margin-right: 15px;"></a><a href="<?php echo new moodle_url('/calendar/view.php?view=month'); ?>"><img src="<?php echo $OUTPUT->pix_url('calendar', 'theme'); ?>" width="64" height="75" alt="My Calendar" style="margin-left: 15px; margin-right: 15px;"></a><a href="<?php echo new moodle_url('/course/'); ?>"><img src="<?php echo $OUTPUT->pix_url('courses', 'theme'); ?>" width="64" height="75" alt="View All Courses" style="margin-left: 15px; margin-right: 15px;"></a><a href="<?php echo new moodle_url('/badges/mybadges.php'); ?>"><img src="<?php echo $OUTPUT->pix_url('badges', 'theme'); ?>" width="64" height="75" alt="My Badges" style="margin-left: 15px; margin-right: 15px;"></a> </div>
<div style="display:inline;float:right;padding-right:10px;"><form action="<?php echo new moodle_url('/course/search.php'); ?>" method="get"><fieldset><strong>Find and Enroll in Courses:</strong><br><input type="text" size="10" name="search" value="" /><input type="submit" value="Go" /></fieldset></form></div>
</div>

<div style="clear:both;"></div>
<hr>
<p>
<?php echo $PAGE->theme->settings->fptext ?>
</p>
    </section>
        <?php echo $OUTPUT->blocks('side-pre', 'span3'); ?>
        <?php echo $OUTPUT->blocks('side-post', 'span3 pull-right'); ?>
    </div>
<hidden style="display:none;">
        <?php
        echo $OUTPUT->course_content_header();
        echo $OUTPUT->main_content();
        echo $OUTPUT->course_content_footer();
        ?>
</hidden>
