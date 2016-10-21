<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Glsl.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_a2d5a90f1bdcb5808a62d5b0d5da2693.php">shared</a></li><li class="navelem"><a class="el" href="dir_43d543a298a049144b52f1b4453e3c7a.php">include</a></li><li class="navelem"><a class="el" href="dir_58a6f29869daa158b2acc7d96b6fe230.php">SFML</a></li><li class="navelem"><a class="el" href="dir_33aa9c32c91f6e372580815084672c3b.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">shared/include/SFML/Graphics/Glsl.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2016 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_GLSL_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_GLSL_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Transform.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Color.hpp&gt;</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Vector2.hpp&gt;</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Vector3.hpp&gt;</span></div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;{</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">namespace </span>priv</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;{</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;    <span class="comment">// Forward declarations</span></div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;    <span class="keyword">template</span> &lt;std::<span class="keywordtype">size_t</span> Columns, std::<span class="keywordtype">size_t</span> Rows&gt;</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;    <span class="keyword">struct </span>Matrix;</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;    <span class="keyword">struct </span>Vector4;</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Glsl.inl&gt;</span></div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;} <span class="comment">// namespace priv</span></div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;<span class="keyword">namespace </span>Glsl</div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;{</div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;</div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;    <span class="keyword">typedef</span> Vector2&lt;float&gt; <a class="code" href="namespacesf_1_1Glsl.php#abfcb09fe753e2d3afdf5b34ead5ac998">Vec2</a>;</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    <span class="keyword">typedef</span> Vector2&lt;int&gt; <a class="code" href="namespacesf_1_1Glsl.php#a310968541a71ce373f98af70566a8685">Ivec2</a>;</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;    <span class="keyword">typedef</span> Vector2&lt;bool&gt; <a class="code" href="namespacesf_1_1Glsl.php#a7702dd528400bf68fded485341d2589c">Bvec2</a>;</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;</div><div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;    <span class="keyword">typedef</span> Vector3&lt;float&gt; <a class="code" href="namespacesf_1_1Glsl.php#a054bd0a821d072e08de6c358de9f67ad">Vec3</a>;</div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;    <span class="keyword">typedef</span> Vector3&lt;int&gt; <a class="code" href="namespacesf_1_1Glsl.php#a7015052834578e9f820c80d5c0ee68a9">Ivec3</a>;</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;</div><div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;    <span class="keyword">typedef</span> Vector3&lt;bool&gt; <a class="code" href="namespacesf_1_1Glsl.php#a45470800f45fc6a55c3d30ea2ea7f412">Bvec3</a>;</div><div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;</div><div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;<span class="preprocessor">#ifdef SFML_DOXYGEN</span></div><div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;</div><div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;    <span class="keyword">typedef</span> implementation-defined Vec4;</div><div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;</div><div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;    <span class="keyword">typedef</span> implementation-defined Ivec4;</div><div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;</div><div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;    <span class="keyword">typedef</span> implementation-defined Bvec4;</div><div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;</div><div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;    <span class="keyword">typedef</span> implementation-defined Mat3;</div><div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;</div><div class="line"><a name="l00181"></a><span class="lineno">  181</span>&#160;    <span class="keyword">typedef</span> implementation-defined Mat4;</div><div class="line"><a name="l00182"></a><span class="lineno">  182</span>&#160;</div><div class="line"><a name="l00183"></a><span class="lineno">  183</span>&#160;<span class="preprocessor">#else // SFML_DOXYGEN</span></div><div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;</div><div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;    <span class="keyword">typedef</span> priv::Vector4&lt;float&gt; Vec4;</div><div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;    <span class="keyword">typedef</span> priv::Vector4&lt;int&gt; Ivec4;</div><div class="line"><a name="l00187"></a><span class="lineno">  187</span>&#160;    <span class="keyword">typedef</span> priv::Vector4&lt;bool&gt; Bvec4;</div><div class="line"><a name="l00188"></a><span class="lineno">  188</span>&#160;    <span class="keyword">typedef</span> priv::Matrix&lt;3, 3&gt; Mat3;</div><div class="line"><a name="l00189"></a><span class="lineno">  189</span>&#160;    <span class="keyword">typedef</span> priv::Matrix&lt;4, 4&gt; Mat4;</div><div class="line"><a name="l00190"></a><span class="lineno">  190</span>&#160;</div><div class="line"><a name="l00191"></a><span class="lineno">  191</span>&#160;<span class="preprocessor">#endif // SFML_DOXYGEN</span></div><div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;</div><div class="line"><a name="l00193"></a><span class="lineno">  193</span>&#160;} <span class="comment">// namespace Glsl</span></div><div class="line"><a name="l00194"></a><span class="lineno">  194</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00195"></a><span class="lineno">  195</span>&#160;</div><div class="line"><a name="l00196"></a><span class="lineno">  196</span>&#160;<span class="preprocessor">#endif // SFML_GLSL_HPP</span></div><div class="line"><a name="l00197"></a><span class="lineno">  197</span>&#160;</div><div class="line"><a name="l00198"></a><span class="lineno">  198</span>&#160;</div><div class="ttc" id="namespacesf_1_1Glsl_php_a7702dd528400bf68fded485341d2589c"><div class="ttname"><a href="namespacesf_1_1Glsl.php#a7702dd528400bf68fded485341d2589c">sf::Glsl::Bvec2</a></div><div class="ttdeci">Vector2&lt; bool &gt; Bvec2</div><div class="ttdoc">2D bool vector (bvec2 in GLSL) </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Graphics_2Glsl_8hpp_source.php#l00076">include/SFML/Graphics/Glsl.hpp:76</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Audio_2AlResource_8hpp_source.php#l00034">include/SFML/Audio/AlResource.hpp:34</a></div></div>
<div class="ttc" id="namespacesf_1_1Glsl_php_a310968541a71ce373f98af70566a8685"><div class="ttname"><a href="namespacesf_1_1Glsl.php#a310968541a71ce373f98af70566a8685">sf::Glsl::Ivec2</a></div><div class="ttdeci">Vector2&lt; int &gt; Ivec2</div><div class="ttdoc">2D int vector (ivec2 in GLSL) </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Graphics_2Glsl_8hpp_source.php#l00070">include/SFML/Graphics/Glsl.hpp:70</a></div></div>
<div class="ttc" id="namespacesf_1_1Glsl_php_a45470800f45fc6a55c3d30ea2ea7f412"><div class="ttname"><a href="namespacesf_1_1Glsl.php#a45470800f45fc6a55c3d30ea2ea7f412">sf::Glsl::Bvec3</a></div><div class="ttdeci">Vector3&lt; bool &gt; Bvec3</div><div class="ttdoc">3D bool vector (bvec3 in GLSL) </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Graphics_2Glsl_8hpp_source.php#l00094">include/SFML/Graphics/Glsl.hpp:94</a></div></div>
<div class="ttc" id="namespacesf_1_1Glsl_php_a054bd0a821d072e08de6c358de9f67ad"><div class="ttname"><a href="namespacesf_1_1Glsl.php#a054bd0a821d072e08de6c358de9f67ad">sf::Glsl::Vec3</a></div><div class="ttdeci">Vector3&lt; float &gt; Vec3</div><div class="ttdoc">3D float vector (vec3 in GLSL) </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Graphics_2Glsl_8hpp_source.php#l00082">include/SFML/Graphics/Glsl.hpp:82</a></div></div>
<div class="ttc" id="namespacesf_1_1Glsl_php_abfcb09fe753e2d3afdf5b34ead5ac998"><div class="ttname"><a href="namespacesf_1_1Glsl.php#abfcb09fe753e2d3afdf5b34ead5ac998">sf::Glsl::Vec2</a></div><div class="ttdeci">Vector2&lt; float &gt; Vec2</div><div class="ttdoc">2D float vector (vec2 in GLSL) </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Graphics_2Glsl_8hpp_source.php#l00064">include/SFML/Graphics/Glsl.hpp:64</a></div></div>
<div class="ttc" id="namespacesf_1_1Glsl_php_a7015052834578e9f820c80d5c0ee68a9"><div class="ttname"><a href="namespacesf_1_1Glsl.php#a7015052834578e9f820c80d5c0ee68a9">sf::Glsl::Ivec3</a></div><div class="ttdeci">Vector3&lt; int &gt; Ivec3</div><div class="ttdoc">3D int vector (ivec3 in GLSL) </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Graphics_2Glsl_8hpp_source.php#l00088">include/SFML/Graphics/Glsl.hpp:88</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
