<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Lock Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Lock.php">Lock</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1Lock-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Lock Class Reference<div class="ingroups"><a class="el" href="group__system.php">System module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Automatic wrapper for locking and unlocking mutexes.  
 <a href="classsf_1_1Lock.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="include_2SFML_2System_2Lock_8hpp_source.php">Lock.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::Lock:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1Lock.png" usemap="#sf::Lock_map" alt=""/>
  <map id="sf::Lock_map" name="sf::Lock_map">
<area href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable. " alt="sf::NonCopyable" shape="rect" coords="0,0,105,24"/>
<area href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable. " alt="sf::NonCopyable" shape="rect" coords="115,0,220,24"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a1a4c5d7a15da61103d85c9aa7f118920"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Lock.php#a1a4c5d7a15da61103d85c9aa7f118920">Lock</a> (<a class="el" href="classsf_1_1Mutex.php">Mutex</a> &amp;mutex)</td></tr>
<tr class="memdesc:a1a4c5d7a15da61103d85c9aa7f118920"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the lock with a target mutex.  <a href="#a1a4c5d7a15da61103d85c9aa7f118920">More...</a><br /></td></tr>
<tr class="separator:a1a4c5d7a15da61103d85c9aa7f118920"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8168b36323a18ccf5b6bc531d964aec5"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Lock.php#a8168b36323a18ccf5b6bc531d964aec5">~Lock</a> ()</td></tr>
<tr class="memdesc:a8168b36323a18ccf5b6bc531d964aec5"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#a8168b36323a18ccf5b6bc531d964aec5">More...</a><br /></td></tr>
<tr class="separator:a8168b36323a18ccf5b6bc531d964aec5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1a4c5d7a15da61103d85c9aa7f118920"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Lock.php#a1a4c5d7a15da61103d85c9aa7f118920">Lock</a> (<a class="el" href="classsf_1_1Mutex.php">Mutex</a> &amp;mutex)</td></tr>
<tr class="memdesc:a1a4c5d7a15da61103d85c9aa7f118920"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the lock with a target mutex.  <a href="#a1a4c5d7a15da61103d85c9aa7f118920">More...</a><br /></td></tr>
<tr class="separator:a1a4c5d7a15da61103d85c9aa7f118920"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8168b36323a18ccf5b6bc531d964aec5"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Lock.php#a8168b36323a18ccf5b6bc531d964aec5">~Lock</a> ()</td></tr>
<tr class="memdesc:a8168b36323a18ccf5b6bc531d964aec5"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#a8168b36323a18ccf5b6bc531d964aec5">More...</a><br /></td></tr>
<tr class="separator:a8168b36323a18ccf5b6bc531d964aec5"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Automatic wrapper for locking and unlocking mutexes. </p>
<p><a class="el" href="classsf_1_1Lock.php" title="Automatic wrapper for locking and unlocking mutexes. ">sf::Lock</a> is a RAII wrapper for <a class="el" href="classsf_1_1Mutex.php" title="Blocks concurrent access to shared resources from multiple threads. ">sf::Mutex</a>.</p>
<p>By unlocking it in its destructor, it ensures that the mutex will always be released when the current scope (most likely a function) ends. This is even more important when an exception or an early return statement can interrupt the execution flow of the function.</p>
<p>For maximum robustness, <a class="el" href="classsf_1_1Lock.php" title="Automatic wrapper for locking and unlocking mutexes. ">sf::Lock</a> should always be used to lock/unlock a mutex.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><a class="code" href="classsf_1_1Mutex.php">sf::Mutex</a> mutex;</div><div class="line"></div><div class="line"><span class="keywordtype">void</span> <span class="keyword">function</span>()</div><div class="line">{</div><div class="line">    <a class="code" href="classsf_1_1Lock.php">sf::Lock</a> lock(mutex); <span class="comment">// mutex is now locked</span></div><div class="line"></div><div class="line">    functionThatMayThrowAnException(); <span class="comment">// mutex is unlocked if this function throws</span></div><div class="line"></div><div class="line">    <span class="keywordflow">if</span> (someCondition)</div><div class="line">        <span class="keywordflow">return</span>; <span class="comment">// mutex is unlocked</span></div><div class="line"></div><div class="line">} <span class="comment">// mutex is unlocked</span></div></div><!-- fragment --><p>Because the mutex is not explicitly unlocked in the code, it may remain locked longer than needed. If the region of the code that needs to be protected by the mutex is not the entire function, a good practice is to create a smaller, inner scope so that the lock is limited to this part of the code.</p>
<div class="fragment"><div class="line"><a class="code" href="classsf_1_1Mutex.php">sf::Mutex</a> mutex;</div><div class="line"></div><div class="line"><span class="keywordtype">void</span> <span class="keyword">function</span>()</div><div class="line">{</div><div class="line">    {</div><div class="line">      <a class="code" href="classsf_1_1Lock.php">sf::Lock</a> lock(mutex);</div><div class="line">      codeThatRequiresProtection();</div><div class="line"></div><div class="line">    } <span class="comment">// mutex is unlocked here</span></div><div class="line"></div><div class="line">    codeThatDoesntCareAboutTheMutex();</div><div class="line">}</div></div><!-- fragment --><p>Having a mutex locked longer than required is a bad practice which can lead to bad performances. Don't forget that when a mutex is locked, other threads may be waiting doing nothing until it is released.</p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Mutex.php" title="Blocks concurrent access to shared resources from multiple threads. ">sf::Mutex</a> </dd></dl>

<p>Definition at line <a class="el" href="include_2SFML_2System_2Lock_8hpp_source.php#l00043">43</a> of file <a class="el" href="include_2SFML_2System_2Lock_8hpp_source.php">include/SFML/System/Lock.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a1a4c5d7a15da61103d85c9aa7f118920"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a1a4c5d7a15da61103d85c9aa7f118920">&sect;&nbsp;</a></span>Lock() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">sf::Lock::Lock </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Mutex.php">Mutex</a> &amp;&#160;</td>
          <td class="paramname"><em>mutex</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">explicit</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Construct the lock with a target mutex. </p>
<p>The mutex passed to <a class="el" href="classsf_1_1Lock.php" title="Automatic wrapper for locking and unlocking mutexes. ">sf::Lock</a> is automatically locked.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">mutex</td><td><a class="el" href="classsf_1_1Mutex.php" title="Blocks concurrent access to shared resources from multiple threads. ">Mutex</a> to lock </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a8168b36323a18ccf5b6bc531d964aec5"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a8168b36323a18ccf5b6bc531d964aec5">&sect;&nbsp;</a></span>~Lock() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Lock::~Lock </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destructor. </p>
<p>The destructor of <a class="el" href="classsf_1_1Lock.php" title="Automatic wrapper for locking and unlocking mutexes. ">sf::Lock</a> automatically unlocks its mutex. </p>

</div>
</div>
<a id="a1a4c5d7a15da61103d85c9aa7f118920"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a1a4c5d7a15da61103d85c9aa7f118920">&sect;&nbsp;</a></span>Lock() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">sf::Lock::Lock </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Mutex.php">Mutex</a> &amp;&#160;</td>
          <td class="paramname"><em>mutex</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">explicit</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Construct the lock with a target mutex. </p>
<p>The mutex passed to <a class="el" href="classsf_1_1Lock.php" title="Automatic wrapper for locking and unlocking mutexes. ">sf::Lock</a> is automatically locked.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">mutex</td><td><a class="el" href="classsf_1_1Mutex.php" title="Blocks concurrent access to shared resources from multiple threads. ">Mutex</a> to lock </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a8168b36323a18ccf5b6bc531d964aec5"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a8168b36323a18ccf5b6bc531d964aec5">&sect;&nbsp;</a></span>~Lock() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Lock::~Lock </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destructor. </p>
<p>The destructor of <a class="el" href="classsf_1_1Lock.php" title="Automatic wrapper for locking and unlocking mutexes. ">sf::Lock</a> automatically unlocks its mutex. </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="include_2SFML_2System_2Lock_8hpp_source.php">include/SFML/System/Lock.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
