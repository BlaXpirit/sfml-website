<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Socket.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_a2d5a90f1bdcb5808a62d5b0d5da2693.php">shared</a></li><li class="navelem"><a class="el" href="dir_43d543a298a049144b52f1b4453e3c7a.php">include</a></li><li class="navelem"><a class="el" href="dir_58a6f29869daa158b2acc7d96b6fe230.php">SFML</a></li><li class="navelem"><a class="el" href="dir_3de56be4202612ea6d9fa23be2032b10.php">Network</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">shared/include/SFML/Network/Socket.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_SOCKET_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_SOCKET_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Network/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Network/SocketHandle.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/System/NonCopyable.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;vector&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;{</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">class </span>SocketSelector;</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;<span class="keyword">class </span>SFML_NETWORK_API Socket : NonCopyable</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;{</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div>
<div class="line"><a name="l00053"></a><span class="lineno"><a class="line" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">   53</a></span>&#160;    <span class="keyword">enum</span> <a class="code" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a></div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;    {</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;        Done,         </div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;        NotReady,     </div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;        Partial,      </div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;        Disconnected, </div>
<div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;        Error         </div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;    };</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;    <span class="keyword">enum</span></div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;    {</div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;        AnyPort = 0 </div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;    };</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;</div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;    <span class="keyword">virtual</span> ~Socket();</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;</div>
<div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;    <span class="keywordtype">void</span> setBlocking(<span class="keywordtype">bool</span> blocking);</div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;    <span class="keywordtype">bool</span> isBlocking() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;</div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;<span class="keyword">protected</span>:</div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;</div>
<div class="line"><a name="l00114"></a><span class="lineno"><a class="line" href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8">  114</a></span>&#160;    <span class="keyword">enum</span> <a class="code" href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8">Type</a></div>
<div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;    {</div>
<div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;        Tcp, </div>
<div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;        Udp  </div>
<div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;    };</div>
<div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;</div>
<div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;    <a class="code" href="classsf_1_1Socket.php">Socket</a>(Type type);</div>
<div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;</div>
<div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;    SocketHandle getHandle() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;</div>
<div class="line"><a name="l00148"></a><span class="lineno">  148</span>&#160;    <span class="keywordtype">void</span> create();</div>
<div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;</div>
<div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;    <span class="keywordtype">void</span> create(SocketHandle handle);</div>
<div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;</div>
<div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;    <span class="keywordtype">void</span> close();</div>
<div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160;</div>
<div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;<span class="keyword">private</span>:</div>
<div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;</div>
<div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;    <span class="keyword">friend</span> <span class="keyword">class </span><a class="code" href="classsf_1_1SocketSelector.php">SocketSelector</a>;</div>
<div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;</div>
<div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;<span class="comment"></span>    Type         m_type;       </div>
<div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;    SocketHandle m_socket;     </div>
<div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;    <span class="keywordtype">bool</span>         m_isBlocking; </div>
<div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;};</div>
<div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;</div>
<div class="line"><a name="l00181"></a><span class="lineno">  181</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00182"></a><span class="lineno">  182</span>&#160;</div>
<div class="line"><a name="l00183"></a><span class="lineno">  183</span>&#160;</div>
<div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;<span class="preprocessor">#endif // SFML_SOCKET_HPP</span></div>
<div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;</div>
<div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;</div>
<div class="ttc" id="classsf_1_1SocketSelector_php"><div class="ttname"><a href="classsf_1_1SocketSelector.php">sf::SocketSelector</a></div><div class="ttdoc">Multiplexer that allows to read from multiple sockets. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Network_2SocketSelector_8hpp_source.php#l00043">include/SFML/Network/SocketSelector.hpp:43</a></div></div>
<div class="ttc" id="classsf_1_1Socket_php_a51bf0fd51057b98a10fbb866246176dc"><div class="ttname"><a href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">sf::Socket::Status</a></div><div class="ttdeci">Status</div><div class="ttdoc">Status codes that may be returned by socket functions. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Network_2Socket_8hpp_source.php#l00053">include/SFML/Network/Socket.hpp:53</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Audio_2AlResource_8hpp_source.php#l00034">include/SFML/Audio/AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Socket_php"><div class="ttname"><a href="classsf_1_1Socket.php">sf::Socket</a></div><div class="ttdoc">Base class for all the socket types. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Network_2Socket_8hpp_source.php#l00045">include/SFML/Network/Socket.hpp:45</a></div></div>
<div class="ttc" id="classsf_1_1Socket_php_a5d3ff44e56e68f02816bb0fabc34adf8"><div class="ttname"><a href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8">sf::Socket::Type</a></div><div class="ttdeci">Type</div><div class="ttdoc">Types of protocols that the socket can use. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Network_2Socket_8hpp_source.php#l00114">include/SFML/Network/Socket.hpp:114</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
