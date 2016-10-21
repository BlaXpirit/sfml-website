<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Vector2.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_a2d5a90f1bdcb5808a62d5b0d5da2693.php">shared</a></li><li class="navelem"><a class="el" href="dir_43d543a298a049144b52f1b4453e3c7a.php">include</a></li><li class="navelem"><a class="el" href="dir_58a6f29869daa158b2acc7d96b6fe230.php">SFML</a></li><li class="navelem"><a class="el" href="dir_6da605027bf62a966b09f0b7f2f7951e.php">System</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">shared/include/SFML/System/Vector2.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_VECTOR2_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_VECTOR2_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;{</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="keyword">class </span>Vector2</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;{</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;    <a class="code" href="classsf_1_1Vector2.php#a58c32383b5291380db4b43a289f75988">Vector2</a>();</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;    <a class="code" href="classsf_1_1Vector2.php#a58c32383b5291380db4b43a289f75988">Vector2</a>(T X, T Y);</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;</div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> U&gt;</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    <span class="keyword">explicit</span> <a class="code" href="classsf_1_1Vector2.php#a58c32383b5291380db4b43a289f75988">Vector2</a>(<span class="keyword">const</span> Vector2&lt;U&gt;&amp; vector);</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;</div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;<span class="comment"></span>    T <a class="code" href="classsf_1_1Vector2.php#a1e6ad77fa155f3753bfb92699bd28141">x</a>; </div>
<div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;    T <a class="code" href="classsf_1_1Vector2.php#a420f2481b015f4eb929c75f2af564299">y</a>; </div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;};</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;Vector2&lt;T&gt; operator -(<span class="keyword">const</span> Vector2&lt;T&gt;&amp; right);</div>
<div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;</div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;Vector2&lt;T&gt;&amp; operator +=(Vector2&lt;T&gt;&amp; left, <span class="keyword">const</span> Vector2&lt;T&gt;&amp; right);</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;</div>
<div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;Vector2&lt;T&gt;&amp; operator -=(Vector2&lt;T&gt;&amp; left, <span class="keyword">const</span> Vector2&lt;T&gt;&amp; right);</div>
<div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;</div>
<div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;Vector2&lt;T&gt; operator +(<span class="keyword">const</span> Vector2&lt;T&gt;&amp; left, <span class="keyword">const</span> Vector2&lt;T&gt;&amp; right);</div>
<div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;</div>
<div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;Vector2&lt;T&gt; operator -(<span class="keyword">const</span> Vector2&lt;T&gt;&amp; left, <span class="keyword">const</span> Vector2&lt;T&gt;&amp; right);</div>
<div class="line"><a name="l00148"></a><span class="lineno">  148</span>&#160;</div>
<div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;Vector2&lt;T&gt; operator *(<span class="keyword">const</span> Vector2&lt;T&gt;&amp; left, T right);</div>
<div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;</div>
<div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00173"></a><span class="lineno">  173</span>&#160;Vector2&lt;T&gt; operator *(T left, <span class="keyword">const</span> Vector2&lt;T&gt;&amp; right);</div>
<div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;</div>
<div class="line"><a name="l00188"></a><span class="lineno">  188</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00189"></a><span class="lineno">  189</span>&#160;Vector2&lt;T&gt;&amp; operator *=(Vector2&lt;T&gt;&amp; left, T right);</div>
<div class="line"><a name="l00190"></a><span class="lineno">  190</span>&#160;</div>
<div class="line"><a name="l00201"></a><span class="lineno">  201</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00202"></a><span class="lineno">  202</span>&#160;Vector2&lt;T&gt; operator /(<span class="keyword">const</span> Vector2&lt;T&gt;&amp; left, T right);</div>
<div class="line"><a name="l00203"></a><span class="lineno">  203</span>&#160;</div>
<div class="line"><a name="l00217"></a><span class="lineno">  217</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00218"></a><span class="lineno">  218</span>&#160;Vector2&lt;T&gt;&amp; operator /=(Vector2&lt;T&gt;&amp; left, T right);</div>
<div class="line"><a name="l00219"></a><span class="lineno">  219</span>&#160;</div>
<div class="line"><a name="l00232"></a><span class="lineno">  232</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00233"></a><span class="lineno">  233</span>&#160;<span class="keywordtype">bool</span> operator ==(<span class="keyword">const</span> Vector2&lt;T&gt;&amp; left, <span class="keyword">const</span> Vector2&lt;T&gt;&amp; right);</div>
<div class="line"><a name="l00234"></a><span class="lineno">  234</span>&#160;</div>
<div class="line"><a name="l00247"></a><span class="lineno">  247</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00248"></a><span class="lineno">  248</span>&#160;<span class="keywordtype">bool</span> operator !=(<span class="keyword">const</span> Vector2&lt;T&gt;&amp; left, <span class="keyword">const</span> Vector2&lt;T&gt;&amp; right);</div>
<div class="line"><a name="l00249"></a><span class="lineno">  249</span>&#160;</div>
<div class="line"><a name="l00250"></a><span class="lineno">  250</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Vector2.inl&gt;</span></div>
<div class="line"><a name="l00251"></a><span class="lineno">  251</span>&#160;</div>
<div class="line"><a name="l00252"></a><span class="lineno">  252</span>&#160;<span class="comment">// Define the most common types</span></div>
<div class="line"><a name="l00253"></a><span class="lineno">  253</span>&#160;<span class="keyword">typedef</span> Vector2&lt;int&gt;          Vector2i;</div>
<div class="line"><a name="l00254"></a><span class="lineno">  254</span>&#160;<span class="keyword">typedef</span> Vector2&lt;unsigned int&gt; Vector2u;</div>
<div class="line"><a name="l00255"></a><span class="lineno">  255</span>&#160;<span class="keyword">typedef</span> Vector2&lt;float&gt;        Vector2f;</div>
<div class="line"><a name="l00256"></a><span class="lineno">  256</span>&#160;</div>
<div class="line"><a name="l00257"></a><span class="lineno">  257</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00258"></a><span class="lineno">  258</span>&#160;</div>
<div class="line"><a name="l00259"></a><span class="lineno">  259</span>&#160;</div>
<div class="line"><a name="l00260"></a><span class="lineno">  260</span>&#160;<span class="preprocessor">#endif // SFML_VECTOR2_HPP</span></div>
<div class="line"><a name="l00261"></a><span class="lineno">  261</span>&#160;</div>
<div class="line"><a name="l00262"></a><span class="lineno">  262</span>&#160;</div>
<div class="ttc" id="classsf_1_1Vector2_php_a420f2481b015f4eb929c75f2af564299"><div class="ttname"><a href="classsf_1_1Vector2.php#a420f2481b015f4eb929c75f2af564299">sf::Vector2::y</a></div><div class="ttdeci">T y</div><div class="ttdoc">Y coordinate of the vector. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2System_2Vector2_8hpp_source.php#l00076">include/SFML/System/Vector2.hpp:76</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Audio_2AlResource_8hpp_source.php#l00034">include/SFML/Audio/AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Vector2_php_a58c32383b5291380db4b43a289f75988"><div class="ttname"><a href="classsf_1_1Vector2.php#a58c32383b5291380db4b43a289f75988">sf::Vector2::Vector2</a></div><div class="ttdeci">Vector2()</div><div class="ttdoc">Default constructor. </div></div>
<div class="ttc" id="classsf_1_1Vector2_php_a1e6ad77fa155f3753bfb92699bd28141"><div class="ttname"><a href="classsf_1_1Vector2.php#a1e6ad77fa155f3753bfb92699bd28141">sf::Vector2::x</a></div><div class="ttdeci">T x</div><div class="ttdoc">X coordinate of the vector. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2System_2Vector2_8hpp_source.php#l00075">include/SFML/System/Vector2.hpp:75</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
