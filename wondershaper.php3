<? readfile("./header.html"); ?> <!-- Read in the header of the every page -->

<div class="container">     <!-- Content of the document -->

<H1>The Wonder Shaper</H1>
    <p>
        Back in 2002, Bert Hubert &lt;ahu@ds9a.nl&gt; attempted to create the holy grail.
        A tool that would handle network through a router with these characteristics:
        <ul>
            <li><strong> Maintain low latency for interactive traffic at all times</strong>
                This means that downloading or uploading files should not disturb SSH or
                even telnet. These are the most important things, even 200ms latency is
                sluggish to work over.
            </li>
            <li><strong>Allow 'surfing' at reasonable speeds while up or downloading</strong>
                Even though http is 'bulk' traffic, other traffic should not drown it out
                too much.
            </li>

            <li><strong>Make sure uploads don't harm downloads, and the other way around</strong>
                This is a much observed phenomenon where upstream traffic simply destroys
                download speed. It turns out that all this is possible, at the cost of a
                tiny bit of bandwidth. The reason that uploads, downloads and ssh hurt
                each other is the presence of large queues in many domestic access devices
                like cable or DSL modems.
            </li>
            <li>
                <strong>Make the shaper widely available</strong>
                He contributed it to the Linux Advanced Routing & Traffic Control HOWTO.
                It's licensed under the GPL, so that anyone can use it at no cost.
            </li>
        </ul>
    </p>

    <h2>The Result</h2>
    <p>The result was the Wondershaper - and it worked great when a fast internet connection worked at 200kbps.
    He got good ping times even when max'ing out the line with high traffic.

    <pre>
        Before, without wondershaper, while uploading:
        round-trip min/avg/max = 2041.4/<font color=#ff0000>2332.1</font>/2427.6 ms

        After, with wondershaper, during 220kbit/s upload:
        round-trip min/avg/max = 15.7/<font color=#ff0000>51.8</font>/79.9 ms
    </pre>

    </p>

    <h2>The Downsides of Wondershaper</h2>
    <p>
        Although it worked well in the day, Wondershaper had a number of fixed constants that
        meant that it would limit the line speed, even when the internet connection was considerably
        faster.
    </p>
    <p>
        In addition, there has been a tremendous amount of research in shaping traffic in the intervening
        decade, so there are better techniques (like fq_codel, pie, etc) that perform even better.
    </p>
    <p>
        Finally, the original Wondershaper simply doesn't take into account newer technologies,
        such as voice or video chat, gaming, larger MTU's, PPPoE, ATM, IPv6, etc.
        See, for example, Dave T&auml;ht's
        <a href="http://www.bufferbloat.net/projects/cerowrt/wiki/Wondershaper_Must_Die">
            Wondershaper Must Die editorial.</a>, where he writes:
    <blockquote>
        At the time wondershaper was developed, DSL MTUs were typically 584 bytes
        and encapsulation-aware techniques that compensated for ATM and PPPoE didn't
        exist. An entire masters thesis got written by Jesper Brouer on fixing htb to
        to work right with ATM framing and the code landed in the kernel in 2005.
        http://www.adsl-optimizer.dk/
        <br /><br />
        Wondershaper was pretty optimal at 800kbit down 220 up, in an age of IW2
        web pages averaging in size of 70k, coexisting with ssh traffic and voip, in 2002.
        It didn't scale up then, and doesn't work well at all now, at any bandwidth.
    </blockquote>
    </p>

    <h2>What should be done?</h2>

    <p>
        Wondershaper - as wonderful as it was in its day - needs to be replaced.
        "Just patching it" won't work, and will miss out on a lot of the new research
        into packet queueing and minimizing latency.
    </p>
    <p>
        A number of people are working on a replacement. Their solutions are now in testing to be sure that
        they meet their claims and provide a suitable replacement.
    </p>

    <h2>Links to the outdated Wondershaper</h2>

    <p>
        Wondershaper by <a href=http://ds9a.nl>bert hubert</a> &lt;ahu@ds9a.nl&gt;
        &copy; Copyright 2002, Licensed under the GPL.<br>
        Originally part of the <a href=http://lartc.org>
        Linux Advanced Routing &amp; Shaping HOWTO</a><br />
        Requires Linux 2.4 &amp; higher.
        <ul>
        <li><a href="wondershaper/wondershaper-1.1a.tar.gz">Download version 1.1a</a>, released 16th of
        April 2002.</li>
        <li> <a href="wondershaper/wondershaper-1.0.tar.gz">Download version 1.0</a>, released 5th of
        March 2002.</li>
        </ul>

            If you get an error in the last two lines of the script,
                try this version of iproute instead:
                <a href="ftp://ftp.inr.ac.ru/ip-routing/iproute2-2.4.7-now-ss010824.tar.gz">
                    ftp://ftp.inr.ac.ru/ip-routing/iproute2-2.4.7-now-ss010824.tar.gz</a>.
                (<a href=./iproute2-2.4.7-now-ss010824.tar.gz>local mirror</a>)
    </p>

</div> <!-- end of content of the document -->

<!-- Read in the footer for the every page -->
<? readfile("./footer.html"); ?>