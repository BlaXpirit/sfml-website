<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'RenderWindow.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<div class="title">shared/include/SFML/Graphics/RenderWindow.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2016 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_RENDERWINDOW_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_RENDERWINDOW_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/RenderTarget.hpp&gt;</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Image.hpp&gt;</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/Window.hpp&gt;</span></div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;{</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;<span class="keyword">class </span>SFML_GRAPHICS_API RenderWindow : <span class="keyword">public</span> Window, <span class="keyword">public</span> RenderTarget</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;{</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    RenderWindow();</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;    RenderWindow(VideoMode mode, <span class="keyword">const</span> String&amp; title, Uint32 style = <a class="code" href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71aaf73ca9c9fa787f9da9c1d7527d42734">Style::Default</a>, <span class="keyword">const</span> ContextSettings&amp; settings = ContextSettings());</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;</div><div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;    <span class="keyword">explicit</span> RenderWindow(WindowHandle handle, <span class="keyword">const</span> ContextSettings&amp; settings = ContextSettings());</div><div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;</div><div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;    <span class="keyword">virtual</span> ~RenderWindow();</div><div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;</div><div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;    <span class="keyword">virtual</span> Vector2u getSize() <span class="keyword">const</span>;</div><div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;</div><div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;    SFML_DEPRECATED Image capture() <span class="keyword">const</span>;</div><div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;</div><div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;<span class="keyword">protected</span>:</div><div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;</div><div class="line"><a name="l00152"></a><span class="lineno">  152</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> onCreate();</div><div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160;</div><div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> onResize();</div><div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;</div><div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;<span class="keyword">private</span>:</div><div class="line"><a name="l00164"></a><span class="lineno">  164</span>&#160;</div><div class="line"><a name="l00173"></a><span class="lineno">  173</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">bool</span> activate(<span class="keywordtype">bool</span> active);</div><div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;};</div><div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;</div><div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;</div><div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;</div><div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;<span class="preprocessor">#endif // SFML_RENDERWINDOW_HPP</span></div><div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;</div><div class="line"><a name="l00181"></a><span class="lineno">  181</span>&#160;</div><div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Audio_2AlResource_8hpp_source.php#l00034">include/SFML/Audio/AlResource.hpp:34</a></div></div>
<div class="ttc" id="group__window_php_gga7b9b5c2a2b381d2a42283d745874cb71aaf73ca9c9fa787f9da9c1d7527d42734"><div class="ttname"><a href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71aaf73ca9c9fa787f9da9c1d7527d42734">sf::Style::Default</a></div><div class="ttdoc">Default window style. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Window_2WindowStyle_8hpp_source.php#l00046">include/SFML/Window/WindowStyle.hpp:46</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
