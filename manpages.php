<? readfile("./header.html"); ?> <!-- Read in the header of the every page -->

<div class="container">     <!-- Content of the document -->

<style>
    td {padding: 4px;}

</style>

<H2>Manpages for the tc commands</H2>
<p>
    With your help, we are writing manpages for tc. These pages will
    complement the <a href=http://lartc.org/>HOWTO</a> and are intented to be
    donated to Alexey, the tc author, for inclusion in the distribution.
</p>
<p>
    HTML output is somewhat shoddy in places, but looks nice:
</p>
<table border=1>
<?
function manpage($name,$desc="",$there=0)
{
	print("<tr><td>$name</td><td>$desc</td>");
	if($there == "1") {
		print("<td><a href='manpages/$name.txt'  target='_blank'>txt</a></td>");
		print("<td><a href='manpages/$name.html' target='_blank'>html</a></td>");
		print("<td><a href='manpages/$name.8'    target='_blank'>man</a></td>");
		print("<td><a href='manpages/$name.pdf'  target='_blank'>pdf</a></td>");
		print("<td><a href='manpages/$name.ps'   target='_blank'>ps</a>/<a href='manpages/$name.ps.gz'>ps.gz</a></td>");
		print("<td><a href='manpages/$name.dvi'  target='_blank'>dvi</a></td>");
	}
	else print("<td colspan='6' style='text-align:center; color:#bbb;'>$there</td>");
	print("</tr>");
}
    manpage("tc","The main command",1);
    manpage("ip","The main command",1);
    manpage("tc-filter","tc filters in depth","forthcoming");
    manpage("tc-cbq","The Class Based Queueing qdisc",1);
    manpage("tc-cbq-details","The Class Based Queueing qdisc in gory detail",1);
    manpage("tc-choke","Choose and Keep scheduler",1);
    manpage("tc-codel","Controlled Delay",1);
    manpage("tc-fq_codel","Fair Queueing - Controlled Delay",1);
    manpage("tc-drr","Deficit Round Robin scheduler",1);
    manpage("tc-dsmark","The DiffServ qdisc","forthcoming");
    manpage("tc-ematch","Extended matches for basic and flow filters",1);
    manpage("tc-hfsc","Hierarchical Fair Service Curve qdisc",1);
    manpage("tc-htb","The Hierarchy Token Bucket qdisc",1);
    manpage("tc-pbfifo","Packet &amp; Byte limited First In First Out",1);
    manpage("tc-bfifo","Byte limited First In First Out","see pbfifo (above)");
    manpage("tc-pfifo","Packet limited First In First Out","see pbfifo (above)");
    manpage("tc-pfifo_fast","Default three-band scheduler",1);
    manpage("tc-prio","N-band classful scheduler",1);
    manpage("tc-red","Random Early Detection",1);
    manpage("tc-sfb","Stochastic Fair Blue qdisc",1);
    manpage("tc-sfq","Stochastic Fairness Queueing",1);
    manpage("tc-stab","Size Table manipulation",1);
    manpage("tc-tbf","Token Bucket Filter",1);
    manpage("tc-netem","Network Emulator: add packet delay and loss ",1);
?>
</table>

</div> <!-- end of content of the document -->

<? readfile("./footer.html"); ?> <!-- Read in the footer for the every page -->
