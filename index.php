<!-- Read in the header of the every page -->
<? readfile("./header.html"); ?>

<div class="container">     <!-- Content of the document -->

    <a name="home"></a>
<div id="home">
<H1>Linux Advanced Routing &amp; Traffic Control</H1>
    <p>
        Linux has very advanced routing, filtering and traffic shaping options.
        This site documents how to configure and use these features, as well
        as a whole body of information about Linux networking.
    </p>
    <p>
        This site pulls together information about the Linux ip and tc
        commands that are part of the iproute2 package that provide this power and flexibility.
        Read the HOWTO section for the full run-down of
    </p>
    <p>
        The pages of this site are also contained in a git repository so that others can contribute to the site.
        See the <a href="index.php#participate">Participate</a> section for more details.
        You can also read the <a href="manpages.php" target="_blank">manpages section</a>
        to learn about individual tc and ip commands.

        <!-- http://repo.or.cz/w/lartc.git">
        http://repo.or.cz/w/lartc.git</a>. Please send any patches or
        pull requests to the LARTC mailing list
        <a href="mailto:lartc@vger.kernel.org">lartc@vger.kernel.org</a> and
        I'll try to integrate them in a timely manner.-->
    <p>

    </p>
</div> <!-- home -->

    <div id="wondershaper" style="float:right; width:350px;background:#eee;padding:10px;border-radius: 6px;">
        <h4>Wondershaper</h4>
        <p>Looking for the ADSL/Cable Wondershaper? <a href="wondershaper.php">It's getting better!</a>

        </p>
    </div> <!-- wondershaper -->

    <div id="download">
    <h2>The HOWTO</h2>
    <p>
        <!-- Current version of the LARTC HOWTO is 1.0.0. Files were last updated at
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
    ?>-->
    The HOWTO, in several formats:
     <ul>
        <li>
            <a href="howto/"        target="_blank">HTML</A>,
            <a href="lartc.html"    target="_blank">One-big-page HTML</A>,
            <a href="html.tar.gz"   target="_blank">HTML tarfile</A></li>
        <li><a href="lartc.ps"      target="_blank">ps</A>, <a href="lartc.ps.gz">ps.gz</A></li>
        <li><a href="lartc.pdf"     target="_blank">pdf</A>, <a href="lartc.pdf.gz">pdf.gz</A>
        <li><a href="lartc.db"      target="_blank">DocBook SGML</A>
        <li><a href="lartc.txt"     target="_blank">ASCII</A> (.txt)
        <li><a href="changelog.txt" target="_blank">GIT Changelog</a>
    </ul>
        Current version is 1.0.1. Files were last updated at 2012-05-19 12:40:48 UTC.
    </div> <!-- HOWTO -->

    <div id="translations">
        <p>
        <h2>Translations:</h2>

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

<a name="participate"></a>
<div id="participate">
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

    <a name="jobs"></a>
    <H2>Jobs list</H2>
    Like the Linux kernel, we have a list of tasks for fixing this site.
    If you have any expertise in any of these areas, please pitch in.
    <ul>
        <li>remove incorrect or dead content
        <li>There are a *lot* of FIXME notices, so this means YOU!</li>
        <li>IPsec</li>
        <li>Multipath routing
    </ul>

</div> <!-- participate -->


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