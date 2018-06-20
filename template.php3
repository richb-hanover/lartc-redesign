<?php readfile("./header.html"); ?> <!-- Read in the header of the every page -->

<div class="container">     <!-- Content of the document -->


    <div id="siteID">
        <small>
            $Id$

        </small>
    </div> <!-- siteID -->

</div> <!-- end of content of the document -->

<!-- Matomo -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.richb-hanover.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '5']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->

<?php readfile("./footer.html"); ?> <!-- Read in the footer for the every page -->
