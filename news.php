<!-- Read in the header of the every page -->
<? readfile("./header.html"); ?>

<div class="container">     <!-- Content of the document -->

    <div><a name="news"></a></div>
    <h2>News</H2>
    <dl>
        <dt>2014-01-01</dt>
        <dd><p>lartc.org has been converted to use Bootstrap3 CSS</p></dd>

        <dt>2012-05-20</dt>
        <dd><p>lartc.org is now reachable via IPv6!</p></dd>

        <dt>2012-05-19</dt>
        <dd><p>lartc.org has a new maintainer! <a href="http://ds9a.nl/">Bert Hubert</a> has transferred ownership of
            the domain to <a href="http://www.hailfinger.org/">Carl-Daniel Hailfinger</a>.
            A big THANK YOU goes to Bert Hubert for starting and hosting
            lartc.org and the associated mailing list for many years.
            He has also offered to continue hosting the old mailing list archives at
            <a href="http://mailman.ds9a.nl/pipermail/lartc/">
                http://mailman.ds9a.nl/pipermail/lartc/</a>.</p></dd>

        <dt>Older news</dt>
        <dd><p><a href="http://lartc.org/oldnews.html">From 2000, 2001, 2002</a></p></dd>
    </dl>

    <div id="siteID">
        <small>
            $Id$

        </small>
    </div> <!-- siteID -->

</div> <!-- end of content of the document -->

<!-- Read in the footer for the every page -->
<? readfile("./footer.html"); ?>