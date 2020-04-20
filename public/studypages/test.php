<html><head>
  <style>
    .base-speak{
      background-color: pink;
    }  
    .base-list{
      background-color: yellow;
    }  
    .change{
      background-color: cyan;
    }
    .article-section{
      background-color: purple;
    }
  </style><avalon ms-skip="1" class="avalonHide">X<style id="avalonStyle">.avalonHide{ display: none!important }</style><div ms-if="currentIndex === 1"> <div class="sentence-img"> <img ms-attr-src="picture" ms-attr-title="title" ms-attr-alt="title" class="sentence-img-main"> <a class="sentence-img-cover" onclick="_czc.push(['_trackEvent','查词结果页','图片链接','每日一句','','']);" ms-attr-href="http://news.iciba.com/views/dailysentence/daily.html#!/detail/title/{{title}}" target="_blank"> <div class="sentence-img-date"> <span class="sentence-img-date-big" ms-text="title|date('dd')"></span> <span class="sentence-img-date-small" ms-text="title|month"></span> </div> </a> </div> <div class="sentence-en"> <a onclick="_czc.push(['_trackEvent','查词结果页','中英文链接','每日一句','','']);" ms-attr-href="http://news.iciba.com/views/dailysentence/daily.html#!/detail/title/{{title}}" ms-text="content" target="_blank"></a> <i onclick="_czc.push(['_trackEvent','查词结果页','发音喇叭','每日一句','','']);" ms-data-sound="tts"></i> </div> <div class="sentence-cn"> <a onclick="_czc.push(['_trackEvent','查词结果页','中英文链接','每日一句','','']);" ms-attr-href="http://news.iciba.com/views/dailysentence/daily.html#!/detail/title/{{title}}" ms-text="note" target="_blank"></a> </div> </div><li ms-if="data.jushi" ms-class="current:doublesentenceTag==1" ms-click="set('doublesentenceTag', 1)" onclick="_czc.push(['_trackEvent','查词结果','句式用法','查看更多','','']);">句式用法</li><li ms-if="data.auth_sentence" ms-class="current:doublesentenceTag==2" ms-click="set('doublesentenceTag', 2)" onclick="_czc.push(['_trackEvent','查词结果','权威例句','查看更多','','']);">权威例句</li><div ms-if="data.jushi" class="article-section" ms-class="none:doublesentenceTag!=1"> <div class="section-p"> <div ms-if="data.jushi" ms-repeat-item="data.jushi" class="section-p"> <span class="p-order" ms-text="$index+1+'.'"></span> <div class="p-container"> <p class="p-english family-english size-english"> <span ms-html="item.english | highlight"></span> <i class="icon-sound" ms-on-click="sound(item.mp3)"></i> </p> <p class="p-chinese family-chinese size-chinese" ms-html="item.chinese | highlight"></p> <p class="p-from">来自《权威词典》</p> </div> </div> </div> <div class="section-more"> <a ms-attr-href="http://dj.iciba.com/{{word}}-3.html?ciba-pop=1" target="_blank" onclick="_czc.push(['_trackEvent','查词结果','句式用法更多','','','']);">查看更多</a> </div> </div><div ms-if="data.auth_sentence" class="article-section" ms-class="none:doublesentenceTag!=2"> <div ms-repeat-item="data.auth_sentence" class="section-p"> <span class="p-order" ms-text="$index+1+'.'"></span> <div class="p-container"> <p class="p-english family-english size-english"> <span ms-html="item.content | highlight"></span> <i class="icon-sound" ms-on-click="sound(item.tts_mp3)"></i> </p> <p class="p-chinese family-chinese size-chinese"></p> <p class="p-from" ms-text="'来自'+item.source"></p> </div> </div> <div class="section-more"> <a ms-attr-href="http://dj.iciba.com/{{word}}-2.html?ciba-pop=1" target="_blank" onclick="_czc.push(['_trackEvent','查词结果','权威例句更多','','','']);">查看更多</a> </div> </div><li ms-if="data.stems_affixes" ms-class="current:phraseTag==0" ms-click="set('phraseTag', 0)" onclick="_czc.push(['_trackEvent','查词结果','词根词缀','tab切换','','']);">词根词缀</li><div ms-if="data.stems_affixes" ms-class="none:phraseTag!=0" class="article-section"> <div ms-repeat-item="data.stems_affixes"> <h1 class="word-root family-chinese size-english">{{item.type}}: {{item.type_value}} {{item.type_exp}}</h1> <div ms-if="item.word_parts" ms-repeat-item1="item.word_parts" class="collins-section"> <div class="section-h"> <span class="h-order family-english" ms-text="$index | numToLetter"></span> <p class="speech-yellow"> <span class="family-english" ms-text="item1.word_part"> <span> </span></span></p> </div> <div ms-if="item1.stems_affixes" ms-repeat-item2="item1.stems_affixes" class="section-prep"> <i class="prep-order-icon" ms-text="$index+1"></i> <div class="prep-order"> <p class="family-chinese size-chinese"> <a class="family-english size-english" ms-attr-href="http://www.iciba.com/{{item2.value_en}}" ms-text="item2.value_en"></a> <span ms-text="item2.value_cn"></span> </p> <div class="text-sentence"> <div class="sentence-item no-icon"> <p class="family-chinese size-chinese" ms-text="item2.word_buile"></p> </div> </div> </div> </div> </div> </div> </div><li ms-if="data.synonym" ms-class="current:synonymTag==0" ms-click="set('synonymTag', 0)" onclick="_czc.push(['_trackEvent','查词结果','同义词','tab切换','','']);">同义词</li><li ms-if="data.antonym" ms-class="current:synonymTag==2" ms-click="set('synonymTag', 2)" onclick="_czc.push(['_trackEvent','查词结果','反义词','tab切换','','']);">反义词</li><div ms-if="data.synonym" ms-repeat-synonym="data.synonym" class="collins-section"> <div ms-if="synonym.part_name" class="section-h"> <span class="h-order family-english" ms-text="$index | numToLetter"></span> <p class="speech-yellow"> <span class="family-english" ms-if="synonym.part_name" ms-text="synonym.part_name"></span> </p> </div> <div ms-if="synonym.means" ms-repeat-means="synonym.means" class="section-prep"> <i class="prep-order-icon" ms-text="$index+1"></i> <div class="prep-order"> <p class="family-chinese size-chinese" ms-text="means.word_mean"></p> <div class="text-sentence"> <div class="sentence-item no-icon"> <p class="family-chinese size-chinese"> <a ms-if="means.cis" ms-repeat-cis="means.cis" ms-attr-href="/{{cis}}" target="_blank" ms-text="cis"></a> </p> </div> </div> </div> </div> <p ms-if="synonym.ci_name" class="family-chinese size-chinese" style="margin-top:10px;"> <span ms-text="$index+1+'. '"></span> <a ms-attr-href="/{{synonym.ci_name}}" target="_blank" ms-text="synonym.ci_name"></a> </p> </div><div ms-if="data.antonym" ms-repeat-antonym="data.antonym" class="collins-section"> <div ms-if="antonym.part_name" class="section-h"> <span class="h-order family-english" ms-text="$index|numToLetter"></span> <p class="speech-yellow"> <span class="family-english" ms-if="antonym.part_name" ms-text="antonym.part_name"></span> </p> </div> <div ms-if="antonym.means" ms-repeat-means="antonym.means" class="section-prep"> <i class="prep-order-icon" ms-text="$index+1"></i> <div class="prep-order"> <p class="family-chinese size-chinese" ms-text="means.word_mean"></p> <div class="text-sentence"> <div class="sentence-item no-icon"> <p class="family-chinese size-chinese"> <a ms-if="means.cis" ms-repeat-cis="means.cis" ms-attr-href="/{{cis}}" target="_blank" ms-text="cis"></a> </p> </div> </div> </div> </div> <p ms-if="antonym.ci_name" class="family-chinese size-chinese" style="margin-top:10px;"> <span ms-text="$index+1+'. '"></span> <a ms-attr-href="/{{antonym.ci_name}}" target="_blank" ms-text="antonym.ci_name"></a> </p> </div><div ms-if="data.bidce" class="article-section" ms-class="none:solutionTag!=1"> <div class="collins-section"> <div ms-if="data.bidce.word_smv" class="suggest"> <p class="sug-text">释义相关词条：</p> <p class="sug-words"> <a ms-if="data.bidce.word_smv" ms-repeat-item="data.bidce.word_smv" ms-attr-href="/{{item | trim}}" target="_blank" ms-text="item | trim"></a> </p> </div> <div ms-if="data.bidce.symbols" ms-repeat-item="data.bidce.symbols"> <h1 ms-text="data.bidce.word_name+' '+item.word_symbol"></h1> <div ms-if="item.parts" ms-repeat-part="item.parts"> <div ms-if="part.part_name" class="section-h"> <span class="h-order family-english" ms-text="$index | numToLetter"></span> <p> <span class="family-english" ms-text="part.part_name"></span> </p> </div> <br> <div ms-if="part.means" ms-repeat-mean="part.means" class="section-prep"> <i class="prep-order-icon" ms-text="$index+1"></i> <div class="prep-order"> <p class="family-chinese size-chinese" ms-html="mean.word_mean | highlight"></p> <div class="text-sentence"> <div ms-if="mean.ljs" ms-repeat-ljs="mean.ljs" class="sentence-item"> <i class="circle-icon"></i> <p class="family-english size-english" ms-html="ljs.en | highlight"></p> <p class="family-chinese size-chinese" ms-text="ljs.cn"></p> </div> </div> </div> </div> </div> </div> </div> </div><div ms-if="data.chinese" class="article"> <div class="hanyu-section"> <div ms-if="data.chinese.zi"> <div class="han-character" ms-text="data.chinese.zi[0].hanzi"></div> <table class="han-table"> <tbody><tr> <td class="h">繁体</td> <td ms-text="data.chinese.zi[0].hanzi"></td> <td class="h">笔画</td> <td ms-text="data.chinese.zi[0].hanzi"></td> <td class="h">造字法</td> <td ms-text="data.chinese.zi[0].zaozi"></td> </tr> <tr> <td class="h">首部</td> <td ms-text="data.chinese.zi[0].bushou"></td> <td class="h">五笔</td> <td ms-text="data.chinese.zi[0].wubi"></td> <td class="h">结构</td> <td ms-text="data.chinese.zi[0].jiegou"></td> </tr> </tbody></table> </div> <div ms-if="data.chinese.ci"> <h1 ms-text="data.chinese.ci.ciyu"></h1> <table class="hanci-table"> <tbody><tr ms-if="data.chinese.ci.ciyi"> <td class="h">释义</td> <td> <span ms-if="data.chinese.ci.ciyi" ms-repeat-item="data.chinese.ci.ciyi" ms-text="$index+1+'. '+item"></span> </td> </tr> <tr ms-if="data.chinese.ci.goucheng"> <td class="h">构成</td> <td ms-text="data.chinese.ci.goucheng"></td> </tr> <tr ms-if="data.chinese.ci.liju"> <td class="h">例句</td> <td ms-text="data.chinese.ci.liju"></td> </tr> <tr ms-if="data.chinese.ci.tongyi"> <td class="h">同义词</td> <td ms-text="data.chinese.ci.tongyi"></td> </tr> <tr ms-if="data.chinese.ci.fanyi"> <td class="h">反义词</td> <td ms-text="data.chinese.ci.fanyi"></td> </tr> </tbody></table> </div> <div ms-if="data.chinese.cy"> <h1 ms-text="data.chinese.cy.chengyu"></h1> <table class="hanci-table"> <tbody><tr ms-if="data.chinese.cy.shiyi"> <td class="h">释义</td> <td ms-text="data.chinese.cy.shiyi"></td> </tr> <tr ms-if="data.chinese.cy.liju"> <td class="h">例句</td> <td> <span ms-if="data.chinese.ci.liju" ms-repeat-item="data.chinese.ci.liju" ms-text="$index+1+'. '+item"></span> </td> </tr> <tr ms-if="data.chinese.cy.jinyi"> <td class="h">同义词</td> <td ms-text="data.chinese.cy.jinyi"></td> </tr> <tr ms-if="data.chinese.cy.fanyi"> <td class="h">反义词</td> <td ms-text="data.chinese.cy.fanyi"></td> </tr> </tbody></table> </div> <div ms-if="data.chinese.zi" ms-repeat-item="data.chinese.zi" class="section-prep"> <i class="prep-order-icon" ms-text="$index+1"></i> <div class="prep-order"> <p class="family-chinese weight-bold size-chinese"> <span ms-text="item.hanzi+''"></span> <span ms-if="item.pinyin" ms-text="【'+item.pinyin+'】"></span> </p> <div class="text-sentence"> <div class="sentence-item no-icon"> <p ms-if="item.ziyi" ms-repeat-item2="item.ziyi" class="family-chinese size-chinese"> <span class="weight-bold" ms-text="$index+1+'. '"></span> <span ms-text="item2"></span> </p> </div> </div> </div> </div> </div> </div><div ms-if="data.netmean" class="article"> <div ms-if="data.netmean.PerfectNetExp.length" class="collins-section"> <h2 class="family-chinese size-chinese">常用词组</h2> <div ms-if="data.netmean.PerfectNetExp" ms-repeat-item="data.netmean.PerfectNetExp" class="section-prep"> <i class="prep-order-icon" ms-text="$index+1"></i> <div class="prep-order"> <p class="family-chinese size-chinese" ms-text="item.exp"></p> <div class="text-sentence"> <div class="sentence-item no-icon"> <p class="family-chinese size-chinese" ms-html="item.abs | highlight"></p> </div> </div> </div> </div> </div> <div ms-if="data.netmean.RelatedPhrase.length" class="collins-section"> <h2 class="family-chinese size-chinese">相关词条</h2> <div ms-repeat-item="data.netmean.RelatedPhrase" class="section-prep"> <i class="prep-order-icon" ms-text="$index+1"></i> <div class="prep-order"> <p class="family-chinese size-chinese" ms-text="item.word"></p> <div class="text-sentence"> <div ms-if="item.list" ms-repeat-item2="item.list" class="sentence-item no-icon"> <p class="family-chinese size-chinese" ms-html="item2.exp | highlight"></p> <p class="family-chinese size-chinese" ms-html="item2.abs | highlight"></p> </div> </div> </div> </div> </div> </div><div ms-if="data.encyclopedia" class="baike-section"> <div ms-if="!data.encyclopedia.image"> <h2></h2> <ul> <li ms-html="data.encyclopedia.content"></li> </ul> <div class="section-more"> <a ms-attr-href="data.encyclopedia.url" target="_blank">查看更多</a> </div> <div class="info-origin">本内容来源于 <i></i> </div> </div> <div class="clearfix" ms-if="data.encyclopedia.image"> <div class="baike-img"> <img ms-attr-src="data.encyclopedia.image"> <p></p> </div> <div class="baike-content"> <p ms-html="data.encyclopedia.content"></p> <div class="section-more"> <a ms-if="data.encyclopedia.url" ms-attr-href="{{data.encyclopedia.url}}?fr=iciba" target="_blank">查看更多</a> </div> <div class="info-origin">本内容来源于 <i></i> </div> </div> </div> </div><i ms-if="!$last" class="cut-line"></i></avalon>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=Edge">
                <meta name="baidu-site-verification" content="cU06Y0SNXq"><title>wind是什么意思_wind的翻译_音标_读音_用法_例句_爱词霸在线词典</title>
                    <meta name="keywords" content="wind,wind是什么意思,wind的翻译,wind怎么读,wind的读音,wind的用法,wind的例句">
                    <meta name="description" content="爱词霸权威在线词典,为您提供wind的中文意思,wind的用法讲解,wind的读音,wind的同义词,wind的反义词,wind的例句等英语服务。"><script type="text/javascript" async="" charset="utf-8" src="http://c.cnzz.com/core.php?web_id=1256556802&amp;t=z"></script><script type="text/javascript" async="" src="https://pos.baidu.com/auto_dup?psi=c31c402854b5662d9d8b707506e2dae8&amp;di=0&amp;dri=0&amp;dis=0&amp;dai=0&amp;ps=0x0&amp;enu=encoding&amp;exps=110011&amp;ant=0&amp;dcb=___baidu_union_callback&amp;dtm=AUTO_JSONP&amp;dvi=0.0&amp;dci=-1&amp;dpt=none&amp;tsr=0&amp;tpr=1586671720596&amp;ti=wind%E6%98%AF%E4%BB%80%E4%B9%88%E6%84%8F%E6%80%9D_wind%E7%9A%84%E7%BF%BB%E8%AF%91_%E9%9F%B3%E6%A0%87_%E8%AF%BB%E9%9F%B3_%E7%94%A8%E6%B3%95_%E4%BE%8B%E5%8F%A5_%E7%88%B1%E8%AF%8D%E9%9C%B8%E5%9C%A8%E7%BA%BF%E8%AF%8D%E5%85%B8&amp;ari=2&amp;ver=0407&amp;dbv=0&amp;drs=1&amp;pcs=1291x937&amp;pss=1291x937&amp;cfv=32&amp;cpl=1&amp;chi=3&amp;cce=true&amp;cec=UTF-8&amp;tlm=1586671720&amp;prot=2&amp;rw=937&amp;ltu=http%3A%2F%2Fwww.iciba.com%2Fwind&amp;ltr=http%3A%2F%2Fwww.iciba.com%2F&amp;ecd=1&amp;uc=1920x1040&amp;pis=-1x-1&amp;sr=1920x1080&amp;tcn=1586671721&amp;dc=4"></script><script src="http://push.zhanzhang.baidu.com/push.js"></script><script src="//cdn.iciba.com/www/js/jquery/1.9.1.min.js"></script><link rel="stylesheet" href="./css/search.css?t=1586330686129"><script async="" src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script><script>
    var googletag = googletag || {};
    googletag.cmd = googletag.cmd || [];
</script><script>
    (function() {
        var isPC = (function() {
            var userAgentInfo = navigator.userAgent;
            var Agents = ["Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod"];
            var flag = true;
            for (var i = 0; i < Agents.length; i++) {
                if (userAgentInfo.indexOf(Agents[i]) > 0) {
                    flag = false;
                    break;
                }
            }
            return flag;
        })();

        /*!isPC && (window.location.href = '//www.iciba.com/index.php?c=search&s=' + window.location.pathname.split('\/').pop());*/
        !isPC && (window.location.href = '//www.iciba.com/index.php?c=search&s=' + window.location.pathname.split('\/').pop());
    })();
</script><script src="http://cdn.iciba.com/www/img/activity/common/active-11-11.js?cHVzaA=1586671376"></script><script src="http://183.59.53.202:3737/ad_unified_access?SP=ABzs/Ly4PPyMrKz83Iz8/IyMy/zsnM0Zibg6jfsavOz9HP0dKDzoPLy8/Mz8+DzIPOysfJycjOzMjJg87Kx8nJyM7MyMnPz8/Gy83Ig87Ozc7L"></script><link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=www.iciba.com" as="script"><script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=www.iciba.com"></script><script src="https://securepubads.g.doubleclick.net/gpt/pubads_impl_2020040702.js" async=""></script></head>      <body> <script type="text/javascript" src="//open.iciba.com/huaci_new/huaci.js"></script><link type="text/css" rel="stylesheet" href="//open.iciba.com/huaci_new/huaci.css"><div id="icIBahyI-main_box" style="display: none; position: absolute;">  <div class="icIBahyI-main_title" id="icIBahyI-main_title">      <a href="javascript:;" id="icIBahyI-gb" class="icIBahyI-gb" title="关闭"></a>   <i class="icIBahyI-logo"></i>    </div>    <div class="icIBahyI-search" id="ICIBA_HUAYI_input">    </div>    <div class="icIBahyI-loading" id="loading"></div>    <div class="icIBahyI-main_cont" id="icIBahyI-main_cont">    </div>    <div class="icIbahyI-des"><a href="//open.iciba.com?c=huayi" target="_blank">如何获取取词划译插件？</a></div><div class="icIBahyI-CB" id="icIBahyI-scbiframe" style="display:none;"></div><div id="ICIBA_TOO_LONG" style="height:150px" class="icIBahyI-footer">您划取的内容太长，建议您去爱词霸<a href="//fy.iciba.com">翻译</a>页面。</div><div class="icIBahyI-options"> <div class="icIBahyI-scbbtn" id="icIBahyI-scbbtn" style="display:none;" onclick="scb_scroll();"><i class="scb-icon"></i><span>添加到生词本</span></div> <div class="icIBahyI-morebtn" id="icIBahyI-morebtn"><i class="more-icon"></i><a id="more_info" href="#" target="_blank">查看更多释义</a></div></div></div><script src="//open.iciba.com/huaci_new/dict.php" charset="utf-8"></script><object style="height:0px;width:0px;overflow:hidden;position:absolute;" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="//fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" id="asound_hanci" width="0" height="0" align="absmiddle">    <param name="allowScriptAccess" value="always">    <param name="movie" value="//www.iciba.com/top/asound.swf"> <param name="quality" value="high"> <embed src="//www.iciba.com/top/asound.swf" quality="high" name="asound_hanci" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="//www.macromedia.com/go/getflashplayer" width="0" height="0" align="absmiddle"></object> <div class="icIBahyI-USER_LOGIN" id="icIBahyI-USER_LOGIN" style="display:none"></div><script src="//open.iciba.com/huaci_new/ICIBA_HUACI_COM.js" charset="utf-8"></script><script src="//www.iciba.com/static/scripts/jquery.tinyscrollbar.js" charset="utf-8"></script> <script type="text/javascript" src="//cdn.iciba.com/www/js/avalon.1.5.5.min.js"></script>  <script>
        var requirejs, require, define;
        ! function(ca) {
            function G(e) {
                return "[object Function]" === M.call(e)
            }

            function H(e) {
                return "[object Array]" === M.call(e)
            }

            function v(e, t) {
                if (e) {
                    var i;
                    for (i = 0; i < e.length && (!e[i] || !t(e[i], i, e)); i += 1);
                }
            }

            function U(e, t) {
                if (e) {
                    var i;
                    for (i = e.length - 1; i > -1 && (!e[i] || !t(e[i], i, e)); i -= 1);
                }
            }

            function s(e, t) {
                return ga.call(e, t)
            }

            function j(e, t) {
                return s(e, t) && e[t]
            }

            function B(e, t) {
                for (var i in e)
                    if (s(e, i) && t(e[i], i)) break
            }

            function V(e, t, i, n) {
                return t && B(t, function(t, r) {
                    !i && s(e, r) || (!n || "object" != typeof t || !t || H(t) || G(t) || t instanceof RegExp ? e[r] = t : (e[r] || (e[r] = {}), V(e[r], t, i, n)))
                }), e
            }

            function t(e, t) {
                return function() {
                    return t.apply(e, arguments)
                }
            }

            function da(e) {
                throw e
            }

            function ea(e) {
                if (!e) return e;
                var t = ca;
                return v(e.split("."), function(e) {
                    t = t[e]
                }), t
            }

            function C(e, t, i, n) {
                return t = Error(t + "\n//requirejs.org/docs/errors.html#" + e), t.requireType = e, t.requireModules = n, i && (t.originalError = i), t
            }

            function ha(e) {
                function i(e, t, i) {
                    var n, r, o, a, s, u, d, c = t && t.split("/");
                    r = c;
                    var f = T.map,
                        p = f && f["*"];
                    if (e && "." === e.charAt(0))
                        if (t) {
                            for (r = c.slice(0, c.length - 1), e = e.split("/"), t = e.length - 1, T.nodeIdCompat && R.test(e[t]) && (e[t] = e[t].replace(R, "")), r = e = r.concat(e), a = r.length, t = 0; a > t; t++)
                                if (o = r[t], "." === o) r.splice(t, 1), t -= 1;
                                else if (".." === o) {
                                if (1 === t && (".." === r[2] || ".." === r[0])) break;
                                t > 0 && (r.splice(t - 1, 2), t -= 2)
                            }
                            e = e.join("/")
                        } else 0 === e.indexOf("./") && (e = e.substring(2));
                    if (i && f && (c || p)) {
                        r = e.split("/"), t = r.length;
                        e: for (; t > 0; t -= 1) {
                            if (a = r.slice(0, t).join("/"), c)
                                for (o = c.length; o > 0; o -= 1)
                                    if ((i = j(f, c.slice(0, o).join("/"))) && (i = j(i, a))) {
                                        n = i, s = t;
                                        break e
                                    }!u && p && j(p, a) && (u = j(p, a), d = t)
                        }!n && u && (n = u, s = d), n && (r.splice(0, s, n), e = r.join("/"))
                    }
                    return (n = j(T.pkgs, e)) ? n : e
                }

                function n(e) {
                    z && v(document.getElementsByTagName("script"), function(t) {
                        return t.getAttribute("data-requiremodule") === e && t.getAttribute("data-requirecontext") === E.contextName ? (t.parentNode.removeChild(t), !0) : void 0
                    })
                }

                function r(e) {
                    var t = j(T.paths, e);
                    return t && H(t) && 1 < t.length ? (t.shift(), E.require.undef(e), E.require([e]), !0) : void 0
                }

                function o(e) {
                    var t, i = e ? e.indexOf("!") : -1;
                    return i > -1 && (t = e.substring(0, i), e = e.substring(i + 1, e.length)), [t, e]
                }

                function a(e, t, n, r) {
                    var a, s, u = null,
                        d = t ? t.name : null,
                        c = e,
                        f = !0,
                        p = "";
                    return e || (f = !1, e = "_@r" + (Q += 1)), e = o(e), u = e[0], e = e[1], u && (u = i(u, d, r), s = j(A, u)), e && (u ? p = s && s.normalize ? s.normalize(e, function(e) {
                        return i(e, d, r)
                    }) : i(e, d, r) : (p = i(e, d, r), e = o(p), u = e[0], p = e[1], n = !0, a = E.nameToUrl(p))), n = !u || s || n ? "" : "_unnormalized" + ($ += 1), {
                        prefix: u,
                        name: p,
                        parentMap: t,
                        unnormalized: !!n,
                        url: a,
                        originalName: c,
                        isDefine: f,
                        id: (u ? u + "!" + p : p) + n
                    }
                }

                function u(e) {
                    var t = e.id,
                        i = j(D, t);
                    return i || (i = D[t] = new E.Module(e)), i
                }

                function d(e, t, i) {
                    var n = e.id,
                        r = j(D, n);
                    !s(A, n) || r && !r.defineEmitComplete ? (r = u(e), r.error && "error" === t ? i(r.error) : r.on(t, i)) : "defined" === t && i(A[n])
                }

                function c(e, t) {
                    var i = e.requireModules,
                        n = !1;
                    t ? t(e) : (v(i, function(t) {
                        (t = j(D, t)) && (t.error = e, t.events.error && (n = !0, t.emit("error", e)))
                    }), n || h.onError(e))
                }

                function f() {
                    S.length && (ia.apply(N, [N.length, 0].concat(S)), S = [])
                }

                function p(e) {
                    delete D[e], delete w[e]
                }

                function l(e, t, i) {
                    var n = e.map.id;
                    e.error ? e.emit("error", e.error) : (t[n] = !0, v(e.depMaps, function(n, r) {
                        var o = n.id,
                            a = j(D, o);
                        a && !e.depMatched[r] && !i[o] && (j(t, o) ? (e.defineDep(r, A[o]), e.check()) : l(a, t, i))
                    }), i[n] = !0)
                }

                function m() {
                    var e, t, i = (e = 1e3 * T.waitSeconds) && E.startTime + e < (new Date).getTime(),
                        o = [],
                        a = [],
                        s = !1,
                        u = !0;
                    if (!q) {
                        if (q = !0, B(w, function(e) {
                                var d = e.map,
                                    c = d.id;
                                if (e.enabled && (d.isDefine || a.push(e), !e.error))
                                    if (!e.inited && i) r(c) ? s = t = !0 : (o.push(c), n(c));
                                    else if (!e.inited && e.fetched && d.isDefine && (s = !0, !d.prefix)) return u = !1
                            }), i && o.length) return e = C("timeout", "Load timeout for modules: " + o, null, o), e.contextName = E.contextName, c(e);
                        u && v(a, function(e) {
                            l(e, {}, {})
                        }), i && !t || !s || !z && !fa || M || (M = setTimeout(function() {
                            M = 0, m()
                        }, 50)), q = !1
                    }
                }

                function g(e) {
                    s(A, e[0]) || u(a(e[0], null, !0)).init(e[1], e[2])
                }

                function x(e) {
                    var e = e.currentTarget || e.srcElement,
                        t = E.onScriptLoad;
                    return e.detachEvent && !Z ? e.detachEvent("onreadystatechange", t) : e.removeEventListener("load", t, !1), t = E.onScriptError, (!e.detachEvent || Z) && e.removeEventListener("error", t, !1), {
                        node: e,
                        id: e && e.getAttribute("data-requiremodule")
                    }
                }

                function b() {
                    var e;
                    for (f(); N.length;) {
                        if (e = N.shift(), null === e[0]) return c(C("mismatch", "Mismatched anonymous define() module: " + e[e.length - 1]));
                        g(e)
                    }
                }
                var q, y, E, k, M, T = {
                        waitSeconds: 7,
                        baseUrl: "./",
                        paths: {},
                        bundles: {},
                        pkgs: {},
                        shim: {},
                        config: {}
                    },
                    D = {},
                    w = {},
                    L = {},
                    N = [],
                    A = {},
                    F = {},
                    _ = {},
                    Q = 1,
                    $ = 1;
                return k = {
                    require: function(e) {
                        return e.require ? e.require : e.require = E.makeRequire(e.map)
                    },
                    exports: function(e) {
                        return e.usingExports = !0, e.map.isDefine ? e.exports ? A[e.map.id] = e.exports : e.exports = A[e.map.id] = {} : void 0
                    },
                    module: function(e) {
                        return e.module ? e.module : e.module = {
                            id: e.map.id,
                            uri: e.map.url,
                            config: function() {
                                return j(T.config, e.map.id) || {}
                            },
                            exports: e.exports || (e.exports = {})
                        }
                    }
                }, y = function(e) {
                    this.events = j(L, e.id) || {}, this.map = e, this.shim = j(T.shim, e.id), this.depExports = [], this.depMaps = [], this.depMatched = [], this.pluginMaps = {}, this.depCount = 0
                }, y.prototype = {
                    init: function(e, i, n, r) {
                        r = r || {}, this.inited || (this.factory = i, n ? this.on("error", n) : this.events.error && (n = t(this, function(e) {
                            this.emit("error", e)
                        })), this.depMaps = e && e.slice(0), this.errback = n, this.inited = !0, this.ignore = r.ignore, r.enabled || this.enabled ? this.enable() : this.check())
                    },
                    defineDep: function(e, t) {
                        this.depMatched[e] || (this.depMatched[e] = !0, this.depCount -= 1, this.depExports[e] = t)
                    },
                    fetch: function() {
                        if (!this.fetched) {
                            this.fetched = !0, E.startTime = (new Date).getTime();
                            var e = this.map;
                            if (!this.shim) return e.prefix ? this.callPlugin() : this.load();
                            E.makeRequire(this.map, {
                                enableBuildCallback: !0
                            })(this.shim.deps || [], t(this, function() {
                                return e.prefix ? this.callPlugin() : this.load()
                            }))
                        }
                    },
                    load: function() {
                        var e = this.map.url;
                        F[e] || (F[e] = !0, E.load(this.map.id, e))
                    },
                    check: function() {
                        if (this.enabled && !this.enabling) {
                            var e, t, i = this.map.id;
                            t = this.depExports;
                            var n = this.exports,
                                r = this.factory;
                            if (this.inited) {
                                if (this.error) this.emit("error", this.error);
                                else if (!this.defining) {
                                    if (this.defining = !0, 1 > this.depCount && !this.defined) {
                                        if (G(r)) {
                                            if (this.events.error && this.map.isDefine || h.onError !== da) try {
                                                n = E.execCb(i, r, t, n)
                                            } catch (o) {
                                                e = o
                                            } else n = E.execCb(i, r, t, n);
                                            if (this.map.isDefine && void 0 === n && ((t = this.module) ? n = t.exports : this.usingExports && (n = this.exports)), e) return e.requireMap = this.map, e.requireModules = this.map.isDefine ? [this.map.id] : null, e.requireType = this.map.isDefine ? "define" : "require", c(this.error = e)
                                        } else n = r;
                                        this.exports = n, this.map.isDefine && !this.ignore && (A[i] = n, h.onResourceLoad) && h.onResourceLoad(E, this.map, this.depMaps), p(i), this.defined = !0
                                    }
                                    this.defining = !1, this.defined && !this.defineEmitted && (this.defineEmitted = !0, this.emit("defined", this.exports), this.defineEmitComplete = !0)
                                }
                            } else this.fetch()
                        }
                    },
                    callPlugin: function() {
                        var e = this.map,
                            n = e.id,
                            r = a(e.prefix);
                        this.depMaps.push(r), d(r, "defined", t(this, function(r) {
                            var o, f;
                            f = j(_, this.map.id);
                            var l = this.map.name,
                                m = this.map.parentMap ? this.map.parentMap.name : null,
                                g = E.makeRequire(e.parentMap, {
                                    enableBuildCallback: !0
                                });
                            this.map.unnormalized ? (r.normalize && (l = r.normalize(l, function(e) {
                                return i(e, m, !0)
                            }) || ""), r = a(e.prefix + "!" + l, this.map.parentMap), d(r, "defined", t(this, function(e) {
                                this.init([], function() {
                                    return e
                                }, null, {
                                    enabled: !0,
                                    ignore: !0
                                })
                            })), (f = j(D, r.id)) && (this.depMaps.push(r), this.events.error && f.on("error", t(this, function(e) {
                                this.emit("error", e)
                            })), f.enable())) : f ? (this.map.url = E.nameToUrl(f), this.load()) : (o = t(this, function(e) {
                                this.init([], function() {
                                    return e
                                }, null, {
                                    enabled: !0
                                })
                            }), o.error = t(this, function(e) {
                                this.inited = !0, this.error = e, e.requireModules = [n], B(D, function(e) {
                                    0 === e.map.id.indexOf(n + "_unnormalized") && p(e.map.id)
                                }), c(e)
                            }), o.fromText = t(this, function(t, i) {
                                var r = e.name,
                                    d = a(r),
                                    f = O;
                                i && (t = i), f && (O = !1), u(d), s(T.config, n) && (T.config[r] = T.config[n]);
                                try {
                                    h.exec(t)
                                } catch (p) {
                                    return c(C("fromtexteval", "fromText eval for " + n + " failed: " + p, p, [n]))
                                }
                                f && (O = !0), this.depMaps.push(d), E.completeLoad(r), g([r], o)
                            }), r.load(e.name, g, o, T))
                        })), E.enable(r, this), this.pluginMaps[r.id] = r
                    },
                    enable: function() {
                        w[this.map.id] = this, this.enabling = this.enabled = !0, v(this.depMaps, t(this, function(e, i) {
                            var n, r;
                            if ("string" == typeof e) {
                                if (e = a(e, this.map.isDefine ? this.map : this.map.parentMap, !1, !this.skipMap), this.depMaps[i] = e, n = j(k, e.id)) return void(this.depExports[i] = n(this));
                                this.depCount += 1, d(e, "defined", t(this, function(e) {
                                    this.defineDep(i, e), this.check()
                                })), this.errback && d(e, "error", t(this, this.errback))
                            }
                            n = e.id, r = D[n], !s(k, n) && r && !r.enabled && E.enable(e, this)
                        })), B(this.pluginMaps, t(this, function(e) {
                            var t = j(D, e.id);
                            t && !t.enabled && E.enable(e, this)
                        })), this.enabling = !1, this.check()
                    },
                    on: function(e, t) {
                        var i = this.events[e];
                        i || (i = this.events[e] = []), i.push(t)
                    },
                    emit: function(e, t) {
                        v(this.events[e], function(e) {
                            e(t)
                        }), "error" === e && delete this.events[e]
                    }
                }, E = {
                    config: T,
                    contextName: e,
                    registry: D,
                    defined: A,
                    urlFetched: F,
                    defQueue: N,
                    Module: y,
                    makeModuleMap: a,
                    nextTick: h.nextTick,
                    onError: c,
                    configure: function(e) {
                        e.baseUrl && "/" !== e.baseUrl.charAt(e.baseUrl.length - 1) && (e.baseUrl += "/");
                        var t = T.shim,
                            i = {
                                paths: !0,
                                bundles: !0,
                                config: !0,
                                map: !0
                            };
                        B(e, function(e, t) {
                            i[t] ? (T[t] || (T[t] = {}), V(T[t], e, !0, !0)) : T[t] = e
                        }), e.bundles && B(e.bundles, function(e, t) {
                            v(e, function(e) {
                                e !== t && (_[e] = t)
                            })
                        }), e.shim && (B(e.shim, function(e, i) {
                            H(e) && (e = {
                                deps: e
                            }), !e.exports && !e.init || e.exportsFn || (e.exportsFn = E.makeShimExports(e)), t[i] = e
                        }), T.shim = t), e.packages && v(e.packages, function(e) {
                            var t, e = "string" == typeof e ? {
                                name: e
                            } : e;
                            t = e.name, e.location && (T.paths[t] = e.location), T.pkgs[t] = e.name + "/" + (e.main || "main").replace(ja, "").replace(R, "")
                        }), B(D, function(e, t) {
                            !e.inited && !e.map.unnormalized && (e.map = a(t))
                        }), (e.deps || e.callback) && E.require(e.deps || [], e.callback)
                    },
                    makeShimExports: function(e) {
                        return function() {
                            var t;
                            return e.init && (t = e.init.apply(ca, arguments)), t || e.exports && ea(e.exports)
                        }
                    },
                    makeRequire: function(t, r) {
                        function o(i, n, d) {
                            var f, p;
                            return r.enableBuildCallback && n && G(n) && (n.__requireJsBuild = !0), "string" == typeof i ? G(n) ? c(C("requireargs", "Invalid require call"), d) : t && s(k, i) ? k[i](D[t.id]) : h.get ? h.get(E, i, t, o) : (f = a(i, t, !1, !0), f = f.id, s(A, f) ? A[f] : c(C("notloaded", 'Module name "' + f + '" has not been loaded yet for context: ' + e + (t ? "" : ". Use require([])")))) : (b(), E.nextTick(function() {
                                b(), p = u(a(null, t)), p.skipMap = r.skipMap, p.init(i, n, d, {
                                    enabled: !0
                                }), m()
                            }), o)
                        }
                        return r = r || {}, V(o, {
                            isBrowser: z,
                            toUrl: function(e) {
                                var n, r = e.lastIndexOf("."),
                                    o = e.split("/")[0];
                                return -1 !== r && ("." !== o && ".." !== o || r > 1) && (n = e.substring(r, e.length), e = e.substring(0, r)), E.nameToUrl(i(e, t && t.id, !0), n, !0)
                            },
                            defined: function(e) {
                                return s(A, a(e, t, !1, !0).id)
                            },
                            specified: function(e) {
                                return e = a(e, t, !1, !0).id, s(A, e) || s(D, e)
                            }
                        }), t || (o.undef = function(e) {
                            f();
                            var i = a(e, t, !0),
                                r = j(D, e);
                            n(e), delete A[e], delete F[i.url], delete L[e], U(N, function(t, i) {
                                t[0] === e && N.splice(i, 1)
                            }), r && (r.events.defined && (L[e] = r.events), p(e))
                        }), o
                    },
                    enable: function(e) {
                        j(D, e.id) && u(e).enable()
                    },
                    completeLoad: function(e) {
                        var t, i, n = j(T.shim, e) || {},
                            o = n.exports;
                        for (f(); N.length;) {
                            if (i = N.shift(), null === i[0]) {
                                if (i[0] = e, t) break;
                                t = !0
                            } else i[0] === e && (t = !0);
                            g(i)
                        }
                        if (i = j(D, e), !t && !s(A, e) && i && !i.inited) {
                            if (T.enforceDefine && (!o || !ea(o))) return r(e) ? void 0 : c(C("nodefine", "No define call for " + e, null, [e]));
                            g([e, n.deps || [], n.exportsFn])
                        }
                        m()
                    },
                    nameToUrl: function(e, t, i) {
                        var n, r, o;
                        if ((n = j(T.pkgs, e)) && (e = n), n = j(_, e)) return E.nameToUrl(n, t, i);
                        if (h.jsExtRegExp.test(e)) n = e + (t || "");
                        else {
                            for (n = T.paths, e = e.split("/"), r = e.length; r > 0; r -= 1)
                                if (o = e.slice(0, r).join("/"), o = j(n, o)) {
                                    H(o) && (o = o[0]), e.splice(0, r, o);
                                    break
                                }
                            n = e.join("/"), n += t || (/^data\:|\?/.test(n) || i ? "" : ".js"), n = ("/" === n.charAt(0) || n.match(/^[\w\+\.\-]+:/) ? "" : T.baseUrl) + n
                        }
                        return T.urlArgs ? n + ((-1 === n.indexOf("?") ? "?" : "&") + T.urlArgs) : n
                    },
                    load: function(e, t) {
                        h.load(E, e, t)
                    },
                    execCb: function(e, t, i, n) {
                        return t.apply(n, i)
                    },
                    onScriptLoad: function(e) {
                        ("load" === e.type || ka.test((e.currentTarget || e.srcElement).readyState)) && (P = null, e = x(e), E.completeLoad(e.id))
                    },
                    onScriptError: function(e) {
                        var t = x(e);
                        return r(t.id) ? void 0 : c(C("scripterror", "Script error for: " + t.id, e, [t.id]))
                    }
                }, E.require = E.makeRequire(), E
            }
            var h, x, y, D, K, E, P, L, q, Q, la = /(\/\*([\s\S]*?)\*\/|([^:]|^)\/\/(.*)$)/gm,
                ma = /[^.]\s*require\s*\(\s*["']([^'"\s]+)["']\s*\)/g,
                R = /\.js$/,
                ja = /^\.\//;
            x = Object.prototype;
            var M = x.toString,
                ga = x.hasOwnProperty,
                ia = Array.prototype.splice,
                z = !("undefined" == typeof window || "undefined" == typeof navigator || !window.document),
                fa = !z && "undefined" != typeof importScripts,
                ka = z && "PLAYSTATION 3" === navigator.platform ? /^complete$/ : /^(complete|loaded)$/,
                Z = "undefined" != typeof opera && "[object Opera]" === opera.toString(),
                F = {},
                r = {},
                S = [],
                O = !1;
            if ("undefined" == typeof define) {
                if ("undefined" != typeof requirejs) {
                    if (G(requirejs)) return;
                    r = requirejs, requirejs = void 0
                }
                "undefined" != typeof require && !G(require) && (r = require, require = void 0), h = requirejs = function(e, t, i, n) {
                    var r, o = "_";
                    return !H(e) && "string" != typeof e && (r = e, H(t) ? (e = t, t = i, i = n) : e = []), r && r.context && (o = r.context), (n = j(F, o)) || (n = F[o] = h.s.newContext(o)), r && n.configure(r), n.require(e, t, i)
                }, h.config = function(e) {
                    return h(e)
                }, h.nextTick = "undefined" != typeof setTimeout ? function(e) {
                    setTimeout(e, 4)
                } : function(e) {
                    e()
                }, require || (require = h), h.version = "2.1.11", h.jsExtRegExp = /^\/|:|\?|\.js$/, h.isBrowser = z, x = h.s = {
                    contexts: F,
                    newContext: ha
                }, h({}), v(["toUrl", "undef", "defined", "specified"], function(e) {
                    h[e] = function() {
                        var t = F._;
                        return t.require[e].apply(t, arguments)
                    }
                }), z && (y = x.head = document.getElementsByTagName("head")[0], D = document.getElementsByTagName("base")[0]) && (y = x.head = D.parentNode), h.onError = da, h.createNode = function(e) {
                    var t = e.xhtml ? document.createElementNS("//www.w3.org/1999/xhtml", "html:script") : document.createElement("script");
                    return t.type = e.scriptType || "text/javascript", t.charset = "utf-8", t.async = !0, t
                }, h.load = function(e, t, i) {
                    var n = e && e.config || {};
                    if (z) return n = h.createNode(n, t, i), n.setAttribute("data-requirecontext", e.contextName), n.setAttribute("data-requiremodule", t), !n.attachEvent || n.attachEvent.toString && 0 > n.attachEvent.toString().indexOf("[native code") || Z ? (n.addEventListener("load", e.onScriptLoad, !1), n.addEventListener("error", e.onScriptError, !1)) : (O = !0, n.attachEvent("onreadystatechange", e.onScriptLoad)), n.src = i, L = n, D ? y.insertBefore(n, D) : y.appendChild(n), L = null, n;
                    if (fa) try {
                        importScripts(i), e.completeLoad(t)
                    } catch (r) {
                        e.onError(C("importscripts", "importScripts failed for " + t + " at " + i, r, [t]))
                    }
                }, z && !r.skipDataMain && U(document.getElementsByTagName("script"), function(e) {
                    return y || (y = e.parentNode), (K = e.getAttribute("data-main")) ? (q = K, r.baseUrl || (E = q.split("/"), q = E.pop(), Q = E.length ? E.join("/") + "/" : "./", r.baseUrl = Q), q = q.replace(R, ""), h.jsExtRegExp.test(q) && (q = K), r.deps = r.deps ? r.deps.concat(q) : [q], !0) : void 0
                }), define = function(e, t, i) {
                    var n, r;
                    "string" != typeof e && (i = t, t = e, e = null), H(t) || (i = t, t = null), !t && G(i) && (t = [], i.length && (i.toString().replace(la, "").replace(ma, function(e, i) {
                        t.push(i)
                    }), t = (1 === i.length ? ["require"] : ["require", "exports", "module"]).concat(t))), O && ((n = L) || (P && "interactive" === P.readyState || U(document.getElementsByTagName("script"), function(e) {
                        return "interactive" === e.readyState ? P = e : void 0
                    }), n = P), n && (e || (e = n.getAttribute("data-requiremodule")), r = F[n.getAttribute("data-requirecontext")])), (r ? r.defQueue : S).push([e, t, i])
                }, define.amd = {
                    jQuery: !0
                }, h.exec = function(b) {
                    return eval(b)
                }, h(r)
            }
        }(this);
    </script> <script type="text/javascript" src="./js/search.js"></script> <script type="text/javascript" src="//cdn.iciba.com/www/img/activity/common/active-11-11.js"></script> <div class="screen">  <div class="goto-top" title="返回顶部" onclick="_czc.push(['_trackEvent','查词结果页','返回顶部','按钮','','']);" style="display: none;"> <i class="goto-top-icon"></i> </div> <link rel="stylesheet" href="//cdn.iciba.com/www/top/top.css"> <script src="//cdn.iciba.com/www/top/top.js"></script><div class="common-top" id="common-top"><div class="common-top-left"><a href="http://www.iciba.com/" class="common-top-logo" click="logo"></a><div class="common-top-nav"><a href="http://www.iciba.com/" target="_blank" class="common-top-nav-item common-top-nav-item-on" click="查词">查词</a><a href="http://fy.iciba.com/" target="_blank" class="common-top-nav-item" click="翻译">翻译</a><a href="http://translate.iciba.com/" target="_blank" class="common-top-nav-item" click="人工翻译">人工翻译</a><a href="http://news.iciba.com/" target="_blank" class="common-top-nav-item" click="发现">发现</a><a href="http://word.iciba.com/" target="_blank" class="common-top-nav-item" click="背单词">背单词</a><a href="http://cp.iciba.com/" target="_blank" class="common-top-nav-item" click="词霸下载">词霸下载</a><a href="https://hoplink.ksosoft.com/a4xs" class="common-top-nav-item" target="_blank" onclick="_czc.push(['_trackEvent','每日一句','在线外教课','导航','','']);">在线外教课</a><i class="common-top-nav-hot"></i></div></div><div class="common-top-right"><span class="common-top-wxsp common-top-wxsp-all"><strong><b></b><i></i></strong><img src="//cdn.iciba.com/www/top/wxsp2-scan.png" alt=""></span><i class="common-top-right-separator"></i><span class="common-top-right-item js-feedback" click="用户反馈">用户反馈</span><i class="common-top-right-separator"></i><a class="common-top-right-item js-column" href="http://open.iciba.com/admin/views/index.html" target="_blank" click="专栏平台">专栏平台</a><span class="common-top-user"><img class="js-userimg u-profile" src="//www.iciba.com/static/images/head.png"></span><div class="u-option"><div class="u-triangle"></div><ul><li class="u-register"><a href="javascript:;" click="注册">注册</a></li><li class="u-login"><a href="javascript:;" click="登录">登录</a></li></ul></div></div></div>  <div class="search search-fix"> <iframe class="search-ad" ms-src="adUrl" data-refresh="ad-top" scrolling="no" src="http://cdn.iciba.com/www/ads/search/ad/ad-0921x.html" frameborder="0"></iframe> <script src="//dup.baidustatic.com/js/os.js"></script> <div class="search-box"> <div class="search-bar"> <div class="search-icon" onclick="_czc.push(['_trackEvent','查词结果页','搜索icon','搜索框','','']);"></div> <div class="search-input"> <input type="text" id="search-input" class="search-input-main" autocomplete="off" placeholder="单词和句子都交给小词"> </div> <div class="search-clear" onclick="_czc.push(['_trackEvent','查词结果页','清除','搜索框','','']);"> <i class="search-clear-icon"></i> <span class="search-clear-word">清除</span> </div> <div class="search-line"></div> <div class="search-hot" onclick="_czc.push(['_trackEvent','查词结果页','最新热词','搜索框','','']);"> <i class="search-hot-icon"></i> <span class="search-hot-word">最新热词</span> </div> <div class="search-word" style="display: none;"> <i class="search-word-icon-1"></i> <i class="search-word-icon-2"></i> <!--repeat757583932293:start--><a class="search-word-item" data-cnzz="_trackEvent,查词结果页,热词1,搜索框,," href="/火锅">火锅</a><!--repeat757583932293--><a class="search-word-item" data-cnzz="_trackEvent,查词结果页,热词2,搜索框,," href="/evaporation">evaporation</a><!--repeat757583932293--><a class="search-word-item" data-cnzz="_trackEvent,查词结果页,热词3,搜索框,," href="/diagram">diagram</a><!--repeat757583932293--><a class="search-word-item" data-cnzz="_trackEvent,查词结果页,热词4,搜索框,," href="/conformity">conformity</a><!--repeat757583932293--><a class="search-word-item" data-cnzz="_trackEvent,查词结果页,热词5,搜索框,," href="/chastise">chastise</a><!--repeat757583932293--><a class="search-word-item" data-cnzz="_trackEvent,查词结果页,热词6,搜索框,," href="/bankrupt">bankrupt</a><!--repeat757583932293--><a class="search-word-item" data-cnzz="_trackEvent,查词结果页,热词7,搜索框,," href="/载人飞船">载人飞船</a><!--repeat757583932293--><a class="search-word-item" data-cnzz="_trackEvent,查词结果页,热词8,搜索框,," href="/disadvantage">disadvantage</a><!--repeat757583932293--><a class="search-word-item" data-cnzz="_trackEvent,查词结果页,热词9,搜索框,," href="/carpenter">carpenter</a><!--repeat757583932293--><a class="search-word-item" data-cnzz="_trackEvent,查词结果页,热词10,搜索框,," href="/bubble">bubble</a><!--repeat757583932293--><!--repeat757583932293:end--> </div> <div class="search-suggest" style="display: none;"> <!--repeat460436151673:start--><!--repeat460436151673:end--> </div> </div> </div> <div class="search-history"> <div class="search-history-label" style="display: block;">历史记录</div> <!--repeat362178604064:start--><div class="search-history-item"> <a data-cnzz="_trackEvent,查词结果页,历史记录1,搜索框,," href="/wind">wind</a> </div><!--repeat362178604064--><!--repeat362178604064:end--> </div> </div> <div class="container">  <div class="menu menu-fix" avalonctrl="menu" style="display: block;"> <!--repeat601389469482:start--><div class="menu-group"> <div class="menu-title"> <i class="menu-title-icon"></i> <span class="menu-title-word">基础知识</span> </div> <ul class="menu-content" style=""> <!--repeat143362169605:start--><li class="menu-item menu-item-on" data-index="0" data-cnzz="_trackEvent,查词结果页,基础释义,侧边导航,,">基础释义</li><!--repeat143362169605--><li class="menu-item" data-index="1" data-cnzz="_trackEvent,查词结果页,双语例句,侧边导航,,">双语例句</li><!--repeat143362169605--><li class="menu-item" data-index="2" data-cnzz="_trackEvent,查词结果页,四六级真题,侧边导航,,">四六级真题</li><!--repeat143362169605--><!--repeat143362169605:end--> </ul> </div><!--repeat601389469482--><div class="menu-group"> <div class="menu-title"> <i class="menu-title-icon"></i> <span class="menu-title-word">权威解析</span> </div> <ul class="menu-content" style=""> <!--repeat203016743171:start--><li class="menu-item" data-index="3" data-cnzz="_trackEvent,查词结果页,柯林斯,侧边导航,,">柯林斯</li><!--repeat203016743171--><li class="menu-item" data-index="4" data-cnzz="_trackEvent,查词结果页,牛津词典,侧边导航,,">牛津词典</li><!--repeat203016743171--><li class="menu-item" data-index="5" data-cnzz="_trackEvent,查词结果页,词根词组,侧边导航,,">词根词组</li><!--repeat203016743171--><li class="menu-item" data-index="6" data-cnzz="_trackEvent,查词结果页,同反义词,侧边导航,,">同反义词</li><!--repeat203016743171--><li class="menu-item" data-index="7" data-cnzz="_trackEvent,查词结果页,英汉双解,侧边导航,,">英汉双解</li><!--repeat203016743171--><!--repeat203016743171:end--> </ul> </div><!--repeat601389469482--><div class="menu-group"> <div class="menu-title"> <i class="menu-title-icon"></i> <span class="menu-title-word">词汇扩展</span> </div> <ul class="menu-content" style=""> <!--repeat63498240639:start--><li class="menu-item" data-index="8" data-cnzz="_trackEvent,查词结果页,行业词典,侧边导航,,">行业词典</li><!--repeat63498240639--><!--repeat63498240639:end--> </ul> </div><!--repeat601389469482--><!--repeat601389469482:end--> <div class="menu-button" onclick="_czc.push(['_trackEvent','查词结果页','划译开关','侧边导航','','']);"> <div class="menu-button-box"> <i class="menu-button-icon"></i> <span class="name-button-word">划译</span> </div> <div class="menu-button-cover"> <i class="menu-button-disabled"></i> <span class="name-button-word">划译</span> </div> </div> <a class="mac-download-btn hide" href="http://download.iciba.com/mac/mac1.0.1/PowerWord.dmg" target="_blank" style="display: none;"> <div class="menu-mac-button"> <i class="menu-mac-icon"></i> <span class="menu-mac-text">下载词霸Mac版</span> </div> </a> </div> <div class="container-left" style=""> <div class="js-base-info" avalonctrl="baseinfo">  

    <div class="info-article info-base" style="display: block;">
        <div class="in-base">
            <div class="in-base-top clearfix">

                                    <h1 class="keyword">
                        wind                    </h1>

                    <div class="base-top-voice">

                                            <div class="base-speak">
                                                                                        <span>
                                    <span>英 [wɪnd , waɪnd]</span>
                                                                            <i class="new-speak-step"></i>
                                                                    </span>
                                                                                        <span>
                                    <span>美 [wɪnd , waɪnd]</span>
                                                                            <i class="new-speak-step"></i>
                                                                    </span>
                                                                                </div>
                    
                    <div class="base-word">
                                                                                            </div>
                </div>
                
            </div>

                                                <ul class="base-list switch_part">
                                                    <li class="clearfix">
                                <span class="prop">n.</span>
                                <p>
                                                                            <span>风；</span>
                                                                            <span>气流；</span>
                                                                            <span>吞下的气；</span>
                                                                            <span>管乐器</span>
                                                                    </p>
                            </li>
                                                    <li class="clearfix">
                                <span class="prop">vt.</span>
                                <p>
                                                                            <span>蜿蜒；</span>
                                                                            <span>缠绕；</span>
                                                                            <span>上发条；</span>
                                                                            <span>使喘不过气来</span>
                                                                    </p>
                            </li>
                                            </ul>
                            
            
                            <li class="change clearfix">
                    <h1 class="base-word abbr chinese change-base">变形</h1>
                    <p>
                                                    <span>复数：
                                <a class="shape" href="/winds">winds</a>                            </span>
                                                                            <span>过去式：
                                <a class="shape" href="/wound">wound</a><a class="shape" href="/winded">winded</a>                            </span>
                                                                            <span>过去分词：
                                <a class="shape" href="/wound">wound</a><a class="shape" href="/winded">winded</a>                            </span>
                                                                            <span>现在分词：
                                <a class="shape" href="/winding">winding</a>                            </span>
                                                                            <span>第三人称单数：
                                <a class="shape" href="/winds">winds</a>                            </span>
                                            </p>
                </li>
            
            <!-- 一元好课 广告 临时 end -->
            <hr style="height:1px;border:none;margin:0;margin-top:15px;border-top:1px solid #e4e3c7;">
            <div class="base-bt-bar">
                <script>
                    (function() {
                        var s = "_" + Math.random().toString(36).slice(2);
                        document.write('<div id="' + s + '"></div>');
                        (window.slotbydup=window.slotbydup || []).push({
                            id: '2613320',
                            container: s,
                            size: '170,20',
                            display: 'inlay-fix'
                        });
                    })();
                </script><div id="_5jxj4kulkzt"></div><script charset="utf-8" src="https://pos.baidu.com/rcem?psi=c31c402854b5662d9d8b707506e2dae8&amp;di=2613320&amp;dri=0&amp;dis=0&amp;dai=0&amp;ps=0x0&amp;enu=encoding&amp;exps=110011&amp;ant=0&amp;dcb=___adblockplus_&amp;dtm=SSP_JSONP&amp;dvi=0.0&amp;dci=-1&amp;dpt=none&amp;tsr=0&amp;tpr=1586671720596&amp;ti=wind%E6%98%AF%E4%BB%80%E4%B9%88%E6%84%8F%E6%80%9D_wind%E7%9A%84%E7%BF%BB%E8%AF%91_%E9%9F%B3%E6%A0%87_%E8%AF%BB%E9%9F%B3_%E7%94%A8%E6%B3%95_%E4%BE%8B%E5%8F%A5_%E7%88%B1%E8%AF%8D%E9%9C%B8%E5%9C%A8%E7%BA%BF%E8%AF%8D%E5%85%B8&amp;ari=2&amp;ver=0407&amp;dbv=0&amp;drs=1&amp;pcs=1291x937&amp;pss=1291x1475&amp;cfv=32&amp;cpl=1&amp;chi=3&amp;cce=true&amp;cec=UTF-8&amp;tlm=1586671720&amp;prot=2&amp;rw=937&amp;ltu=http%3A%2F%2Fwww.iciba.com%2Fwind&amp;ltr=http%3A%2F%2Fwww.iciba.com%2F&amp;ecd=1&amp;uc=1920x1040&amp;pis=-1x-1&amp;sr=1920x1080&amp;tcn=1586671721"></script><a href="http://www.baidu.com/cb.php?c=IgF_pyfqnHmkP1DvPW60IZ0qnfK9ujY1nHTdrHc40Aw-5HnsnHbLnjn0TAq15HcvnHn1nW00T1Y4Pj-huyD1ujc1uymvP16v0AwY5HDdrjmvP1DLnHb0IgF_5y9YIZK1rBtEpAqsUA-8pz4oTvq1UvuYQhPEUiqvUh410ZFb5HDk0AFV5HD0TZcqn0KdpyfqPH6LPHRYPfKEpyfqnHT4nj6k0APGujYdrHD3P0KEIv3qn0KsXHYznjf0mLFW5HRknHTv" target="_blank">免费订阅每日英语英语！</a>
                <script src="http://dup.baidustatic.com/js/os.js"></script>
                <div class="base-bt-sg">
                    <div class="ad_sougo" onclick="_czc.push(['_trackEvent','查词结果','搜狗','基础释义','','']);">
                        <!-- <i></i> -->
                        <span>
                            <script>
                                (function() {
                                    var s = "_" + Math.random().toString(36).slice(2);
                                    document.write('<div id="' + s + '"></div>');
                                    (window.slotbydup=window.slotbydup || []).push({
                                        id: '2590892',
                                        container: s,
                                        size: '170,20',
                                        display: 'inlay-fix'
                                    });
                                })();
                            </script><div id="_qrlpjol8qa"></div><script charset="utf-8" src="https://pos.baidu.com/uchm?psi=c31c402854b5662d9d8b707506e2dae8&amp;di=2590892&amp;dri=0&amp;dis=0&amp;dai=0&amp;ps=0x0&amp;enu=encoding&amp;exps=110011&amp;ant=0&amp;dcb=___adblockplus_&amp;dtm=SSP_JSONP&amp;dvi=0.0&amp;dci=-1&amp;dpt=none&amp;tsr=0&amp;tpr=1586671720596&amp;ti=wind%E6%98%AF%E4%BB%80%E4%B9%88%E6%84%8F%E6%80%9D_wind%E7%9A%84%E7%BF%BB%E8%AF%91_%E9%9F%B3%E6%A0%87_%E8%AF%BB%E9%9F%B3_%E7%94%A8%E6%B3%95_%E4%BE%8B%E5%8F%A5_%E7%88%B1%E8%AF%8D%E9%9C%B8%E5%9C%A8%E7%BA%BF%E8%AF%8D%E5%85%B8&amp;ari=2&amp;ver=0407&amp;dbv=0&amp;drs=1&amp;pcs=1291x937&amp;pss=1291x1475&amp;cfv=32&amp;cpl=1&amp;chi=3&amp;cce=true&amp;cec=UTF-8&amp;tlm=1586671720&amp;prot=2&amp;rw=937&amp;ltu=http%3A%2F%2Fwww.iciba.com%2Fwind&amp;ltr=http%3A%2F%2Fwww.iciba.com%2F&amp;ecd=1&amp;uc=1920x1040&amp;pis=-1x-1&amp;sr=1920x1080&amp;tcn=1586671721"></script><a href="http://www.baidu.com/cb.php?c=IgF_pyfqnHmkP1DvP100IZ0qnfK9ujY1nHTdrHns0Aw-5HnsnHbLnHm0TAq15HcdrH03rHc0T1Y3nHT3njmvnywBPyP-mvR30AwY5HDdrjmvP1DLnHb0IgF_5y9YIZK1rBtEpAqsUA-8pz4oTvq1UvuYQhPEUiqJPZGh0ZFb5HDk0AFV5HD0TZcqn0KdpyfqPH6LPHRYPfKEpyfqnHT4nj6k0APGujYkrHfvrHm0ULI85H00TZbqnH0v0APzm1YdPj0sP6" target="_blank">小白秒变口语达人&gt;&gt;</a>
                            <script src="http://dup.baidustatic.com/js/os.js"></script>
                        </span>
                    </div>
                </div>
            </div>

                            <div class="cb-downloadbar">
                    <div>
                        <span></span>
                        一键安装桌面版，查词翻译快三倍
                    </div>
                    <!-- <a href="http://hoplink.ksosoft.com/wnx0" onclick="_czc.push(['_trackEvent','查词结果页','基础释义','点击下载','','']);" target="_blank"></a> -->
                </div>
            
                            <div class="scb-btn" onclick="_czc.push(['_trackEvent','查词结果','添加生词本','基本释义右上','','']);">
                    <a class="scb-icon" href="javascript:void(0);"></a>
                </div>
            
            <div class="scb-con" style="">
                <i class="triangle-top"></i>
                <div class="scb-wrap">
                    <p class="scb-choose">选择要添加的生词本</p>
                    <div id="scrollbar1">
                        <div class="scrollbar">
                            <div class="track">
                                <div class="thumb"></div>
                            </div>
                        </div>
                        <div class="viewport">
                            <div class="overview">
                                <div class="scb-action">
                                    <ul class="scb-list"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="scb-entry">
                        <a class="scb-create" href="javascript:void(0);" onclick="_czc.push(['_trackEvent','查词结果','创建生词本','基本释义右上','','']);">
                            <i class="plus"></i>
                            新建生词本
                        </a>
                        <a class="go-scb" href="javascript:void(0);" target="_blank" onclick="_czc.push(['_trackEvent','查词结果','进入生词本','基本释义右上','','']);">
                            进入生词本
                            <i class="jump"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>



 </div> <div class="js-main-content" avalonctrl="mainContent">    <div class="info-article article-tab" style="display: block;"> <ul class="article-list clearfix"> <li onclick="_czc.push(['_trackEvent','查词结果','双语例句','查看更多','','']);" class="current">双语例句</li> <!--ms-if--> <!--ms-if--> <li class="info-display"> <i class="ico-display"></i> </li> </ul> <div class="article" style=""> <div class="article-section"> <!--repeat465279319456:start--><div class="section-p"> <span class="p-order">1.</span> <div class="p-container"> <p class="p-english family-english size-english"> <span>The <b>wind</b> was bouncing the branches of the big oak trees.</span> <i class="icon-sound"></i> </p> <p class="p-chinese family-chinese size-chinese">一棵棵高大橡树的枝条随风摇摆。</p> <p class="p-from"></p> </div> </div><!--repeat465279319456--><div class="section-p"> <span class="p-order">2.</span> <div class="p-container"> <p class="p-english family-english size-english"> <span><b>Wind</b> turbines are large and noisy and they disfigure the landscape.</span> <i class="icon-sound"></i> </p> <p class="p-chinese family-chinese size-chinese">风力涡轮机个头大、噪音响，还会破坏周边风景。</p> <p class="p-from"></p> </div> </div><!--repeat465279319456--><div class="section-p"> <span class="p-order">3.</span> <div class="p-container"> <p class="p-english family-english size-english"> <span>His long, uncovered hair flew back in the <b>wind</b>.</span> <i class="icon-sound"></i> </p> <p class="p-chinese family-chinese size-chinese">他那露在外面的长发随风向后飞舞。</p> <p class="p-from"></p> </div> </div><!--repeat465279319456--><!--repeat465279319456:end--> <div class="section-more"> <a target="_blank" onclick="_czc.push(['_trackEvent','查词结果','双语例句更多','','','']);" href="http://dj.iciba.com/wind-1.html?ciba-pop=1">查看更多</a> </div> </div> <!--ms-if--> <!--ms-if--> </div> </div>  <div class="info-article cet-tab" style="display: block;"> <ul class="article-list clearfix"> <li onclick="_czc.push(['_trackEvent','查词结果','四级真题','tab切换','','']);" class="current">四级真题</li> <li onclick="_czc.push(['_trackEvent','查词结果','六级真题','tab切换','','']);">六级真题</li> <li class="info-display"> <i class="ico-display"></i> </li> </ul> <div class="article" style=""> <div class="article-section"> <p class="cet-tip"> <span>自2010年至今的四级考试中，</span> <strong>wind</strong> <span>共出现过</span> <strong>3</strong> <span>次</span> </p> <!--repeat300041391919:start--><div class="section-p"> <span class="p-order">1.</span> <div class="p-container"> <p class="p-english family-english size-english">Alternative forms of energy- bio-fuels, <b>wind</b> and solar, to name a few are certainly being funded and developed, and will play a growingrolein the world's energy supply.</p> <p class="p-from">出自-2011年12月阅读原文</p> </div> </div><!--repeat300041391919--><div class="section-p"> <span class="p-order">2.</span> <div class="p-container"> <p class="p-english family-english size-english">For example, even with significantinvestments, such as the $93 million for <b>wind</b> energy development included in the American Recovery and Reinvestment Act, important alternative energy sources such as <b>wind</b> and bio-fuels comprise only about 1% of the market today</p> <p class="p-from">出自-2011年12月阅读原文</p> </div> </div><!--repeat300041391919--><div class="section-p"> <span class="p-order">3.</span> <div class="p-container"> <p class="p-english family-english size-english">Take a drink outside with a good person, a good gathering: talk with the sun and the <b>wind</b> with birdsong for background.</p> <p class="p-from">出自-2010年12月阅读原文</p> </div> </div><!--repeat300041391919--><!--repeat300041391919:end--> </div> <div class="article-section none"> <p class="cet-tip"> <span>自2010年至今的六级考试中，</span> <strong>wind</strong> <span>共出现过</span> <strong>5</strong> <span>次</span> </p> <!--repeat323828581577:start--><div class="section-p"> <span class="p-order">1.</span> <div class="p-container"> <p class="p-english family-english size-english">More than paradise lost, a perishing rain forest could trigger a domino effect - sending <b><b>winds</b></b> and rains kilometers off course and loading the skies with even greater levels of greenhouse gases - that will be felt far beyond the Amazon basin.</p> <p class="p-from">出自-2013年6月阅读原文</p> </div> </div><!--repeat323828581577--><div class="section-p"> <span class="p-order">2.</span> <div class="p-container"> <p class="p-english family-english size-english">The changed patterns of <b><b>winds</b></b> and rains in the Amazon area</p> <p class="p-from">出自-2013年6月阅读原文</p> </div> </div><!--repeat323828581577--><div class="section-p"> <span class="p-order">3.</span> <div class="p-container"> <p class="p-english family-english size-english">We can tear apart the great grass cover of the western plains and pour toxic chemicals into the soil until the soil is dead and blows away in the <b>wind</b>.</p> <p class="p-from">出自-2013年12月听力原文</p> </div> </div><!--repeat323828581577--><!--repeat323828581577:end--> </div> </div> </div>  
    <div class="info-article" style="display: block;">
        <ul class="article-list clearfix">
            <li class="current">柯林斯高阶英汉双解学习词典</li>
            <li class="info-display">
                <i class="ico-display"></i>
            </li>
        </ul>
        <div class="article" style="">
                            <div class="collins-section">
                                            <div class="section-h">
                            <span class="h-order family-english">A</span>
                            <p class="speech-yellow">
                                <span class="family-english">AIR</span>
                                <span>气流</span>
                            </p>
                        </div>
                                                                                            <div class="section-prep">
                                <i class="prep-order-icon">1</i>
                                                                                                                                    <div class="prep-order">
                                        <p class="size-chinese">
                                            <span class="family-english">N-VAR</span>
                                            <span class="family-chinese">风</span>
                                            <span class="family-english size-english prep-en">A wind is a current of air that is moving across the earth's surface.</span>
                                        </p>
                                                                                                                                    <div class="text-sentence">
                                                    <div class="sentence-item">
                                                        <i class="circle-icon"></i>
                                                        <p class="family-english">
                                                            <span>There was a strong <b>wind</b> blowing...</span>
                                                            <i class="icon-sound"></i>
                                                        </p>
                                                        <p class="family-chinese size-chinese">狂风肆虐。</p>
                                                    </div>
                                                </div>
                                                                                            <div class="text-sentence">
                                                    <div class="sentence-item">
                                                        <i class="circle-icon"></i>
                                                        <p class="family-english">
                                                            <span>Then the <b>wind</b> dropped and the surface of the sea was still...</span>
                                                            <i class="icon-sound"></i>
                                                        </p>
                                                        <p class="family-chinese size-chinese">后来风势渐弱，海面重归平静。</p>
                                                    </div>
                                                </div>
                                                                                                                        </div>
                                                            </div>
                                                    <div class="section-prep">
                                <i class="prep-order-icon">2</i>
                                                                                                                                    <div class="prep-order">
                                        <p class="size-chinese">
                                            <span class="family-english">N-COUNT</span>
                                            <span class="family-chinese">(影响事件的)趋势（或因素）（常作新闻用语）</span>
                                            <span class="family-english size-english prep-en">Journalists often refer to a trend or factor that influences events as a wind of a particular kind.</span>
                                        </p>
                                                                                                                                    <div class="text-sentence">
                                                    <div class="sentence-item">
                                                        <i class="circle-icon"></i>
                                                        <p class="family-english">
                                                            <span>The winds of change are blowing across the country...</span>
                                                            <i class="icon-sound"></i>
                                                        </p>
                                                        <p class="family-chinese size-chinese">改革之风吹遍全国。</p>
                                                    </div>
                                                </div>
                                                                                            <div class="text-sentence">
                                                    <div class="sentence-item">
                                                        <i class="circle-icon"></i>
                                                        <p class="family-english">
                                                            <span>The world's entire aerospace industry is feeling the chill winds of recession.</span>
                                                            <i class="icon-sound"></i>
                                                        </p>
                                                        <p class="family-chinese size-chinese">全世界的航空航天工业都感受到了经济衰退的寒意。</p>
                                                    </div>
                                                </div>
                                                                                                                        </div>
                                                            </div>
                                                    <div class="section-prep">
                                <i class="prep-order-icon">3</i>
                                                                                                                                    <div class="prep-order">
                                        <p class="size-chinese">
                                            <span class="family-english">VERB</span>
                                            <span class="family-chinese">使气急;使呼吸困难</span>
                                            <span class="family-english size-english prep-en">If you are winded by something such as a blow, the air is suddenly knocked out of your lungs so that you have difficulty breathing for a short time.</span>
                                        </p>
                                                                                                                                    <div class="text-sentence">
                                                    <div class="sentence-item">
                                                        <i class="circle-icon"></i>
                                                        <p class="family-english">
                                                            <span>He was winded and shaken...</span>
                                                            <i class="icon-sound"></i>
                                                        </p>
                                                        <p class="family-chinese size-chinese">他呼吸困难，身体发抖。</p>
                                                    </div>
                                                </div>
                                                                                            <div class="text-sentence">
                                                    <div class="sentence-item">
                                                        <i class="circle-icon"></i>
                                                        <p class="family-english">
                                                            <span>The cow stamped on his side, winding him.</span>
                                                            <i class="icon-sound"></i>
                                                        </p>
                                                        <p class="family-chinese size-chinese">牛重重地踩在他的肋部，使他喘不上气来。</p>
                                                    </div>
                                                </div>
                                                                                                                        </div>
                                                            </div>
                                                    <div class="section-prep">
                                <i class="prep-order-icon">4</i>
                                                                                                                                    <div class="prep-order">
                                        <p class="size-chinese">
                                            <span class="family-english">N-UNCOUNT</span>
                                            <span class="family-chinese">（胃肠中的）气</span>
                                            <span class="family-english size-english prep-en">Wind is the air that you sometimes swallow with food or drink, or gas that is produced in your intestines, which causes an uncomfortable feeling.</span>
                                        </p>
                                                                            </div>
                                                            </div>
                                                    <div class="section-prep">
                                <i class="prep-order-icon">5</i>
                                                                                                                                    <div class="prep-order">
                                        <p class="size-chinese">
                                            <span class="family-english">VERB</span>
                                            <span class="family-chinese">给(婴儿）拍嗝儿</span>
                                            <span class="family-english size-english prep-en">If you wind a baby, you hit its back gently in order to help it to release air from its stomach.</span>
                                        </p>
                                                                                                                                    <div class="text-sentence">
                                                    <div class="sentence-item">
                                                        <i class="circle-icon"></i>
                                                        <p class="family-english">
                                                            <span>If he cries when you put him down after a feed, try winding him.</span>
                                                            <i class="icon-sound"></i>
                                                        </p>
                                                        <p class="family-chinese size-chinese">如果你喂完后把他放下时他哭，给他拍拍嗝儿。</p>
                                                    </div>
                                                </div>
                                                                                                                        </div>
                                                            </div>
                                                    <div class="section-prep">
                                <i class="prep-order-icon">6</i>
                                                                                                                                    <div class="prep-order">
                                        <p class="size-chinese">
                                            <span class="family-english">ADJ</span>
                                            <span class="family-chinese">管乐的</span>
                                            <span class="family-english size-english prep-en">The wind section of an orchestra or band is the group of people who produce musical sounds by blowing into their instruments.</span>
                                        </p>
                                                                            </div>
                                                            </div>
                                                    <div class="section-prep">
                                <i class="prep-order-icon">7</i>
                                                                                                                                    <div class="prep-order">
                                        <p class="size-chinese">
                                            <span class="family-english">PHRASE</span>
                                            <span class="family-chinese">放屁</span>
                                            <span class="family-english size-english prep-en">If someone breaks wind, they release gas from their intestines through their anus.</span>
                                        </p>
                                                                            </div>
                                                            </div>
                                                    <div class="section-prep">
                                <i class="prep-order-icon">8</i>
                                                                                                                                    <div class="prep-order">
                                        <p class="size-chinese">
                                            <span class="family-english">PHRASE</span>
                                            <span class="family-chinese">听到…的风声</span>
                                            <span class="family-english size-english prep-en">If you get wind of something, you hear about it, especially when someone else did not want you to know about it.</span>
                                        </p>
                                                                                                                                    <div class="text-sentence">
                                                    <div class="sentence-item">
                                                        <i class="circle-icon"></i>
                                                        <p class="family-english">
                                                            <span>I don't want the public, and especially not the press, to get <b>wind</b> of it at this stage.</span>
                                                            <i class="icon-sound"></i>
                                                        </p>
                                                        <p class="family-chinese size-chinese">我不想让公众，尤其是新闻界，在这个阶段听到什么风声。</p>
                                                    </div>
                                                </div>
                                                                                                                        </div>
                                                            </div>
                                                    <div class="section-prep">
                                <i class="prep-order-icon">9</i>
                                                                                                                                    <div class="prep-order">
                                        <p class="size-chinese">
                                            <span class="family-english">PHRASE</span>
                                            <span class="family-chinese">可能发生</span>
                                            <span class="family-english size-english prep-en">If something is in the wind, it is likely to happen.</span>
                                        </p>
                                                                                                                                    <div class="text-sentence">
                                                    <div class="sentence-item">
                                                        <i class="circle-icon"></i>
                                                        <p class="family-english">
                                                            <span>By the mid-1980s, change was in the <b>wind</b> again.</span>
                                                            <i class="icon-sound"></i>
                                                        </p>
                                                        <p class="family-chinese size-chinese">20世纪80年代中期，变革又呈山雨欲来之势。</p>
                                                    </div>
                                                </div>
                                                                                                                        </div>
                                                            </div>
                                                    <div class="section-prep">
                                <i class="prep-order-icon">10</i>
                                                                                                                                    <div class="prep-order">
                                        <p class="size-chinese">
                                            <span class="family-english">PHRASE</span>
                                            <span class="family-chinese">吓唬;使焦虑</span>
                                            <span class="family-english size-english prep-en">If something or someone puts the wind up you, they frighten or worry you.</span>
                                        </p>
                                                                                                                                    <div class="text-sentence">
                                                    <div class="sentence-item">
                                                        <i class="circle-icon"></i>
                                                        <p class="family-english">
                                                            <span>'I heard you had some funny phone calls.' — 'Yeah, that's why yours rather put the <b>wind</b> up me.'</span>
                                                            <i class="icon-sound"></i>
                                                        </p>
                                                        <p class="family-chinese size-chinese">“我听说你接到了一些骚扰电话。”——“没错儿，所以你的电话把我吓坏了。”</p>
                                                    </div>
                                                </div>
                                                                                                                        </div>
                                                            </div>
                                                    <div class="section-prep">
                                <i class="prep-order-icon">11</i>
                                                                                                                                    <div class="prep-order">
                                        <p class="size-chinese">
                                            <span class="family-english">PHRASE</span>
                                            <span class="family-chinese">冒险做事(或说话)</span>
                                            <span class="family-english size-english prep-en">If you sail close to the wind, you take a risk by doing or saying something that may get you into trouble.</span>
                                        </p>
                                                                                                                                    <div class="text-sentence">
                                                    <div class="sentence-item">
                                                        <i class="circle-icon"></i>
                                                        <p class="family-english">
                                                            <span>Max warned her she was sailing dangerously close to the <b>wind</b> and risked prosecution.</span>
                                                            <i class="icon-sound"></i>
                                                        </p>
                                                        <p class="family-chinese size-chinese">马克斯警告她说她这是在玩火，有被起诉的危险。</p>
                                                    </div>
                                                </div>
                                                                                                                        </div>
                                                            </div>
                                                    <div class="section-prep">
                                <i class="prep-order-icon">12</i>
                                                                                                                                    <div class="prep-order">
                                        <p class="size-chinese">
                                            <span class="family-english">PHRASE</span>
                                            <span class="family-chinese">给…泼冷水（或当头一棒）</span>
                                            <span class="family-english size-english prep-en">If something takes the wind out of your sails, it suddenly makes you much less confident in what you are doing or saying.</span>
                                        </p>
                                                                            </div>
                                                            </div>
                                                    <div class="section-prep">
                                <i class="prep-order-icon">13</i>
                                                                                                                                    <div class="prep-order">
                                        <p class="size-chinese">
                                            <span class="family-english">PHRASE</span>
                                            <span class="family-chinese">可能发生何事;事态的发展</span>
                                            <span class="family-english size-english prep-en">If you realize or find out which way the wind is blowing or how the wind is blowing, you realize or find out what is likely to happen, for example whether something is likely to succeed.</span>
                                        </p>
                                                                                                                                    <div class="text-sentence">
                                                    <div class="sentence-item">
                                                        <i class="circle-icon"></i>
                                                        <p class="family-english">
                                                            <span>He didn't like to make pronouncements before he was sure which way the <b>wind</b> was blowing.</span>
                                                            <i class="icon-sound"></i>
                                                        </p>
                                                        <p class="family-chinese size-chinese">在没有弄清事态的走向前，他不想发表声明。</p>
                                                    </div>
                                                </div>
                                                                                                                        </div>
                                                            </div>
                                                                                                    </div>
                            <div class="collins-section">
                                            <div class="section-h">
                            <span class="h-order family-english">B</span>
                            <p class="speech-yellow">
                                <span class="family-english">TURNING OR WRAPPING</span>
                                <span>卷绕；包裹</span>
                            </p>
                        </div>
                                                                                            <div class="section-prep">
                                <i class="prep-order-icon">1</i>
                                                                                                                                    <div class="prep-order">
                                        <p class="size-chinese">
                                            <span class="family-english">VERB</span>
                                            <span class="family-chinese">(道路、河流或一队人)蜿蜒向前，曲折而行，迂回</span>
                                            <span class="family-english size-english prep-en">If a road, river, or line of people winds in a particular direction, it goes in that direction with a lot of bends or twists in it.</span>
                                        </p>
                                                                                                                                    <div class="text-sentence">
                                                    <div class="sentence-item">
                                                        <i class="circle-icon"></i>
                                                        <p class="family-english">
                                                            <span>The Moselle winds through some 160 miles of tranquil countryside...</span>
                                                            <i class="icon-sound"></i>
                                                        </p>
                                                        <p class="family-chinese size-chinese">摩泽尔河在宁静的乡间蜿蜒穿行约160英里。</p>
                                                    </div>
                                                </div>
                                                                                            <div class="text-sentence">
                                                    <div class="sentence-item">
                                                        <i class="circle-icon"></i>
                                                        <p class="family-english">
                                                            <span>The road winds uphill...</span>
                                                            <i class="icon-sound"></i>
                                                        </p>
                                                        <p class="family-chinese size-chinese">道路沿山坡蜿蜒而上。</p>
                                                    </div>
                                                </div>
                                                                                                                        </div>
                                                            </div>
                                                    <div class="section-prep">
                                <i class="prep-order-icon">2</i>
                                                                                                                                    <div class="prep-order">
                                        <p class="size-chinese">
                                            <span class="family-english">VERB</span>
                                            <span class="family-chinese">卷绕;缠绕</span>
                                            <span class="family-english size-english prep-en">When you wind something flexible around something else, you wrap it around it several times.</span>
                                        </p>
                                                                                                                                    <div class="text-sentence">
                                                    <div class="sentence-item">
                                                        <i class="circle-icon"></i>
                                                        <p class="family-english">
                                                            <span>The horse jumped forwards and round her, winding the rope round her waist.</span>
                                                            <i class="icon-sound"></i>
                                                        </p>
                                                        <p class="family-chinese size-chinese">那匹马围着她向前跳，把绳子绕在了她腰上。</p>
                                                    </div>
                                                </div>
                                                                                                                        </div>
                                                            </div>
                                                    <div class="section-prep">
                                <i class="prep-order-icon">3</i>
                                                                                                                                    <div class="prep-order">
                                        <p class="size-chinese">
                                            <span class="family-english">VERB</span>
                                            <span class="family-chinese">给(钟表等)上发条;给…上弦</span>
                                            <span class="family-english size-english prep-en">When you wind a mechanical device, for example a watch or a clock, you turn a knob, key, or handle on it several times in order to make it operate.</span>
                                        </p>
                                                                                                                                    <div class="text-sentence">
                                                    <div class="sentence-item">
                                                        <i class="circle-icon"></i>
                                                        <p class="family-english">
                                                            <span>I still hadn't wound my watch so I didn't know the time.</span>
                                                            <i class="icon-sound"></i>
                                                        </p>
                                                        <p class="family-chinese size-chinese">我还没有给表上发条，所以不知道时间。</p>
                                                    </div>
                                                </div>
                                                                                                                        </div>
                                                            </div>
                                                    <div class="section-prep">
                                <i class="prep-order-icon">4</i>
                                                                                                                                    <div class="prep-order">
                                        <p class="size-chinese">
                                            <span class="family-english">VERB</span>
                                            <span class="family-chinese">倒/进(磁带或胶卷)</span>
                                            <span class="family-english size-english prep-en">To wind a tape or film back or forward means to make it move towards its starting or ending position.</span>
                                        </p>
                                                                                                                                    <div class="text-sentence">
                                                    <div class="sentence-item">
                                                        <i class="circle-icon"></i>
                                                        <p class="family-english">
                                                            <span>The camcorder winds the tape back or forward at high speed.</span>
                                                            <i class="icon-sound"></i>
                                                        </p>
                                                        <p class="family-chinese size-chinese">这款便携式摄像机可以使录像带快速倒回或前进。</p>
                                                    </div>
                                                </div>
                                                                                                                        </div>
                                                            </div>
                                                                                                            <div class="phrase－wrap">
                            <h2 class="family-chinese size-chinese">相关词组</h2>
                                                            <a href="/wind down">wind down&nbsp;&nbsp;&nbsp;</a>
                                                            <a href="/wind up">wind up&nbsp;&nbsp;&nbsp;</a>
                                                    </div>
                                    </div>
                    </div>
    </div>


 <div class="ad-left" style="display: block;"> <script>
                            (function() {
                                var s = "_" + Math.random().toString(36).slice(2);
                                document.write('<div id="' + s + '"></div>');
                                (window.slotbydup = window.slotbydup || []).push({
                                    id: '6882272',
                                    container: s,
                                    size: '640,60',
                                    display: 'inlay-fix'
                                });
                            })();
                        </script><div id="_a0oxgyuqah"><iframe id="iframe6882272_0" name="iframe6882272_0" onload="___baidu_union_callback(3, '6882272_0', this);" src="about:blank" vspace="0" hspace="0" marginwidth="0" marginheight="0" scrolling="no" style="border:0;vertical-align:bottom;margin:0;width:640px;height:60px" allowtransparency="true" width="640" height="60" frameborder="0" align="center,center"></iframe></div><script charset="utf-8" src="https://pos.baidu.com/pcym?psi=c31c402854b5662d9d8b707506e2dae8&amp;di=6882272&amp;dri=0&amp;dis=0&amp;dai=0&amp;ps=0x0&amp;enu=encoding&amp;exps=110011&amp;ant=0&amp;dcb=___adblockplus_&amp;dtm=SSP_JSONP&amp;dvi=0.0&amp;dci=-1&amp;dpt=none&amp;tsr=0&amp;tpr=1586671720596&amp;ti=wind%E6%98%AF%E4%BB%80%E4%B9%88%E6%84%8F%E6%80%9D_wind%E7%9A%84%E7%BF%BB%E8%AF%91_%E9%9F%B3%E6%A0%87_%E8%AF%BB%E9%9F%B3_%E7%94%A8%E6%B3%95_%E4%BE%8B%E5%8F%A5_%E7%88%B1%E8%AF%8D%E9%9C%B8%E5%9C%A8%E7%BA%BF%E8%AF%8D%E5%85%B8&amp;ari=2&amp;ver=0407&amp;dbv=0&amp;drs=1&amp;pcs=1291x937&amp;pss=1291x1475&amp;cfv=32&amp;cpl=1&amp;chi=3&amp;cce=true&amp;cec=UTF-8&amp;tlm=1586671720&amp;prot=2&amp;rw=937&amp;ltu=http%3A%2F%2Fwww.iciba.com%2Fwind&amp;ltr=http%3A%2F%2Fwww.iciba.com%2F&amp;ecd=1&amp;uc=1920x1040&amp;pis=-1x-1&amp;sr=1920x1080&amp;tcn=1586671721"></script> <script src="//dup.baidustatic.com/js/os.js"></script> </div>  <div class="info-article info-product" style="display: block;"> <ul class="article-list clearfix"> <li class="current">牛津词典</li> <li class="product-tip">金山词霸客户端产品已经全面收录牛津词典</li> <li class="info-display"> <i class="ico-display"></i> </li> </ul> <div class="article product clearfix" style=""> <div class="product-section result-oxford"> <p class="product-intro">牛津词典免费送</p> <i class="pc"></i> <a href="javascript:void(0)" class="product-download-btn" onclick="_czc.push(['_trackEvent','查词结果','PC下载','牛津词典','','']);"> <div class="pc-btn">点击下载</div> </a> </div> <div class="product-section result-oxford-a"> <p class="product-intro">词霸Android版</p> <i class="android"></i> <p class="holy">牛津词典免费使用!</p> <p class="download">立刻扫码下载</p> </div> <div class="product-section result-oxford-i"> <p class="product-intro">词霸iOS版</p> <i class="ios"></i> <p class="holy">牛津词典免费使用!</p> <p class="download">立刻扫码下载</p> </div> </div> </div> <script>
                        $('.product-download-btn').click(function() {
                            navigator.userAgent.indexOf("Mac") > 0 ? window.open('http://download.iciba.com/mac/mac1.0.1/PowerWord.dmg') : window.open('http://download.iciba.com/pc/personal2016/PowerWord.800.12012.exe')
                        });
                    </script>  
                    <div class="info-article" style="display: block;"> <ul class="article-list clearfix"> <!--ms-if-->
                      <li onclick="_czc.push(['_trackEvent','查词结果','词组搭配','tab切换','','']);" class="current">词组搭配</li> <li class="info-display"> <i class="ico-display">
                      </i> 
                    </li> 
                    </ul> <div class="article" style=""> <!--ms-if--> <div class="article-section"> <h2 class="family-chinese size-chinese">常用词组
                      </h2> <!--repeat603636076065:start--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">A
                      </span> <p class="speech-yellow"> <span class="family-english">before the wind
                      </span> 
                    </p> 
                    </div> <!--repeat647060900213:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>(Sailing)with the wind blowing from astern
                      </span> <span class="family-chinese size-chinese">(航海)顺风，借风力
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat209943585478:start--><!--repeat209943585478:end--> 
                      </div> 
                    </div> 
                    </div><!--repeat647060900213--><!--repeat647060900213:end--> 
                    </div><!--repeat603636076065--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">B
                      </span> <p class="speech-yellow"> <span class="family-english">get wind of
                      </span> 
                    </p> 
                    </div> <!--repeat222079572523:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>(informal)begin to suspect that (something) is happening; hear a rumour of
                      </span> <span class="family-chinese size-chinese">(非正式)开始觉察；听到…的风声，获悉…的消息
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat273033525063:start--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">Mortimer got wind of a plot being hatched.
                      </p> <p class="family-chinese size-chinese" ns-text="item3.lj_ls">
                      </p> 
                    </div><!--repeat273033525063--><!--repeat273033525063:end--> 
                    </div> 
                    </div> 
                    </div><!--repeat222079572523--><!--repeat222079572523:end--> 
                    </div><!--repeat603636076065--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">C
                      </span> <p class="speech-yellow"> <span class="family-english">it's an ill wind that blows nobody any good
                      </span> 
                    </p> 
                    </div> <!--repeat394982229997:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>(proverb)few things are so bad that no one profits from them
                      </span> <span class="family-chinese size-chinese">(谚)使人人遭殃的风才是恶风；世上鲜有绝对的坏事；害于此者利于彼
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat360745962827:start--><!--repeat360745962827:end--> 
                      </div> 
                    </div> 
                    </div><!--repeat394982229997--><!--repeat394982229997:end--> 
                    </div><!--repeat603636076065--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">D
                      </span> <p class="speech-yellow"> <span class="family-english">like the wind
                      </span> 
                    </p> 
                    </div> <!--repeat6118323143483:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>very quickly
                      </span> <span class="family-chinese size-chinese">飞快地
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat657169654533:start--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">she ran like the wind back to the house.
                      </p> <p class="family-chinese size-chinese" ns-text="item3.lj_ls">
                      </p> 
                    </div><!--repeat657169654533--><!--repeat657169654533:end--> 
                    </div> 
                    </div> 
                    </div><!--repeat6118323143483--><!--repeat6118323143483:end--> 
                    </div><!--repeat603636076065--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">E
                      </span> <p class="speech-yellow"> <span class="family-english">off the wind
                      </span> 
                    </p> 
                    </div> <!--repeat12777983908:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>(Sailing)with the wind on the quarter
                      </span> <span class="family-chinese size-chinese">(航海)顺风
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat84702114111:start--><!--repeat84702114111:end--> 
                      </div> 
                    </div> 
                    </div><!--repeat12777983908--><!--repeat12777983908:end--> 
                    </div><!--repeat603636076065--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">F
                      </span> <p class="speech-yellow"> <span class="family-english">on a wind
                      </span> 
                    </p> 
                    </div> <!--repeat947213772217:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>(Sailing)against a wind on either bow
                      </span> <span class="family-chinese size-chinese">(航海)逆风，迎风，顶风
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat913499561483:start--><!--repeat913499561483:end--> 
                      </div> 
                    </div> 
                    </div><!--repeat947213772217--><!--repeat947213772217:end--> 
                    </div><!--repeat603636076065--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">G
                      </span> <p class="speech-yellow"> <span class="family-english">put (或 have) the wind up
                      </span> 
                    </p> 
                    </div> <!--repeat593199352377:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>(Brit. informal)alarm or frighten (or be alarmed or frightened)
                      </span> <span class="family-chinese size-chinese">(英，非正式)（使）警觉；（使）受惊吓
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat08830690879:start--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">he was trying to put the wind up him with stories of how hard teaching was.
                      </p> <p class="family-chinese size-chinese" ns-text="item3.lj_ls">
                      </p> 
                    </div><!--repeat08830690879--><!--repeat08830690879:end--> 
                    </div> 
                    </div> 
                    </div><!--repeat593199352377--><!--repeat593199352377:end--> 
                    </div><!--repeat603636076065--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">H
                      </span> <p class="speech-yellow"> <span class="family-english">sail close to (或 near) the wind
                      </span> 
                    </p> 
                    </div> <!--repeat96314389854:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>(Sailing)sail as nearly against the wind as is consistent with using its force
                      </span> <span class="family-chinese size-chinese">(航海)迎风航行
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat01296904957:start--><!--repeat01296904957:end--> 
                      </div> 
                    </div> 
                    </div><!--repeat96314389854--><div class="section-prep"> <i class="prep-order-icon">2
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>(informal)verge on indecency, dishonesty, or disaster
                      </span> <span class="family-chinese size-chinese">(非正式)行为几失检点；近乎不老实；濒临险境
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat567688194461:start--><!--repeat567688194461:end--> 
                      </div> 
                    </div> 
                    </div><!--repeat96314389854--><!--repeat96314389854:end--> 
                    </div><!--repeat603636076065--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">I
                      </span> <p class="speech-yellow"> <span class="family-english">take the wind out of someone's sails
                      </span> 
                    </p> 
                    </div> <!--repeat531350904194:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>frustrate someone by unexpectedly anticipating an action or remark
                      </span> <span class="family-chinese size-chinese">先发制人；冷不防挫败某人
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat802458310308:start--><!--repeat802458310308:end--> 
                      </div> 
                    </div> 
                    </div><!--repeat531350904194--><!--repeat531350904194:end--> 
                    </div><!--repeat603636076065--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">J
                      </span> <p class="speech-yellow"> <span class="family-english">to the wind(s) (或 the four winds)
                      </span> 
                    </p> 
                    </div> <!--repeat349479682138:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>in all directions
                      </span> <span class="family-chinese size-chinese">四面八方
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat47959067396:start--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">my little flock scatters to the four winds.
                      </p> <p class="family-chinese size-chinese" ns-text="item3.lj_ls">
                      </p> 
                    </div><!--repeat47959067396--><!--repeat47959067396:end--> 
                    </div> 
                    </div> 
                    </div><!--repeat349479682138--><!--repeat349479682138:end--> 
                    </div><!--repeat603636076065--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">K
                      </span> <p class="speech-yellow"> <span class="family-english">wind down
                      </span> 
                    </p> 
                    </div> <!--repeat47185617721:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>(of a mechanism, especially one operated by clockwork) gradually lose power
                      </span> <span class="family-chinese size-chinese"> （尤指用发条驱动的机械装置）渐渐停下
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat385698263467:start--><!--repeat385698263467:end--> 
                      </div> 
                    </div> 
                    </div><!--repeat47185617721--><!--repeat47185617721:end--> 
                    </div><!--repeat603636076065--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">L
                      </span> <p class="speech-yellow"> <span class="family-english">wind up informal 非正式
                      </span> 
                    </p> 
                    </div> <!--repeat256266343199:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>arrive or end up in a specified state, situation, or place
                      </span> <span class="family-chinese size-chinese">抵达；（以某状态，情况或在某地）结束
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat524493479694:start--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">Kevin winds up in New York .
                      </p> <p class="family-chinese size-chinese" ns-text="item3.lj_ls">
                      </p> 
                    </div><!--repeat524493479694--><!--repeat524493479694:end--> 
                    </div> 
                    </div> 
                    </div><!--repeat256266343199--><div class="section-prep"> <i class="prep-order-icon">2
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>another way of saying wind something up (in sense 2)
                      </span> <span class="family-chinese size-chinese">同 wind something up(义项2):
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat034279009057:start--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">he wound up by attacking Nonconformists.
                      </p> <p class="family-chinese size-chinese" ns-text="item3.lj_ls">
                      </p> 
                    </div><!--repeat034279009057--><!--repeat034279009057:end--> 
                    </div> 
                    </div> 
                    </div><!--repeat256266343199--><!--repeat256266343199:end--> 
                    </div><!--repeat603636076065--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">M
                      </span> <p class="speech-yellow"> <span class="family-english">wind someone up
                      </span> 
                    </p> 
                    </div> <!--repeat121788351839:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>(Brit. informal)tease or irritate someone
                      </span> <span class="family-chinese size-chinese">(英，非正式)捉弄，激怒（某人）
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat206645731152:start--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">she's only winding me up.
                      </p> <p class="family-chinese size-chinese" ns-text="item3.lj_ls">
                      </p> 
                    </div><!--repeat206645731152--><!--repeat206645731152:end--> 
                    </div> 
                    </div> 
                    </div><!--repeat121788351839--><div class="section-prep"> <i class="prep-order-icon">2
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>(一般作 be wound up)make tense or angry
                      </span> <span class="family-chinese size-chinese">使紧张（或生气）
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat149777563476:start--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">he was clearly wound up and frantic about his daughter.
                      </p> <p class="family-chinese size-chinese" ns-text="item3.lj_ls">
                      </p> 
                    </div><!--repeat149777563476--><!--repeat149777563476:end--> 
                    </div> 
                    </div> 
                    </div><!--repeat121788351839--><!--repeat121788351839:end--> 
                    </div><!--repeat603636076065--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">N
                      </span> <p class="speech-yellow"> <span class="family-english">wind something up
                      </span> 
                    </p> 
                    </div> <!--repeat907216534749:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>arrange the affairs of and dissolve a company
                      </span> <span class="family-chinese size-chinese">（公司）停业清理
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat30633994437:start--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">the company has since been wound up.
                      </p> <p class="family-chinese size-chinese" ns-text="item3.lj_ls">
                      </p> 
                    </div><!--repeat30633994437--><!--repeat30633994437:end--> 
                    </div> 
                    </div> 
                    </div><!--repeat907216534749--><div class="section-prep"> <i class="prep-order-icon">2
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>gradually or finally bring an activity to a conclusion
                      </span> <span class="family-chinese size-chinese">慢慢终止；以…告终
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat16848252447:start--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">the experiments had to be wound up because the funding stopped.
                      </p> <p class="family-chinese size-chinese" ns-text="item3.lj_ls">
                      </p> 
                    </div><!--repeat16848252447--><!--repeat16848252447:end--> 
                    </div> 
                    </div> 
                    </div><!--repeat907216534749--><div class="section-prep"> <i class="prep-order-icon">3
                      </i> <div class="prep-order"> <p> <span class="family-english size-english"> <span>(informal)increase the tension, intensity, or power of something
                      </span> <span class="family-chinese size-chinese">(非正式)增加某物的紧张度（或强度、力量）
                      </span> 
                    </span> 
                    </p> <div class="text-sentence"> <!--repeat844900032898:start--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">he wound up the engine.
                      </p> <p class="family-chinese size-chinese" ns-text="item3.lj_ls">
                      </p> 
                    </div><!--repeat844900032898--><!--repeat844900032898:end--> 
                    </div> 
                    </div> 
                    </div><!--repeat907216534749--><!--repeat907216534749:end--> 
                    </div><!--repeat603636076065--><!--repeat603636076065:end--> 
                    </div> 
                    </div> 
                    </div>  <div class="info-article" style="display: block;"> <ul class="article-list clearfix"> <!--ms-if--> <li onclick="_czc.push(['_trackEvent','查词结果','同义词解析','tab切换','','']);" class="current">同义词解析
                      </li> <!--ms-if--> <li class="info-display"> <i class="ico-display">
                      </i> 
                    </li> 
                    </ul> <div class="article" style=""> <div class="article-section none"> <!--ms-if--> 
                      </div> <div class="article-section"> <div class="collins-section"> <!--repeat390523365282:start--><div class="section-prep no-order"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p> <span class="family-english size-english">wind, breeze
                      </span> <span class="family-chinese size-chinese">这两个名词均有"风"之意。
                      </span> 
                    </p> <ul class="text-sentence"> <!--repeat478375207899:start--><li class="item"><a href="/wind " target="_blank">wind 
                      </a><span class="family-chinese size-chinese">:  普通用词，指空气的流动现象。
                      </span>
                    </li><!--repeat478375207899--><li class="item"><a href="/breeze " target="_blank">breeze 
                      </a><span class="family-chinese size-chinese">:  系微风的总称。
                      </span>
                    </li><!--repeat478375207899--><!--repeat478375207899:end--> 
                    </ul> 
                    </div> 
                    </div><!--repeat390523365282--><!--repeat390523365282:end--> 
                    </div> 
                    </div> <div class="article-section none"> <!--ms-if--> 
                      </div> 
                    </div> 
                    </div>  <div class="info-article" style="display: block;"> <ul class="article-list clearfix"> <li onclick="_czc.push(['_trackEvent','查词结果','英英词典','tab切换','','']);" class="current">英英词典
                      </li> <li onclick="_czc.push(['_trackEvent','查词结果','英汉双向','tab切换','','']);" style="">英汉双向大词典
                      </li> <li class="info-display"> <i class="ico-display">
                      </i> 
                    </li> 
                    </ul> <div class="article" style=""> <div class="article-section"> <!--repeat052316699864:start--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">A
                      </span> <p class="speech-yellow"> <span class="family-english">Noun
                      </span> 
                    </p> 
                    </div> <!--repeat34766903258:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p class="family-english size-english">1. air moving (sometimes with considerable force) from an area of high pressure to an area of low pressure;
                      </p> <ul class="text-sentence"> <!--repeat98475415009:start--><li class="item">"trees bent under the fierce <b><b>winds
                      </b>
                    </b>"
                    </li><!--repeat98475415009--><li class="item">"when there is no <b>wind
                      </b>, row"
                    </li><!--repeat98475415009--><li class="item">"the radioactivity was being swept upwards by the air current and out into the atmosphere"
                      </li><!--repeat98475415009--><!--repeat98475415009:end--> 
                    </ul> 
                    </div> 
                    </div><!--repeat34766903258--><div class="section-prep"> <i class="prep-order-icon">2
                      </i> <div class="prep-order"> <p class="family-english size-english">2. a tendency or force that influences events;
                      </p> <ul class="text-sentence"> <!--repeat749652868712:start--><li class="item">"the <b><b>winds
                      </b>
                    </b> of change"
                    </li><!--repeat749652868712--><!--repeat749652868712:end--> 
                    </ul> 
                    </div> 
                    </div><!--repeat34766903258--><div class="section-prep"> <i class="prep-order-icon">3
                      </i> <div class="prep-order"> <p class="family-english size-english">3. breath;
                      </p> <ul class="text-sentence"> <!--repeat402991333596:start--><li class="item">"the collision knocked the <b>wind
                      </b> out of him"
                    </li><!--repeat402991333596--><!--repeat402991333596:end--> 
                    </ul> 
                    </div> 
                    </div><!--repeat34766903258--><div class="section-prep"> <i class="prep-order-icon">4
                      </i> <div class="prep-order"> <p class="family-english size-english">4. empty rhetoric or insincere or exaggerated talk;
                      </p> <ul class="text-sentence"> <!--repeat237431209153:start--><li class="item">"that's a lot of <b>wind
                      </b>"
                    </li><!--repeat237431209153--><li class="item">"don't give me any of that jazz"
                      </li><!--repeat237431209153--><!--repeat237431209153:end--> 
                    </ul> 
                    </div> 
                    </div><!--repeat34766903258--><div class="section-prep"> <i class="prep-order-icon">5
                      </i> <div class="prep-order"> <p class="family-english size-english">5. an indication of potential opportunity;
                      </p> <ul class="text-sentence"> <!--repeat774107264707:start--><li class="item">"he got a tip on the stock market"
                      </li><!--repeat774107264707--><li class="item">"a good lead for a job"
                      </li><!--repeat774107264707--><!--repeat774107264707:end--> 
                    </ul> 
                    </div> 
                    </div><!--repeat34766903258--><div class="section-prep"> <i class="prep-order-icon">6
                      </i> <div class="prep-order"> <p class="family-english size-english">6. a musical instrument in which the sound is produced by an enclosed column of air that is moved by the breath
                      </p> <ul class="text-sentence"> <!--repeat955544872148:start--><!--repeat955544872148:end--> 
                      </ul> 
                    </div> 
                    </div><!--repeat34766903258--><div class="section-prep"> <i class="prep-order-icon">7
                      </i> <div class="prep-order"> <p class="family-english size-english">7. a reflex that expels intestinal gas through the anus
                      </p> <ul class="text-sentence"> <!--repeat212423187167:start--><!--repeat212423187167:end--> 
                      </ul> 
                    </div> 
                    </div><!--repeat34766903258--><div class="section-prep"> <i class="prep-order-icon">8
                      </i> <div class="prep-order"> <p class="family-english size-english">8. the act of <b>winding
                      </b> or twisting;
                    </p> <ul class="text-sentence"> <!--repeat10337541369:start--><li class="item">"he put the key in the old clock and gave it a good <b>wind
                      </b>"
                    </li><!--repeat10337541369--><!--repeat10337541369:end--> 
                    </ul> 
                    </div> 
                    </div><!--repeat34766903258--><!--repeat34766903258:end--> 
                    </div><!--repeat052316699864--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">B
                      </span> <p class="speech-yellow"> <span class="family-english">Verb
                      </span> 
                    </p> 
                    </div> <!--repeat983044651352:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p class="family-english size-english">1. to move or cause to move in a sinuous, spiral, or circular course;
                      </p> <ul class="text-sentence"> <!--repeat664507098881:start--><li class="item">"the river <b><b>winds
                      </b>
                    </b> through the hills"
                    </li><!--repeat664507098881--><li class="item">"the path meanders through the vineyards"
                      </li><!--repeat664507098881--><li class="item">"sometimes, the gout wanders through the entire body"
                      </li><!--repeat664507098881--><!--repeat664507098881:end--> 
                    </ul> 
                    </div> 
                    </div><!--repeat983044651352--><div class="section-prep"> <i class="prep-order-icon">2
                      </i> <div class="prep-order"> <p class="family-english size-english">2. extend in curves and turns;
                      </p> <ul class="text-sentence"> <!--repeat57002857239:start--><li class="item">"The road <b><b>winds
                      </b>
                    </b> around the lake"
                    </li><!--repeat57002857239--><!--repeat57002857239:end--> 
                    </ul> 
                    </div> 
                    </div><!--repeat983044651352--><div class="section-prep"> <i class="prep-order-icon">3
                      </i> <div class="prep-order"> <p class="family-english size-english">3. wrap or coil around;
                      </p> <ul class="text-sentence"> <!--repeat657311022925:start--><li class="item">"roll your hair around your finger"
                      </li><!--repeat657311022925--><li class="item">"Twine the thread around the spool"
                      </li><!--repeat657311022925--><!--repeat657311022925:end--> 
                    </ul> 
                    </div> 
                    </div><!--repeat983044651352--><div class="section-prep"> <i class="prep-order-icon">4
                      </i> <div class="prep-order"> <p class="family-english size-english">4. catch the scent of; get <b>wind
                      </b> of;
                    </p> <ul class="text-sentence"> <!--repeat597687678901:start--><li class="item">"The dog nosed out the drugs"
                      </li><!--repeat597687678901--><!--repeat597687678901:end--> 
                    </ul> 
                    </div> 
                    </div><!--repeat983044651352--><div class="section-prep"> <i class="prep-order-icon">5
                      </i> <div class="prep-order"> <p class="family-english size-english">5. coil the spring of (some mechanical device) by turning a stem;
                      </p> <ul class="text-sentence"> <!--repeat911099559864:start--><li class="item">"<b>wind
                      </b> your watch"
                    </li><!--repeat911099559864--><!--repeat911099559864:end--> 
                    </ul> 
                    </div> 
                    </div><!--repeat983044651352--><div class="section-prep"> <i class="prep-order-icon">6
                      </i> <div class="prep-order"> <p class="family-english size-english">6. form into a wreath
                      </p> <ul class="text-sentence"> <!--repeat800034784368:start--><!--repeat800034784368:end--> 
                      </ul> 
                    </div> 
                    </div><!--repeat983044651352--><div class="section-prep"> <i class="prep-order-icon">7
                      </i> <div class="prep-order"> <p class="family-english size-english">7. raise or haul up with or as if with mechanical help;
                      </p> <ul class="text-sentence"> <!--repeat851465487846:start--><li class="item">"hoist the bicycle onto the roof of the car"
                      </li><!--repeat851465487846--><!--repeat851465487846:end--> 
                    </ul> 
                    </div> 
                    </div><!--repeat983044651352--><!--repeat983044651352:end--> 
                    </div><!--repeat052316699864--><!--repeat052316699864:end--> 
                    </div> <div class="article-section none"> <!--repeat650363178928:start--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">A
                      </span> <p class="speech-yellow"> <span class="family-english">n.
                      </span> 
                    </p> 
                    </div> <!--repeat814582125805:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p class="family-chinese size-chinese">风, 气流
                      </p> <div class="text-sentence"> <!--repeat861671176725:start--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">A gentle <b>wind
                      </b> disturbed the surface of the water.
                    </p> <p class="family-chinese size-chinese">微风拂动水面。
                      </p> 
                    </div><!--repeat861671176725--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">These young men are advancing against the <b><b>winds
                      </b>
                    </b> and waves.
                    </p> <p class="family-chinese size-chinese">这些年轻人迎着风浪前进。
                      </p> 
                    </div><!--repeat861671176725--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">The rocks were shaped by sun, <b>wind
                      </b> and rain.
                    </p> <p class="family-chinese size-chinese">太阳, 风和雨使岩石变形了。
                      </p> 
                    </div><!--repeat861671176725--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">The <b>wind
                      </b> blew out the candle.
                    </p> <p class="family-chinese size-chinese">风吹灭了蜡烛。
                      </p> 
                    </div><!--repeat861671176725--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">There is not much <b>wind
                      </b> today.
                    </p> <p class="family-chinese size-chinese">今天没什么风。
                      </p> 
                    </div><!--repeat861671176725--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">The <b>wind
                      </b> of war had swept his home away.
                    </p> <p class="family-chinese size-chinese">战火毁了他的家园。
                      </p> 
                    </div><!--repeat861671176725--><!--repeat861671176725:end--> 
                    </div> 
                    </div> 
                    </div><!--repeat814582125805--><div class="section-prep"> <i class="prep-order-icon">2
                      </i> <div class="prep-order"> <p class="family-chinese size-chinese">呼吸, （运动或吹奏乐器时的）呼吸
                      </p> <div class="text-sentence"> <!--repeat852400617407:start--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">Climbing these stairs takes all the <b>wind
                      </b> out of him.
                    </p> <p class="family-chinese size-chinese">爬楼梯使他气喘吁吁。
                      </p> 
                    </div><!--repeat852400617407--><!--repeat852400617407:end--> 
                    </div> 
                    </div> 
                    </div><!--repeat814582125805--><!--repeat814582125805:end--> 
                    </div><!--repeat650363178928--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">B
                      </span> <p class="speech-yellow"> <span class="family-english">vt.
                      </span> 
                    </p> 
                    </div> <!--repeat33117369346:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p class="family-chinese size-chinese">缠绕, 卷绕, 卷缠, 绕成团
                      </p> <div class="text-sentence"> <!--repeat7186318157025:start--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">She is <b>winding
                      </b> the wool.
                    </p> <p class="family-chinese size-chinese">她在缠毛线。
                      </p> 
                    </div><!--repeat7186318157025--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">The man's arm was <b><b>wound
                      </b>
                    </b> with bandages.
                    </p> <p class="family-chinese size-chinese">那人的胳膊上裹着绷带。
                      </p> 
                    </div><!--repeat7186318157025--><!--repeat7186318157025:end--> 
                    </div> 
                    </div> 
                    </div><!--repeat33117369346--><div class="section-prep"> <i class="prep-order-icon">2
                      </i> <div class="prep-order"> <p class="family-chinese size-chinese">给…上发条, 能（通过转动把手等）操作
                      </p> <div class="text-sentence"> <!--repeat4290515712132:start--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">It's time to <b>wind
                      </b> your watch.
                    </p> <p class="family-chinese size-chinese">该给表上弦了。
                      </p> 
                    </div><!--repeat4290515712132--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">The alarm clock was <b><b>wound
                      </b>
                    </b>.
                    </p> <p class="family-chinese size-chinese">闹钟上过发条了。
                      </p> 
                    </div><!--repeat4290515712132--><!--repeat4290515712132:end--> 
                    </div> 
                    </div> 
                    </div><!--repeat33117369346--><!--repeat33117369346:end--> 
                    </div><!--repeat650363178928--><div class="collins-section"> <div class="section-h"> <span class="h-order family-english">C
                      </span> <p class="speech-yellow"> <span class="family-english">vt. &amp; vi.
                      </span> 
                    </p> 
                    </div> <!--repeat061095328301:start--><div class="section-prep"> <i class="prep-order-icon">1
                      </i> <div class="prep-order"> <p class="family-chinese size-chinese">迂回, 蜿蜒
                      </p> <div class="text-sentence"> <!--repeat084293297926:start--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">The road <b><b>winds
                      </b>
                    </b>.
                    </p> <p class="family-chinese size-chinese">这条路弯弯曲曲。
                      </p> 
                    </div><!--repeat084293297926--><div class="sentence-item"> <i class="circle-icon">
                      </i> <p class="family-english size-english">The river <b><b>winds
                      </b>
                    </b> the valley.
                    </p> <p class="family-chinese size-chinese">这条河蜿蜒流过山谷。
                      </p> 
                    </div><!--repeat084293297926--><!--repeat084293297926:end--> 
                    </div> 
                    </div> 
                    </div><!--repeat061095328301--><!--repeat061095328301:end--> 
                    </div><!--repeat650363178928--><!--repeat650363178928:end--> 
                    </div> <!--ms-if--> 
                    </div> 
                    </div>  <div class="info-article" style="display: none;"> <ul class="article-list clearfix"> <li class="current">汉语词典
                      </li> <li class="info-display"> <i class="ico-display">
                      </i> 
                    </li> 
                    </ul> <!--ms-if--> 
                    </div>  <div class="info-article" style="display: none;"> <ul class="article-list clearfix"> <li class="current">网络释义
                      </li> <li class="info-display"> <i class="ico-display">
                      </i> 
                    </li> 
                    </ul> <!--ms-if--> 
                    </div>  <div class="info-article" style="display: block;"> <ul class="article-list clearfix"> <li class="current">行业词典
                      </li> <li class="info-display"> <i class="ico-display">
                      </i> 
                    </li> 
                    </ul> <div class="article" style=""> <div class="collins-section"> <ul class="multiple-list clearfix"> <!--repeat1697852259685:start--><li class="current"> <span class="text">土木工程
                      </span> <i class="cut-line">
                      </i> 
                    </li><!--repeat1697852259685--><li class="text"> <span class="text">大气科学
                      </span> <i class="cut-line">
                      </i> 
                    </li><!--repeat1697852259685--><li class="text"> <span class="text">电力
                      </span> <!--ms-if--> 
                    </li><!--repeat1697852259685--><!--repeat1697852259685:end--> 
                    </ul> <ul class="text-content clearfix"> <!--repeat369816553118:start--><li>1.抗风稳定性，wind-resistant stability, aerodynamic stability  又称“空气动力稳定性”。
                      </li><!--repeat369816553118--><li>2.风海流，wind-driven current
                      </li><!--repeat369816553118--><!--repeat369816553118:end--> 
                    </ul> 
                    </div> 
                    </div> 
                    </div>  <div class="info-article" style="display: none;"> <ul class="article-list clearfix"> <li class="current" onclick="_czc.push(['_trackEvent','查词结果','四级真题','词典tab切换','','']);">百科
                      </li> <li class="info-display"> <i class="ico-display">
                      </i> 
                    </li> 
                    </ul> <div class="article" style=""> <!--ms-if--> 
                      </div> 
                    </div> <div class="ad-left" style="display: block;"> <script>
                            (function() {
                                var s = "_" + Math.random().toString(36).slice(2);
                                document.write('<div id="' + s + '">
                                  </div>');
                                (window.slotbydup = window.slotbydup || []).push({
                                    id: '6882275',
                                    container: s,
                                    size: '640,200',
                                    display: 'inlay-fix'
                                });
                            })();
                        
                        </script><div id="_wiyeqwmyp8s"><iframe id="iframe6882275_0" name="iframe6882275_0" onload="___baidu_union_callback(3, '6882275_0', this);" src="about:blank" vspace="0" hspace="0" marginwidth="0" marginheight="0" scrolling="no" style="border:0;vertical-align:bottom;margin:0;width:640px;height:200px" allowtransparency="true" width="640" height="200" frameborder="0" align="center,center">
                        </iframe>
                      </div><script charset="utf-8" src="https://pos.baidu.com/ccxm?psi=c31c402854b5662d9d8b707506e2dae8&amp;di=6882275&amp;dri=0&amp;dis=0&amp;dai=0&amp;ps=0x0&amp;enu=encoding&amp;exps=110011&amp;ant=0&amp;dcb=___adblockplus_&amp;dtm=SSP_JSONP&amp;dvi=0.0&amp;dci=-1&amp;dpt=none&amp;tsr=0&amp;tpr=1586671720596&amp;ti=wind%E6%98%AF%E4%BB%80%E4%B9%88%E6%84%8F%E6%80%9D_wind%E7%9A%84%E7%BF%BB%E8%AF%91_%E9%9F%B3%E6%A0%87_%E8%AF%BB%E9%9F%B3_%E7%94%A8%E6%B3%95_%E4%BE%8B%E5%8F%A5_%E7%88%B1%E8%AF%8D%E9%9C%B8%E5%9C%A8%E7%BA%BF%E8%AF%8D%E5%85%B8&amp;ari=2&amp;ver=0407&amp;dbv=0&amp;drs=1&amp;pcs=1291x937&amp;pss=1291x1475&amp;cfv=32&amp;cpl=1&amp;chi=3&amp;cce=true&amp;cec=UTF-8&amp;tlm=1586671720&amp;prot=2&amp;rw=937&amp;ltu=http%3A%2F%2Fwww.iciba.com%2Fwind&amp;ltr=http%3A%2F%2Fwww.iciba.com%2F&amp;ecd=1&amp;uc=1920x1040&amp;pis=-1x-1&amp;sr=1920x1080&amp;tcn=1586671721">
                        </script> <script src="//dup.baidustatic.com/js/os.js">
                        </script> 
                      </div>  <div class="info-article info-hotwords" style="display: block;"> <ul class="article-list clearfix"> <li class="current">今日热词
                        </li> <li>热门搜索
                        </li> <li class="info-display"> <i class="ico-display">
                        </i> 
                      </li> 
                      </ul> <div class="article hotwords" style=""> <div class="hotwords-section"> <ul class="word-list clearfix" id="hotword"> <li> <a title="你好" href="/你好" target="_blank">你好
                        </a> 
                      </li> <li> <a title="海龟" href="/海龟" target="_blank">海龟
                        </a> 
                      </li> <li> <a title="allude" href="/allude" target="_blank">allude
                        </a> 
                      </li> <li> <a title="海归" href="/海归" target="_blank">海归
                        </a> 
                      </li> <li> <a title="空气污染" href="/空气污染" target="_blank">空气污染
                        </a> 
                      </li> <li> <a title="regularly" href="/regularly" target="_blank">regularly
                        </a> 
                      </li> <li> <a title="志愿者" href="/志愿者" target="_blank">志愿者
                        </a> 
                      </li> <li> <a title="tendency" href="/tendency" target="_blank">tendency</a> </li> <li> <a title="test" href="/test" target="_blank">test</a> </li> <li> <a title="explicitly" href="/explicitly" target="_blank">explicitly</a> </li> <div class="clear"></div> </ul> </div> <div class="hotwords-section none"> <ul class="word-list clearfix" id="todaynews"> <li> <a title="阅卷笔录" href="/阅卷笔录" target="_blank">阅卷笔录</a> </li> <li> <a title="孙中山" href="/孙中山" target="_blank">孙中山</a> </li> <li> <a title="宋慧乔" href="/宋慧乔" target="_blank">宋慧乔</a> </li> <li> <a title="家庭软暴力" href="/家庭软暴力" target="_blank">家庭软暴力</a> </li> <li> <a title="海警" href="/海警" target="_blank">海警</a> </li> <li> <a title="duck feather" href="/duck feather" target="_blank">duck feather</a> </li> <li> <a title="天下第一泉" href="/天下第一泉" target="_blank">天下第一泉</a> </li> <li> <a title="ecotour" href="/ecotour" target="_blank">ecotour</a> </li> <li> <a title="干菜类" href="/干菜类" target="_blank">干菜类</a> </li> <li> <a title="我是特种兵" href="/我是特种兵" target="_blank">我是特种兵</a> </li> <div class="clear"></div> </ul> </div> </div> </div>  <div class="scb-mask"> <div class="scb-win"> <h3>创建新的生词本</h3> <div class="scb-name"> <div class="text-wrap error" id="text-wrap"> <input id="textarea" class="scb-n-input" type="text" placeholder="输入要创建的生词本名称"> <p class="text tip1"> <span>i</span>该生词本已经创建啦!</p> <p class="text tip2"> <span>i</span>不可以出现中文，英文，数字之外的符号哒!</p> <p class="text tip3"> <span>i</span>生词本名称长度不能大于24字符!</p> <p class="text tip4"> <span>i</span>请填写生词本名称!</p> </div> <a class="scb-cancel" id="scb_cancel" href="javascript:void(0);">取消</a> <a class="scb-sure" id="scb_create" href="javascript:void(0);">创建</a> <div class="clear"></div> </div> </div> </div> </div> </div> <div class="container-right">  <script src="//cdn.bootcss.com/unslider/2.0.3/js/unslider-min.js"></script> <div class="sentence" avalonctrl="sentence" style="display: block;"> <div class="sentence-title"> <div class="sentence-title-item on">词霸APP神功能</div> <div class="sentence-title-item">每日一句</div> </div> <div class="unslider"><div class="dl-banner unslider-horizontal" style="overflow: hidden;"> <ul class="unslider-wrap unslider-carousel" style="width: 700%; margin-left: -100%; left: -100%;"> <li class="unslider-clone" style="width: 14.2857%;"> <img src="//cdn.iciba.com/www/img/www/0312/sw-5.png" alt=""> </li><li style="width: 14.2857%;" class=""> <img src="//cdn.iciba.com/www/img/www/0312/sw-1.png" alt=""> </li> <li style="width: 14.2857%;" class="unslider-active"> <img src="//cdn.iciba.com/www/img/www/0312/sw-2.png" alt=""> </li> <li style="width: 14.2857%;" class=""> <img src="//cdn.iciba.com/www/img/www/0312/sw-3.png" alt=""> </li> <li style="width: 14.2857%;" class=""> <img src="//cdn.iciba.com/www/img/www/0312/sw-4.png" alt=""> </li> <li style="width: 14.2857%;" class=""> <img src="//cdn.iciba.com/www/img/www/0312/sw-5.png" alt=""> </li><li class="unslider-clone" style="width: 14.2857%;"> <img src="//cdn.iciba.com/www/img/www/0312/sw-1.png" alt=""> </li> </ul> <img src="//cdn.iciba.com/www/img/www/0312/sw-bottom.jpg" alt=""> </div><nav class="unslider-nav"><ol><li data-slide="0" class="">1</li><li data-slide="1" class="unslider-active">2</li><li data-slide="2" class="">3</li><li data-slide="3" class="">4</li><li data-slide="4" class="">5</li></ol></nav></div> <!--ms-if--> </div> <div class="container-right-ad2"> <script>
                        (function() {
                            var s = "_" + Math.random().toString(36).slice(2);
                            document.write('<div id="' + s + '"></div>');
                            (window.slotbydup = window.slotbydup || []).push({
                                id: '6040368',
                                container: s,
                                size: '300,250',
                                display: 'inlay-fix'
                            });
                        })();
                    </script><div id="_c7w4jooroik" style="width: 300px; height: 250px; display: inline-block;"><iframe id="iframe6040368_0" name="iframe6040368_0" onload="___baidu_union_callback(3, '6040368_0', this);" src="about:blank" vspace="0" hspace="0" marginwidth="0" marginheight="0" scrolling="no" style="border:0;vertical-align:bottom;margin:0;width:300px;height:250px" allowtransparency="true" width="300" height="250" frameborder="0" align="center,center"></iframe></div><script charset="utf-8" src="https://pos.baidu.com/ecnm?psi=c31c402854b5662d9d8b707506e2dae8&amp;di=6040368&amp;dri=0&amp;dis=0&amp;dai=0&amp;ps=245x845&amp;enu=encoding&amp;exps=110011&amp;ant=0&amp;dcb=___adblockplus_&amp;dtm=SSP_JSONP&amp;dvi=0.0&amp;dci=-1&amp;dpt=none&amp;tsr=0&amp;tpr=1586671720596&amp;ti=wind%E6%98%AF%E4%BB%80%E4%B9%88%E6%84%8F%E6%80%9D_wind%E7%9A%84%E7%BF%BB%E8%AF%91_%E9%9F%B3%E6%A0%87_%E8%AF%BB%E9%9F%B3_%E7%94%A8%E6%B3%95_%E4%BE%8B%E5%8F%A5_%E7%88%B1%E8%AF%8D%E9%9C%B8%E5%9C%A8%E7%BA%BF%E8%AF%8D%E5%85%B8&amp;ari=2&amp;ver=0407&amp;dbv=0&amp;drs=1&amp;pcs=1291x937&amp;pss=1291x1475&amp;cfv=32&amp;cpl=1&amp;chi=3&amp;cce=true&amp;cec=UTF-8&amp;tlm=1586671721&amp;prot=2&amp;rw=937&amp;ltu=http%3A%2F%2Fwww.iciba.com%2Fwind&amp;ltr=http%3A%2F%2Fwww.iciba.com%2F&amp;ecd=1&amp;uc=1920x1040&amp;pis=-1x-1&amp;sr=1920x1080&amp;tcn=1586671721"></script> <script src="//dup.baidustatic.com/js/os.js"></script> </div>  <div class="recommend" avalonctrl="recommend" style="display: block;"> <div class="recommend-title">精彩推荐</div> <!--repeat78517778754:start--><a class="recommend-item" target="_blank" data-cnzz="_trackEvent,查词结果页,位置1,精彩推荐,," href="http://news.iciba.com/study/bilingual/1581721.shtml"> <img alt="" class="recommend-item-img" src="http://dict-pc.cache.iciba.com/news/2020/0410/20200410062337254.jpg@base@tag=imgScale&amp;w=200&amp;h=150&amp;q=100"> <span class="recommend-item-title">英语点津：这十种方法让自己的大脑变得更聪明</span> <span class="recommend-item-date">These ten ways to make your brain smarter这十种方法让自己的大脑变得更聪明Brain fitness has basic principles: variety    </span> </a><!--repeat78517778754--><a class="recommend-item" target="_blank" data-cnzz="_trackEvent,查词结果页,位置2,精彩推荐,," href="http://news.iciba.com/study/bilingual/1581719.shtml"> <img alt="" class="recommend-item-img" src="http://dict-pc.cache.iciba.com/news/2020/0410/20200410060603317.jpg@base@tag=imgScale&amp;w=200&amp;h=150&amp;q=100"> <span class="recommend-item-title">双语美文：危难之中 你仍握着选择权</span> <span class="recommend-item-date">It was the first day of Spring here此时此地正是初春but it didn&amp;amp;rsquo;t feel like it 却感觉不到春天的暖意The Coronavir   </span> </a><!--repeat78517778754--><a class="recommend-item" target="_blank" data-cnzz="_trackEvent,查词结果页,位置3,精彩推荐,," href="http://news.iciba.com/study/oral/1581714.shtml"> <img alt="" class="recommend-item-img" src="http://dict-pc.cache.iciba.com/news/2020/0410/20200410102210602.jpeg@base@tag=imgScale&amp;w=200&amp;h=150&amp;q=100"> <span class="recommend-item-title">红松鼠比灰松鼠更能嗅出危险</span> <span class="recommend-item-date"></span> </a><!--repeat78517778754--><a class="recommend-item" target="_blank" data-cnzz="_trackEvent,查词结果页,位置4,精彩推荐,," href="http://news.iciba.com/study/oral/1581715.shtml"> <img alt="" class="recommend-item-img" src="http://dict-pc.cache.iciba.com/news/2020/0410/20200410102007970.jpg@base@tag=imgScale&amp;w=200&amp;h=150&amp;q=100"> <span class="recommend-item-title">漫威《蜘蛛侠》的漫画师在线教孩子们绘画</span> <span class="recommend-item-date"></span> </a><!--repeat78517778754--><!--repeat78517778754:end--> </div> <div class="js-right-ad-fix"> <script>
                        (function() {
                            var s = "_" + Math.random().toString(36).slice(2);
                            document.write('<div id="' + s + '"></div>');
                            (window.slotbydup = window.slotbydup || []).push({
                                id: '6882270',
                                container: s,
                                size: '300,250',
                                display: 'inlay-fix'
                            });
                        })();
                    </script><div id="_dxaf5gz2pf7"><iframe id="iframe6882270_0" name="iframe6882270_0" onload="___baidu_union_callback(3, '6882270_0', this);" src="about:blank" vspace="0" hspace="0" marginwidth="0" marginheight="0" scrolling="no" style="border:0;vertical-align:bottom;margin:0;width:300px;height:250px" allowtransparency="true" width="300" height="250" frameborder="0" align="center,center"></iframe></div><script charset="utf-8" src="https://pos.baidu.com/ncnm?psi=c31c402854b5662d9d8b707506e2dae8&amp;di=6882270&amp;dri=0&amp;dis=0&amp;dai=0&amp;ps=495x845&amp;enu=encoding&amp;exps=110011&amp;ant=0&amp;dcb=___adblockplus_&amp;dtm=SSP_JSONP&amp;dvi=0.0&amp;dci=-1&amp;dpt=none&amp;tsr=0&amp;tpr=1586671720596&amp;ti=wind%E6%98%AF%E4%BB%80%E4%B9%88%E6%84%8F%E6%80%9D_wind%E7%9A%84%E7%BF%BB%E8%AF%91_%E9%9F%B3%E6%A0%87_%E8%AF%BB%E9%9F%B3_%E7%94%A8%E6%B3%95_%E4%BE%8B%E5%8F%A5_%E7%88%B1%E8%AF%8D%E9%9C%B8%E5%9C%A8%E7%BA%BF%E8%AF%8D%E5%85%B8&amp;ari=2&amp;ver=0407&amp;dbv=0&amp;drs=1&amp;pcs=1291x937&amp;pss=1291x1475&amp;cfv=32&amp;cpl=1&amp;chi=3&amp;cce=true&amp;cec=UTF-8&amp;tlm=1586671721&amp;prot=2&amp;rw=937&amp;ltu=http%3A%2F%2Fwww.iciba.com%2Fwind&amp;ltr=http%3A%2F%2Fwww.iciba.com%2F&amp;ecd=1&amp;uc=1920x1040&amp;pis=-1x-1&amp;sr=1920x1080&amp;tcn=1586671721"></script> <script src="//dup.baidustatic.com/js/os.js"></script> </div> </div> </div> <p class="foot-top-seo">爱词霸查词为您提供在线翻译、英语翻译、英文翻译、英译汉、汉译英、fanyi等权威在线翻译服务！</p>  <div class="foot">   <a target="_blank" href="" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"> <img src="//dict-pc.kss.ksyun.com/public-icons/guohui.png" style="float:left; margin-top:5px;"> <p style="float:left;height:20px;line-height:20px;margin: 6px 0px 0px 5px; color:#939393;">京ICP备14035597号-3</p> </a> <span data-refresh="cnzz"><script type="text/javascript"></script><script type="text/javascript" src="//s11.cnzz.com/z_stat.php?id=1256556802&amp;web_id=1256556802&amp;t=1586671721332"></script></span>  <script>
                (function() {
                    var bp = document.createElement('script');
                    var curProtocol = window.location.protocol.split(':')[0];
                    if (curProtocol === 'https') {
                        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
                    } else {
                        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
                    }
                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(bp, s);
                })();
            </script> </div> </div> <div class="dialog" avalonctrl="dialog" style="display: none;"> <div class="dialog-content"> <a href="javascript:void(0)"> <img alt="" src=""> </a> <div class="dialog-close"> </div> </div> </div> <script id="downloadTipTpl" type="text/html"> <div class="cb-downmask"> <div class="cb-downwrap"> <a class="cb-downdel" href="javascript:;"></a> <div class="cb-downtop"> <span></span> <a href="//hoplink.ksosoft.com/wnx0" target="_blank">点击下载</a> </div> <div class="cb-installtip"></div> <div class="cb-downtipbg"></div> </div> </div> </script>  <!----></body></html>