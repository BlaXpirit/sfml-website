<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Http::Request Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.12 -->
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
$(function() {
  initMenu('',false,false,'search.php','Search');
});
</script>
<div id="main-nav"></div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Http.php">Http</a></li><li class="navelem"><a class="el" href="classsf_1_1Http_1_1Request.php">Request</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-types">Public Types</a> &#124;
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#friends">Friends</a> &#124;
<a href="classsf_1_1Http_1_1Request-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Http::Request Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>Define a HTTP request.  
 <a href="classsf_1_1Http_1_1Request.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="include_2SFML_2Network_2Http_8hpp_source.php">Http.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-types"></a>
Public Types</h2></td></tr>
<tr class="memitem:a620f8bff6f43e1378f321bf53fbf5598"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598">Method</a> { <br />
&#160;&#160;<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a24d06852a988a57bbc05874f675ea34b">Get</a>, 
<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a092cffa0afe3e0295202bd6c4b9f8b7b">Post</a>, 
<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a3ac3951b775bb3a13c223b3d9405e6d9">Head</a>, 
<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598ab22a362fb057e9cee2d2b23c4ff710fd">Put</a>, 
<br />
&#160;&#160;<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598afc3cd1d5383bd18cd82a21e293c094ab">Delete</a>, 
<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a24d06852a988a57bbc05874f675ea34b">Get</a>, 
<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a092cffa0afe3e0295202bd6c4b9f8b7b">Post</a>, 
<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a3ac3951b775bb3a13c223b3d9405e6d9">Head</a>, 
<br />
&#160;&#160;<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598ab22a362fb057e9cee2d2b23c4ff710fd">Put</a>, 
<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598afc3cd1d5383bd18cd82a21e293c094ab">Delete</a>
<br />
 }<tr class="memdesc:a620f8bff6f43e1378f321bf53fbf5598"><td class="mdescLeft">&#160;</td><td class="mdescRight">Enumerate the available HTTP methods for a request.  <a href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598">More...</a><br /></td></tr>
</td></tr>
<tr class="separator:a620f8bff6f43e1378f321bf53fbf5598"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a620f8bff6f43e1378f321bf53fbf5598"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598">Method</a> { <br />
&#160;&#160;<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a24d06852a988a57bbc05874f675ea34b">Get</a>, 
<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a092cffa0afe3e0295202bd6c4b9f8b7b">Post</a>, 
<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a3ac3951b775bb3a13c223b3d9405e6d9">Head</a>, 
<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598ab22a362fb057e9cee2d2b23c4ff710fd">Put</a>, 
<br />
&#160;&#160;<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598afc3cd1d5383bd18cd82a21e293c094ab">Delete</a>, 
<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a24d06852a988a57bbc05874f675ea34b">Get</a>, 
<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a092cffa0afe3e0295202bd6c4b9f8b7b">Post</a>, 
<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a3ac3951b775bb3a13c223b3d9405e6d9">Head</a>, 
<br />
&#160;&#160;<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598ab22a362fb057e9cee2d2b23c4ff710fd">Put</a>, 
<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598afc3cd1d5383bd18cd82a21e293c094ab">Delete</a>
<br />
 }<tr class="memdesc:a620f8bff6f43e1378f321bf53fbf5598"><td class="mdescLeft">&#160;</td><td class="mdescRight">Enumerate the available HTTP methods for a request.  <a href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598">More...</a><br /></td></tr>
</td></tr>
<tr class="separator:a620f8bff6f43e1378f321bf53fbf5598"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a8e89d9e8ffcc1163259b35d79809a61c"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Request.php#a8e89d9e8ffcc1163259b35d79809a61c">Request</a> (const std::string &amp;uri=&quot;/&quot;, <a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598">Method</a> method=<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a24d06852a988a57bbc05874f675ea34b">Get</a>, const std::string &amp;body=&quot;&quot;)</td></tr>
<tr class="memdesc:a8e89d9e8ffcc1163259b35d79809a61c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a8e89d9e8ffcc1163259b35d79809a61c">More...</a><br /></td></tr>
<tr class="separator:a8e89d9e8ffcc1163259b35d79809a61c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aea672fae5dd089f4b6b3745ed46210d2"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Request.php#aea672fae5dd089f4b6b3745ed46210d2">setField</a> (const std::string &amp;field, const std::string &amp;value)</td></tr>
<tr class="memdesc:aea672fae5dd089f4b6b3745ed46210d2"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the value of a field.  <a href="#aea672fae5dd089f4b6b3745ed46210d2">More...</a><br /></td></tr>
<tr class="separator:aea672fae5dd089f4b6b3745ed46210d2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abab148554e873e80d2e41376fde1cb62"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Request.php#abab148554e873e80d2e41376fde1cb62">setMethod</a> (<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598">Method</a> method)</td></tr>
<tr class="memdesc:abab148554e873e80d2e41376fde1cb62"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the request method.  <a href="#abab148554e873e80d2e41376fde1cb62">More...</a><br /></td></tr>
<tr class="separator:abab148554e873e80d2e41376fde1cb62"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3723de4b4f1a14b744477841c4ac22e6"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Request.php#a3723de4b4f1a14b744477841c4ac22e6">setUri</a> (const std::string &amp;uri)</td></tr>
<tr class="memdesc:a3723de4b4f1a14b744477841c4ac22e6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the requested URI.  <a href="#a3723de4b4f1a14b744477841c4ac22e6">More...</a><br /></td></tr>
<tr class="separator:a3723de4b4f1a14b744477841c4ac22e6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa683b607b737a6224a91387b4108d3c7"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Request.php#aa683b607b737a6224a91387b4108d3c7">setHttpVersion</a> (unsigned int major, unsigned int minor)</td></tr>
<tr class="memdesc:aa683b607b737a6224a91387b4108d3c7"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the HTTP version for the request.  <a href="#aa683b607b737a6224a91387b4108d3c7">More...</a><br /></td></tr>
<tr class="separator:aa683b607b737a6224a91387b4108d3c7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae9f61ec3fa1639c70e9b5780cb35578e"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Request.php#ae9f61ec3fa1639c70e9b5780cb35578e">setBody</a> (const std::string &amp;body)</td></tr>
<tr class="memdesc:ae9f61ec3fa1639c70e9b5780cb35578e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the body of the request.  <a href="#ae9f61ec3fa1639c70e9b5780cb35578e">More...</a><br /></td></tr>
<tr class="separator:ae9f61ec3fa1639c70e9b5780cb35578e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8e89d9e8ffcc1163259b35d79809a61c"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Request.php#a8e89d9e8ffcc1163259b35d79809a61c">Request</a> (const std::string &amp;uri=&quot;/&quot;, <a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598">Method</a> method=<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a24d06852a988a57bbc05874f675ea34b">Get</a>, const std::string &amp;body=&quot;&quot;)</td></tr>
<tr class="memdesc:a8e89d9e8ffcc1163259b35d79809a61c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a8e89d9e8ffcc1163259b35d79809a61c">More...</a><br /></td></tr>
<tr class="separator:a8e89d9e8ffcc1163259b35d79809a61c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aea672fae5dd089f4b6b3745ed46210d2"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Request.php#aea672fae5dd089f4b6b3745ed46210d2">setField</a> (const std::string &amp;field, const std::string &amp;value)</td></tr>
<tr class="memdesc:aea672fae5dd089f4b6b3745ed46210d2"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the value of a field.  <a href="#aea672fae5dd089f4b6b3745ed46210d2">More...</a><br /></td></tr>
<tr class="separator:aea672fae5dd089f4b6b3745ed46210d2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abab148554e873e80d2e41376fde1cb62"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Request.php#abab148554e873e80d2e41376fde1cb62">setMethod</a> (<a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598">Method</a> method)</td></tr>
<tr class="memdesc:abab148554e873e80d2e41376fde1cb62"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the request method.  <a href="#abab148554e873e80d2e41376fde1cb62">More...</a><br /></td></tr>
<tr class="separator:abab148554e873e80d2e41376fde1cb62"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3723de4b4f1a14b744477841c4ac22e6"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Request.php#a3723de4b4f1a14b744477841c4ac22e6">setUri</a> (const std::string &amp;uri)</td></tr>
<tr class="memdesc:a3723de4b4f1a14b744477841c4ac22e6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the requested URI.  <a href="#a3723de4b4f1a14b744477841c4ac22e6">More...</a><br /></td></tr>
<tr class="separator:a3723de4b4f1a14b744477841c4ac22e6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa683b607b737a6224a91387b4108d3c7"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Request.php#aa683b607b737a6224a91387b4108d3c7">setHttpVersion</a> (unsigned int major, unsigned int minor)</td></tr>
<tr class="memdesc:aa683b607b737a6224a91387b4108d3c7"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the HTTP version for the request.  <a href="#aa683b607b737a6224a91387b4108d3c7">More...</a><br /></td></tr>
<tr class="separator:aa683b607b737a6224a91387b4108d3c7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae9f61ec3fa1639c70e9b5780cb35578e"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Request.php#ae9f61ec3fa1639c70e9b5780cb35578e">setBody</a> (const std::string &amp;body)</td></tr>
<tr class="memdesc:ae9f61ec3fa1639c70e9b5780cb35578e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the body of the request.  <a href="#ae9f61ec3fa1639c70e9b5780cb35578e">More...</a><br /></td></tr>
<tr class="separator:ae9f61ec3fa1639c70e9b5780cb35578e"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="friends"></a>
Friends</h2></td></tr>
<tr class="memitem:ad44371f4a337a0f6537733cdf6df8e76"><td class="memItemLeft" align="right" valign="top"><a id="ad44371f4a337a0f6537733cdf6df8e76"></a>
class&#160;</td><td class="memItemRight" valign="bottom"><b>Http</b></td></tr>
<tr class="separator:ad44371f4a337a0f6537733cdf6df8e76"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Define a HTTP request. </p>

<p>Definition at line <a class="el" href="include_2SFML_2Network_2Http_8hpp_source.php#l00054">54</a> of file <a class="el" href="include_2SFML_2Network_2Http_8hpp_source.php">include/SFML/Network/Http.hpp</a>.</p>
</div><h2 class="groupheader">Member Enumeration Documentation</h2>
<a id="a620f8bff6f43e1378f321bf53fbf5598"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a620f8bff6f43e1378f321bf53fbf5598">&sect;&nbsp;</a></span>Method <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598">sf::Http::Request::Method</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Enumerate the available HTTP methods for a request. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598a24d06852a988a57bbc05874f675ea34b"></a>Get&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> in get mode, standard method to retrieve a page. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598a092cffa0afe3e0295202bd6c4b9f8b7b"></a>Post&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> in post mode, usually to send data to a page. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598a3ac3951b775bb3a13c223b3d9405e6d9"></a>Head&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> a page's header only. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598ab22a362fb057e9cee2d2b23c4ff710fd"></a>Put&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> in put mode, useful for a REST API. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598afc3cd1d5383bd18cd82a21e293c094ab"></a>Delete&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> in delete mode, useful for a REST API. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598a24d06852a988a57bbc05874f675ea34b"></a>Get&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> in get mode, standard method to retrieve a page. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598a092cffa0afe3e0295202bd6c4b9f8b7b"></a>Post&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> in post mode, usually to send data to a page. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598a3ac3951b775bb3a13c223b3d9405e6d9"></a>Head&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> a page's header only. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598ab22a362fb057e9cee2d2b23c4ff710fd"></a>Put&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> in put mode, useful for a REST API. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598afc3cd1d5383bd18cd82a21e293c094ab"></a>Delete&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> in delete mode, useful for a REST API. </p>
</td></tr>
</table>

<p>Definition at line <a class="el" href="include_2SFML_2Network_2Http_8hpp_source.php#l00062">62</a> of file <a class="el" href="include_2SFML_2Network_2Http_8hpp_source.php">include/SFML/Network/Http.hpp</a>.</p>

</div>
</div>
<a id="a620f8bff6f43e1378f321bf53fbf5598"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a620f8bff6f43e1378f321bf53fbf5598">&sect;&nbsp;</a></span>Method <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598">sf::Http::Request::Method</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Enumerate the available HTTP methods for a request. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598a24d06852a988a57bbc05874f675ea34b"></a>Get&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> in get mode, standard method to retrieve a page. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598a092cffa0afe3e0295202bd6c4b9f8b7b"></a>Post&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> in post mode, usually to send data to a page. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598a3ac3951b775bb3a13c223b3d9405e6d9"></a>Head&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> a page's header only. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598ab22a362fb057e9cee2d2b23c4ff710fd"></a>Put&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> in put mode, useful for a REST API. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598afc3cd1d5383bd18cd82a21e293c094ab"></a>Delete&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> in delete mode, useful for a REST API. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598a24d06852a988a57bbc05874f675ea34b"></a>Get&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> in get mode, standard method to retrieve a page. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598a092cffa0afe3e0295202bd6c4b9f8b7b"></a>Post&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> in post mode, usually to send data to a page. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598a3ac3951b775bb3a13c223b3d9405e6d9"></a>Head&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> a page's header only. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598ab22a362fb057e9cee2d2b23c4ff710fd"></a>Put&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> in put mode, useful for a REST API. </p>
</td></tr>
<tr><td class="fieldname"><a id="a620f8bff6f43e1378f321bf53fbf5598afc3cd1d5383bd18cd82a21e293c094ab"></a>Delete&#160;</td><td class="fielddoc"><p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> in delete mode, useful for a REST API. </p>
</td></tr>
</table>

<p>Definition at line <a class="el" href="shared_2include_2SFML_2Network_2Http_8hpp_source.php#l00062">62</a> of file <a class="el" href="shared_2include_2SFML_2Network_2Http_8hpp_source.php">shared/include/SFML/Network/Http.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a8e89d9e8ffcc1163259b35d79809a61c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a8e89d9e8ffcc1163259b35d79809a61c">&sect;&nbsp;</a></span>Request() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Http::Request::Request </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>uri</em> = <code>&quot;/&quot;</code>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598">Method</a>&#160;</td>
          <td class="paramname"><em>method</em> = <code><a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a24d06852a988a57bbc05874f675ea34b">Get</a></code>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>body</em> = <code>&quot;&quot;</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>
<p>This constructor creates a GET request, with the root URI ("/") and an empty body.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">uri</td><td>Target URI </td></tr>
    <tr><td class="paramname">method</td><td>Method to use for the request </td></tr>
    <tr><td class="paramname">body</td><td>Content of the request's body </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a8e89d9e8ffcc1163259b35d79809a61c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a8e89d9e8ffcc1163259b35d79809a61c">&sect;&nbsp;</a></span>Request() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Http::Request::Request </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>uri</em> = <code>&quot;/&quot;</code>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598">Method</a>&#160;</td>
          <td class="paramname"><em>method</em> = <code><a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a24d06852a988a57bbc05874f675ea34b">Get</a></code>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>body</em> = <code>&quot;&quot;</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>
<p>This constructor creates a GET request, with the root URI ("/") and an empty body.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">uri</td><td>Target URI </td></tr>
    <tr><td class="paramname">method</td><td>Method to use for the request </td></tr>
    <tr><td class="paramname">body</td><td>Content of the request's body </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="ae9f61ec3fa1639c70e9b5780cb35578e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae9f61ec3fa1639c70e9b5780cb35578e">&sect;&nbsp;</a></span>setBody() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Http::Request::setBody </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>body</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the body of the request. </p>
<p>The body of a request is optional and only makes sense for POST requests. It is ignored for all other methods. The body is empty by default.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">body</td><td>Content of the body </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="ae9f61ec3fa1639c70e9b5780cb35578e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae9f61ec3fa1639c70e9b5780cb35578e">&sect;&nbsp;</a></span>setBody() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Http::Request::setBody </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>body</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the body of the request. </p>
<p>The body of a request is optional and only makes sense for POST requests. It is ignored for all other methods. The body is empty by default.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">body</td><td>Content of the body </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="aea672fae5dd089f4b6b3745ed46210d2"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aea672fae5dd089f4b6b3745ed46210d2">&sect;&nbsp;</a></span>setField() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Http::Request::setField </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>field</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>value</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the value of a field. </p>
<p>The field is created if it doesn't exist. The name of the field is case-insensitive. By default, a request doesn't contain any field (but the mandatory fields are added later by the HTTP client when sending the request).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">field</td><td>Name of the field to set </td></tr>
    <tr><td class="paramname">value</td><td>Value of the field </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="aea672fae5dd089f4b6b3745ed46210d2"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aea672fae5dd089f4b6b3745ed46210d2">&sect;&nbsp;</a></span>setField() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Http::Request::setField </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>field</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>value</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the value of a field. </p>
<p>The field is created if it doesn't exist. The name of the field is case-insensitive. By default, a request doesn't contain any field (but the mandatory fields are added later by the HTTP client when sending the request).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">field</td><td>Name of the field to set </td></tr>
    <tr><td class="paramname">value</td><td>Value of the field </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="aa683b607b737a6224a91387b4108d3c7"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aa683b607b737a6224a91387b4108d3c7">&sect;&nbsp;</a></span>setHttpVersion() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Http::Request::setHttpVersion </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>major</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>minor</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the HTTP version for the request. </p>
<p>The HTTP version is 1.0 by default.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">major</td><td>Major HTTP version number </td></tr>
    <tr><td class="paramname">minor</td><td>Minor HTTP version number </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="aa683b607b737a6224a91387b4108d3c7"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aa683b607b737a6224a91387b4108d3c7">&sect;&nbsp;</a></span>setHttpVersion() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Http::Request::setHttpVersion </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>major</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>minor</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the HTTP version for the request. </p>
<p>The HTTP version is 1.0 by default.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">major</td><td>Major HTTP version number </td></tr>
    <tr><td class="paramname">minor</td><td>Minor HTTP version number </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="abab148554e873e80d2e41376fde1cb62"></a>
<h2 class="memtitle"><span class="permalink"><a href="#abab148554e873e80d2e41376fde1cb62">&sect;&nbsp;</a></span>setMethod() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Http::Request::setMethod </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598">Method</a>&#160;</td>
          <td class="paramname"><em>method</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the request method. </p>
<p>See the Method enumeration for a complete list of all the availale methods. The method is <a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a24d06852a988a57bbc05874f675ea34b" title="Request in get mode, standard method to retrieve a page. ">Http::Request::Get</a> by default.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">method</td><td>Method to use for the request </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="abab148554e873e80d2e41376fde1cb62"></a>
<h2 class="memtitle"><span class="permalink"><a href="#abab148554e873e80d2e41376fde1cb62">&sect;&nbsp;</a></span>setMethod() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Http::Request::setMethod </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598">Method</a>&#160;</td>
          <td class="paramname"><em>method</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the request method. </p>
<p>See the Method enumeration for a complete list of all the availale methods. The method is <a class="el" href="classsf_1_1Http_1_1Request.php#a620f8bff6f43e1378f321bf53fbf5598a24d06852a988a57bbc05874f675ea34b" title="Request in get mode, standard method to retrieve a page. ">Http::Request::Get</a> by default.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">method</td><td>Method to use for the request </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a3723de4b4f1a14b744477841c4ac22e6"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a3723de4b4f1a14b744477841c4ac22e6">&sect;&nbsp;</a></span>setUri() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Http::Request::setUri </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>uri</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the requested URI. </p>
<p>The URI is the resource (usually a web page or a file) that you want to get or post. The URI is "/" (the root page) by default.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">uri</td><td>URI to request, relative to the host </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a3723de4b4f1a14b744477841c4ac22e6"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a3723de4b4f1a14b744477841c4ac22e6">&sect;&nbsp;</a></span>setUri() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Http::Request::setUri </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>uri</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the requested URI. </p>
<p>The URI is the resource (usually a web page or a file) that you want to get or post. The URI is "/" (the root page) by default.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">uri</td><td>URI to request, relative to the host </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="include_2SFML_2Network_2Http_8hpp_source.php">include/SFML/Network/Http.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
