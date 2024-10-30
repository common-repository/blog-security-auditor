<div class="wrap">
	<div class="col-md-12">
            <div class="col-md-12">
                <div class="col-md-12 card" style="max-width:100%;">
                    <div class="header">
                        <h1 class="title"><strong><span data-notify="icon" class="pe-7s-tools"></span>  <?php echo __('WP Security Blog Audit','blog-security-auditor'); ?></strong></h1>
                    </div>
                    <div class="content" id="bl_sec_loader">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="<?php echo plugins_url('loader.gif', __FILE__);?>">
                                <h3><?php echo __('Please wait for a while', 'blog-security-auditor');?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="content" id="bl_sec_content">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Username Check for security purposes -->
                                <?php include("wordpress-blog-security-auditor/blog-security-auditor-username-check.php"); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Username Check for security purposes -->
                                <?php include("wordpress-blog-security-auditor/blog-security-auditor-email-check.php"); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Website Title and Tagline Check -->
                                <?php include("wordpress-blog-security-auditor/blog-security-auditor-name-and-tagline-check.php"); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Security Plugins Installation Check -->
                                <?php include("wordpress-blog-security-auditor/blog-security-auditor-security-plugins-check.php"); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Sitemap is created or not check. -->
                                <?php include("wordpress-blog-security-auditor/blog-security-auditor-sitemap-exist.php"); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Yoast SEO Plugin Check. -->
                                <?php include("wordpress-blog-security-auditor/blog-security-auditor-yoast-seo-plugin-check.php"); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Wordpress Other Security Checks. -->
                                <?php include("wordpress-blog-security-auditor/blog-security-auditor-other-security-checks.php"); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Wordpress Other Security Checks. -->
                                <?php include("wordpress-blog-security-auditor/blog-security-auditor-website-responsiveness-check.php"); ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
</div>