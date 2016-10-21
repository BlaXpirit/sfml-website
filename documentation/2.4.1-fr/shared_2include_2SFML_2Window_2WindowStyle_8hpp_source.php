<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'WindowStyle.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_a2d5a90f1bdcb5808a62d5b0d5da2693.php">shared</a></li><li class="navelem"><a class="el" href="dir_43d543a298a049144b52f1b4453e3c7a.php">include</a></li><li class="navelem"><a class="el" href="dir_58a6f29869daa158b2acc7d96b6fe230.php">SFML</a></li><li class="navelem"><a class="el" href="dir_585ad9a4a3e6f876e78c0395a63e7393.php">Window</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">shared/include/SFML/Window/WindowStyle.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_WINDOWSTYLE_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_WINDOWSTYLE_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;{</div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="keyword">namespace </span>Style</div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;{</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;    <span class="keyword">enum</span></div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;    {</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;        <a class="code" href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71ac2b155f5f7b49b49c7fb99655f8da86e">None</a>       = 0,      </div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;        <a class="code" href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71abf046c6fcae63075c651812c6774e389">Titlebar</a>   = 1 &lt;&lt; 0, </div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;        <a class="code" href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71aa7c6f765bd5c0cdd9f81b47871508f3e">Resize</a>     = 1 &lt;&lt; 1, </div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;        <a class="code" href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71a76bbd82b28e359cc0feec9e5ec123b40">Close</a>      = 1 &lt;&lt; 2, </div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;        <a class="code" href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71ac0b0bcb071d1ae40aefb7a1a7464f079">Fullscreen</a> = 1 &lt;&lt; 3, </div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;        <a class="code" href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71aaf73ca9c9fa787f9da9c1d7527d42734">Default</a> = <a class="code" href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71abf046c6fcae63075c651812c6774e389">Titlebar</a> | <a class="code" href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71aa7c6f765bd5c0cdd9f81b47871508f3e">Resize</a> | <a class="code" href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71a76bbd82b28e359cc0feec9e5ec123b40">Close</a> </div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;    };</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;}</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;</div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;<span class="preprocessor">#endif // SFML_WINDOWSTYLE_HPP</span></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Audio_2AlResource_8hpp_source.php#l00034">include/SFML/Audio/AlResource.hpp:34</a></div></div>
<div class="ttc" id="group__window_php_gga7b9b5c2a2b381d2a42283d745874cb71ac2b155f5f7b49b49c7fb99655f8da86e"><div class="ttname"><a href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71ac2b155f5f7b49b49c7fb99655f8da86e">sf::Style::None</a></div><div class="ttdoc">No border / title bar (this flag and all others are mutually exclusive) </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Window_2WindowStyle_8hpp_source.php#l00040">include/SFML/Window/WindowStyle.hpp:40</a></div></div>
<div class="ttc" id="group__window_php_gga7b9b5c2a2b381d2a42283d745874cb71abf046c6fcae63075c651812c6774e389"><div class="ttname"><a href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71abf046c6fcae63075c651812c6774e389">sf::Style::Titlebar</a></div><div class="ttdoc">Title bar + fixed border. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Window_2WindowStyle_8hpp_source.php#l00041">include/SFML/Window/WindowStyle.hpp:41</a></div></div>
<div class="ttc" id="group__window_php_gga7b9b5c2a2b381d2a42283d745874cb71aa7c6f765bd5c0cdd9f81b47871508f3e"><div class="ttname"><a href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71aa7c6f765bd5c0cdd9f81b47871508f3e">sf::Style::Resize</a></div><div class="ttdoc">Title bar + resizable border + maximize button. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Window_2WindowStyle_8hpp_source.php#l00042">include/SFML/Window/WindowStyle.hpp:42</a></div></div>
<div class="ttc" id="group__window_php_gga7b9b5c2a2b381d2a42283d745874cb71aaf73ca9c9fa787f9da9c1d7527d42734"><div class="ttname"><a href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71aaf73ca9c9fa787f9da9c1d7527d42734">sf::Style::Default</a></div><div class="ttdoc">Default window style. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Window_2WindowStyle_8hpp_source.php#l00046">include/SFML/Window/WindowStyle.hpp:46</a></div></div>
<div class="ttc" id="group__window_php_gga7b9b5c2a2b381d2a42283d745874cb71a76bbd82b28e359cc0feec9e5ec123b40"><div class="ttname"><a href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71a76bbd82b28e359cc0feec9e5ec123b40">sf::Style::Close</a></div><div class="ttdoc">Title bar + close button. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Window_2WindowStyle_8hpp_source.php#l00043">include/SFML/Window/WindowStyle.hpp:43</a></div></div>
<div class="ttc" id="group__window_php_gga7b9b5c2a2b381d2a42283d745874cb71ac0b0bcb071d1ae40aefb7a1a7464f079"><div class="ttname"><a href="group__window.php#gga7b9b5c2a2b381d2a42283d745874cb71ac0b0bcb071d1ae40aefb7a1a7464f079">sf::Style::Fullscreen</a></div><div class="ttdoc">Fullscreen mode (this flag and all others are mutually exclusive) </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Window_2WindowStyle_8hpp_source.php#l00044">include/SFML/Window/WindowStyle.hpp:44</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
