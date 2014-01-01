<!-- Read in the header of the every page -->
<? readfile("./header.html"); ?>

<div class="container">     <!-- Content of the document -->

<a name="home"></a>
<div id="home">
<H1>Linux Advanced Routing &amp; Traffic Control</H1>
    <p>
    Linux has very advanced Routing, filtering and traffic shaping options.
    This site documents how to configure and use these features, as well
    as a whole body of information about Linux networking.
    </p>
</div> <!-- home -->


<div id="wondershaper">
    <h2>Looking for the Wondershaper?</h2>
    <p>Looking for the <a href="wondershaper/index.php">ADSL/Cable Wondershaper?</a>
        It's getting better!
    </p>
</div> <!-- wondershaper -->



<div><a name="news"></a></div>
<h2>News</H2>
<dl>
    <dt>2012-05-20</dt>
        <dd><p>lartc.org is now reachable via IPv6!</p></dd>

    <dt>2012-05-19</dt>
        <dd><p>lartc.org has a new maintainer!<br></p>
            <p></p><a href="http://ds9a.nl/">Bert Hubert</a> has transferred ownership of
            the domain to <a href="http://www.hailfinger.org/">Carl-Daniel Hailfinger</a>.
            A big THANK YOU goes to Bert Hubert for starting and hosting
            lartc.org and the associated mailing list for many years.</p>
            <p>
            Everybody is invited to contribute to lartc.org and a git tree for the
            website (including LARTC HOWTO, Wondershaper and man pages) has been
            created at <a href="http://repo.or.cz/w/lartc.git">
                http://repo.or.cz/w/lartc.git</a>. Please send any patches or
            pull requests to the new LARTC mailing list
            <a href="mailto:lartc@vger.kernel.org">lartc@vger.kernel.org</a> and
            I'll try to integrate them in a timely manner.
            Please note that the old mailing list and old HOWTO submission e-mail
            addresses are no longer active.
            Users of the old mailing list are encouraged to move to
            <a href="mailto:lartc@vger.kernel.org">lartc@vger.kernel.org</a>.</p>
            <p>Bert Hubert has offered to continue hosting the old mailing list archives at
            <a href="http://mailman.ds9a.nl/pipermail/lartc/">
                http://mailman.ds9a.nl/pipermail/lartc/</a>.</p></dd>

    <dt>Older news</dt>
        <dd><p><a href="http://lartc.org/oldnews.html">From 2000, 2001, 2002</a></p></dd>
</dl>
<a name="mailinglist"></a>
<div id="mailinglist">
<H2>LARTC Mailing List</H2>
<p>
It appears that the topic of our HOWTO is getting popular, so we decided to
start a mailinglist dedicated to discussions about advanced routing &amp;
shaping with Linux!</p>
<p>
    The advent of the Linux Advanced Routing &amp; Traffic Control list also
    means that questions asked privately will no longer be answered, as these
    answers benefit only single users. Asking questions on the list is far more
    net-friendly. So if you want to ask us a question,
    <a href="http://vger.kernel.org/vger-lists.html#lartc">subscribe to the new
        mailing list</a>, and ask it! An <a href="http://www.spinics.net/lists/lartc/">
    archive of the new mailing list</a> is available.  An
    <a href="http://mailman.ds9a.nl/pipermail/lartc/">archive of the old mailing
        list</a> is also available, and google has picked it up as well.
</p>
<p>
    <font color=#ff0000>Please note that due to excessive spam the list has
        become 'members only' - so please <a
                href="http://vger.kernel.org/vger-lists.html#lartc">subscribe</a> first!</font>
    The moderator will not approve postings from non-subscribed addresses as he
    is not available at all times. If you just want to post, and not receive
    mail, you can indicate this on the Mailman mailing list management page.
    FIXME: Is the new mailing list subscriber-only as well?
</p>
<p>
        <strong>Mailing List:</strong> (the <strong>only</strong> place to send questions!)
            <a href="mailto:lartc@vger.kernel.org">lartc@vger.kernel.org</a> <br>
        <strong>Archive of the new mailing list:</strong>
            <a href="http://vger.kernel.org/vger-lists.html#lartc">http://vger.kernel.org/vger-lists.html#lartc</a><br />
        <strong>Archive of the old mailing list:</strong>
            <a href="http://mailman.ds9a.nl/pipermail/lartc/">http://mailman.ds9a.nl/pipermail/lartc/</a> <br />
        <strong>IRC:</strong> #lartc on <a href=http://www.oftc.net>irc.oftc.net</a> <br />
        <strong>IRC Archives:</strong> <a href="http://ds9a.nl/lartcbot/">http://ds9a.nl/lartcbot/</a>
</p>
</div> <!-- mailinglist -->

<a name="download"></a>
<div id="download">
<H2>Linux Advanced Routing &amp; Traffic Control HOWTO</H2>
<p>
    Current version is 1.0.0 Files were last updated at
    <?
    date_default_timezone_set("EST");
	if(!($st=stat("lartc.db")))
		$st=stat("lartc.db");
	print date("Y-m-d H:i",$st[9]);
	print " CET ";

	printf("(ie, about %.1f hours ago). ",((time()-$st[9])/3600));
	if(((time()-$st[9])/3600)<1)
	{
		print "There has been a recent update - use of shift-reload".
		       " is advised!";
	}
?>

    <div id="translations" style="float:right; width:160px;">
        <p>
            Translations:
            <br>
            <a href=LARTC-zh_CN.GB2312.pdf>[ Chinese (zh_CN.GB2312) ] </a>
            <br><a href=http://www.linux-france.org/prj/inetdoc/guides/Advanced-routing-Howto/>
            [ French ]</a> (fixed)
            <br><a href="http://www.linux.or.jp/JF/JFdocs/Adv-Routing-HOWTO/">
            [ Japanese (Nihongo) ]</a>
            <br><a href="http://www.gnukorea.org/">
            [ Korean #1 ]</a>
            <br><a href="http://www.gnukorea.org/2.4routing-kr/2.4routing.html">
            [ Korean #2 ]</a>
            <br><a href=http://www.gulic.org/comos/LARTC>
            [ Spanish ]</a>
            <br><a href=http://mr0vka.eu.org/tlumaczenia/2.4routing.html>
            [ Polish ]</a>
        </p>
        <p>
            The French version made available by Laurent Foucher and Philippe Latu from the
            <a href=http://www.linux-france.org/prj/inetdoc>
                Technology Institute of the University of Toulouse</a>
            plus Thierry Mallard and Yannick Quenec'hdu from
            <a href=http://www.idealx.com>
                Idealx</a>. Terrific work!

        </p>
    </div> <!-- translations -->

    <p>
<p>
 <ul>
    <li><a href="changelog.txt">GIT Changelog</a>
    <li><a href="lartc.db">DocBook SGML</A>
    <li><a href="lartc.txt">ASCII</A>, .txt
    <li><a href="howto/">HTML</A>, <a
            href="lartc.html">One-big-page
        HTML</A>, <a href="html.tar.gz">HTML tarfile</A>
    <li><a href="lartc.ps">ps</A>, <a href="lartc.ps.gz">ps.gz</A>
    <li><a href="lartc.pdf">pdf</A>, <a
            href="lartc.pdf.gz">pdf.gz</A>
</ul>
</div> <!-- downloads -->

<a name="jobs"></a>
<H2>Jobs list</H2>
Like the Linux kernel, we have a jobs list. If you have any expertise
in any of these areas, please pitch in.
<ul>
    <li>remove incorrect or dead content
    <li>There are a *lot* of FIXME notices, so this means YOU!</li>
    <li>IPsec</li>
    <li>Multipath routing
</ul>
<a name="git"></a>
<div id="git">
<H2>Participate in the project</H2>
This HOWTO is intended to be very much a <a
        href="http://www.catb.org/~esr/writings/cathedral-bazaar/">Bazaar</a> style development. If it

were to be any more open, bits would fall out.
<p>
A GIT tree is available here: <a href="https://repo.or.cz/lartc.git">https://repo.or.cz/lartc.git</a>.
To get a copy, use a GUI client, or use these commands:
<pre>
$ git clone git://repo.or.cz/lartc.git
<i>or (if you're behind a firewall which only allows HTTP)</i>
$ git clone http://repo.or.cz/r/lartc.git
<i>Enter the checked out directory:</i>
$ cd lartc.git
<i>If you want to update your local copy, run</i>
$ git pull
</pre>

If you made changes and want to contribute them, run 'git diff',
and mail the output to <a href=mailto:lartc@vger.kernel.org>lartc@vger.kernel.org</a>, we
can then integrate it easily. Thanks! Please make sure that you edit the
.db file, by the way, the other files are generated from that one.

The idea is that this HOWTO will be a cooperative effort, much like the
Linux kernel itself.
</p>

</div> <!-- git -->

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

<div id="sitesearch">
<!-- Search Google -->

    <FORM method=GET action="http://www.google.com/search">
        <TABLE bgcolor="#FFFFFF"><tr><td>
            <A HREF="http://www.google.com/">
                <IMG SRC="http://www.google.com/logos/Logo_40wht.gif" border="0"
                     ALT="Google" align="absmiddle"></A>
            <INPUT TYPE=text name=q size=31 maxlength=255 value="">
            <INPUT type=submit name=sa VALUE="Google Search">
        </td></tr></TABLE>
    </FORM>

<!-- Search Google -->
</div> <!-- site search -->

<div id="siteID">
    <small>
        $Id$

    </small>
</div> <!-- siteID -->

</div> <!-- end of content of the document -->

<!-- Read in the footer for the every page -->
<? readfile("./footer.html"); ?>