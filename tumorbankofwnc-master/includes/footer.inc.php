<hr />
<div id="footer" class="row">
  <div class="small-12 columns">
    <p>&copy;
    <?php
    $startYear = 2012;
    $thisYear = date('Y');
    if ($startYear == $thisYear) {
    	echo $startYear;
    } else {
    	echo "{$startYear}&#8211;{$thisYear}";
    }
    ?>
    Tumor Bank of WNC, Inc.</p>
    <p>Design by <a href="http://hoppedupdesigns.com" target="_blank">Hopped Up Designs</a></p>
    </div>
</div><!-- end of footer div -->
</div><!-- end of wrapper div -->

<!-- Scripts
    ================================================== -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript">
      document.write('<script src=' +
      ('__proto__' in {} ? 'foundation-4.3.1/javascripts/vendor/zepto' : 'foundation-4.3.1/javascripts/vendor/jquery') +
      '.js><\/script>')
      </script>
    <script src="foundation-4.3.1/javascripts/vendor/custom.modernizr.js" type="text/javascript"></script>
    <script src="js/jquery_form_validation/jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
    </script>
    <script src="js/jquery_form_validation/jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
    </script>
    <script type="text/javascript" src="js/functionCalls.js"></script>
    <script src="foundation-4.3.1/javascripts/foundation.js"></script>
    <script src="foundation-4.3.1/javascripts/foundation.alerts.js"></script>
    <script src="foundation-4.3.1/javascripts/foundation.clearing.js"></script>
    <script src="foundation-4.3.1/javascripts/foundation.cookie.js"></script>
    <script src="foundation-4.3.1/javascripts/foundation.dropdown.js"></script>
    <script src="foundation-4.3.1/javascripts/foundation.forms.js"></script>
    <script src="foundation-4.3.1/javascripts/foundation.joyride.js"></script>
    <script src="foundation-4.3.1/javascripts/foundation.magellan.js"></script>
    <script src="foundation-4.3.1/javascripts/foundation.orbit.js"></script>
    <script src="foundation-4.3.1/javascripts/foundation.placeholder.js"></script>
    <script src="foundation-4.3.1/javascripts/foundation.reveal.js"></script>
    <script src="foundation-4.3.1/javascripts/foundation.section.js"></script>
    <script src="foundation-4.3.1/javascripts/foundation.tooltips.js"></script>
    <script src="foundation-4.3.1/javascripts/foundation.topbar.js"></script>
    <script src="foundation-4.3.1/javascripts/foundation.interchange.js"></script>
    <script src="foundation-4.3.1/javascripts/foundation.jquery.offcanvas.js"></script>
    <script type="text/javascript">
    $(document).foundation();
    </script>
    <script src="js/jquery_form_validation/jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery_form_validation/jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/functionCalls.js"></script>
    <script type="text/javascript">
          $('#formID')
              .on('invalid', function () {
              var invalid_fields = $(this).find('[data-invalid]');
              console.log(invalid_fields);
          });
          .on('valid', function () {
          console.log('valid!');
       });
    </script>
    <script type="text/javascript">
        $(window).load(function() {
          $('#gallery').orbit();
        });
     </script>
       
          
</body>
</html>