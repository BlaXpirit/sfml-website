<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Utf.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.10 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_dd2e492ad64d241b969bca3fa8d4cd6d.php">System</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">include/SFML/System/Utf.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2016 Laurent Gomila (laurent@sfml-dev.org)</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_UTF_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_UTF_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Config.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;algorithm&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;locale&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;cstdlib&gt;</span></div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;{</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="keyword">template</span> &lt;<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> N&gt;</div>
<div class="line"><a name="l00041"></a><span class="lineno"><a class="line" href="classsf_1_1Utf.php">   41</a></span>&#160;<span class="keyword">class </span><a class="code" href="classsf_1_1Utf.php">Utf</a>;</div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;<span class="keyword">template</span> &lt;&gt;</div>
<div class="line"><a name="l00048"></a><span class="lineno"><a class="line" href="classsf_1_1Utf_3_018_01_4.php">   48</a></span>&#160;<span class="keyword">class </span><a class="code" href="classsf_1_1Utf.php">Utf</a>&lt;8&gt;</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;{</div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In&gt;</div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;    <span class="keyword">static</span> In decode(In begin, In end, Uint32&amp; output, Uint32 replacement = 0);</div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;</div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;    <span class="keyword">static</span> Out encode(Uint32 input, Out output, Uint8 replacement = 0);</div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;</div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In&gt;</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;    <span class="keyword">static</span> In next(In begin, In end);</div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;</div>
<div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In&gt;</div>
<div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;    <span class="keyword">static</span> std::size_t count(In begin, In end);</div>
<div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;</div>
<div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;    <span class="keyword">static</span> Out fromAnsi(In begin, In end, Out output, <span class="keyword">const</span> std::locale&amp; locale = std::locale());</div>
<div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;</div>
<div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;    <span class="keyword">static</span> Out fromWide(In begin, In end, Out output);</div>
<div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;</div>
<div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;    <span class="keyword">static</span> Out fromLatin1(In begin, In end, Out output);</div>
<div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;</div>
<div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;    <span class="keyword">static</span> Out toAnsi(In begin, In end, Out output, <span class="keywordtype">char</span> replacement = 0, <span class="keyword">const</span> std::locale&amp; locale = std::locale());</div>
<div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;</div>
<div class="line"><a name="l00188"></a><span class="lineno">  188</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00189"></a><span class="lineno">  189</span>&#160;    <span class="keyword">static</span> Out toWide(In begin, In end, Out output, <span class="keywordtype">wchar_t</span> replacement = 0);</div>
<div class="line"><a name="l00190"></a><span class="lineno">  190</span>&#160;</div>
<div class="line"><a name="l00202"></a><span class="lineno">  202</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00203"></a><span class="lineno">  203</span>&#160;    <span class="keyword">static</span> Out toLatin1(In begin, In end, Out output, <span class="keywordtype">char</span> replacement = 0);</div>
<div class="line"><a name="l00204"></a><span class="lineno">  204</span>&#160;</div>
<div class="line"><a name="l00220"></a><span class="lineno">  220</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00221"></a><span class="lineno">  221</span>&#160;    <span class="keyword">static</span> Out toUtf8(In begin, In end, Out output);</div>
<div class="line"><a name="l00222"></a><span class="lineno">  222</span>&#160;</div>
<div class="line"><a name="l00233"></a><span class="lineno">  233</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00234"></a><span class="lineno">  234</span>&#160;    <span class="keyword">static</span> Out toUtf16(In begin, In end, Out output);</div>
<div class="line"><a name="l00235"></a><span class="lineno">  235</span>&#160;</div>
<div class="line"><a name="l00246"></a><span class="lineno">  246</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00247"></a><span class="lineno">  247</span>&#160;    <span class="keyword">static</span> Out toUtf32(In begin, In end, Out output);</div>
<div class="line"><a name="l00248"></a><span class="lineno">  248</span>&#160;};</div>
<div class="line"><a name="l00249"></a><span class="lineno">  249</span>&#160;</div>
<div class="line"><a name="l00254"></a><span class="lineno">  254</span>&#160;<span class="keyword">template</span> &lt;&gt;</div>
<div class="line"><a name="l00255"></a><span class="lineno"><a class="line" href="classsf_1_1Utf_3_0116_01_4.php">  255</a></span>&#160;<span class="keyword">class </span><a class="code" href="classsf_1_1Utf.php">Utf</a>&lt;16&gt;</div>
<div class="line"><a name="l00256"></a><span class="lineno">  256</span>&#160;{</div>
<div class="line"><a name="l00257"></a><span class="lineno">  257</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00258"></a><span class="lineno">  258</span>&#160;</div>
<div class="line"><a name="l00273"></a><span class="lineno">  273</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In&gt;</div>
<div class="line"><a name="l00274"></a><span class="lineno">  274</span>&#160;    <span class="keyword">static</span> In decode(In begin, In end, Uint32&amp; output, Uint32 replacement = 0);</div>
<div class="line"><a name="l00275"></a><span class="lineno">  275</span>&#160;</div>
<div class="line"><a name="l00289"></a><span class="lineno">  289</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00290"></a><span class="lineno">  290</span>&#160;    <span class="keyword">static</span> Out encode(Uint32 input, Out output, Uint16 replacement = 0);</div>
<div class="line"><a name="l00291"></a><span class="lineno">  291</span>&#160;</div>
<div class="line"><a name="l00304"></a><span class="lineno">  304</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In&gt;</div>
<div class="line"><a name="l00305"></a><span class="lineno">  305</span>&#160;    <span class="keyword">static</span> In next(In begin, In end);</div>
<div class="line"><a name="l00306"></a><span class="lineno">  306</span>&#160;</div>
<div class="line"><a name="l00320"></a><span class="lineno">  320</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In&gt;</div>
<div class="line"><a name="l00321"></a><span class="lineno">  321</span>&#160;    <span class="keyword">static</span> std::size_t count(In begin, In end);</div>
<div class="line"><a name="l00322"></a><span class="lineno">  322</span>&#160;</div>
<div class="line"><a name="l00337"></a><span class="lineno">  337</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00338"></a><span class="lineno">  338</span>&#160;    <span class="keyword">static</span> Out fromAnsi(In begin, In end, Out output, <span class="keyword">const</span> std::locale&amp; locale = std::locale());</div>
<div class="line"><a name="l00339"></a><span class="lineno">  339</span>&#160;</div>
<div class="line"><a name="l00350"></a><span class="lineno">  350</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00351"></a><span class="lineno">  351</span>&#160;    <span class="keyword">static</span> Out fromWide(In begin, In end, Out output);</div>
<div class="line"><a name="l00352"></a><span class="lineno">  352</span>&#160;</div>
<div class="line"><a name="l00363"></a><span class="lineno">  363</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00364"></a><span class="lineno">  364</span>&#160;    <span class="keyword">static</span> Out fromLatin1(In begin, In end, Out output);</div>
<div class="line"><a name="l00365"></a><span class="lineno">  365</span>&#160;</div>
<div class="line"><a name="l00381"></a><span class="lineno">  381</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00382"></a><span class="lineno">  382</span>&#160;    <span class="keyword">static</span> Out toAnsi(In begin, In end, Out output, <span class="keywordtype">char</span> replacement = 0, <span class="keyword">const</span> std::locale&amp; locale = std::locale());</div>
<div class="line"><a name="l00383"></a><span class="lineno">  383</span>&#160;</div>
<div class="line"><a name="l00395"></a><span class="lineno">  395</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00396"></a><span class="lineno">  396</span>&#160;    <span class="keyword">static</span> Out toWide(In begin, In end, Out output, <span class="keywordtype">wchar_t</span> replacement = 0);</div>
<div class="line"><a name="l00397"></a><span class="lineno">  397</span>&#160;</div>
<div class="line"><a name="l00409"></a><span class="lineno">  409</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00410"></a><span class="lineno">  410</span>&#160;    <span class="keyword">static</span> Out toLatin1(In begin, In end, Out output, <span class="keywordtype">char</span> replacement = 0);</div>
<div class="line"><a name="l00411"></a><span class="lineno">  411</span>&#160;</div>
<div class="line"><a name="l00422"></a><span class="lineno">  422</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00423"></a><span class="lineno">  423</span>&#160;    <span class="keyword">static</span> Out toUtf8(In begin, In end, Out output);</div>
<div class="line"><a name="l00424"></a><span class="lineno">  424</span>&#160;</div>
<div class="line"><a name="l00440"></a><span class="lineno">  440</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00441"></a><span class="lineno">  441</span>&#160;    <span class="keyword">static</span> Out toUtf16(In begin, In end, Out output);</div>
<div class="line"><a name="l00442"></a><span class="lineno">  442</span>&#160;</div>
<div class="line"><a name="l00453"></a><span class="lineno">  453</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00454"></a><span class="lineno">  454</span>&#160;    <span class="keyword">static</span> Out toUtf32(In begin, In end, Out output);</div>
<div class="line"><a name="l00455"></a><span class="lineno">  455</span>&#160;};</div>
<div class="line"><a name="l00456"></a><span class="lineno">  456</span>&#160;</div>
<div class="line"><a name="l00461"></a><span class="lineno">  461</span>&#160;<span class="keyword">template</span> &lt;&gt;</div>
<div class="line"><a name="l00462"></a><span class="lineno"><a class="line" href="classsf_1_1Utf_3_0132_01_4.php">  462</a></span>&#160;<span class="keyword">class </span><a class="code" href="classsf_1_1Utf.php">Utf</a>&lt;32&gt;</div>
<div class="line"><a name="l00463"></a><span class="lineno">  463</span>&#160;{</div>
<div class="line"><a name="l00464"></a><span class="lineno">  464</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00465"></a><span class="lineno">  465</span>&#160;</div>
<div class="line"><a name="l00481"></a><span class="lineno">  481</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In&gt;</div>
<div class="line"><a name="l00482"></a><span class="lineno">  482</span>&#160;    <span class="keyword">static</span> In decode(In begin, In end, Uint32&amp; output, Uint32 replacement = 0);</div>
<div class="line"><a name="l00483"></a><span class="lineno">  483</span>&#160;</div>
<div class="line"><a name="l00498"></a><span class="lineno">  498</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00499"></a><span class="lineno">  499</span>&#160;    <span class="keyword">static</span> Out encode(Uint32 input, Out output, Uint32 replacement = 0);</div>
<div class="line"><a name="l00500"></a><span class="lineno">  500</span>&#160;</div>
<div class="line"><a name="l00513"></a><span class="lineno">  513</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In&gt;</div>
<div class="line"><a name="l00514"></a><span class="lineno">  514</span>&#160;    <span class="keyword">static</span> In next(In begin, In end);</div>
<div class="line"><a name="l00515"></a><span class="lineno">  515</span>&#160;</div>
<div class="line"><a name="l00528"></a><span class="lineno">  528</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In&gt;</div>
<div class="line"><a name="l00529"></a><span class="lineno">  529</span>&#160;    <span class="keyword">static</span> std::size_t count(In begin, In end);</div>
<div class="line"><a name="l00530"></a><span class="lineno">  530</span>&#160;</div>
<div class="line"><a name="l00545"></a><span class="lineno">  545</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00546"></a><span class="lineno">  546</span>&#160;    <span class="keyword">static</span> Out fromAnsi(In begin, In end, Out output, <span class="keyword">const</span> std::locale&amp; locale = std::locale());</div>
<div class="line"><a name="l00547"></a><span class="lineno">  547</span>&#160;</div>
<div class="line"><a name="l00558"></a><span class="lineno">  558</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00559"></a><span class="lineno">  559</span>&#160;    <span class="keyword">static</span> Out fromWide(In begin, In end, Out output);</div>
<div class="line"><a name="l00560"></a><span class="lineno">  560</span>&#160;</div>
<div class="line"><a name="l00571"></a><span class="lineno">  571</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00572"></a><span class="lineno">  572</span>&#160;    <span class="keyword">static</span> Out fromLatin1(In begin, In end, Out output);</div>
<div class="line"><a name="l00573"></a><span class="lineno">  573</span>&#160;</div>
<div class="line"><a name="l00589"></a><span class="lineno">  589</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00590"></a><span class="lineno">  590</span>&#160;    <span class="keyword">static</span> Out toAnsi(In begin, In end, Out output, <span class="keywordtype">char</span> replacement = 0, <span class="keyword">const</span> std::locale&amp; locale = std::locale());</div>
<div class="line"><a name="l00591"></a><span class="lineno">  591</span>&#160;</div>
<div class="line"><a name="l00603"></a><span class="lineno">  603</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00604"></a><span class="lineno">  604</span>&#160;    <span class="keyword">static</span> Out toWide(In begin, In end, Out output, <span class="keywordtype">wchar_t</span> replacement = 0);</div>
<div class="line"><a name="l00605"></a><span class="lineno">  605</span>&#160;</div>
<div class="line"><a name="l00617"></a><span class="lineno">  617</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00618"></a><span class="lineno">  618</span>&#160;    <span class="keyword">static</span> Out toLatin1(In begin, In end, Out output, <span class="keywordtype">char</span> replacement = 0);</div>
<div class="line"><a name="l00619"></a><span class="lineno">  619</span>&#160;</div>
<div class="line"><a name="l00630"></a><span class="lineno">  630</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00631"></a><span class="lineno">  631</span>&#160;    <span class="keyword">static</span> Out toUtf8(In begin, In end, Out output);</div>
<div class="line"><a name="l00632"></a><span class="lineno">  632</span>&#160;</div>
<div class="line"><a name="l00643"></a><span class="lineno">  643</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00644"></a><span class="lineno">  644</span>&#160;    <span class="keyword">static</span> Out toUtf16(In begin, In end, Out output);</div>
<div class="line"><a name="l00645"></a><span class="lineno">  645</span>&#160;</div>
<div class="line"><a name="l00661"></a><span class="lineno">  661</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00662"></a><span class="lineno">  662</span>&#160;    <span class="keyword">static</span> Out toUtf32(In begin, In end, Out output);</div>
<div class="line"><a name="l00663"></a><span class="lineno">  663</span>&#160;</div>
<div class="line"><a name="l00677"></a><span class="lineno">  677</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In&gt;</div>
<div class="line"><a name="l00678"></a><span class="lineno">  678</span>&#160;    <span class="keyword">static</span> Uint32 decodeAnsi(In input, <span class="keyword">const</span> std::locale&amp; locale = std::locale());</div>
<div class="line"><a name="l00679"></a><span class="lineno">  679</span>&#160;</div>
<div class="line"><a name="l00692"></a><span class="lineno">  692</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In&gt;</div>
<div class="line"><a name="l00693"></a><span class="lineno">  693</span>&#160;    <span class="keyword">static</span> Uint32 decodeWide(In input);</div>
<div class="line"><a name="l00694"></a><span class="lineno">  694</span>&#160;</div>
<div class="line"><a name="l00710"></a><span class="lineno">  710</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00711"></a><span class="lineno">  711</span>&#160;    <span class="keyword">static</span> Out encodeAnsi(Uint32 codepoint, Out output, <span class="keywordtype">char</span> replacement = 0, <span class="keyword">const</span> std::locale&amp; locale = std::locale());</div>
<div class="line"><a name="l00712"></a><span class="lineno">  712</span>&#160;</div>
<div class="line"><a name="l00727"></a><span class="lineno">  727</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00728"></a><span class="lineno">  728</span>&#160;    <span class="keyword">static</span> Out encodeWide(Uint32 codepoint, Out output, <span class="keywordtype">wchar_t</span> replacement = 0);</div>
<div class="line"><a name="l00729"></a><span class="lineno">  729</span>&#160;};</div>
<div class="line"><a name="l00730"></a><span class="lineno">  730</span>&#160;</div>
<div class="line"><a name="l00731"></a><span class="lineno">  731</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Utf.inl&gt;</span></div>
<div class="line"><a name="l00732"></a><span class="lineno">  732</span>&#160;</div>
<div class="line"><a name="l00733"></a><span class="lineno">  733</span>&#160;<span class="comment">// Make typedefs to get rid of the template syntax</span></div>
<div class="line"><a name="l00734"></a><span class="lineno">  734</span>&#160;<span class="keyword">typedef</span> <a class="code" href="classsf_1_1Utf_3_018_01_4.php">Utf&lt;8&gt;</a>  <a class="code" href="classsf_1_1Utf_3_018_01_4.php">Utf8</a>;</div>
<div class="line"><a name="l00735"></a><span class="lineno">  735</span>&#160;<span class="keyword">typedef</span> <a class="code" href="classsf_1_1Utf_3_0116_01_4.php">Utf&lt;16&gt;</a> <a class="code" href="classsf_1_1Utf_3_0116_01_4.php">Utf16</a>;</div>
<div class="line"><a name="l00736"></a><span class="lineno">  736</span>&#160;<span class="keyword">typedef</span> <a class="code" href="classsf_1_1Utf_3_0132_01_4.php">Utf&lt;32&gt;</a> <a class="code" href="classsf_1_1Utf_3_0132_01_4.php">Utf32</a>;</div>
<div class="line"><a name="l00737"></a><span class="lineno">  737</span>&#160;</div>
<div class="line"><a name="l00738"></a><span class="lineno">  738</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00739"></a><span class="lineno">  739</span>&#160;</div>
<div class="line"><a name="l00740"></a><span class="lineno">  740</span>&#160;</div>
<div class="line"><a name="l00741"></a><span class="lineno">  741</span>&#160;<span class="preprocessor">#endif // SFML_UTF_HPP</span></div>
<div class="line"><a name="l00742"></a><span class="lineno">  742</span>&#160;</div>
<div class="line"><a name="l00743"></a><span class="lineno">  743</span>&#160;</div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Audio_2AlResource_8hpp_source.php#l00034">include/SFML/Audio/AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Utf_3_0116_01_4_php"><div class="ttname"><a href="classsf_1_1Utf_3_0116_01_4.php">sf::Utf&lt; 16 &gt;</a></div><div class="ttdoc">Specialization of the Utf template for UTF-16. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2System_2Utf_8hpp_source.php#l00255">include/SFML/System/Utf.hpp:255</a></div></div>
<div class="ttc" id="classsf_1_1Utf_3_0132_01_4_php"><div class="ttname"><a href="classsf_1_1Utf_3_0132_01_4.php">sf::Utf&lt; 32 &gt;</a></div><div class="ttdoc">Specialization of the Utf template for UTF-32. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2System_2Utf_8hpp_source.php#l00462">include/SFML/System/Utf.hpp:462</a></div></div>
<div class="ttc" id="classsf_1_1Utf_php"><div class="ttname"><a href="classsf_1_1Utf.php">sf::Utf</a></div><div class="ttdoc">Utility class providing generic functions for UTF conversions. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2System_2Utf_8hpp_source.php#l00041">include/SFML/System/Utf.hpp:41</a></div></div>
<div class="ttc" id="classsf_1_1Utf_3_018_01_4_php"><div class="ttname"><a href="classsf_1_1Utf_3_018_01_4.php">sf::Utf&lt; 8 &gt;</a></div><div class="ttdoc">Specialization of the Utf template for UTF-8. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2System_2Utf_8hpp_source.php#l00048">include/SFML/System/Utf.hpp:48</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
