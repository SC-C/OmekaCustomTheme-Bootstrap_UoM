        </div><!-- end content -->

<?php queue_css_file('uom_footer'); ?>

<footer class="footerContainer">
<div class="row tripleVertPadding">
<div class="fourcol halfSizeUntilLargeMobile">
<h2 class="h2Small">Contacts</h2>
<ul class="noBullets">
<li><a href="tel:+441613066000">+44 (0)161 306 6000</a></li>
<!-- navigation object : Footer contact details (Hum-RWD) --><li><a href="/connect/contact-us/">Contact details</a></li>
<!-- navigation object : Additional contact finder -->
<!-- navigation object : Additional footer link -->
</ul>
</div>
<div class="fourcol halfSizeUntilLargeMobile lastAtMobile">
<h2 class="h2Small">Find us</h2>
<address><a href="http://www.manchester.ac.uk/discover/maps/interactive-map/">The University of Manchester<br>Oxford Rd<br>Manchester<br>M13 9PL<br>UK</a></address>
</div>
<div class="fourcol last">
                                              <h2 class="h2Small">Connect with us</h2>
                        <ul class="inlineList footer-socialIcons">




                        </ul>
                                    </div>
                </div>
                          <hr />
                <div class="row singleVertPadding">
                    <div class="twelvecol">
                        <ul class="inlineList">
                           <li><a href="https://www.manchester.ac.uk/discover/privacy-information/data-protection/">Data protection</a> /</li>
                            <li><a href="http://www.manchester.ac.uk/copyright/">Copyright notice</a> /</li>
                            <li><a href="http://www.manchester.ac.uk/accessibility/">Accessibility</a> /</li>
                            <li><a href="https://www.manchester.ac.uk/discover/privacy-information/freedom-information/">Freedom of information</a> /</li>
                            <li><a href="http://www.manchester.ac.uk/discover/governance/charitable-status/">Charitable status</a> /</li>
                            <li><span>Royal Charter Number: RC000797</span></li>
                        </ul>

                    </div>
                </div>
            </footer>
            <!--END Footer Container-->
        </div>
</div><!--end wrap-->

    <?php
    // Omeka 2.4 and Bootstrap 3.3.7 use the same jQuery (1.12), so it is not
    // recalled.
    ?>
    <?php if (get_theme_option('Use Internal Bootstrap')) :?>  
    <script src="<?php echo src('bootstrap.min', 'javascripts', 'js'); ?>"></script>
    <?php else: ?>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php endif; ?>

    <?php
    if (is_current_url('/')):
        $displayGridRotator = (boolean) get_theme_option('Display Grid Rotator');
        if ($displayGridRotator):
            echo js_tag('modernizr-custom');
            echo js_tag('jquery.gridrotator');
        endif;
    else:
        $displayGridRotator = false;
    endif;
    ?>

     <script type="text/javascript">
    jQuery(document).ready(function () {
        <?php if (get_theme_option('Use Advanced Search')): ?>
        Omeka.showAdvancedForm();
        <?php endif; ?>
        Omeka.dropDown();
        <?php if ($displayGridRotator): ?>
        Omeka.displayGridRotator();
        <?php endif; ?>
    });
    </script>

    <?php if (get_theme_option('Use Google Analytics') && $googleAccount = get_theme_option('Google Analytics Account')): ?>
    <?php echo common('analyticstracking.php', array('account' => $googleAccount)); ?>
    <?php endif; ?>
</body>
</html>
