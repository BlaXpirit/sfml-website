<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'PrimitiveType.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_25140c63874fec7ab1624ad7e074f505.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">include/SFML/Graphics/PrimitiveType.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_PRIMITIVETYPE_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_PRIMITIVETYPE_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;{</div>
<div class="line"><a name="l00039"></a><span class="lineno"><a class="line" href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">   39</a></span>&#160;<span class="keyword">enum</span> <a class="code" href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">PrimitiveType</a></div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;{</div>
<div class="line"><a name="l00041"></a><span class="lineno"><a class="line" href="group__graphics.php#gga5ee56ac1339984909610713096283b1ba85cf551ca780a29ec5df3ee9fc282c22">   41</a></span>&#160;    <a class="code" href="group__graphics.php#gga5ee56ac1339984909610713096283b1ba85cf551ca780a29ec5df3ee9fc282c22">Points</a>,        </div>
<div class="line"><a name="l00042"></a><span class="lineno"><a class="line" href="group__graphics.php#gga5ee56ac1339984909610713096283b1ba2017328f9eda40a9aade94d5c45d0e8c">   42</a></span>&#160;    <a class="code" href="group__graphics.php#gga5ee56ac1339984909610713096283b1ba2017328f9eda40a9aade94d5c45d0e8c">Lines</a>,         </div>
<div class="line"><a name="l00043"></a><span class="lineno"><a class="line" href="group__graphics.php#gga5ee56ac1339984909610713096283b1baa58596ca614193671ca68cc213d8ecf1">   43</a></span>&#160;    <a class="code" href="group__graphics.php#gga5ee56ac1339984909610713096283b1baa58596ca614193671ca68cc213d8ecf1">LineStrip</a>,     </div>
<div class="line"><a name="l00044"></a><span class="lineno"><a class="line" href="group__graphics.php#gga5ee56ac1339984909610713096283b1babdd5e75b8944a886fdaa30e5bb3adc0d">   44</a></span>&#160;    <a class="code" href="group__graphics.php#gga5ee56ac1339984909610713096283b1babdd5e75b8944a886fdaa30e5bb3adc0d">Triangles</a>,     </div>
<div class="line"><a name="l00045"></a><span class="lineno"><a class="line" href="group__graphics.php#gga5ee56ac1339984909610713096283b1bae9b9616d82cb0d0dd4fe0c9e14f7a22a">   45</a></span>&#160;    <a class="code" href="group__graphics.php#gga5ee56ac1339984909610713096283b1bae9b9616d82cb0d0dd4fe0c9e14f7a22a">TriangleStrip</a>, </div>
<div class="line"><a name="l00046"></a><span class="lineno"><a class="line" href="group__graphics.php#gga5ee56ac1339984909610713096283b1ba00348a97a2ba25f9d9325d5b9933abc3">   46</a></span>&#160;    <a class="code" href="group__graphics.php#gga5ee56ac1339984909610713096283b1ba00348a97a2ba25f9d9325d5b9933abc3">TriangleFan</a>,   </div>
<div class="line"><a name="l00047"></a><span class="lineno"><a class="line" href="group__graphics.php#gga5ee56ac1339984909610713096283b1bac968add05250b2cf59350dc68043a3c0">   47</a></span>&#160;    <a class="code" href="group__graphics.php#gga5ee56ac1339984909610713096283b1bac968add05250b2cf59350dc68043a3c0">Quads</a>,         </div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;    <span class="comment">// Deprecated names</span></div>
<div class="line"><a name="l00050"></a><span class="lineno"><a class="line" href="group__graphics.php#gga5ee56ac1339984909610713096283b1bafc070260a0222df367922706bbeb905a">   50</a></span>&#160;    <a class="code" href="group__graphics.php#gga5ee56ac1339984909610713096283b1bafc070260a0222df367922706bbeb905a">LinesStrip</a>     = <a class="code" href="group__graphics.php#gga5ee56ac1339984909610713096283b1baa58596ca614193671ca68cc213d8ecf1">LineStrip</a>,     </div>
<div class="line"><a name="l00051"></a><span class="lineno"><a class="line" href="group__graphics.php#gga5ee56ac1339984909610713096283b1baf5ef0ffa5d13f9ea3e0eb18a2a8da7fb">   51</a></span>&#160;    <a class="code" href="group__graphics.php#gga5ee56ac1339984909610713096283b1baf5ef0ffa5d13f9ea3e0eb18a2a8da7fb">TrianglesStrip</a> = <a class="code" href="group__graphics.php#gga5ee56ac1339984909610713096283b1bae9b9616d82cb0d0dd4fe0c9e14f7a22a">TriangleStrip</a>, </div>
<div class="line"><a name="l00052"></a><span class="lineno"><a class="line" href="group__graphics.php#gga5ee56ac1339984909610713096283b1ba698ecd8ec938b4132412b8da44a1a6be">   52</a></span>&#160;    <a class="code" href="group__graphics.php#gga5ee56ac1339984909610713096283b1ba698ecd8ec938b4132412b8da44a1a6be">TrianglesFan</a>   = <a class="code" href="group__graphics.php#gga5ee56ac1339984909610713096283b1ba00348a97a2ba25f9d9325d5b9933abc3">TriangleFan</a>    </div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;};</div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;</div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;<span class="preprocessor">#endif // SFML_PRIMITIVETYPE_HPP</span></div>
<div class="ttc" id="group__graphics_php_ga5ee56ac1339984909610713096283b1b"><div class="ttname"><a href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">sf::PrimitiveType</a></div><div class="ttdeci">PrimitiveType</div><div class="ttdoc">Types of primitives that a sf::VertexArray can render. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Graphics_2PrimitiveType_8hpp_source.php#l00039">include/SFML/Graphics/PrimitiveType.hpp:39</a></div></div>
<div class="ttc" id="group__graphics_php_gga5ee56ac1339984909610713096283b1ba698ecd8ec938b4132412b8da44a1a6be"><div class="ttname"><a href="group__graphics.php#gga5ee56ac1339984909610713096283b1ba698ecd8ec938b4132412b8da44a1a6be">sf::TrianglesFan</a></div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Graphics_2PrimitiveType_8hpp_source.php#l00052">include/SFML/Graphics/PrimitiveType.hpp:52</a></div></div>
<div class="ttc" id="group__graphics_php_gga5ee56ac1339984909610713096283b1bafc070260a0222df367922706bbeb905a"><div class="ttname"><a href="group__graphics.php#gga5ee56ac1339984909610713096283b1bafc070260a0222df367922706bbeb905a">sf::LinesStrip</a></div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Graphics_2PrimitiveType_8hpp_source.php#l00050">include/SFML/Graphics/PrimitiveType.hpp:50</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Audio_2AlResource_8hpp_source.php#l00034">include/SFML/Audio/AlResource.hpp:34</a></div></div>
<div class="ttc" id="group__graphics_php_gga5ee56ac1339984909610713096283b1babdd5e75b8944a886fdaa30e5bb3adc0d"><div class="ttname"><a href="group__graphics.php#gga5ee56ac1339984909610713096283b1babdd5e75b8944a886fdaa30e5bb3adc0d">sf::Triangles</a></div><div class="ttdoc">List of individual triangles. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Graphics_2PrimitiveType_8hpp_source.php#l00044">include/SFML/Graphics/PrimitiveType.hpp:44</a></div></div>
<div class="ttc" id="group__graphics_php_gga5ee56ac1339984909610713096283b1baf5ef0ffa5d13f9ea3e0eb18a2a8da7fb"><div class="ttname"><a href="group__graphics.php#gga5ee56ac1339984909610713096283b1baf5ef0ffa5d13f9ea3e0eb18a2a8da7fb">sf::TrianglesStrip</a></div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Graphics_2PrimitiveType_8hpp_source.php#l00051">include/SFML/Graphics/PrimitiveType.hpp:51</a></div></div>
<div class="ttc" id="group__graphics_php_gga5ee56ac1339984909610713096283b1ba2017328f9eda40a9aade94d5c45d0e8c"><div class="ttname"><a href="group__graphics.php#gga5ee56ac1339984909610713096283b1ba2017328f9eda40a9aade94d5c45d0e8c">sf::Lines</a></div><div class="ttdoc">List of individual lines. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Graphics_2PrimitiveType_8hpp_source.php#l00042">include/SFML/Graphics/PrimitiveType.hpp:42</a></div></div>
<div class="ttc" id="group__graphics_php_gga5ee56ac1339984909610713096283b1bac968add05250b2cf59350dc68043a3c0"><div class="ttname"><a href="group__graphics.php#gga5ee56ac1339984909610713096283b1bac968add05250b2cf59350dc68043a3c0">sf::Quads</a></div><div class="ttdoc">List of individual quads (deprecated, don&#39;t work with OpenGL ES) </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Graphics_2PrimitiveType_8hpp_source.php#l00047">include/SFML/Graphics/PrimitiveType.hpp:47</a></div></div>
<div class="ttc" id="group__graphics_php_gga5ee56ac1339984909610713096283b1ba85cf551ca780a29ec5df3ee9fc282c22"><div class="ttname"><a href="group__graphics.php#gga5ee56ac1339984909610713096283b1ba85cf551ca780a29ec5df3ee9fc282c22">sf::Points</a></div><div class="ttdoc">List of individual points. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Graphics_2PrimitiveType_8hpp_source.php#l00041">include/SFML/Graphics/PrimitiveType.hpp:41</a></div></div>
<div class="ttc" id="group__graphics_php_gga5ee56ac1339984909610713096283b1bae9b9616d82cb0d0dd4fe0c9e14f7a22a"><div class="ttname"><a href="group__graphics.php#gga5ee56ac1339984909610713096283b1bae9b9616d82cb0d0dd4fe0c9e14f7a22a">sf::TriangleStrip</a></div><div class="ttdoc">List of connected triangles, a point uses the two previous points to form a triangle. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Graphics_2PrimitiveType_8hpp_source.php#l00045">include/SFML/Graphics/PrimitiveType.hpp:45</a></div></div>
<div class="ttc" id="group__graphics_php_gga5ee56ac1339984909610713096283b1ba00348a97a2ba25f9d9325d5b9933abc3"><div class="ttname"><a href="group__graphics.php#gga5ee56ac1339984909610713096283b1ba00348a97a2ba25f9d9325d5b9933abc3">sf::TriangleFan</a></div><div class="ttdoc">List of connected triangles, a point uses the common center and the previous point to form a triangle...</div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Graphics_2PrimitiveType_8hpp_source.php#l00046">include/SFML/Graphics/PrimitiveType.hpp:46</a></div></div>
<div class="ttc" id="group__graphics_php_gga5ee56ac1339984909610713096283b1baa58596ca614193671ca68cc213d8ecf1"><div class="ttname"><a href="group__graphics.php#gga5ee56ac1339984909610713096283b1baa58596ca614193671ca68cc213d8ecf1">sf::LineStrip</a></div><div class="ttdoc">List of connected lines, a point uses the previous point to form a line. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Graphics_2PrimitiveType_8hpp_source.php#l00043">include/SFML/Graphics/PrimitiveType.hpp:43</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
