<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'OpenGL.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">include/SFML/OpenGL.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_OPENGL_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_OPENGL_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;</div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Config.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="preprocessor">#if defined(SFML_SYSTEM_WINDOWS)</span></div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;    <span class="comment">// The Visual C++ version of gl.h uses WINGDIAPI and APIENTRY but doesn&#39;t define them</span></div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;<span class="preprocessor">    #ifdef _MSC_VER</span></div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;<span class="preprocessor">        #include &lt;windows.h&gt;</span></div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;<span class="preprocessor">    #endif</span></div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;<span class="preprocessor">    #include &lt;GL/gl.h&gt;</span></div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;<span class="preprocessor">#elif defined(SFML_SYSTEM_LINUX) || defined(SFML_SYSTEM_FREEBSD)</span></div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;</div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;<span class="preprocessor">    #if defined(SFML_OPENGL_ES)</span></div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;<span class="preprocessor">        #include &lt;GLES/gl.h&gt;</span></div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;<span class="preprocessor">        #include &lt;GLES/glext.h&gt;</span></div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;<span class="preprocessor">    #else</span></div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;<span class="preprocessor">        #include &lt;GL/gl.h&gt;</span></div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;<span class="preprocessor">    #endif</span></div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;<span class="preprocessor">#elif defined(SFML_SYSTEM_MACOS)</span></div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;</div>
<div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;<span class="preprocessor">    #include &lt;OpenGL/gl.h&gt;</span></div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;<span class="preprocessor">#elif defined (SFML_SYSTEM_IOS)</span></div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;<span class="preprocessor">    #include &lt;OpenGLES/ES1/gl.h&gt;</span></div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;<span class="preprocessor">    #include &lt;OpenGLES/ES1/glext.h&gt;</span></div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;<span class="preprocessor">#elif defined (SFML_SYSTEM_ANDROID)</span></div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;</div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;<span class="preprocessor">    #include &lt;GLES/gl.h&gt;</span></div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;<span class="preprocessor">    #include &lt;GLES/glext.h&gt;</span></div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    </div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;    <span class="comment">// We&#39;re not using OpenGL ES 2+ yet, but we can use the sRGB extension</span></div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;<span class="preprocessor">    #include &lt;GLES2/gl2ext.h&gt;</span></div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;</div>
<div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;</div>
<div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;</div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;<span class="preprocessor">#endif // SFML_OPENGL_HPP</span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
