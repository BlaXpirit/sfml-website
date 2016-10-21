<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'IpAddress.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_a2d5a90f1bdcb5808a62d5b0d5da2693.php">shared</a></li><li class="navelem"><a class="el" href="dir_43d543a298a049144b52f1b4453e3c7a.php">include</a></li><li class="navelem"><a class="el" href="dir_58a6f29869daa158b2acc7d96b6fe230.php">SFML</a></li><li class="navelem"><a class="el" href="dir_3de56be4202612ea6d9fa23be2032b10.php">Network</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">shared/include/SFML/Network/IpAddress.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_IPADDRESS_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_IPADDRESS_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Network/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Time.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;istream&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;ostream&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;{</div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;<span class="keyword">class </span>SFML_NETWORK_API IpAddress</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;{</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;    IpAddress();</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;    IpAddress(<span class="keyword">const</span> std::string&amp; address);</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;    IpAddress(<span class="keyword">const</span> <span class="keywordtype">char</span>* address);</div>
<div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;    IpAddress(Uint8 byte0, Uint8 byte1, Uint8 byte2, Uint8 byte3);</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;</div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;    <span class="keyword">explicit</span> IpAddress(Uint32 address);</div>
<div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;</div>
<div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;    std::string toString() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;</div>
<div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;    Uint32 toInteger() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;</div>
<div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;    <span class="keyword">static</span> IpAddress getLocalAddress();</div>
<div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;</div>
<div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;    <span class="keyword">static</span> IpAddress getPublicAddress(Time timeout = <a class="code" href="classsf_1_1Time.php#aa343e67f43a940e7b3b51aa10a495f2f">Time::Zero</a>);</div>
<div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;</div>
<div class="line"><a name="l00182"></a><span class="lineno">  182</span>&#160;    <span class="comment">// Static member data</span></div>
<div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;<span class="comment"></span>    <span class="keyword">static</span> <span class="keyword">const</span> IpAddress <a class="code" href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71ac2b155f5f7b49b49c7fb99655f8da86e">None</a>;      </div>
<div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> IpAddress Any;       </div>
<div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> IpAddress LocalHost; </div>
<div class="line"><a name="l00187"></a><span class="lineno">  187</span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> IpAddress Broadcast; </div>
<div class="line"><a name="l00188"></a><span class="lineno">  188</span>&#160;</div>
<div class="line"><a name="l00189"></a><span class="lineno">  189</span>&#160;<span class="keyword">private</span>:</div>
<div class="line"><a name="l00190"></a><span class="lineno">  190</span>&#160;</div>
<div class="line"><a name="l00191"></a><span class="lineno">  191</span>&#160;    <span class="keyword">friend</span> SFML_NETWORK_API <span class="keywordtype">bool</span> operator &lt;(<span class="keyword">const</span> IpAddress&amp; left, <span class="keyword">const</span> IpAddress&amp; right);</div>
<div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;</div>
<div class="line"><a name="l00199"></a><span class="lineno">  199</span>&#160;    <span class="keywordtype">void</span> resolve(<span class="keyword">const</span> std::string&amp; address);</div>
<div class="line"><a name="l00200"></a><span class="lineno">  200</span>&#160;</div>
<div class="line"><a name="l00202"></a><span class="lineno">  202</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00204"></a><span class="lineno">  204</span>&#160;<span class="comment"></span>    Uint32 m_address; </div>
<div class="line"><a name="l00205"></a><span class="lineno">  205</span>&#160;    <span class="keywordtype">bool</span>   m_valid;   </div>
<div class="line"><a name="l00206"></a><span class="lineno">  206</span>&#160;};</div>
<div class="line"><a name="l00207"></a><span class="lineno">  207</span>&#160;</div>
<div class="line"><a name="l00217"></a><span class="lineno">  217</span>&#160;SFML_NETWORK_API <span class="keywordtype">bool</span> operator ==(<span class="keyword">const</span> IpAddress&amp; left, <span class="keyword">const</span> IpAddress&amp; right);</div>
<div class="line"><a name="l00218"></a><span class="lineno">  218</span>&#160;</div>
<div class="line"><a name="l00228"></a><span class="lineno">  228</span>&#160;SFML_NETWORK_API <span class="keywordtype">bool</span> operator !=(<span class="keyword">const</span> IpAddress&amp; left, <span class="keyword">const</span> IpAddress&amp; right);</div>
<div class="line"><a name="l00229"></a><span class="lineno">  229</span>&#160;</div>
<div class="line"><a name="l00239"></a><span class="lineno">  239</span>&#160;SFML_NETWORK_API <span class="keywordtype">bool</span> operator &lt;(<span class="keyword">const</span> IpAddress&amp; left, <span class="keyword">const</span> IpAddress&amp; right);</div>
<div class="line"><a name="l00240"></a><span class="lineno">  240</span>&#160;</div>
<div class="line"><a name="l00250"></a><span class="lineno">  250</span>&#160;SFML_NETWORK_API <span class="keywordtype">bool</span> operator &gt;(<span class="keyword">const</span> IpAddress&amp; left, <span class="keyword">const</span> IpAddress&amp; right);</div>
<div class="line"><a name="l00251"></a><span class="lineno">  251</span>&#160;</div>
<div class="line"><a name="l00261"></a><span class="lineno">  261</span>&#160;SFML_NETWORK_API <span class="keywordtype">bool</span> operator &lt;=(<span class="keyword">const</span> IpAddress&amp; left, <span class="keyword">const</span> IpAddress&amp; right);</div>
<div class="line"><a name="l00262"></a><span class="lineno">  262</span>&#160;</div>
<div class="line"><a name="l00272"></a><span class="lineno">  272</span>&#160;SFML_NETWORK_API <span class="keywordtype">bool</span> operator &gt;=(<span class="keyword">const</span> IpAddress&amp; left, <span class="keyword">const</span> IpAddress&amp; right);</div>
<div class="line"><a name="l00273"></a><span class="lineno">  273</span>&#160;</div>
<div class="line"><a name="l00283"></a><span class="lineno">  283</span>&#160;SFML_NETWORK_API std::istream&amp; operator &gt;&gt;(std::istream&amp; stream, IpAddress&amp; address);</div>
<div class="line"><a name="l00284"></a><span class="lineno">  284</span>&#160;</div>
<div class="line"><a name="l00294"></a><span class="lineno">  294</span>&#160;SFML_NETWORK_API std::ostream&amp; operator &lt;&lt;(std::ostream&amp; stream, <span class="keyword">const</span> IpAddress&amp; address);</div>
<div class="line"><a name="l00295"></a><span class="lineno">  295</span>&#160;</div>
<div class="line"><a name="l00296"></a><span class="lineno">  296</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00297"></a><span class="lineno">  297</span>&#160;</div>
<div class="line"><a name="l00298"></a><span class="lineno">  298</span>&#160;</div>
<div class="line"><a name="l00299"></a><span class="lineno">  299</span>&#160;<span class="preprocessor">#endif // SFML_IPADDRESS_HPP</span></div>
<div class="line"><a name="l00300"></a><span class="lineno">  300</span>&#160;</div>
<div class="line"><a name="l00301"></a><span class="lineno">  301</span>&#160;</div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Audio_2AlResource_8hpp_source.php#l00034">include/SFML/Audio/AlResource.hpp:34</a></div></div>
<div class="ttc" id="group__window_php_gga7b9b5c2a2b381d2a42283d745874cb71ac2b155f5f7b49b49c7fb99655f8da86e"><div class="ttname"><a href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71ac2b155f5f7b49b49c7fb99655f8da86e">sf::Style::None</a></div><div class="ttdoc">No border / title bar (this flag and all others are mutually exclusive) </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Window_2WindowStyle_8hpp_source.php#l00040">include/SFML/Window/WindowStyle.hpp:40</a></div></div>
<div class="ttc" id="classsf_1_1Time_php_aa343e67f43a940e7b3b51aa10a495f2f"><div class="ttname"><a href="classsf_1_1Time.php#aa343e67f43a940e7b3b51aa10a495f2f">sf::Time::Zero</a></div><div class="ttdeci">static const Time Zero</div><div class="ttdoc">Predefined "zero" time value. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2System_2Time_8hpp_source.php#l00085">include/SFML/System/Time.hpp:85</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
