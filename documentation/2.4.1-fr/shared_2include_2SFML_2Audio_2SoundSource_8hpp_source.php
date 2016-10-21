<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'SoundSource.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_a2d5a90f1bdcb5808a62d5b0d5da2693.php">shared</a></li><li class="navelem"><a class="el" href="dir_43d543a298a049144b52f1b4453e3c7a.php">include</a></li><li class="navelem"><a class="el" href="dir_58a6f29869daa158b2acc7d96b6fe230.php">SFML</a></li><li class="navelem"><a class="el" href="dir_80d9b086ced28602da7cbf4b92db509c.php">Audio</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">shared/include/SFML/Audio/SoundSource.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_SOUNDSOURCE_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_SOUNDSOURCE_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Audio/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Audio/AlResource.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Vector3.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;{</div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;<span class="keyword">class </span>SFML_AUDIO_API SoundSource : AlResource</div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;{</div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;</div>
<div class="line"><a name="l00050"></a><span class="lineno"><a class="line" href="classsf_1_1SoundSource.php#ac43af72c98c077500b239bc75b812f03">   50</a></span>&#160;    <span class="keyword">enum</span> <a class="code" href="classsf_1_1SoundSource.php#ac43af72c98c077500b239bc75b812f03">Status</a></div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;    {</div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;        Stopped, </div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;        Paused,  </div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;        Playing  </div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    };</div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;    <a class="code" href="classsf_1_1SoundSource.php">SoundSource</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1SoundSource.php">SoundSource</a>&amp; copy);</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;</div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;    <span class="keyword">virtual</span> ~<a class="code" href="classsf_1_1SoundSource.php">SoundSource</a>();</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;</div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;    <span class="keywordtype">void</span> setPitch(<span class="keywordtype">float</span> pitch);</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;    <span class="keywordtype">void</span> setVolume(<span class="keywordtype">float</span> volume);</div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;</div>
<div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;    <span class="keywordtype">void</span> setPosition(<span class="keywordtype">float</span> x, <span class="keywordtype">float</span> y, <span class="keywordtype">float</span> z);</div>
<div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;</div>
<div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;    <span class="keywordtype">void</span> setPosition(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Vector3f</a>&amp; position);</div>
<div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;</div>
<div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;    <span class="keywordtype">void</span> setRelativeToListener(<span class="keywordtype">bool</span> relative);</div>
<div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;</div>
<div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;    <span class="keywordtype">void</span> setMinDistance(<span class="keywordtype">float</span> distance);</div>
<div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;</div>
<div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;    <span class="keywordtype">void</span> setAttenuation(<span class="keywordtype">float</span> attenuation);</div>
<div class="line"><a name="l00181"></a><span class="lineno">  181</span>&#160;</div>
<div class="line"><a name="l00190"></a><span class="lineno">  190</span>&#160;    <span class="keywordtype">float</span> getPitch() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00191"></a><span class="lineno">  191</span>&#160;</div>
<div class="line"><a name="l00200"></a><span class="lineno">  200</span>&#160;    <span class="keywordtype">float</span> getVolume() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00201"></a><span class="lineno">  201</span>&#160;</div>
<div class="line"><a name="l00210"></a><span class="lineno">  210</span>&#160;    <a class="code" href="classsf_1_1Vector3.php">Vector3f</a> getPosition() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00211"></a><span class="lineno">  211</span>&#160;</div>
<div class="line"><a name="l00221"></a><span class="lineno">  221</span>&#160;    <span class="keywordtype">bool</span> isRelativeToListener() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00222"></a><span class="lineno">  222</span>&#160;</div>
<div class="line"><a name="l00231"></a><span class="lineno">  231</span>&#160;    <span class="keywordtype">float</span> getMinDistance() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00232"></a><span class="lineno">  232</span>&#160;</div>
<div class="line"><a name="l00241"></a><span class="lineno">  241</span>&#160;    <span class="keywordtype">float</span> getAttenuation() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00242"></a><span class="lineno">  242</span>&#160;</div>
<div class="line"><a name="l00251"></a><span class="lineno">  251</span>&#160;    <a class="code" href="classsf_1_1SoundSource.php">SoundSource</a>&amp; operator =(<span class="keyword">const</span> <a class="code" href="classsf_1_1SoundSource.php">SoundSource</a>&amp; right);</div>
<div class="line"><a name="l00252"></a><span class="lineno">  252</span>&#160;</div>
<div class="line"><a name="l00253"></a><span class="lineno">  253</span>&#160;<span class="keyword">protected</span>:</div>
<div class="line"><a name="l00254"></a><span class="lineno">  254</span>&#160;</div>
<div class="line"><a name="l00261"></a><span class="lineno">  261</span>&#160;    <a class="code" href="classsf_1_1SoundSource.php">SoundSource</a>();</div>
<div class="line"><a name="l00262"></a><span class="lineno">  262</span>&#160;</div>
<div class="line"><a name="l00269"></a><span class="lineno">  269</span>&#160;    Status getStatus() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00270"></a><span class="lineno">  270</span>&#160;</div>
<div class="line"><a name="l00272"></a><span class="lineno">  272</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00274"></a><span class="lineno">  274</span>&#160;<span class="comment"></span>    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> m_source; </div>
<div class="line"><a name="l00275"></a><span class="lineno">  275</span>&#160;};</div>
<div class="line"><a name="l00276"></a><span class="lineno">  276</span>&#160;</div>
<div class="line"><a name="l00277"></a><span class="lineno">  277</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00278"></a><span class="lineno">  278</span>&#160;</div>
<div class="line"><a name="l00279"></a><span class="lineno">  279</span>&#160;</div>
<div class="line"><a name="l00280"></a><span class="lineno">  280</span>&#160;<span class="preprocessor">#endif // SFML_SOUNDSOURCE_HPP</span></div>
<div class="line"><a name="l00281"></a><span class="lineno">  281</span>&#160;</div>
<div class="line"><a name="l00282"></a><span class="lineno">  282</span>&#160;</div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Audio_2AlResource_8hpp_source.php#l00034">include/SFML/Audio/AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1SoundSource_php_ac43af72c98c077500b239bc75b812f03"><div class="ttname"><a href="classsf_1_1SoundSource.php#ac43af72c98c077500b239bc75b812f03">sf::SoundSource::Status</a></div><div class="ttdeci">Status</div><div class="ttdoc">Enumeration of the sound source states. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Audio_2SoundSource_8hpp_source.php#l00050">include/SFML/Audio/SoundSource.hpp:50</a></div></div>
<div class="ttc" id="classsf_1_1SoundSource_php"><div class="ttname"><a href="classsf_1_1SoundSource.php">sf::SoundSource</a></div><div class="ttdoc">Base class defining a sound&#39;s properties. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2Audio_2SoundSource_8hpp_source.php#l00042">include/SFML/Audio/SoundSource.hpp:42</a></div></div>
<div class="ttc" id="classsf_1_1Vector3_php"><div class="ttname"><a href="classsf_1_1Vector3.php">sf::Vector3</a></div><div class="ttdoc">Utility template class for manipulating 3-dimensional vectors. </div><div class="ttdef"><b>Definition:</b> <a href="include_2SFML_2System_2Vector3_8hpp_source.php#l00037">include/SFML/System/Vector3.hpp:37</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
