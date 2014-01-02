<? readfile("./header.html"); ?> <!-- Read in the header of the every page -->

<div class="container">     <!-- Content of the document -->

    <a name="sponsor"></a>
    <div id="sponsorship">
        <p>
        <h2>Credits and Sponsorship</h2>

        <h4>Founders and Maintainers</h4>

        <a href="http://ds9a.nl/">bert hubert</a>
        (from <a href=http://www.powerdns.com>PowerDNS.COM BV</a>) created the initial site in 2002.
        <a href="http://www.hailfinger.org/"> Carl-Daniel Hailfinger</a> took over maintenance
        and created the git repository.
        <a href="mailto:richb.hanover@gmail.com">Rich Brown</a> ported the pages to Bootstrap3.

        <h4>Section Authors</h4>
        <a href="http://tgr.kaosu.ch/">Thomas Graf</a>,
        <a href="http://linuxpower.cx/~greg/">Greg Maxwell</a> <a
            href=mailto:greg@linuxpower.cx></a>,
        <a href=http://slashme.org>Remco van Mook</a> (<a
            href=http://www.virtu.nl>Virtu Secure Webservices</a>),
        Martijn van Oosterhout,
        Paul B Schroeder,
        <a href="http://jsp.ds9a.nl/">Jasper Spaans</a>,
        Pedro Larroy


        <h4>Our community</h4>

        <? readfile("./contriblist"); ?>

        <h4>Site Hosting</h4>
        <a href="http://www.powerdns.com">
            <img style="float:right" src=http://ds9a.nl/pub/pdns88x33c.gif>
        </a>
        This site hosted and made possible by <a href=http://www.powerdns.com>PowerDNS,</a> a great company
        for all your domain needs and nameserver software.
        </p>
        <br>
        <a href=http://ds9a.nl/>Other ds9a.nl projects.</a>
    </div> <!-- sponsor -->

</div> <!-- end of content of the document -->

<? readfile("./footer.html"); ?> <!-- Read in the footer for the every page -->