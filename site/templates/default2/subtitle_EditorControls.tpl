<style>
	.st-controler{
		float: left;
	}
</style>



<DIV class="catglow">
<DIV class="cathead-m">
<DIV class="cathead-r">
<DIV class="cathead-l">                    
	{title}                
</DIV>
</DIV>
</DIV>
<DIV class="trigger active">
</DIV>
<DIV class="collapsethis">
<TABLE class="cat" cellSpacing="0" cellPadding="0" width="100%">
  <TBODY>
  <TR>
    <TD class="forumdetails"><SPAN class="forum-descriptions">



<!-- editor controls -->
<div id="editorcontrols" style="width: 99%;">


<div class="st-controler">
<input type="image" class="st-imgcontroler" src="templates/default2/tmp/Left-right.png" title="Increase Replay Time" onclick="ShowElement('irt');"/>
</div>

<div class="st-controler">
<input type="image" class="st-imgcontroler" src="templates/default2/tmp/Increase_time.png" title="Increase Time Shift" onclick="ShowElement('its');"/>
</div>

<div class="st-controler">
<input type="image" class="st-imgcontroler" src="templates/default2/tmp/Decrease_time.png" title="Decrease Time Shift" onclick="ShowElement('dts');"/>
</div>


<div style="clear: left;"></div>

	<div id='irt'>
	<form method='post' action='index.php'>
	increase replay time: 
	<select name='irtseconds' onchange='this.form.submit();'>
	<option value='0' >0</option><option value='1' >1</option><option value='2' >2</option><option value='3' >3</option><option value='4' selected='selected'>4</option><option value='5' >5</option><option value='6' >6</option><option value='7' >7</option><option value='8' >8</option><option value='9' >9</option><option value='10' >10</option>
	</select>
	 seconds
	<input type='hidden' name='subtitle_id' value='59'/>
	<input type='hidden' name='page' value='subtitle'/>
	<input type='hidden' name='action' value='open'/>
	<input type='hidden' name='irtsave' value='yes'/>
	</form>
	</div>
	
	
	<div id='its'>
	<form method='post' action='index.php'>
	increase time shift: 
	from line <select name='itsfrom'><option value='1'>1</option><option value='2'>2</option></select>
	to line <select name='itsto'><option value='1'>1</option><option value='2'>2</option></select>
	increase <select name='itsseconds'><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option><option value='51'>51</option><option value='52'>52</option><option value='53'>53</option><option value='54'>54</option><option value='55'>55</option><option value='56'>56</option><option value='57'>57</option><option value='58'>58</option><option value='59'>59</option><option value='60'>60</option><option value='61'>61</option><option value='62'>62</option><option value='63'>63</option><option value='64'>64</option><option value='65'>65</option><option value='66'>66</option><option value='67'>67</option><option value='68'>68</option><option value='69'>69</option><option value='70'>70</option><option value='71'>71</option><option value='72'>72</option><option value='73'>73</option><option value='74'>74</option><option value='75'>75</option><option value='76'>76</option><option value='77'>77</option><option value='78'>78</option><option value='79'>79</option><option value='80'>80</option><option value='81'>81</option><option value='82'>82</option><option value='83'>83</option><option value='84'>84</option><option value='85'>85</option><option value='86'>86</option><option value='87'>87</option><option value='88'>88</option><option value='89'>89</option><option value='90'>90</option><option value='91'>91</option><option value='92'>92</option><option value='93'>93</option><option value='94'>94</option><option value='95'>95</option><option value='96'>96</option><option value='97'>97</option><option value='98'>98</option><option value='99'>99</option><option value='100'>100</option><option value='101'>101</option><option value='102'>102</option><option value='103'>103</option><option value='104'>104</option><option value='105'>105</option><option value='106'>106</option><option value='107'>107</option><option value='108'>108</option><option value='109'>109</option><option value='110'>110</option><option value='111'>111</option><option value='112'>112</option><option value='113'>113</option><option value='114'>114</option><option value='115'>115</option><option value='116'>116</option><option value='117'>117</option><option value='118'>118</option><option value='119'>119</option><option value='120'>120</option><option value='121'>121</option><option value='122'>122</option><option value='123'>123</option><option value='124'>124</option><option value='125'>125</option><option value='126'>126</option><option value='127'>127</option><option value='128'>128</option><option value='129'>129</option><option value='130'>130</option><option value='131'>131</option><option value='132'>132</option><option value='133'>133</option><option value='134'>134</option><option value='135'>135</option><option value='136'>136</option><option value='137'>137</option><option value='138'>138</option><option value='139'>139</option><option value='140'>140</option><option value='141'>141</option><option value='142'>142</option><option value='143'>143</option><option value='144'>144</option><option value='145'>145</option><option value='146'>146</option><option value='147'>147</option><option value='148'>148</option><option value='149'>149</option><option value='150'>150</option><option value='151'>151</option><option value='152'>152</option><option value='153'>153</option><option value='154'>154</option><option value='155'>155</option><option value='156'>156</option><option value='157'>157</option><option value='158'>158</option><option value='159'>159</option><option value='160'>160</option><option value='161'>161</option><option value='162'>162</option><option value='163'>163</option><option value='164'>164</option><option value='165'>165</option><option value='166'>166</option><option value='167'>167</option><option value='168'>168</option><option value='169'>169</option><option value='170'>170</option><option value='171'>171</option><option value='172'>172</option><option value='173'>173</option><option value='174'>174</option><option value='175'>175</option><option value='176'>176</option><option value='177'>177</option><option value='178'>178</option><option value='179'>179</option><option value='180'>180</option><option value='181'>181</option><option value='182'>182</option><option value='183'>183</option><option value='184'>184</option><option value='185'>185</option><option value='186'>186</option><option value='187'>187</option><option value='188'>188</option><option value='189'>189</option><option value='190'>190</option><option value='191'>191</option><option value='192'>192</option><option value='193'>193</option><option value='194'>194</option><option value='195'>195</option><option value='196'>196</option><option value='197'>197</option><option value='198'>198</option><option value='199'>199</option><option value='200'>200</option><option value='201'>201</option><option value='202'>202</option><option value='203'>203</option><option value='204'>204</option><option value='205'>205</option><option value='206'>206</option><option value='207'>207</option><option value='208'>208</option><option value='209'>209</option><option value='210'>210</option><option value='211'>211</option><option value='212'>212</option><option value='213'>213</option><option value='214'>214</option><option value='215'>215</option><option value='216'>216</option><option value='217'>217</option><option value='218'>218</option><option value='219'>219</option><option value='220'>220</option><option value='221'>221</option><option value='222'>222</option><option value='223'>223</option><option value='224'>224</option><option value='225'>225</option><option value='226'>226</option><option value='227'>227</option><option value='228'>228</option><option value='229'>229</option><option value='230'>230</option><option value='231'>231</option><option value='232'>232</option><option value='233'>233</option><option value='234'>234</option><option value='235'>235</option><option value='236'>236</option><option value='237'>237</option><option value='238'>238</option><option value='239'>239</option><option value='240'>240</option><option value='241'>241</option><option value='242'>242</option><option value='243'>243</option><option value='244'>244</option><option value='245'>245</option><option value='246'>246</option><option value='247'>247</option><option value='248'>248</option><option value='249'>249</option><option value='250'>250</option><option value='251'>251</option><option value='252'>252</option><option value='253'>253</option><option value='254'>254</option><option value='255'>255</option><option value='256'>256</option><option value='257'>257</option><option value='258'>258</option><option value='259'>259</option><option value='260'>260</option><option value='261'>261</option><option value='262'>262</option><option value='263'>263</option><option value='264'>264</option><option value='265'>265</option><option value='266'>266</option><option value='267'>267</option><option value='268'>268</option><option value='269'>269</option><option value='270'>270</option><option value='271'>271</option><option value='272'>272</option><option value='273'>273</option><option value='274'>274</option><option value='275'>275</option><option value='276'>276</option><option value='277'>277</option><option value='278'>278</option><option value='279'>279</option><option value='280'>280</option><option value='281'>281</option><option value='282'>282</option><option value='283'>283</option><option value='284'>284</option><option value='285'>285</option><option value='286'>286</option><option value='287'>287</option><option value='288'>288</option><option value='289'>289</option><option value='290'>290</option><option value='291'>291</option><option value='292'>292</option><option value='293'>293</option><option value='294'>294</option><option value='295'>295</option><option value='296'>296</option><option value='297'>297</option><option value='298'>298</option><option value='299'>299</option><option value='300'>300</option></select> seconds
	<input type='submit' value='save' />
	<input type='hidden' name='subtitle_id' value='59'/>
	<input type='hidden' name='page' value='subtitle'/>
	<input type='hidden' name='action' value='open'/>
	<input type='hidden' name='itssave' value='yes'/>
	</form>
	</div>
	
	
	<div id='dts'>
	<form method='post' action='index.php'>
	Decrease time shift: 
	from line <select name='dtsfrom'><option value='1'>1</option><option value='2'>2</option></select>
	to line <select name='dtsto'><option value='1'>1</option><option value='2'>2</option></select>
	decrease <select name='dtsseconds'><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option><option value='51'>51</option><option value='52'>52</option><option value='53'>53</option><option value='54'>54</option><option value='55'>55</option><option value='56'>56</option><option value='57'>57</option><option value='58'>58</option><option value='59'>59</option><option value='60'>60</option><option value='61'>61</option><option value='62'>62</option><option value='63'>63</option><option value='64'>64</option><option value='65'>65</option><option value='66'>66</option><option value='67'>67</option><option value='68'>68</option><option value='69'>69</option><option value='70'>70</option><option value='71'>71</option><option value='72'>72</option><option value='73'>73</option><option value='74'>74</option><option value='75'>75</option><option value='76'>76</option><option value='77'>77</option><option value='78'>78</option><option value='79'>79</option><option value='80'>80</option><option value='81'>81</option><option value='82'>82</option><option value='83'>83</option><option value='84'>84</option><option value='85'>85</option><option value='86'>86</option><option value='87'>87</option><option value='88'>88</option><option value='89'>89</option><option value='90'>90</option><option value='91'>91</option><option value='92'>92</option><option value='93'>93</option><option value='94'>94</option><option value='95'>95</option><option value='96'>96</option><option value='97'>97</option><option value='98'>98</option><option value='99'>99</option><option value='100'>100</option><option value='101'>101</option><option value='102'>102</option><option value='103'>103</option><option value='104'>104</option><option value='105'>105</option><option value='106'>106</option><option value='107'>107</option><option value='108'>108</option><option value='109'>109</option><option value='110'>110</option><option value='111'>111</option><option value='112'>112</option><option value='113'>113</option><option value='114'>114</option><option value='115'>115</option><option value='116'>116</option><option value='117'>117</option><option value='118'>118</option><option value='119'>119</option><option value='120'>120</option><option value='121'>121</option><option value='122'>122</option><option value='123'>123</option><option value='124'>124</option><option value='125'>125</option><option value='126'>126</option><option value='127'>127</option><option value='128'>128</option><option value='129'>129</option><option value='130'>130</option><option value='131'>131</option><option value='132'>132</option><option value='133'>133</option><option value='134'>134</option><option value='135'>135</option><option value='136'>136</option><option value='137'>137</option><option value='138'>138</option><option value='139'>139</option><option value='140'>140</option><option value='141'>141</option><option value='142'>142</option><option value='143'>143</option><option value='144'>144</option><option value='145'>145</option><option value='146'>146</option><option value='147'>147</option><option value='148'>148</option><option value='149'>149</option><option value='150'>150</option><option value='151'>151</option><option value='152'>152</option><option value='153'>153</option><option value='154'>154</option><option value='155'>155</option><option value='156'>156</option><option value='157'>157</option><option value='158'>158</option><option value='159'>159</option><option value='160'>160</option><option value='161'>161</option><option value='162'>162</option><option value='163'>163</option><option value='164'>164</option><option value='165'>165</option><option value='166'>166</option><option value='167'>167</option><option value='168'>168</option><option value='169'>169</option><option value='170'>170</option><option value='171'>171</option><option value='172'>172</option><option value='173'>173</option><option value='174'>174</option><option value='175'>175</option><option value='176'>176</option><option value='177'>177</option><option value='178'>178</option><option value='179'>179</option><option value='180'>180</option><option value='181'>181</option><option value='182'>182</option><option value='183'>183</option><option value='184'>184</option><option value='185'>185</option><option value='186'>186</option><option value='187'>187</option><option value='188'>188</option><option value='189'>189</option><option value='190'>190</option><option value='191'>191</option><option value='192'>192</option><option value='193'>193</option><option value='194'>194</option><option value='195'>195</option><option value='196'>196</option><option value='197'>197</option><option value='198'>198</option><option value='199'>199</option><option value='200'>200</option><option value='201'>201</option><option value='202'>202</option><option value='203'>203</option><option value='204'>204</option><option value='205'>205</option><option value='206'>206</option><option value='207'>207</option><option value='208'>208</option><option value='209'>209</option><option value='210'>210</option><option value='211'>211</option><option value='212'>212</option><option value='213'>213</option><option value='214'>214</option><option value='215'>215</option><option value='216'>216</option><option value='217'>217</option><option value='218'>218</option><option value='219'>219</option><option value='220'>220</option><option value='221'>221</option><option value='222'>222</option><option value='223'>223</option><option value='224'>224</option><option value='225'>225</option><option value='226'>226</option><option value='227'>227</option><option value='228'>228</option><option value='229'>229</option><option value='230'>230</option><option value='231'>231</option><option value='232'>232</option><option value='233'>233</option><option value='234'>234</option><option value='235'>235</option><option value='236'>236</option><option value='237'>237</option><option value='238'>238</option><option value='239'>239</option><option value='240'>240</option><option value='241'>241</option><option value='242'>242</option><option value='243'>243</option><option value='244'>244</option><option value='245'>245</option><option value='246'>246</option><option value='247'>247</option><option value='248'>248</option><option value='249'>249</option><option value='250'>250</option><option value='251'>251</option><option value='252'>252</option><option value='253'>253</option><option value='254'>254</option><option value='255'>255</option><option value='256'>256</option><option value='257'>257</option><option value='258'>258</option><option value='259'>259</option><option value='260'>260</option><option value='261'>261</option><option value='262'>262</option><option value='263'>263</option><option value='264'>264</option><option value='265'>265</option><option value='266'>266</option><option value='267'>267</option><option value='268'>268</option><option value='269'>269</option><option value='270'>270</option><option value='271'>271</option><option value='272'>272</option><option value='273'>273</option><option value='274'>274</option><option value='275'>275</option><option value='276'>276</option><option value='277'>277</option><option value='278'>278</option><option value='279'>279</option><option value='280'>280</option><option value='281'>281</option><option value='282'>282</option><option value='283'>283</option><option value='284'>284</option><option value='285'>285</option><option value='286'>286</option><option value='287'>287</option><option value='288'>288</option><option value='289'>289</option><option value='290'>290</option><option value='291'>291</option><option value='292'>292</option><option value='293'>293</option><option value='294'>294</option><option value='295'>295</option><option value='296'>296</option><option value='297'>297</option><option value='298'>298</option><option value='299'>299</option><option value='300'>300</option></select> seconds
	<input type='submit' value='save' />
	<input type='hidden' name='subtitle_id' value='59'/>
	<input type='hidden' name='page' value='subtitle'/>
	<input type='hidden' name='action' value='open'/>
	<input type='hidden' name='dtssave' value='yes'/>
	</form>
	</div>

<script>
	document.getElementById("irt").style.display = 'none';
	document.getElementById("its").style.display = 'none';
	document.getElementById("dts").style.display = 'none';
	
	function ShowElement(id){
	document.getElementById("irt").style.display = 'none';
	document.getElementById("its").style.display = 'none';
	document.getElementById("dts").style.display = 'none';
		if(id=="irt"){document.getElementById("irt").style.display = 'block';}
		if(id=="its"){document.getElementById("its").style.display = 'block';}
		if(id=="dts"){document.getElementById("dts").style.display = 'block';}
	}
</script>






</div>
<!-- end editor controls -->	



	</SPAN></TD>
	</TR>
	</TBODY>
	</TABLE>
</DIV></div>

<br>