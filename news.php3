<?php readfile("./header.html"); ?> <!-- Read in the header of the every page -->

<div class="container">     <!-- Content of the document -->

    <div><a name="news"></a></div>
    <h2>News</H2>
    <dl>
        <dt>January 2014</dt>
        <dd><p>lartc.org has been redesigned to include these changes:
            <ul>
                <li>Substantially the same text with minor reorganization and editorial changes</li>
                <li>New ePub format for the HOWTO</li>
                <li>Ported to use Bootstrap3 CSS for a modern look</li>
                <li>Incorporates the man8 pages from Ubuntu 13.10, including several new ones:
                    tc-codel, tc-fq_codel, tc-choke, tc-drr, tc-dsmark, tc-hfsc, tc-sfb, tc-stab, and others</li>
                <li>Updated Wondershaper page to mention traffic shaping techniques of
                    newer Linux kernels, and how the original shaper is outdated</li>
                <li>The HOWTO has *not* been updated to reflect these newer technologies,
                    nor do these pages include any updates that may have been
                    submitted from the LARTC community or mailing list</li>
            </ul>
        </dd>

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

</div> <!-- end of content of the document -->

<?php readfile("./footer.html"); ?> <!-- Read in the footer for the every page -->
