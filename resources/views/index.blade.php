<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
    <meta http-equiv="Cache-Control" content="no-siterpg">
    <meta http-equiv="Cache-Control" content="no-transform">
    <title>{{ $bckeword = \App\Lable::BcKeyword()  }}</title>
    <link href="/{{env('MULU')}}/css/ch_css_ch_2014.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/{{env('MULU')}}/js/jquery.js"></script>
    <script type="text/javascript" src="/{{env('MULU')}}/js/koala.min.1.5.js'"></script>
    <script type="text/javascript" src="/{{env('MULU')}}/js/js.js"></script>
    <script language="JavaScript" type="text/javascript" src="/{{env('MULU')}}/js/ch_js_ch_2014.js"></script>
    <script>
        (function(){
            var canonicalURL, curProtocol;
            var x=document.getElementsByTagName("link");
            if(x.length > 0){
                for (i=0;i<x.length;i++){
                    if(x[i].rel.toLowerCase() == "canonical" && x[i].href){
                        canonicalURL=x[i].href;
                    }
                }
            }
            if (!canonicalURL){
                curProtocol = window.location.protocol.split(":")[0];
            }
            else{
                curProtocol = canonicalURL.split(":")[0];
            }
            if (!canonicalURL) canonicalURL = window.location.href;
            !function(){var e=/([http|https]:\/\/[a-zA-Z0-9\_\.]+\.baidu\.com)/gi,r=canonicalURL,t=document.referrer;if(!e.test(r)){var n=(String(curProtocol).toLowerCase() === "https")?"https://sp0.baidu.com/9_Q4simg2RQJ8t7jm9iCKT-xh_/s.gif":"//api.share.baidu.com/s.gif";t?(n+="?r="+encodeURIComponent(document.referrer),r&&(n+="&l="+r)):r&&(n+="?l="+r);var i=new Image;i.src=n}}(window);})();
    </script>

</head>
<body>


<div class="ctop1">
    <div class="ctop1a">
        <ul>
            <li class="ctop1ali1"><a onclick="{{\App\Lable::泛目录格式链接()}}" style="cursor:pointer;">收藏本站</a></li>
            <li class="ctop1ali2"><a onclick="SetHome(this,window.location)" style="cursor:pointer;">设为首页</a></li>
        </ul>
        <dd class="ctop1add1"><a href="{{\App\Lable::泛目录格式链接()}}">English</a>
        <dd><a href="{{\App\Lable::泛目录格式链接()}}" class="lan12h_22">邮箱</a></dd>
        <dd><a href="{{\App\Lable::泛目录格式链接()}}">联系我们</a></dd>
        <dd><a href="{{\App\Lable::泛目录格式链接()}}">网站地图</a></dd>
        <dd><a href="{{\App\Lable::泛目录格式链接()}}">导航</a></dd>
        <dd><a href="{{\App\Lable::泛目录格式链接()}}" target="_blank">{!! \App\Lable::BcKeyword() !!}</a></dd>
        </dd>

        <br class="clear">
    </div>
</div>
<div class="ctop2">
    <div class="ctop2a">
        <div class="ctop2a1"><img src="{{url('img/log.jpg')}}" width="245" height="91"></div>
        <div class="ctop2a2"><img src="{{url('img/center.jpg')}}" width="544" height="91"></div>
        <div class="ctop2a3"><img src="{{url('img/left.jpg')}}" width="154" height="91" usemap="#Map_manu" border="0">
            <map name="Map_manu" id="Map_manu">
                <area shape="rect" coords="21,20,80,77" href="{{\App\Lable::LinkUrl()}}" target="_blank">
                <area shape="rect" coords="99,19,175,76" href="{{\App\Lable::LinkUrl()}}" id="weixin">
            </map>
            <div id="erweima" style="display:none; z-index:999999;"><img src="{{\App\Lable::ImgUrl()}}"></div>
        </div><br class="clear">
    </div>
</div>
<div class="ctop3">
    <div class="ctop3a">
        <div class="ctop3ax">
            <ul>
                <li id="navlis"><a href="{{\App\Lable::LinkUrl()}}" id="mynavs" onmouseover="mynavs.className=&#39;mynavs&#39;;mynavs.style.color=&#39;#10218b&#39;;qh_con1.style.display=&#39;none&#39;;" onmouseout="mynavs.className=&#39;&#39;;mynavs.style.color=&#39;&#39;;">{{\App\Lable::Nav()}}</a></li>
                <li id="navli1"><a href="{{\App\Lable::LinkUrl()}}" id="mynav1" onmouseover="mynav1.className=&#39;mynav1&#39;;mynav1.style.color=&#39;#10218b&#39;;" onmouseout="mynav1.className=&#39;&#39;;mynav1.style.color=&#39;&#39;;" rel="qh_con1">{{\App\Lable::Nav()}}</a></li>
                <li id="navli2"><a href="{{\App\Lable::LinkUrl()}}" id="mynav2" onmouseover="mynav2.className=&#39;mynav1&#39;;mynav2.style.color=&#39;#10218b&#39;;" onmouseout="mynav2.className=&#39;&#39;;mynav2.style.color=&#39;&#39;;" rel="qh_con2" class="" style="">{{\App\Lable::Nav()}}</a></li>
                <li id="navli3"><a href="{{\App\Lable::LinkUrl()}}" id="mynav3" onmouseover="mynav3.className=&#39;mynav1&#39;;mynav3.style.color=&#39;#10218b&#39;;" onmouseout="mynav3.className=&#39;&#39;;mynav3.style.color=&#39;&#39;;" rel="qh_con3">{{\App\Lable::Nav()}}</a></li>
                <li id="navli4"><a href="{{\App\Lable::LinkUrl()}}" id="mynav4" onmouseover="mynav4.className=&#39;mynav4&#39;;mynav4.style.color=&#39;#10218b&#39;;" onmouseout="mynav4.className=&#39;&#39;;mynav4.style.color=&#39;&#39;;" rel="qh_con4">{{\App\Lable::Nav()}}</a></li>
                <li id="navli5"><a href="{{\App\Lable::LinkUrl()}}" id="mynav5" onmouseover="mynav5.className=&#39;mynav1&#39;;mynav5.style.color=&#39;#10218b&#39;;" onmouseout="mynav5.className=&#39;&#39;;mynav5.style.color=&#39;&#39;;" rel="qh_con5">{{\App\Lable::Nav()}}</a></li>
                <li id="navli6"><a href="{{\App\Lable::LinkUrl()}}" id="mynav6" onmouseover="mynav6.className=&#39;mynav1&#39;;mynav6.style.color=&#39;#10218b&#39;;" onmouseout="mynav6.className=&#39;&#39;;mynav6.style.color=&#39;&#39;;" rel="qh_con6">{{\App\Lable::Nav()}}</a></li>
                <li id="navli7"><a href="{{\App\Lable::LinkUrl()}}" id="mynav7" onmouseover="mynav7.className=&#39;mynav7&#39;;mynav7.style.color=&#39;#10218b&#39;;" onmouseout="mynav7.className=&#39;&#39;;mynav7.style.color=&#39;&#39;;" rel="qh_con7">{{\App\Lable::Nav()}}</a></li>
                <li id="navli8"><a href="{{\App\Lable::LinkUrl()}}" id="mynav8" onmouseover="mynav8.className=&#39;mynav1&#39;;mynav8.style.color=&#39;#10218b&#39;;" onmouseout="mynav8.className=&#39;&#39;;mynav8.style.color=&#39;&#39;;" rel="qh_con8">{{\App\Lable::Nav()}}</a></li>
                <li id="navli9"><a href="{{\App\Lable::LinkUrl()}}" id="mynav9" onmouseover="mynav9.className=&#39;mynav9&#39;;mynav9.style.color=&#39;#10218b&#39;;" onmouseout="mynav9.className=&#39;&#39;;mynav9.style.color=&#39;&#39;;" rel="qh_con9">{{\App\Lable::Nav()}}</a></li>
            </ul>
        </div>
        <div class="ctop3ay">
            <form>
                <input type="hidden" name="perpage">
                <input type="hidden" name="searchword" id="searchword" value="">
                <input type="hidden" name="preKeyword" id="preKeyword" value="">
                <input name="orderby" type="hidden" value="-RANK,RELEVANCE,-DOCRELTIME">
                <input name="channelid" type="hidden" value="233173">
                <table width="170" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                        <td><input type="text" class="ctop3ayinputx" name="iptSword" id="iptSword"></td>
                        <td><input type="image" name="image" src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}"></td>
                    </tr>
                    </tbody></table>
            </form>
        </div><br class="clear">


        <div id="qh_con1" onmouseover="mynav1.className=&#39;mynav1&#39;;mynav1.style.color=&#39;#10218b&#39;;" onmouseout="mynav1.className=&#39;&#39;;mynav1.style.color=&#39;&#39;;" style="display: none; z-index: 9999;" class="ctop3az">
            <div class="qh_con1x">
                <div class="qh_con1xa">
                    <div class="qh_con1xa1">
                        <h2>院况介绍</h2>
                        <img style="height: 200px" src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}">
                        <div class="scyxinjia">


                            <p>1949年，伴随着新中国的诞生，中国科学院成立。</p>
                            <p>{{\App\Lable::Content()}}</p>
                        </div>
                        <style type="text/css">
                            .scyxinjia{width:275px; margin:0 auto; padding-top:10px;}
                            .qh_con1xa1 p{line-height:26px;}
                        </style>

                        <h3 style="border-bottom:none;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">查看详细 &gt;&gt;</a></h3>
                    </div>
                    <!--轮播-->

                </div>
                <!--轮播-->

                <div class="qh_con1xb">
                    <h2>院领导集体</h2>
                    <ul>
                        @foreach(\App\Lable::LinkUrl(13) as $item)
                        <li>
                            <a href="{{$item}}" target="_blank">
                                <img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" width="55" height="54">
                            </a>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">{{\App\Lable::Author()}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="qh_con1xc">
                    <h2>机构设置</h2>
                    <div class="qh_con1xc1" style="width:130px; margin:0 3px 0 5px">
                        <h3>院机关</h3>
                        <ul>
                            <li><a href="{{\App\Lable::LinkUrl()}}" title="办公厅" target="_blank">办公厅</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="学部工作局" target="_blank">学部工作局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="前沿科学与教育局" target="_blank">前沿科学与教育局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="重大科技任务局" target="_blank">重大科技任务局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="科技促进发展局" target="_blank">科技促进发展局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="发展规划局" target="_blank">发展规划局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="条件保障与财务局" target="_blank">条件保障与财务局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="人事局" target="_blank">人事局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="直属机关党委" target="_blank">直属机关党委</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="国际合作局" target="_blank">国际合作局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="科学传播局" target="_blank">科学传播局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="监督与审计局" target="_blank">监督与审计局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="离退休干部工作局" target="_blank">离退休干部工作局</a></li>

                        </ul>
                    </div>


                    <style type="text/css">
                        .qh_con1xc2 li{line-height:26px;}
                        .qh_con1xc2 ul{padding-bottom:0;}
                    </style>
                    <div class="qh_con1xc2" style="width:87px; margin-right:3px">
                        <h3>派驻机构</h3>
                        <ul style="padding-bottom:254px">
                            <li style="line-height:18px; padding-top:4px"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">中央纪委驻中国科学院纪检组</a></li>
                        </ul>
                    </div>

                    <div class="qh_con1xc2" style="width:78px; margin-right:3px">
                        <h3>分院</h3>
                        <ul style="padding-bottom:0px">

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="北京分院" target="_blank">北京分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="沈阳分院" target="_blank">沈阳分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="长春分院" target="_blank">长春分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="上海分院" target="_blank">上海分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="南京分院" target="_blank">南京分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="武汉分院" target="_blank">武汉分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="广州分院" target="_blank">广州分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="成都分院" target="_blank">成都分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="昆明分院" target="_blank">昆明分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="西安分院" target="_blank">西安分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="兰州分院" target="_blank">兰州分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="新疆分院" target="_blank">新疆分院</a></li>

                        </ul>
                    </div>

                    <div class="qh_con1xc3" style="width:133px">
                        <h3>院属机构</h3>
                        <ul style="padding-bottom:48px;">

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="研究单位">研究单位</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="学校及公共支撑单位">学校及公共支撑单位</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="其他单位">其他单位</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="共建单位">共建单位</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="院直接投资的全资及控股企业">院直接投资的全资及控股企业</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="四类机构">四类机构</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="院非法人单元">院非法人单元</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="所级分支机构">所级分支机构</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="境外机构">境外机构</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="相关组织">相关组织</a></li>

                        </ul>
                    </div><br class="clear">
                </div><br class="clear">
            </div>
        </div>
        <style type="text/css">
            .qh_con2xb h2{margin-bottom:18px;}
            .qh_con2xa li{line-height:28px;}
            .qh_con2xc ul{padding-bottom:0;}
            .qh_con2xc li{line-height:25px;}
            .qh_con2xd li{line-height:28px; *line-height:27px;}
            .qh_con2xd ul{margin-bottom:0; padding-top:3px; *padding-top:3px;}
            .qh_con2xd h2{*margin-bottom:0;}
        </style>
        <div id="qh_con2" onmouseover="mynav2.className=&#39;mynav1&#39;;mynav2.style.color=&#39;#10218b&#39;;" onmouseout="mynav2.className=&#39;&#39;;mynav2.style.color=&#39;&#39;;" style="display: none;" class="ctop3az">
            <div class="qh_con2x">
                <div class="qh_con2xa">
                    <h2>创新单元</h2>
                    <ul>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank">重大科技基础设施</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank">国家实验室</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank">国家重点实验室</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank">中国科学院重点实验室</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank">国家工程研究中心</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank">国家工程技术研究中心</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank">国家工程实验室</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank">野外台站网络</a></li>

                    </ul>
                    <img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}">
                </div>
                <div class="qh_con2xb">
                    <h2>先导专项</h2>
                    <ul>
                        <li class="qh_con2xbli1"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">A类先导专项</a></li>
                        <li class="qh_con2xbli2"><a href="{{\App\Lable::LinkUrl()}}">B类先导专项</a></li>
                        <li class="qh_con2xbli3"><a href="{{\App\Lable::LinkUrl()}}">专项动态</a></li>
                    </ul>
                    <h2>科研产出</h2>
                    <dl>
                        <dd><a href="{{\App\Lable::LinkUrl()}}">论文</a></dd>
                        <dd><a href="{{\App\Lable::LinkUrl()}}">专利</a></dd>
                        <dd><a href="{{\App\Lable::LinkUrl()}}">科研成果</a></dd>
                        <dd><a href="{{\App\Lable::LinkUrl()}}">科学数据库</a></dd>
                    </dl>
                </div>

                <div class="qh_con2xc">
                    <h2>科技奖励</h2>
                    <img style="height: 200px" src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}">
                    <ul>
                        @foreach(\App\Lable::LinkUrl(9) as $item)
                        <li style="line-height:22px;"><a href="{{$item}}" target="_blank" title="{{$bt = \App\Lable::NormalKeyword()}}">{{$bt}}</a></li>
                        @endforeach()

                    </ul>
                </div>

                <div class="qh_con2xd">
                    <h2><span>科研进展</span><a href="{{\App\Lable::LinkUrl()}}">更多</a></h2>
                    <ul>
                    @foreach(\App\Lable::LinkUrl(13) as $item)
                        <li>
                            <a href="{{$item}}" title="{{$bt = \App\Lable::NormalKeyword()}}" target="_blank">{{$bt}}</a>
                            <span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>
                        </li>
                    @endforeach

                    </ul>
                    <h2>成果转化</h2>
                    <span class="qh_con2xdspan1"><img style="height: 200px" src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}"></span>
                    <span class="qh_con2xdspan2">
   <dl>

     <dd><a href="{{\App\Lable::LinkUrl()}}" title="产业化信息网" target="_blank">产业化信息网</a></dd>
     <dd><a href="{{\App\Lable::LinkUrl()}}" title="知识产权网" target="_blank">知识产权网</a></dd>
     <dd><a href="{{\App\Lable::LinkUrl()}}" title="产业化信息网" target="_blank">转化动态</a></dd>

 </dl>
</span><br class="clear">
                </div>
                <br class="clear">
            </div>
        </div>
        <div id="qh_con3" onmouseover="mynav3.className=&#39;mynav1&#39;;mynav3.style.color=&#39;#10218b&#39;;" onmouseout="mynav3.className=&#39;&#39;;mynav3.style.color=&#39;&#39;;" style="display: none;" class="ctop3az">
            <div class="qh_con3x">
                <div class="qh_con3xa">
                    <h2>中国科学技术大学</h2>

                    <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}"></a>
                    <p style="line-height:26px;height:auto;">

                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">中国科学技术大学（简称“中科大”）于1958年由中国科学院创建于北京，{{\App\Lable::NormalKeyword()}}</a>

                    </p>



                </div>
                <div class="qh_con3xa">
                    <h2>中国科学院大学</h2>
                    <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="/{{env('MULU')}}//{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}"></a>
                    <p style="line-height:26px;height:auto;">
                    <a href="{{\App\Lable::LinkUrl()}}" target="_blank">中国科学院大学（简称“国科大”）始建于1978年，其前身为中国科学院研究生院，{{\App\Lable::NormalKeyword()}}</a>
                    </p>
                </div>

                <div class="qh_con3xa">
                    <h2>上海科技大学</h2>
                    <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}"></a>
                    <p style="line-height:26px;height:auto;">

                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">上海科技大学（简称“上科大”），由上海市人民政府与中国科学院共同举办、共同建设，2013年经教育部正式批准。{{\App\Lable::NormalKeyword()}}</a>

                    </p>
                </div>
                <div class="qh_con3xc">
                    <h2><span>工作动态</span><a href="{{\App\Lable::LinkUrl()}}">更多</a></h2>
                    <ul>
                    @foreach(\App\Lable::LinkUrl(5) as $item)
                        <li>
                            <a href="{{$item}}" title="{{$title = \App\Lable::Title()}}" target="_blank">{{$title}}</a>
                            <span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>
                        </li>
                    @endforeach
                    </ul>
                    <div class="qh_con3xcx">
                        <div class="qh_con3xc1">
                            <div id="qh_con3xc1x" class="qh_con3xc1x"><a href="{{\App\Lable::LinkUrl()}}">更多</a></div>
                            <dl>
                                <dd class="now">招生信息</dd>
                            </dl>
                        </div>
                        <div class="qh_con3xc2">
                            <div>
                                <div class="qh_con3xc2y">
                                    <ul>
                                        @foreach(\App\Lable::LinkUrl(6) as $item)
                                        <li>
                                            <a href="{{$item}}" title="{{$title = \App\Lable::Title()}}" target="_blank">{{$title}}</a>
                                            <span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>
                                        </li>
                                         @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br class="clear">
            </div>
        </div>
        <style type="text/css">
            .qh_con4xa ul{*margin-bottom:0;}
            .qh_con4xd li{*line-height:26px;}
            .qh_con6xc li{*line-height:22px;}
        </style>

        <div id="qh_con4" onmouseover="mynav4.className=&#39;mynav4&#39;;mynav4.style.color=&#39;#10218b&#39;;" onmouseout="mynav4.className=&#39;&#39;;mynav4.style.color=&#39;&#39;;" style="display: none;" class="ctop3az">

            <div class="qh_con4x">
                <div class="qh_con4xa">
                    <h2>学部组织</h2>
                    <ul>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" titlt="学部主席团">学部主席团</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" titlt="学部咨询评议工作委员会">学部咨询评议工作委员会</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" titlt="学部科学道德建设委员会">学部科学道德建设委员会</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" titlt="学部学术与出版工作委员会">学部学术与出版工作委员会</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" titlt="学部科学普及与教育工作委">学部科学普及与教育工作委</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" titlt="各学部常务委员会">各学部常务委员会</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" titlt="学部国际合作小组">学部国际合作小组</a></li>

                    </ul>
                    <dl>
                        <dd><a href="{{\App\Lable::LinkUrl()}}"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" width="214" height="46"></a></dd>
                        <dd><a href="{{\App\Lable::LinkUrl()}}"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" width="214" height="46"></a></dd>
                        <dd><a href="{{\App\Lable::LinkUrl()}}"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" width="214" height="46"></a></dd>
                    </dl>
                </div>
                <div class="qh_con4xb">
                    <h2>院士信息</h2>
                    <img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}">
                    <ul>
                        <li class="qh_con4xbli1" style="margin-bottom:28px;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">全体院士名单</a></li>
                        <li class="qh_con4xbli2" style="margin-bottom:28px;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">外籍院士名单</a></li>
                        <li class="qh_con4xbli3" style="margin-bottom:28px;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">院士学部分布图</a></li>
                        <li class="qh_con4xbli4" style="margin-bottom:0;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">年龄分布图</a></li>
                    </ul>
                </div>


                <div class="qh_con4xc">
                    <h2>院士大会</h2>
                    <img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}">
                    <ul>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="中国科学院第十八次院士大会">中国科学院第十八次院士大会</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="中国科学院第十七次院士大会">中国科学院第十七次院士大会</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="中国科学院第十六次院士大会">中国科学院第十六次院士大会</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="中国科学院第十五次院士大会">中国科学院第十五次院士大会</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="中国科学院第十四次院士大会">中国科学院第十四次院士大会</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="中国科学院第十三次院士大会">中国科学院第十三次院士大会</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="中国科学院第十二次院士大会">中国科学院第十二次院士大会</a></li>

                    </ul>
                    <h3><a href="{{\App\Lable::LinkUrl()}}" target="_blank">历次院士大会 &gt;&gt;</a></h3>
                </div>
                <div class="qh_con4xd">
                    <h2><a href="{{\App\Lable::LinkUrl()}}" style="float:right;padding-left:15px;margin-right:10px;background: url(/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}) no-repeat left; font-weight: 400; display:block;">更多</a><span>工作动态</span></h2>
                    <ul>

                        @foreach(\App\Lable::LinkUrl(12) as $item)
                            <li>
                                <a href="{{$item}}" title="{{$title = \App\Lable::Title()}}" target="_blank">{{$title}}</a>
                                <span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <br class="clear">
            </div>
        </div>

        <div id="qh_con5" onmouseover="mynav5.className=&#39;mynav1&#39;;mynav5.style.color=&#39;#10218b&#39;;" onmouseout="mynav5.className=&#39;&#39;;mynav5.style.color=&#39;&#39;;" style="display: none;" class="ctop3az">
            <div class="qh_con5x">
                <div class="qh_con5xa">
                    <ul>
                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="科技战略咨询"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}"></a><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="科技战略咨询">科技战略咨询</a></li>
                        <li class="qh_con5xalix"><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="知识产权网"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}"></a><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="知识产权网">知识产权网</a></li>
                    </ul>
                    <ul>
                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="文献检索"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}"></a><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="文献检索">文献检索</a></li>
                        <li class="qh_con5xalix"><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="科技产业网"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}"></a><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="科技产业网">科技产业网</a></li>
                    </ul>
                    <ul class="qh_con5xaulx">
                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="信息化工作网"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}"></a><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="信息化工作网">信息化工作网</a></li>
                        <li class="qh_con5xalix qh_con5xaliy"><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="科技条件信息平台"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}"></a><br class="clear"><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="科技条件信息平台">科技条件信息平台</a></li>
                    </ul>
                </div>
                <div class="qh_con5xb">
                    <h2>出版物</h2>
                    <h3>期刊<a href="{{\App\Lable::LinkUrl()}}">更多</a></h3>

                    <ul>
                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" width="72" height="96"></a></li>
                        <li class="qh_con5xblix"><h4><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="中国科学院院刊">中国科学院院刊</a></h4><p>《中国科学院院刊》（中文版），{{\App\Lable::Title()}}</p></li>
                    </ul>

                    <ul>
                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" width="72" height="96"></a></li>
                        <li class="qh_con5xblix"><h4><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="科学通报">科学通报</a></h4><p>《科学通报》是自然科学综合性学术刊物，{{\App\Lable::Title()}}</p></li>
                    </ul>

                    <ul>
                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" width="72" height="96"></a></li>
                        <li class="qh_con5xblix"><h4><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="中国科学">中国科学</a></h4><p>覆盖数学、物理、化学、生命科学，{{\App\Lable::Title()}}</p></li>
                    </ul>


                    <div class="qh_con5xb1">
                        <form>
                            <input name="monograph_dwdm" type="hidden" id="monograph_dwdm" value="">
                            <table width="100%" height="40" border="0" cellspacing="0" cellpadding="0">
                                <tbody><tr>
                                    <td height="40"><span>专著检索</span></td>

                                    <td>著作名称</td>
                                    <td><input class="qh_con5xb1inputx" name="monograph_zzmc" id="monograph_zzmc" type="text"></td>
                                    <td>主编名称</td>
                                    <td><input class="qh_con5xb1inputx" name="monograph_zb" id="monograph_zb" type="text"></td>
                                    <td><input name="imageField2" type="image" src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" id="imageField2"></td>
                                </tr>
                                </tbody></table>

                        </form>
                    </div>

                    <h3>电子杂志<a href="{{\App\Lable::LinkUrl()}}">更多</a></h3>

                    <ul>
                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" width="72" height="96"></a></li>
                        <li class="qh_con5xblix"><h4><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="中科院之声电子杂志">中科院之声电子杂志</a></h4><p></p></li>
                    </ul>

                    <ul>
                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" width="72" height="96"></a></li>
                        <li class="qh_con5xblix"><h4><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="科学网电子杂志">科学网电子杂志</a></h4><p></p></li>
                    </ul>

                    <ul>
                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" width="72" height="96"></a></li>
                        <li class="qh_con5xblix"><h4><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="科普博览电子杂志">科普博览电子杂志</a></h4><p></p></li>
                    </ul>

                </div><br class="clear">
            </div>
        </div>
        <div id="qh_con6" onmouseover="mynav6.className=&#39;mynav1&#39;;mynav6.style.color=&#39;#10218b&#39;;" onmouseout="mynav6.className=&#39;&#39;;mynav6.style.color=&#39;&#39;;" style="display: none;" class="ctop3az">
            <div class="qh_con6x">
                <div class="qh_con6xa">

                    <ul>
                        <li class="qh_con6xalix"><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" width="190" height="49"></a></li>
                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" width="221" height="59"></a></li>
                    </ul>
                    <h2><span>科普场馆</span><a href="{{\App\Lable::LinkUrl()}}">更多</a></h2>

                    <dl>

                        <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="中国科学院合肥物质科学研究院合肥现代科技馆">中国科学院合肥物质科学研究院合...</a></dd>

                        <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="中国古动物馆">中国古动物馆</a></dd>

                        <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="中国科学院西双版纳热带植物园热带雨林民族文化博物馆">中国科学院西双版纳热带植物园热...</a></dd>

                        <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="中国科学院南京地质古生物研究所南京古生物博物馆">中国科学院南京地质古生物研究所...</a></dd>

                        <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="中国科学院动物研究所国家动物博物馆">中国科学院动物研究所国家动物博物馆</a></dd>

                        <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="中国科学院上海生命科学研究院植物生理生态研究所上海昆虫博物馆">中国科学院上海生命科学研究院植...</a></dd>

                        <dd><a href="{{\App\Lable::LinkUrl()}}" appuvrv3820474="" b730.html"="" target="_blank" title="中国科学院新疆生态与地理研究所生物标本馆">中国科学院新疆生态与地理研究所...</a></dd>

                    </dl>
                </div>

                <style type="text/css">
                    .qh_con6xb li.qh_con5xbliy{padding:8px 0 12px 11px;}
                </style>

                <div class="qh_con6xb">
                    <h2><span>专题透视</span><a href="{{\App\Lable::LinkUrl()}}">更多</a></h2>

            @foreach(\App\Lable::LinkUrl(4) as $item)
                    <ul>
                        <li class="qh_con5xbliy"><a href="{{$item}}" target="_blank"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" width="91" height="64"></a></li>
                        <li class="qh_con5xblix"><h4><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title}}</a></h4><p>{{\App\Lable::Title()}}</p></li>
                    </ul>
            @endforeach

                </div>
                <div class="qh_con6xc">
                    <h2><span>科普文章</span><a href="{{\App\Lable::LinkUrl()}}">更多</a></h2>
                    <ul>
                        @foreach(\App\Lable::LinkUrl(6) as $item)
                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title}}</a>
                            <span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>
                        </li>
                        @endforeach

                    </ul>
                    <h2><span>工作动态</span><a href="{{\App\Lable::LinkUrl()}}">更多</a></h2>
                    <ul class="qh_con6xculx">

                        @foreach(\App\Lable::LinkUrl(6) as $item)
                            <li>
                                <a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title}}</a>
                                <span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <div id="qh_con7" onmouseover="mynav7.className=&#39;mynav7&#39;;mynav7.style.color=&#39;#10218b&#39;;" onmouseout="mynav7.className=&#39;&#39;;mynav7.style.color=&#39;&#39;;" style="display: none;" class="ctop3az">
            <div class="qh_con7x">
                <div class="qh_con7xa">
                    <h2><span>工作动态</span><a href="{{\App\Lable::LinkUrl()}}">更多</a></h2>
                    <ul>

                        @foreach(\App\Lable::LinkUrl(10) as $item)
                            <li>
                                <a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title}}</a>
                                <span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>
                            </li>
                        @endforeach

                    </ul>
                    <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}"></a>
                </div>
                <div class="qh_con7xb">
                    <h2><span>反腐倡廉</span><a href="{{\App\Lable::LinkUrl()}}">更多</a></h2>
                    <ul>

                        @foreach(\App\Lable::LinkUrl(10) as $item)
                            <li>
                                <a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title}}</a>
                                <span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>
                            </li>
                        @endforeach

                    </ul>
                    <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}"></a>
                </div>
                <div class="qh_con7xc">
                    <h2><span>文明天地</span><a href="{{\App\Lable::LinkUrl()}}" apph0u576941188="" 8c84.html"="">更多</a></h2>
                    <ul>

                        @foreach(\App\Lable::LinkUrl(8) as $item)
                            <li>
                                <a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title}}</a>
                                <span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>
                            </li>
                        @endforeach

                    </ul>
                    <h2>副刊专题</h2>
                    <dl>

                        <dd><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}">
                            <span><a href="{{\App\Lable::LinkUrl()}}" title="诗歌">诗歌</a></span>
                        </dd>

                        <dd><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}">
                            <span><a href="{{\App\Lable::LinkUrl()}}" title="书画">书画</a></span>
                        </dd>

                        <dd><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}">
                            <span><a href="{{\App\Lable::LinkUrl()}}" title="摄影">摄影</a></span>
                        </dd>

                        <dd><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}">
                            <span><a href="{{\App\Lable::LinkUrl()}}" title="散文">散文</a></span>
                        </dd>

                    </dl>
                </div>
            </div>
        </div>

        <style type="text/css">
            .qh_con8xa h2 a,.qh_con8xb h2 a,.qh_con8xc h2 a{color: #066ab0; font-size: 20px; font-family: "微软雅黑";}

            .hei20{font-family:"微软雅黑"; font-size:20px; color:#2b2b2b; padding-bottom:10px;}
            .scyhei20{background:url(/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}) no-repeat 20px;}
            .scyhei201{background:url(/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}) no-repeat 35px;}
            .scyhei202{background:url(/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}) no-repeat 38px;}

            .lan16_28{font-size:16px; color:#066ab0; text-decoration:none; font-family:"微软雅黑"; line-height:28px;}
            a:hover{text-decoration:underline;}
            .hui12_18h{font-size:12px; line-height:18px; color:#313131; text-decoration:none;}
            .scyxxgk1{background:url(/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}) no-repeat 20px;}
            .scyxxgk{background:url(/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}) no-repeat;}

        </style>

        <div id="qh_con8" onmouseover="mynav8.className=&#39;mynav1&#39;;mynav8.style.color=&#39;#10218b&#39;;" onmouseout="mynav8.className=&#39;&#39;;mynav8.style.color=&#39;&#39;;" style="display: none;" class="ctop3az">
            <div class="qh_con8x" style="padding-bottom:15px;">

                <table width="987" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                        <td width="239" height="358" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody><tr>
                                    <td width="56" align="right" valign="middle" class="scyhei20">&nbsp;</td>
                                    <td width="283" align="left" valign="middle" class="hei20">信息公开工作信息</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody><tr>
                                                <td width="107" align="left" valign="top" class="lan16_28">相关规定</td>
                                            </tr>


                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">信息公开管理办法</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">信息公开指南</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">信息公开目录</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">其他规定</a></td>
                                            </tr>



                                            </tbody></table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:27px">
                                            <tbody><tr>
                                                <td align="left" valign="top" class="lan16_28">组织机构</td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">工作机构</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">监督机构</a></td>
                                            </tr>


                                            </tbody></table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:30px">
                                            <tbody><tr>
                                                <td align="left" valign="top" class="lan16_28">年度报告</td>
                                            </tr>


                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">2016年度报告</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">2015年度报告</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">2014年度报告</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">2013年度报告</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">2012年度报告</a></td>
                                            </tr>


                                            </tbody></table></td>
                                </tr>
                                </tbody></table></td>
                        <td width="330" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="scyxxgk">
                                <tbody><tr>
                                    <td width="54" align="right" valign="middle" class="scyhei201">&nbsp;</td>
                                    <td colspan="2" align="left" valign="top" class="hei20">中国科学院学部</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td width="141" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody><tr>
                                                <td width="107" align="left" valign="top" class="lan16_28">基本信息</td>
                                            </tr>


                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">学部概况</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">院士大会</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">院士信息</a></td>
                                            </tr>



                                            </tbody></table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:13px">
                                            <tbody><tr>
                                                <td align="left" valign="top" class="lan16_28">规章制度</td>
                                            </tr>


                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">院士章程</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">增选工作有关规定</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">其他工作规则与管理办法</a></td>
                                            </tr>


                                            </tbody></table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:30px">
                                            <tbody><tr>
                                                <td align="left" valign="top" class="lan16_28">工作进展</td>
                                            </tr>


                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">院士增选</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">咨询评议</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">学术科普</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">工作动态</a></td>
                                            </tr>


                                            </tbody></table></td>
                                    <td width="135" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody><tr>
                                                <td align="left" valign="top" class="lan16_28">学部出版物</td>
                                            </tr>


                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">咨询决策系列</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">学术引领系列</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">科学文化系列</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">其他出版物</a></td>
                                            </tr>


                                            </tbody></table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:110px">
                                            <tbody><tr>
                                                <td align="left" valign="top" class="lan16_28">陈嘉庚科学奖</td>
                                            </tr>


                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">机构概况</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">规章制度</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">通知公告</a></td>
                                            </tr>


                                            </tbody></table></td>
                                </tr>
                                </tbody></table></td>
                        <td width="418" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="scyxxgk1">
                                <tbody><tr>
                                    <td width="56" align="right" valign="middle" class="scyhei202">&nbsp;</td>
                                    <td colspan="3" align="left" valign="top" class="hei20">中国科学院院部</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td width="115" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody><tr>
                                                <td align="left" valign="top" class="lan16_28">机构设置</td>
                                            </tr>


                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">基本情况</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">院领导集体</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">组织机构</a></td>
                                            </tr>


                                            </tbody></table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:11px">
                                            <tbody><tr>
                                                <td align="left" valign="top" class="lan16_28">财政经费</td>
                                            </tr>


                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">预算决算</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">重大基建项目</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">重大采购</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">院级项目</a></td>
                                            </tr>


                                            </tbody></table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:15px">
                                            <tbody><tr>
                                                <td align="left" valign="top" class="lan16_28">国际合作</td>
                                            </tr>


                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">国际组织</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">国际会议</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">国际奖励</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">国际奖学金</a></td>
                                            </tr>



                                            </tbody></table></td>
                                    <td width="111" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody><tr>
                                                <td align="left" valign="top" class="lan16_28">规章制度</td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">中国科学院章程</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">机构管理</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">科研活动管理</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">人力资源管理</a></td>
                                            </tr>


                                            </tbody></table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:13px">
                                            <tbody><tr>
                                                <td align="left" valign="top" class="lan16_28">人事人才</td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">人事任免</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">人才专项</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">人才招聘</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">招生与培养</a></td>
                                            </tr>


                                            </tbody></table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:14px">
                                            <tbody><tr>
                                                <td align="left" valign="top" class="lan16_28">科学传播</td>
                                            </tr>


                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">科普资源</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">科普知识</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">网站建设</a></td>
                                            </tr>


                                            </tbody></table></td>
                                    <td width="136" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody><tr>
                                                <td align="left" valign="top" class="lan16_28">发展规划</td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">院总体规划</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">专项规划</a></td>
                                            </tr>

                                            </tbody></table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:13px">
                                            <tbody><tr>
                                                <td align="left" valign="top" class="lan16_28">科学研究</td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">科研创新单元</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">科研装备</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">先导专项</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">科研进展</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">科研成果</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">成果转化</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">科技奖励</a></td>
                                            </tr>

                                            </tbody></table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:13px">
                                            <tbody><tr>
                                                <td align="left" valign="top" class="lan16_28">年度统计与出版物</td>
                                            </tr>


                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">年度统计</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">出版物</a></td>
                                            </tr>



                                            </tbody></table></td>
                                </tr>
                                </tbody></table></td>
                    </tr>
                    </tbody></table>



            </div>
        </div>
        <div id="qh_con9" onmouseover="mynav9.className=&#39;mynav9&#39;;mynav9.style.color=&#39;#10218b&#39;;" onmouseout="mynav9.className=&#39;&#39;;mynav9.style.color=&#39;&#39;;" style="display: none;" class="ctop3az">
            <div class="qh_con9x">
                <div class="qh_con9xa">
                    <div class="qh_con9xa1">
                        <dl>
                            <dt>年度专题</dt>
                            <dd><a href="{{\App\Lable::LinkUrl()}}" class="now" id="two1" onmouseover="setTab(&#39;two&#39;,1,6);">2017</a></dd>
                            <dd><a href="{{\App\Lable::LinkUrl()}}" id="two2" onmouseover="setTab(&#39;two&#39;,2,6);">2016</a></dd>
                            <dd><a href="{{\App\Lable::LinkUrl()}}" id="two3" onmouseover="setTab(&#39;two&#39;,3,6);">2015</a></dd>
                            <dd><a href="{{\App\Lable::LinkUrl()}}" id="two4" onmouseover="setTab(&#39;two&#39;,4,6);">2014</a></dd>
                            <dd><a href="{{\App\Lable::LinkUrl()}}" id="two5" onmouseover="setTab(&#39;two&#39;,5,6);">2013</a></dd>
                            <dd><a href="{{\App\Lable::LinkUrl()}}" id="two6" onmouseover="setTab(&#39;two&#39;,6,6);">2012</a></dd>
                            <!-- <dd><a href="/bai_CY/20180115/" id="two6" onMouseOver="setTab('two',6,6);">2011</a></dd>
                            <dd><a href="/bai/423/whId.html" id="two6" onmouseover="setTab('two',6,6);">2009</a></dd>-->
                        </dl>
                        <span><a href="{{\App\Lable::LinkUrl()}}">更多</a></span>
                    </div>
                    <div class="qh_con9xa2">
                        <div id="two_con1">
                            <div class="qh_con9xa2x">
                                <ul>
                                    @foreach(\App\Lable::LinkUrl(34) as $item)
                                    <li style="height:38px;">
                                        <a href="{{$item}}" target="_blank">{{\App\Lable::Title()}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div id="two_con2" style="display:none;">
                            <div class="qh_con9xa2x">
                                <ul>
                                    @foreach(\App\Lable::LinkUrl(22) as $item)
                                    <li style="height:38px;">
                                        <a href="{{$item}}" target="_blank">{{\App\Lable::Title()}}</a>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                        <div id="two_con3" style="display:none;">
                            <div class="qh_con9xa2x">
                                <ul>
                                    @foreach(\App\Lable::LinkUrl(18) as $item)
                                    <li style="height:38px;">
                                        <a href="{{$item}}" target="_blank">{{\App\Lable::Title()}}</a>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                        <div id="two_con4" style="display:none;">
                            <div class="qh_con9xa2x">
                                <ul>
                                    @foreach(\App\Lable::LinkUrl(15) as $item)
                                    <li style="height:38px;">
                                        <a href="{{$item}}" target="_blank">
                                            {{\App\Lable::Title()}}
                                        </a>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div id="two_con5" style="display:none;">
                            <div class="qh_con9xa2x">
                                <ul>
                                    @foreach(\App\Lable::LinkUrl(18) as $item)
                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                            {{\App\Lable::Title()}}
                                        </a>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>

                        </div>
                        <div id="two_con6" style="display:none;">
                            <div class="qh_con9xa2x">
                                <ul>
                                    @foreach(\App\Lable::LinkUrl(17) as $item)
                                        <li style="height:38px;">
                                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                                {{\App\Lable::Title()}}
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qh_con9xb">
                    <ul>
                        <li class="qh_con9xbli1"><a href="{{\App\Lable::LinkUrl()}}">科技专题</a></li>
                        <li class="qh_con9xbli2"><a href="{{\App\Lable::LinkUrl()}}">时事专题</a></li>
                        <li class="qh_con9xbli3"><a href="{{\App\Lable::LinkUrl()}}">人物专题</a></li>
                        <li class="qh_con9xbli4"><a href="{{\App\Lable::LinkUrl()}}">会议专题</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cztxxa">
    <ul>
        <li class="cztxxalix"><a href="{{\App\Lable::LinkUrl()}}" class="CurrChnlCls">首页</a>&nbsp;&gt;&nbsp;<a href="{{\App\Lable::LinkUrl()}}" class="CurrChnlCls">中科院要闻</a></li>
    </ul>
</div>

<style type="text/css">
    .cztxxb1 img{padding:0;}
</style>



<div class="cztxxb">
    <div class="cztxxb1">

        <div class="cztxxb1y">
            <h2 id="cztxxb1yh2" style="display:none"></h2>
            <h1 style="padding-top:14px">{!! $bckeword !!}：{{\App\Lable::Title()}}</h1>
            <h4 id="cztxxb1yh4" style="display:none"></h4>
        </div>
        <div class="cztxxb1z">
            <!--分享-->
            <div class="bshare-custom" style="background:#fff;width:90px;border:1px solid #e5e5e5;padding:6px 0 6px 4px;position:absolute;top:12px;left:580px;">
                <span style="color:#077fd3; cursor:pointer;background:url(//{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}) no-repeat right;" title="分享到" href="{{\App\Lable::LinkUrl()}}" id="bshare-shareto" class="">我要分享 &nbsp;</span><br>

                <div id="ld_fxhide" style="display:none;padding-top:10px;">
                    <a style="margin-bottom:8px;color:#595959;font-weight:bold;" title="分享到新浪微博" class="bshare-sinaminiblog">新浪微博</a><br>
                    <a style="margin-bottom:8px;color:#595959;font-weight:bold;" title="分享到微信" class="bshare-weixin">微信</a><br>
                    <a style="margin-bottom:8px;color:#595959;font-weight:bold;" title="分享到QQ好友" class="bshare-qqim">QQ好友</a><br>
                    <a style="margin-bottom:8px;color:#595959;font-weight:bold;" title="分享到人人" class="bshare-renren">人人网</a><br>

                    <!-- 在这里添加更多平台 -->
                    <!--<a title="更多平台" id="bshare-more-icon" class="bshare-more">更多...</a>-->
                </div>
            </div>
            <script>
                $(function(){
                    $("#bshare-shareto").mouseover(function(){
                        $("#ld_fxhide").slideDown();
                    });
                });
                $(function(){
                    $(".bshare-custom").mouseleave(function(){
                        $("#ld_fxhide").slideUp();
                    });

                });


            </script>
            <!--<script type="text/javascript" charset="utf-8" src="/appcss/bshareC1.js"></script>-->


            <script type="text/javascript">
                $(function(){
                    var source = '直属机关党委';
                    if (source == '')
                    {
                        document.getElementById("source").style.display = "none";
                    }
                });
            </script>


            <!--分享-->
            <p><span id="source">文章来源：<span>中国科学院</span>&nbsp;&nbsp;&nbsp;&nbsp;</span>发布时间：<span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>&nbsp;&nbsp;<span>【字号：&nbsp;<a style="color:#077fd3;" href="{{\App\Lable::LinkUrl()}}">小</a>&nbsp;&nbsp;<a style="color:#077fd3;" href="{{\App\Lable::LinkUrl()}}">中</a>&nbsp;&nbsp;<a style="color:#077fd3;" href="{{\App\Lable::LinkUrl()}}">大</a>&nbsp;】</span></p>
        </div>


        <div id="cztxxb1x" class="cztxxb1x" style="margin-top:15px;">
            <div class="TRS_Editor">
                <style type="text/css">

                    .TRS_Editor P{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor DIV{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor TD{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor TH{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor SPAN{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor FONT{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor UL{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor LI{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor A{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}</style>
                <div class="TRS_Editor">
                    <style type="text/css">

                        .TRS_Editor P{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor DIV{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor TD{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor TH{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor SPAN{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor FONT{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor UL{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor LI{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor A{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}</style>
                    <div>
                        <div>
                            <p style="color:#005759">{!! $bckeword !!}　　{!!  (str_limit(\App\Lable::Content(),300,'...'))!!}</p>
                            <p style="color:#575815">　{!! $bckeword !!}　{!!  (str_limit(\App\Lable::Content(),300,'...'))!!}</p>
                            <p style="color:#838738">　<strong>{!! $bckeword !!}　{!! (str_limit(\App\Lable::Content(),300,'...')) !!}</strong></p>
                            <p style="color:#970571">　　{!! (str_limit(\App\Lable::Content(),300,'...')) !!}
                                <a href="{{\App\Lable::LinkUrl()}}" target="_blank">{!! $bckeword !!}</a>{!!(str_limit(\App\Lable::Content(),300,'...'))!!}</p>
                            <p align="center">{!! (str_limit(\App\Lable::Content(),300,'...')) !!}</p>
                            <p style="color:#294587">　{!! (str_limit(\App\Lable::Content(),300,'...')) !!}</p>
                            <p align="left"><strong>　　相关链接：</strong></p>
                            <p>　　<a href="{{\App\Lable::LinkUrl()}}">{{\App\Lable::Title()}}</a></p>
                            <p>　　<a href="{{\App\Lable::LinkUrl()}}">{{\App\Lable::Title()}}</a></p>
                            <p>　　<a href="{{\App\Lable::LinkUrl()}}">{{\App\Lable::Title()}}</a></p>
                            <p>　　<a href="{{\App\Lable::LinkUrl()}}">{{\App\Lable::Title()}}</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div style="float:right">
                <span style="text-align:right; color:#999; padding-right:25px;">（责任编辑：{{\App\Lable::Author()}}）</span></div>
            <div style="margin:0 0 20px 15px;" class="scyxlfj">
                <ul>

                </ul>
            </div>

        </div>



    </div>
    <div class="cztxxb2">
        <style type="text/css">

            .TRS_Editor P{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt;}.TRS_Editor DIV{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt;}.TRS_Editor TD{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt;}.TRS_Editor TH{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt;}.TRS_Editor SPAN{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt;}.TRS_Editor FONT{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt;}.TRS_Editor UL{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt;}.TRS_Editor LI{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt;}.TRS_Editor A{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt; color:#36F}</style>

        <div class="cztxxb2a">
            <h2>热点新闻</h2>
            <ul>
                <li class="cztxxb2ali1"><a href="{{\App\Lable::LinkUrl()}}" target="_blank" style="font-size:16px; color:#bb0404; font-weight:bold;" title="{{\App\Lable::Title()}}">{{\App\Lable::Title()}}</a></li>
            </ul>


            <dl>
                @foreach(\App\Lable::LinkUrl(5) as $item)
                    <dd><a href="{{$item}}" target="_blank" title=" {{$title =\App\Lable::Title()}}">{{$title}}</a></dd>
                @endforeach
            </dl>

        </div>

        <div class="cztxxb2b">


            <h2>视频推荐</h2>

            @foreach(\App\Lable::LinkUrl(5) as $item)
            <ul>
                <li class="cztxxb2bli1"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" width="114" height="78"><span><a href="{{$item}}" target="_blank"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" width="114" height="78"></a></span></li>
                <li class="cztxxb2bli2"><a href="{{$item}}" target="_blank" title="{{\App\Lable::Title()}}">【新闻联播】{{\App\Lable::Title()}}</a></li>
            </ul>
            @endforeach

        </div>

        <div class="cztxxb2c">

            <h2>专题推荐</h2>

            <ul>

                <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" width="263" height="70"></a></li>

                <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="/{{env('MULU')}}/{{url(\App\Lable::ImgUrl())}}" width="263" height="70"></a></li>

            </ul>

        </div>



        <div class="cztxxb2a">
            <h2>相关新闻</h2>
            <dl>
                @foreach(\App\Lable::LinkUrl(5) as $item)
                <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title}}</a></dd>
                @endforeach

            </dl>

        </div>

        <script>
            $(function(){
                if( $(".xgxwscy dd").length<=0){
                    $("#scy_xgxw").css("display","none");

                }
            });
        </script>
    </div><br class="clear">
</div>

<div class="cfoot">
    <div class="cfoota" style="height:22px;">
        <div class="cfootax">
        </div>
    </div>
    <div class="cfootb" style="height:auto;">
        <div>
            <style type="text/css">
                .scyyqlj select{ width:120px;}
                .scyyqlj td{ width:125px;}
                .scyyqlj{margin:0 auto; width:1000px; height:44px; margin-top:6px;}
            </style>
        </div>

        <div class="cfootbx" style="background:none; height:70px;">
            <p class="cfootbxp1" style="padding-left:110px;">&#169; 1996 - 2017 中国科学院 版权所有 京ICP备{{rand(100000,999999)}}号&nbsp;&nbsp;京公网安备{{rand(100000,999999)}}号&nbsp;&nbsp;<a href="{{\App\Lable::LinkUrl()}}" target="_blank">可信网站身份验证</a>&nbsp;
                &nbsp;<a href="/{{env('MULU')}}/sitemap.xml" target="_blank">联系我们</a>&nbsp;
                &nbsp;<a href="/{{env('MULU')}}/sitemap.xml" target="_blank">站点地图</a>&nbsp;
                &nbsp;<a href="/{{env('MULU')}}/sitemap.xml" target="_blank">RSS订阅</a>
            </p>

        </div>
    </div>
</div>
<!--百度站长平台自动推送代码-->
</body>
</html>