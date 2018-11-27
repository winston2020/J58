<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
{{--农业资源模板--}}
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta name="applicable-device" content="pc,mobile">
    <meta name="MobileOptimized" content="width"/>
    <meta name="HandheldFriendly" content="true"/>
    <title>{{ $bckeword = \App\Lable::clear(\App\Lable::BcKeyword()) }}</title>
    <link href="{{url('nongyeziyuan/css/mzxw.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{url('nongyeziyuan/js/jquery.js')}}"></script>
    <script src="{{url('nongyeziyuan/js/888.js')}}"></script>
    <script type="text/javascript">
        (function(){
            var bp = document.createElement('script');
            var curProtocol = window.location.protocol.split(':')[0];
            if (curProtocol === 'https') {
                bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
            }
            else {
                bp.src = 'http://push.zhanzhang.baidu.com/push.js';
            }
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
    <div style='margin:0 auto;width:0px;height:0px;overflow:hidden;'>
        <img src="{{url(env('RESOURCES').'/img/logo_500.jpg')}}" width="500" height="500" />
    </div>

</head>
<body>

<div class="dingbu1">
    <div class="dingbu1a">
        <ul>
            <li class="dingbu1ali1"><a onClick="shoucang('中国农业部')" style="cursor:pointer;">收藏本站</a></li>
            <li class="dingbu1ali2"><a onClick="SetHome(this,window.location)" style="cursor:pointer;">设为首页</a></li>
        </ul>
        <dl>
            <dd class="dingbu1add1"><a href="{{\App\Lable::LinkUrl()}}">English</a></dd>
            <dd><a href="{{\App\Lable::LinkUrl()}}">联系我们</a></dd>
            <dd><a href="/{{env('MULU')}}1/sitemap.html">网站地图</a></dd>
            <dd><a href="{{\App\Lable::LinkUrl()}}">邮箱</a></dd>
            <dd><a href="{{\App\Lable::LinkUrl()}}" class="lan12h_22">旧版回顾</a></dd>
        </dl><br class="clear"  />
    </div>
</div>
<div class="dingbu2">
    <div class="dingbu2a">
        <div class="dingbu2a1"><img src="{{url(env('RESOURCES').'/img/logo.jpg')}}" width="245" height="91" /></div>
        <div class="dingbu2a2"><img src="{{url(env('RESOURCES').'/img/hf.jpg')}}" width="544" height="91" /></div>
        <div class="dingbu2a3"><img src="{{url(env('RESOURCES').'/img/weibo_weixin.jpg')}}" width="154" height="91" usemap="#Map_manu" border="0" />
            <map name="Map_manu" id="Map_manu">
                <area shape="rect" coords="21,20,80,77" href="{{\App\Lable::LinkUrl()}}"  target="_blank">
                <area shape="rect" coords="99,19,175,76" href="{{\App\Lable::LinkUrl()}}" id="weixin">
            </map>
            <div id="erweima" style=" z-index:999999;"><img src="{{url(env('RESOURCES').'/img/zkywx_20141222.jpg')}}" /></div>
        </div><br class="clear"  />
    </div>
</div>
<div class="dingbu3">
    <div class="dingbu3a">
        <div class="dingbu3ax">
            <ul>
                <li id="navlis"><a href="{{url(\App\Lable::ImgUrl())}}" id="mynavs" onmouseover="mynavs.className='mynavs';mynavs.style.color='#10218b';ny_hexin1.style.display='none';"onmouseout="mynavs.className='';mynavs.style.color='';">首页</a></li>
                <li id="navli1"><a href="{{\App\Lable::LinkUrl()}}" id="mynav1" onMouseOver="mynav1.className='mynav1';mynav1.style.color='#10218b';" onMouseOut="mynav1.className='';mynav1.style.color='';" rel="ny_hexin1">{{\App\Lable::Nav()}}</a></li>
                <li id="navli2"><a href="{{\App\Lable::LinkUrl()}}" id="mynav2" onMouseOver="mynav2.className='mynav1';mynav2.style.color='#10218b';" onMouseOut="mynav2.className='';mynav2.style.color='';" rel="ny_hexin2">{{\App\Lable::Nav()}}</a></li>
                <li id="navli3"><a href="{{\App\Lable::LinkUrl()}}" id="mynav3" onMouseOver="mynav3.className='mynav1';mynav3.style.color='#10218b';" onMouseOut="mynav3.className='';mynav3.style.color='';" rel="ny_hexin3">{{\App\Lable::Nav()}}</a></li>
                <li id="navli4"><a href="{{\App\Lable::LinkUrl()}}" id="mynav4" onMouseOver="mynav4.className='mynav4';mynav4.style.color='#10218b';" onMouseOut="mynav4.className='';mynav4.style.color='';" rel="ny_hexin4">{{\App\Lable::Nav()}}</a></li>
                <li id="navli5"><a href="{{\App\Lable::LinkUrl()}}" id="mynav5" onMouseOver="mynav5.className='mynav1';mynav5.style.color='#10218b';" onMouseOut="mynav5.className='';mynav5.style.color='';" rel="ny_hexin5">{{\App\Lable::Nav()}}</a></li>
                <li id="navli6"><a href="{{\App\Lable::LinkUrl()}}" id="mynav6" onMouseOver="mynav6.className='mynav1';mynav6.style.color='#10218b';" onMouseOut="mynav6.className='';mynav6.style.color='';" rel="ny_hexin6">{{\App\Lable::Nav()}}</a></li>
                <li id="navli7"><a href="{{\App\Lable::LinkUrl()}}" id="mynav7" onMouseOver="mynav7.className='mynav7';mynav7.style.color='#10218b';" onMouseOut="mynav7.className='';mynav7.style.color='';" rel="ny_hexin7">{{\App\Lable::Nav()}}</a></li>
                <li id="navli8"><a href="{{\App\Lable::LinkUrl()}}" id="mynav8" onMouseOver="mynav8.className='mynav1';mynav8.style.color='#10218b';" onMouseOut="mynav8.className='';mynav8.style.color='';" rel="ny_hexin8">{{\App\Lable::Nav()}}</a></li>
                <li id="navli9"><a href="{{\App\Lable::LinkUrl()}}" id="mynav9" onMouseOver="mynav9.className='mynav9';mynav9.style.color='#10218b';" onMouseOut="mynav9.className='';mynav9.style.color='';" rel="ny_hexin9">{{\App\Lable::Nav()}}</a></li>
            </ul>
        </div>
        <div class="dingbu3ay">
            <form name="searchform" method="post" action="/{{env('RESOURCES')}}/web/search/" onSubmit="return search_check()" target="_top">
                <INPUT type="hidden" name="perpage" />
                <input type="hidden" name="searchword" id="searchword" value="" />
                <input type="hidden" name="preKeyword" id="preKeyword" value="" />
                <INPUT name="orderby" type="hidden" value="-RANK,RELEVANCE,-DOCRELTIME" />
                <INPUT name="channelid" type="hidden" value="233173" />
                <table width="170" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><input type="text" class="dingbu3ayinputx" name="iptSword"  placeholder="搜索内容" id="iptSword" /></td>
                        <td><input type="image" name="image" src="{{url(env('RESOURCES').'/img/ch_ira_04_2014.jpg')}}" /></td>
                    </tr>
                </table>
            </form>
        </div><br class="clear"  />
        <div id=ny_hexin1 onMouseOver="mynav1.className='mynav1';mynav1.style.color='#10218b';" onMouseOut="mynav1.className='';mynav1.style.color='';" class="dingbu3az">
            <div class="ny_hexin1x">
                <div class="ny_hexin1xa">
                    <div class="ny_hexin1xa1">
                        <h2>院部介绍</h2>
                        <img src="{{url(env('RESOURCES').'/img/p020141016586199134429.jpg')}}"/>
                        <div class="scyxinjia">
                            <P>1949年，伴随着新中国的诞生，中国农业部成立。</P>
                            <P> 农业娱乐部成立于1949年10月，1970年6月22日中共中央决定撤销农业部、娱乐部和水产部，设农林部。1979年2月23日，第五届全国人大常委会决定撤销农林部，分设农业部和林业部。1982年5月4日国务院机构改革将农业部、农垦部、国家水产总局合并设立农牧娱乐部。</P>

                        </div>
                        <style type="text/css">
                            .scyxinjia{width:275px; margin:0 auto; padding-top:10px;}
                            .ny_hexin1xa1 p{line-height:26px;}
                        </style>

                        <h3 style="border-bottom:none;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">查看详细 >></a></h3>
                    </div>
                </div>

                <div class="ny_hexin1xb">
                    <h2>院领导集体</h2>
                    <ul>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                <img src="{{url(env('RESOURCES').'/img/w020141124359633436674.jpg')}}" width="55" height="54" />
                            </a>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">白春礼</a>
                        </li>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                <img src="{{url(env('RESOURCES').'/img/w020160408558340048558.jpg')}}" width="55" height="54" />
                            </a>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">运云佳</a>
                        </li>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                <img src="{{url(env('RESOURCES').'/img/w020170302603341713607.jpg')}}" width="55" height="54" />
                            </a>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">姜元青</a>
                        </li>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                <img src="{{url(env('RESOURCES').'/img/w020141124360936385088.jpg')}}" width="55" height="54" />
                            </a>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">刁盼芙</a>
                        </li>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                <img src="{{url(env('RESOURCES').'/img/w020141124361316748748.jpg')}}" width="55" height="54" />
                            </a>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">缪恩可</a>
                        </li>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                <img src="{{url(env('RESOURCES').'/img/w020150305464536833819.jpg')}}" width="55" height="54" />
                            </a>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">莘艳蕊</a>
                        </li>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                <img src="{{url(env('RESOURCES').'/img/w020160408552369572669.jpg')}}" width="55" height="54" />
                            </a>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">毛德淼</a>
                        </li>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                <img src="{{url(env('RESOURCES').'/img/w020161226351620376791.jpg')}}" width="55" height="54" />
                            </a>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">叶丹亦</a>
                        </li>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                <img src="{{url(env('RESOURCES').'/img/w020170412646318936529.jpg')}}" width="55" height="54" />
                            </a>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">班紫焉</a>
                        </li>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                <img src="{{url(env('RESOURCES').'/img/w020141124362395652590.jpg')}}" width="55" height="54" />
                            </a>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">温解世</a>
                        </li>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                <img src="{{url(env('RESOURCES').'/img/w020161219591459726361.jpg')}}" width="55" height="54" />
                            </a>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">虎念蕾</a>
                        </li>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                <img src="{{url(env('RESOURCES').'/img/w020141124363193873357.jpg')}}" width="55" height="54" />
                            </a>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">上官和怡</a>
                        </li>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                <img src="{{url(env('RESOURCES').'/img/w020160511627027460951.jpg')}}" width="55" height="54" />
                            </a>
                            <a href="{{\App\Lable::LinkUrl()}}" target="_blank">昝樊</a>
                        </li>

                    </ul>
                </div>
                <div class="ny_hexin1xc">
                    <h2>机构设置</h2>
                    <div class="ny_hexin1xc1" style="width:130px; margin:0 3px 0 5px">
                        <h3>院机关</h3>
                        <ul>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">办公厅</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">学部工作局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">前沿科学与教育局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">重大科技任务局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">科技促进发展局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">发展规划局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">条件保障与财务局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">人事局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">直属机关党委</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">国际合作局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">科学传播局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">监督与审计局</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">离退休干部工作局</a></li>
                        </ul>
                    </div>
                    <style type="text/css">
                        .ny_hexin1xc2 li{line-height:26px;}
                        .ny_hexin1xc2 ul{padding-bottom:0;}
                    </style>
                    <div class="ny_hexin1xc2" style="width:87px; margin-right:3px">
                        <h3>派驻机构</h3>
                        <ul style="padding-bottom:254px">
                            <li style="line-height:18px; padding-top:4px"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">中央纪委驻中国农业部纪检组</a></li>
                        </ul>
                    </div>
                    <div class="ny_hexin1xc2" style="width:78px; margin-right:3px">
                        <h3>分院</h3>
                        <ul style="padding-bottom:0px">

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">北京分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">沈阳分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">长春分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">上海分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">南京分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">武汉分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">广州分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">成都分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">昆明分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">西安分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">兰州分院</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">新疆分院</a></li>

                        </ul>
                    </div>
                    <div class="ny_hexin1xc3" style="width:133px">
                        <h3>院属机构</h3>
                        <ul style="padding-bottom:48px;">

                            <li><a href="{{\App\Lable::LinkUrl()}}"  title="{{$title = \App\Lable::Title()}}">研究单位</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}"  title="{{$title = \App\Lable::Title()}}">学校及公共支撑单位</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}"  title="{{$title = \App\Lable::Title()}}">其他单位</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}"  title="{{$title = \App\Lable::Title()}}">共建单位</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}"  title="{{$title = \App\Lable::Title()}}">院直接投资的全资及控股企业</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}"  title="{{$title = \App\Lable::Title()}}">四类机构</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}"  title="{{$title = \App\Lable::Title()}}">院级非法人单元</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}"  title="{{$title = \App\Lable::Title()}}">所级分支机构</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}"  title="{{$title = \App\Lable::Title()}}">境外机构</a></li>

                            <li><a href="{{\App\Lable::LinkUrl()}}"  title="{{$title = \App\Lable::Title()}}">相关组织</a></li>

                        </ul>
                    </div><br class="clear"  />
                </div><br class="clear"  />
            </div>
        </div>
        <style type="text/css">
            .ny_hexin2xb h2{margin-bottom:18px;}
            .ny_hexin2xa li{line-height:28px;}
            .ny_hexin2xc ul{padding-bottom:0;}
            .ny_hexin2xc li{line-height:25px;}
            .ny_hexin2xd li{line-height:28px; *line-height:27px;}
            .ny_hexin2xd ul{margin-bottom:0; padding-top:3px; *padding-top:3px;}
            .ny_hexin2xd h2{*margin-bottom:0;}
        </style>
        <div id=ny_hexin2 onMouseOver="mynav2.className='mynav1';mynav2.style.color='#10218b';" onMouseOut="mynav2.className='';mynav2.style.color='';" class="dingbu3az">
            <div class="ny_hexin2x">
                <div class="ny_hexin2xa">
                    <h2>创新单元</h2>
                    <ul>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank">重大科技基础设施</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank">国家实验室</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank">国家重点实验室</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank">中国农业部重点实验室</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank">国家工程研究中心</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank">国家工程技术研究中心</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank">国家工程实验室</a></li>

                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank">野外台站网络</a></li>

                    </ul>
                    <img src="{{url(env('RESOURCES').'/img/p020141016702706183674.jpg')}}"/>
                </div>
                <div class="ny_hexin2xb">
                    <h2>先导专项</h2>
                    <ul>
                        <li class="ny_hexin2xbli1"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">A类先导专项</a></li>
                        <li class="ny_hexin2xbli2"><a href="{{\App\Lable::LinkUrl()}}">B类先导专项</a></li>
                        <li class="ny_hexin2xbli3"><a href="{{\App\Lable::LinkUrl()}}">专项动态</a></li>
                    </ul>
                    <h2>科研产出</h2>
                    <dl>
                        <dd><a href="{{\App\Lable::LinkUrl()}}">论文</a></dd>
                        <dd><a href="{{\App\Lable::LinkUrl()}}">专利</a></dd>
                        <dd><a href="{{\App\Lable::LinkUrl()}}">科研成果</a></dd>
                        <dd><a href="{{\App\Lable::LinkUrl()}}">科学数据库</a></dd>
                    </dl>
                </div>

                <div class="ny_hexin2xc">
                    <h2>科技奖励</h2>
                    <img src="{{url(env('RESOURCES').'/img/p020141016708525455534.jpg')}}"/>

                    <ul>

                        <li style="line-height:22px;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">国家最高科学技术奖</a></li>

                        <li style="line-height:22px;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">国家自然科学奖</a></li>

                        <li style="line-height:22px;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">国家技术发明奖</a></li>

                        <li style="line-height:22px;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">国家科学进步奖</a></li>

                        <li style="line-height:22px;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">国家科学技术合作奖</a></li>

                        <li style="line-height:22px;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">中国农业部杰出科技成就奖</a></li>

                        <li style="line-height:22px;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">中国农业部国际科技合作奖</a></li>

                        <li style="line-height:22px;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">中国农业部科技促进发展奖</a></li>

                        <li style="line-height:22px;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">陈嘉庚科学奖</a></li>

                    </ul>
                </div>
                <div class="ny_hexin2xd">
                    <h2><span>科研进展</span><a href="{{\App\Lable::LinkUrl()}}">更多</a></h2>
                    <ul>

                        @foreach(\App\Lable::LinkUrl(12) as $item)
                            <li>
                                <a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">{{$title = \App\Lable::Title()}}</a>
                                <span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>
                            </li>
                        @endforeach

                    </ul>
                    <h2>成果转化</h2>
                    <span class="ny_hexin2xdspan1"><img src="{{url(env('RESOURCES').'/img/p020141016707894396546.jpg')}}"/></span>
                    <span class="ny_hexin2xdspan2">
                        <dl>

                               <dd><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">产业化信息网</a></dd>
                            <dd><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">知识产权网</a></dd>
                            <dd><a href="{{\App\Lable::LinkUrl()}}"  title="{{$title = \App\Lable::Title()}}" target="_blank">转化动态</a></dd>

                        </dl>
                    </span><br class="clear"  />
                </div>
                <br class="clear"  />
            </div>
        </div>
        <div id=ny_hexin3 onMouseOver="mynav3.className='mynav1';mynav3.style.color='#10218b';" onMouseOut="mynav3.className='';mynav3.style.color='';" class="dingbu3az">
            <div class="ny_hexin3x">
                <div class="ny_hexin3xa">
                    <h2>中国科学技术大学</h2>
                    <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/p020141016707006860002.jpg')}}"/></a>
                    <p style="line-height:26px;height:auto;">

                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">中国科学技术大学（简称“中科大”）于1958年由中国农业部创建于北京，1970年学校迁至安徽省合肥市。中科大坚持“全院办校、所系结合”的办学方针，是一所以前沿科学和高新技术为主、兼有特色管理与人文学科的研究型大学。</a>
                    </p>
                </div>
                <div class="ny_hexin3xa">
                    <h2>中国农业部大学</h2>
                    <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/p020141016706898311638.jpg')}}"/></a>
                    <p style="line-height:26px;height:auto;">

                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">中国农业部大学（简称“国科大”）始建于1978年，其前身为中国农业部研究生院，2012年经教育部批准更名为中国农业部大学。国科大实行“科教融合”的办学方针，与中国农业部直属研究机构在管理体制、师资队伍、培养体系、科研工作等方面高度融合，是一所以研究生教育为主的独具特色的高等学校。</a>

                    </p>
                </div>
                <div class="ny_hexin3xa">
                    <h2>上海科技大学</h2>
                    <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/p020170411550885200979.jpg')}}"/></a>
                    <p style="line-height:26px;height:auto;">

                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">上海科技大学（简称“上科大”），由上海市人民政府与中国农业部共同举办、共同建设，2013年经教育部正式批准。上科大秉持“服务国家发展战略，培养创新创业人才”的办学方针，实现科技与教育、科教与产业、科教与创业的融合，是一所小规模、高水平、国际化的研究型、创新型大学。</a>

                    </p>





                </div>
                <div class="ny_hexin3xc">
                    <h2><span>工作动态</span><a href="{{\App\Lable::LinkUrl()}}">更多</a></h2>
                    <ul>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">{{$title = \App\Lable::Title()}}</a>
                            <span>11-21</span>
                        </li>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">{{$title = \App\Lable::Title()}}</a>
                            <span>11-21</span>
                        </li>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">{{$title = \App\Lable::Title()}}</a>
                            <span>11-20</span>
                        </li>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">{{$title = \App\Lable::Title()}}</a>
                            <span>11-20</span>
                        </li>

                        <li>
                            <a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">{{$title = \App\Lable::Title()}}</a>
                            <span>11-17</span>
                        </li>

                    </ul>
                    <div class="ny_hexin3xcx">
                        <div class="ny_hexin3xc1">
                            <div id="ny_hexin3xc1x" class="ny_hexin3xc1x"><a href="{{\App\Lable::LinkUrl()}}">更多</a></div>
                            <dl>
                                <dd class="now">招生信息</dd>
                            </dl>
                        </div>
                        <div class="ny_hexin3xc2">
                            <div>
                                <div class="ny_hexin3xc2y">
                                    <ul>

                                        <li>
                                            <a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">{{$title = \App\Lable::Title()}}</a>
                                            <span>10-11</span>
                                        </li>

                                        <li>
                                            <a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">{{$title = \App\Lable::Title()}}</a>
                                            <span>09-19</span>
                                        </li>

                                        <li>
                                            <a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">{{$title = \App\Lable::Title()}}</a>
                                            <span>09-13</span>
                                        </li>

                                        <li>
                                            <a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">{{$title = \App\Lable::Title()}}</a>
                                            <span>09-11</span>
                                        </li>

                                        <li>
                                            <a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">{{$title = \App\Lable::Title()}}</a>
                                            <span>09-06</span>
                                        </li>

                                        <li>
                                            <a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">{{$title = \App\Lable::Title()}}</a>
                                            <span>08-25</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br class="clear"  />
            </div>
        </div>
        <style type="text/css">
            .ny_hexin4xa ul{*margin-bottom:0;}
            .ny_hexin4xd li{*line-height:26px;}
            .ny_hexin6xc li{*line-height:22px;}
        </style>

        <div id=ny_hexin4 onMouseOver="mynav4.className='mynav4';mynav4.style.color='#10218b';" onMouseOut="mynav4.className='';mynav4.style.color='';" class="dingbu3az">

            <div class="ny_hexin4x">
                <div class="ny_hexin4xa">
                    <h2>学部组织</h2>
                    <ul>

                        @foreach(\App\Lable::LinkUrl(5) as $item)
                            <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" titlt="{{$title = \App\Lable::Title()}}">{{$title = \App\Lable::Title()}}</a></li>
                        @endforeach

                    </ul>
                    <dl>
                        <dd><a href="{{\App\Lable::LinkUrl()}}"><img src="{{url(env('RESOURCES').'/img/ch_gfa_03_2014.jpg')}}" width="214" height="46" /></a></dd>
                        <dd><a href="{{\App\Lable::LinkUrl()}}"><img src="{{url(env('RESOURCES').'/img/ch_gfa_07_2014.jpg')}}" width="214" height="46" /></a></dd>
                        <dd><a href="{{\App\Lable::LinkUrl()}}"><img src="{{url(env('RESOURCES').'/img/ch_gfa_09_2014.jpg')}}" width="214" height="46" /></a></dd>
                    </dl>
                </div>
                <div class="ny_hexin4xb">
                    <h2>院士信息</h2>
                    <img src="{{url(env('RESOURCES').'/img/p020141016709171162540.jpg')}}"/>
                    <ul>
                        <li class="ny_hexin4xbli1" style="margin-bottom:28px;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">全体院士名单</a></li>
                        <li class="ny_hexin4xbli2" style="margin-bottom:28px;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">外籍院士名单</a></li>
                        <li class="ny_hexin4xbli3" style="margin-bottom:28px;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">院士学部分布图</a></li>
                        <li class="ny_hexin4xbli4" style="margin-bottom:0;"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">年龄分布图</a></li>
                    </ul>
                </div>


                <div class="ny_hexin4xc">
                    <h2>院士大会</h2>
                    <img src="{{url(env('RESOURCES').'/img/p0201410167093771010000.jpg')}}"/>
                    <ul>

                        @foreach(\App\Lable::LinkUrl(7) as $item)
                            <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title = \App\Lable::Title()}}</a></li>
                        @endforeach

                    </ul>
                    <h3><a href="{{\App\Lable::LinkUrl()}}" target="_blank">历次院士大会 >></a></h3>
                </div>
                <div class="ny_hexin4xd">
                    <h2><a href="{{\App\Lable::LinkUrl()}}" style="float:right;padding-left:15px;margin-right:10px;background: url(/{{env('MULU')}}/img/ch_kba_03_2014.jpg') no-repeat left; font-weight: 400; display:block;" >更多</a><span>工作动态</span></h2>
                    <ul>

                        @foreach(\App\Lable::LinkUrl(12) as $item)
                            <li>
                                <a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}" target="_blank">{{$title = \App\Lable::Title()}}</a>
                                <span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <br class="clear"  />
            </div>
        </div>

        <div id=ny_hexin6 onMouseOver="mynav6.className='mynav1';mynav6.style.color='#10218b';" onMouseOut="mynav6.className='';mynav6.style.color='';"  class="dingbu3az">
            <div class="ny_hexin6x">
                <div class="ny_hexin6xa">

                    <ul>
                        <li class="ny_hexin6xalix"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                <img src="{{url(env('RESOURCES').'/img/ch_jgt_03_2014.jpg')}}" width="190" height="49" /></a></li>
                        <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                <img src="{{url(env('RESOURCES').'/img/ch_jgt_07_2014.jpg')}}" width="221" height="59" /></a></li>
                    </ul>

                    <h2><span>科普场馆</span><a href="{{\App\Lable::LinkUrl()}}">更多</a></h2>

                    <dl>

                        @foreach(\App\Lable::LinkUrl(7) as $item)
                            <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title = \App\Lable::Title()}}</a></dd>
                        @endforeach

                    </dl>
                </div>

                <style type="text/css">
                    .ny_hexin6xb li.ny_hexin5xbliy{padding:8px 0 12px 11px;}
                </style>

                <div class="ny_hexin6xb">
                    <h2><span>专题透视</span><a href="{{\App\Lable::LinkUrl()}}">更多</a></h2>

                    @foreach(\App\Lable::LinkUrl(4) as $item)
                        <ul>
                            <li class="ny_hexin5xbliy"><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/w020170330522006271539.png')}}" width="91" height="64" /></a></li>
                            <li class="ny_hexin5xblix"><h4><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title = \App\Lable::Title()}}</a></h4><p>{{$title = \App\Lable::Title()}}</p></li>
                        </ul>
                    @endforeach

                </div>
                <div class="ny_hexin6xc">
                    <h2><span>科普文章</span><a href="{{\App\Lable::LinkUrl()}}">更多</a></h2>
                    <ul>

                        @foreach(\App\Lable::LinkUrl(6) as $item)
                            <li>
                                <a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title = \App\Lable::Title()}}</a>
                                <span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>
                            </li>
                        @endforeach

                    </ul>
                    <h2><span>工作动态</span><a href="{{\App\Lable::LinkUrl()}}">更多</a></h2>
                    <ul class="ny_hexin6xculx">

                        @foreach(\App\Lable::LinkUrl(6) as $item)
                            <li>
                                <a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title = \App\Lable::Title()}}</a>
                                <span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <div id=ny_hexin7 onMouseOver="mynav7.className='mynav7';mynav7.style.color='#10218b';" onMouseOut="mynav7.className='';mynav7.style.color='';"  class="dingbu3az">
            <div class="ny_hexin7x">
                <div class="ny_hexin7xa">
                    <h2><span>工作动态</span><a href="{{\App\Lable::LinkUrl()}}">更多</a></h2>
                    <ul>

                        @foreach(\App\Lable::LinkUrl(6) as $item)
                            <li>
                                <a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title = \App\Lable::Title()}}</a>
                                <span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>
                            </li>
                        @endforeach

                    </ul>
                    <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/p020170726370061664449.jpg')}}"/></a>
                </div>
                <div class="ny_hexin7xb">
                    <h2><span>反腐倡廉</span><a href="{{\App\Lable::LinkUrl()}}">更多</a></h2>
                    <ul>

                        @foreach(\App\Lable::LinkUrl(6) as $item)
                            <li>
                                <a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title = \App\Lable::Title()}}</a>
                                <span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>
                            </li>
                        @endforeach

                    </ul>
                    <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/p020141016711744189119.jpg')}}"/></a>
                </div>
                <div class="ny_hexin7xc">
                    <h2><span>文明天地</span><a href="{{\App\Lable::LinkUrl()}}">更多</a></h2>
                    <ul>

                        @foreach(\App\Lable::LinkUrl(6) as $item)
                            <li>
                                <a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title = \App\Lable::Title()}}</a>
                                <span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>
                            </li>
                        @endforeach

                    </ul>
                    <h2>副刊专题</h2>
                    <dl>

                        <dd><img src="{{url(env('RESOURCES').'/img/p020141016714955287059.jpg')}}"/>
                            <span><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}">诗歌</a></span>
                        </dd>

                        <dd><img src="{{url(env('RESOURCES').'/img/p020141016715097709954.jpg')}}"/>
                            <span><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}">书画</a></span>
                        </dd>

                        <dd><img src="{{url(env('RESOURCES').'/img/p020141016715215742633.jpg')}}"/>
                            <span><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}">摄影</a></span>
                        </dd>

                        <dd><img src="{{url(env('RESOURCES').'/img/p020141016715319747217.jpg')}}"/>
                            <span><a href="{{\App\Lable::LinkUrl()}}" title="{{$title = \App\Lable::Title()}}">散文</a></span>
                        </dd>

                    </dl>
                </div>
            </div>
        </div>

        <style type="text/css">
            .ny_hexin8xa h2 a,.ny_hexin8xb h2 a,.ny_hexin8xc h2 a{color: #066ab0; font-size: 20px; font-family: "微软雅黑";}

            .hei20{font-family:"微软雅黑"; font-size:20px; color:#2b2b2b; padding-bottom:10px;}


            .lan16_28{font-size:16px; color:#066ab0; text-decoration:none; font-family:"微软雅黑"; line-height:28px;}
            a:hover{text-decoration:underline;}
            .hui12_18h{font-size:12px; line-height:18px; color:#313131; text-decoration:none;}
        </style>

        <div id=ny_hexin8 onMouseOver="mynav8.className='mynav1';mynav8.style.color='#10218b';" onMouseOut="mynav8.className='';mynav8.style.color='';" class="dingbu3az">
            <div class="ny_hexin8x" style="padding-bottom:15px;">

                <table width="987" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="239" height="358" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="56" align="right" valign="middle" class="scyhei20">&nbsp;</td>
                                    <td width="283" align="left" valign="middle" class="hei20">信息公开工作信息</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
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



                                        </table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:27px">
                                            <tr>
                                                <td align="left" valign="top" class="lan16_28">组织机构</td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">工作机构</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">监督机构</a></td>
                                            </tr>


                                        </table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:30px">
                                            <tr>
                                                <td align="left" valign="top" class="lan16_28">年度报告</td>
                                            </tr>


                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">2018年度报告</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">2017年度报告</a></td>
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


                                        </table></td>
                                </tr>
                            </table></td>
                        <td width="330" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="scyxxgk">
                                <tr>
                                    <td width="54" align="right" valign="middle" class="scyhei201">&nbsp;</td>
                                    <td colspan="2" align="left" valign="top" class="hei20">中国农业部学部</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td width="141" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
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



                                        </table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:13px">
                                            <tr>
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


                                        </table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:30px">
                                            <tr>
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


                                        </table></td>
                                    <td width="135" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
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


                                        </table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:110px">
                                            <tr>
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


                                        </table></td>
                                </tr>
                            </table></td>
                        <td width="418" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="scyxxgk1">
                                <tr>
                                    <td width="56" align="right" valign="middle" class="scyhei202">&nbsp;</td>
                                    <td colspan="3" align="left" valign="top" class="hei20">中国农业部院部</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td width="115" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
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


                                        </table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:11px">
                                            <tr>
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


                                        </table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:15px">
                                            <tr>
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

                                        </table></td>
                                    <td width="111" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="left" valign="top" class="lan16_28">规章制度</td>
                                            </tr>


                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">中国农业部章程</a></td>
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


                                        </table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:13px">
                                            <tr>
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


                                        </table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:14px">
                                            <tr>
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


                                        </table></td>
                                    <td width="136" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="left" valign="top" class="lan16_28">发展规划</td>
                                            </tr>


                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">院总体规划</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">专项规划</a></td>
                                            </tr>


                                        </table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:13px">
                                            <tr>
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


                                        </table>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:13px">
                                            <tr>
                                                <td align="left" valign="top" class="lan16_28">年度统计与出版物</td>
                                            </tr>


                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">年度统计</a></td>
                                            </tr>

                                            <tr>
                                                <td align="left" valign="top"><a href="{{\App\Lable::LinkUrl()}}" class="hui12_18h" target="_blank">出版物</a></td>
                                            </tr>



                                        </table></td>
                                </tr>
                            </table></td>
                    </tr>
                </table>



            </div>
        </div>
        <div id=ny_hexin9 onMouseOver="mynav9.className='mynav9';mynav9.style.color='#10218b';" onMouseOut="mynav9.className='';mynav9.style.color='';" class="dingbu3az">
            <div class="ny_hexin9x">
                <div class="ny_hexin9xa">
                    <div class="ny_hexin9xa1">
                        <dl>
                            <dt>年度专题</dt>
                            <dd><a href="{{\App\Lable::LinkUrl()}}" class="now" id="two1" onMouseOver="setTab('two',1,6);">2018</a></dd>
                            <dd><a href="{{\App\Lable::LinkUrl()}}" id="two2" onMouseOver="setTab('two',2,6);">2017</a></dd>
                            <dd><a href="{{\App\Lable::LinkUrl()}}" id="two3" onMouseOver="setTab('two',3,6);">2016</a></dd>
                            <dd><a href="{{\App\Lable::LinkUrl()}}" id="two4" onMouseOver="setTab('two',4,6);">2015</a></dd>
                        </dl>
                        <span><a href="{{\App\Lable::LinkUrl()}}">更多</a></span>
                    </div>
                    <div class="ny_hexin9xa2">
                        <div id="two_con1">
                            <div class="ny_hexin9xa2x">
                                <ul>
                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/W020171121554626759996.jpg')}}" width="139" height="38" /></a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/W020171116506850449412.jpg')}}" width="139" height="38" /></a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/W020171114586322091875.jpg')}}" width="139" height="38" /></a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/W020171031372226293104.jpg')}}" width="139" height="38" /></a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div id="two_con2">
                            <div class="ny_hexin9xa2x">
                                <ul>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/w020161027398722928377.jpg')}}" width="139" height="38" /></a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/w020151023431684849133.jpg')}}" width="139" height="38" /></a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/w020161108552783579059.jpg')}}" width="139" height="38" /></a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/w020161027398722928377.jpg')}}" width="139" height="38" /></a>
                                    </li>



                                </ul>
                            </div>
                        </div>

                        <div id="two_con3">
                            <div class="ny_hexin9xa2x">
                                <ul>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/W020151222530378805594.jpg')}}" width="139" height="38" /></a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/W020151023441292088994.jpg')}}" width="139" height="38" /></a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/W020151023431684849133.jpg')}}" width="139" height="38" /></a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/W020151023431684849133.jpg')}}" width="139" height="38" /></a>
                                    </li>



                                </ul>
                            </div>
                        </div>

                        <div id="two_con4">
                            <div class="ny_hexin9xa2x">
                                <ul>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                            <img src="{{url(env('RESOURCES').'/img/w020141204320453871888.jpg')}}" width="139" height="38" />
                                        </a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                            <img src="{{url(env('RESOURCES').'/img/w020141114572223718190.jpg')}}" width="139" height="38" />
                                        </a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                            <img src="{{url(env('RESOURCES').'/img/w020141113411054844703.jpg')}}" width="139" height="38" />
                                        </a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                            <img src="{{url(env('RESOURCES').'/img/w020141211401709667409.jpg')}}" width="139" height="38" />
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div id="two_con5">
                            <div class="ny_hexin9xa2x">
                                <ul>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                            <img src="{{url(env('RESOURCES').'/img/w020131204378890949520.jpg')}}" width="139" height="38" />
                                        </a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                            <img src="{{url(env('RESOURCES').'/img/w020131129777264915974.jpg')}}" width="139" height="38" />
                                        </a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                            <img src="{{url(env('RESOURCES').'/img/w020131018565766366585.jpg')}}" width="139" height="38" />
                                        </a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                            <img src="{{url(env('RESOURCES').'/img/w020131011341817459351.jpg')}}" width="139" height="38" />
                                        </a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                        <div id="two_con6">
                            <div class="ny_hexin9xa2x">
                                <ul>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                            <img src="{{url(env('RESOURCES').'/img/w020121108528340777261.jpg')}}" width="139" height="38" />
                                        </a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                            <img src="{{url(env('RESOURCES').'/img/w020121011614526900847.jpg')}}" width="139" height="38" />
                                        </a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                            <img src="{{url(env('RESOURCES').'/img/w020120924383749933169.jpg')}}" width="139" height="38" />
                                        </a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                            <img src="{{url(env('RESOURCES').'/img/w020120904371181591343.jpg')}}" width="139" height="38" />
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div id="two_con6">
                            <div class="ny_hexin9xa2x">
                                <ul>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                            <img src="{{url(env('RESOURCES').'/img/w020111125590401251674.jpg')}}" width="139" height="38" />
                                        </a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                            <img src="{{url(env('RESOURCES').'/img/w020111107573973458128.jpg')}}" width="139" height="38" />
                                        </a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                            <img src="{{url(env('RESOURCES').'/img/w020111031806898641444.jpg')}}" width="139" height="38" />
                                        </a>
                                    </li>

                                    <li style="height:38px;">
                                        <a href="{{\App\Lable::LinkUrl()}}" target="_blank">
                                            <img src="{{url(env('RESOURCES').'/img/w020111027332975837086.jpg')}}" width="139" height="38" />
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ny_hexin9xb">
                    <ul>
                        <li class="ny_hexin9xbli1"><a href="{{\App\Lable::LinkUrl()}}" >农业专题</a></li>
                        <li class="ny_hexin9xbli2"><a href="{{\App\Lable::LinkUrl()}}" >娱乐专题</a></li>
                        <li class="ny_hexin9xbli3"><a href="{{\App\Lable::LinkUrl()}}" >新闻专题</a></li>
                        <li class="ny_hexin9xbli4"><a href="{{\App\Lable::LinkUrl()}}" >会议专题</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="nykxy">
    <div class="nykxy1">

        <div class="nykxy1y">

            <h3 style="padding-top:14px">{!! $bckeword !!}:{{$title}}</h3>

        </div>
        <div class="nykxy1z">
            <!--分享-->
            <div class="bshare-custom" style="background:#fff;width:90px;border:1px solid #e5e5e5;padding:6px 0 6px 4px;position:absolute;top:12px;left:580px;">
                <span style="color:#077fd3; cursor:pointer" href="/hotfghvb/65403.html" id="bshare-shareto" class="">我要分享 &nbsp;</span><br />

                <div id="ld_fxhide" style="padding-top:10px;">
                    <a style="margin-bottom:8px;color:#595959;font-weight:bold;" class="bshare-sinaminiblog">新浪微博</a><br />
                    <a style="margin-bottom:8px;color:#595959;font-weight:bold;" class="bshare-weixin">微信</a><br />
                    <a style="margin-bottom:8px;color:#595959;font-weight:bold;" class="bshare-qqim">QQ好友</a><br />
                    <a style="margin-bottom:8px;color:#595959;font-weight:bold;" class="bshare-renren">人人网</a><br />


                </div>
            </div>
            <p><span id="source">文章来源：<span>中国农业报</span>&nbsp;&nbsp;&nbsp;&nbsp;</span>发布时间：<span>{{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日</span>&nbsp;&nbsp;<span>【字号：&nbsp;<a style="color:#077fd3;" href="javascript:ztdxa(12);">小</a>&nbsp;&nbsp;<a style="color:#077fd3;" href="javascript:ztdxa(14);">中</a>&nbsp;&nbsp;<a style="color:#077fd3;" href="javascript:ztdxa(16);">大</a>&nbsp;】</span></p>
        </div>
        <div id="nykxy1x" class="nykxy1x" style="margin-top:15px;">
            <div class=TRS_Editor><style type="text/css">

                    .TRS_Editor P{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor DIV{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor TD{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor TH{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor SPAN{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor FONT{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor UL{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor LI{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor A{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}</style><div class="TRS_Editor"><style type="text/css">

                        .TRS_Editor P{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor DIV{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor TD{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor TH{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor SPAN{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor FONT{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor UL{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor LI{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}.TRS_Editor A{margin-top:0px;margin-bottom:12px;line-height:1.8;font-family:宋体;font-size:10.5pt;}</style>
                    <div>
                        <p>{{$title = \App\Lable::Title()}}  {{date('Y')}}年{{date('m')}}月{{ date("d",strtotime("-".rand(1,10)." day"))}}日   原标题：{{$title = \App\Lable::Title()}}</p>
                        <p><a href="{{\App\Lable::LinkUrl()}}"><strong>{!! $bckeword !!}</strong></a>：{!!\App\Lable::Content()!!}{!!\App\Lable::Content()!!}{!!\App\Lable::Content()!!}</p>
                        <p><b style="color:green;">{{$title}}<b/></p>
                        <p>{!!\App\Lable::Content()!!}{!!\App\Lable::Content()!!}{!!\App\Lable::Content()!!}</p>
                        <p>{!!\App\Lable::Content()!!}{!!\App\Lable::Content()!!}</p>
                        <p>据<strong>{!! $bckeword !!}</strong>讯：{!!\App\Lable::Content()!!}{!!\App\Lable::Content()!!}</p>
                        <p><strong>24小时热点：</strong></p>
                        <p><a target="_blank" href="{{\App\Lable::LinkUrl()}}">{{$title = \App\Lable::Title()}}</a></p>
                        <p><a href="{{\App\Lable::LinkUrl()}}">{{$title = \App\Lable::Title()}}</a></p>
                        <p><a href="{{\App\Lable::LinkUrl()}}">{{$title = \App\Lable::Title()}}</a></p>
                        <p><a href="{{\App\Lable::LinkUrl()}}">{{$title = \App\Lable::Title()}}</a></p>
                        <p><a href="{{\App\Lable::LinkUrl()}}">{{$title = \App\Lable::Title()}}</a></p>
                    </div></div></div>
            <br /><br /><br />
            <div style="float:right">
                <span style="text-align:right; color:#999; padding-right:25px;">（作者：{{\App\Lable::Author()}}）</span></div>
            <div style="margin:0 0 20px 15px;" class="scyxlfj">
                <h3 id="scy_xlfj" style="margin-bottom:10px; font-size:16px; font-family:"微软雅黑";">热点附件：</h3>
                <p class="csitemap"><a href="{{\App\Lable::LinkUrl()}}">{{$title = \App\Lable::Title()}}</a></p>
                <p class="csitemap"><a href="{{\App\Lable::LinkUrl()}}">{{$title = \App\Lable::Title()}}</a></p>
                <p class="csitemap"><a href="{{\App\Lable::LinkUrl()}}">{{$title = \App\Lable::Title()}}</a></p>
                <p class="csitemap"><a href="{{\App\Lable::LinkUrl()}}">{{$title = \App\Lable::Title()}}</a></p>
                <ul>

                </ul>
            </div>

        </div>
    </div>
    <div class="nykxy2">
        <style type="text/css">

            .TRS_Editor P{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt;}
            .TRS_Editor DIV{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt;}
            .TRS_Editor TD{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt;}
            .TRS_Editor TH{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt;}
            .TRS_Editor SPAN{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt;}
            .TRS_Editor FONT{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt;}
            .TRS_Editor UL{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt;}
            .TRS_Editor LI{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt;}
            .TRS_Editor A{margin-top:0px;margin-bottom:12px;line-height:1.8;font-size:10.5pt; color:#36F}</style>

        <div class="nykxy2a">
            <h2>热点新闻</h2>
            <ul>
                <li class="nykxy2ali1"><a href="{{\App\Lable::LinkUrl()}}"  target="_blank" style="font-size:16px; color:#bb0404; font-weight:bold;" title="{{$title = \App\Lable::Title()}}" >{{$title = \App\Lable::Title()}}</a></li>

            </ul>

            <dl>

                <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title = \App\Lable::Title()}}</a></dd>
                <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title = \App\Lable::Title()}}</a></dd>
                <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title = \App\Lable::Title()}}</a></dd>
                <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title = \App\Lable::Title()}}</a></dd>
                <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank" title="{{$title = \App\Lable::Title()}}">{{$title = \App\Lable::Title()}}</a></dd>
            </dl>

        </div>
        <div class="nykxy2b">


            <h2>热门视频新闻</h2>

            <ul>
                <li class="nykxy2bli1"><img src="{{url(env('RESOURCES').'/img/xw1.jpg')}}" width="114" height="78" /><span><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/ch_fcx_06_2014.png')}}" width="114" height="78" /></a></span></li>
                <li class="nykxy2bli2"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">{{$title = \App\Lable::Title()}}</a></li>
            </ul>

            <ul>
                <li class="nykxy2bli1"><img src="{{url(env('RESOURCES').'/img/xw2.jpg')}}" width="114" height="78" /><span><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/ch_fcx_06_2014.png')}}" width="114" height="78" /></a></span></li>
                <li class="nykxy2bli2"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">{{$title = \App\Lable::Title()}}</a></li>
            </ul>
            <ul>
                <li class="nykxy2bli1"><img src="{{url(env('RESOURCES').'/img/xw3.jpg')}}" width="114" height="78" /><span><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/ch_fcx_06_2014.png')}}" width="114" height="78" /></a></span></li>
                <li class="nykxy2bli2"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">{{$title = \App\Lable::Title()}}</a></li>
            </ul>
            <ul>
                <li class="nykxy2bli1"><img src="{{url(env('RESOURCES').'/img/xw4.jpg')}}" width="114" height="78" /><span><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/ch_fcx_06_2014.png')}}" width="114" height="78" /></a></span></li>
                <li class="nykxy2bli2"><a href="{{\App\Lable::LinkUrl()}}" target="_blank">{{$title = \App\Lable::Title()}}</a></li>
            </ul>


        </div>
        <div class="nykxy2c">

            <h2>专题推荐</h2>

            <ul>

                <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/qq1.png')}}" width="265" height="71" /></a></li>
                <p><a href="{{\App\Lable::LinkUrl()}}" class="aber">{{$title = \App\Lable::Title()}}</a></p>

                <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/hf2.jpg')}}" width="265" height="71" /></a></li>
                <p><a href="{{\App\Lable::LinkUrl()}}" class="aber">{{$title = \App\Lable::Title()}}</a></p>

                <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/hf3.jpg')}}" width="265" height="71" /></a></li>
                <p><a href="{{\App\Lable::LinkUrl()}}" class="aber">{{$title = \App\Lable::Title()}}</a></p>

                <li><a href="{{\App\Lable::LinkUrl()}}" target="_blank"><img src="{{url(env('RESOURCES').'/img/hf4.jpg')}}" width="265" height="71" /></a></li>
                <p><a href="{{\App\Lable::LinkUrl()}}" class="aber">{{$title = \App\Lable::Title()}}</a></p>
            </ul>

        </div>
        <div class="nykxy2d" id="scy_xgxw">
            <h2>24小时热点</h2>
            <div class="xgxwscy">
                <dl>
                    <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank">{{$title = \App\Lable::Title()}}</a></dd>

                    <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank">{{$title = \App\Lable::Title()}}</a></dd>

                    <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank">{{$title = \App\Lable::Title()}}</a></dd>

                    <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank">{{$title = \App\Lable::Title()}}</a></dd>

                    <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank">{{$title = \App\Lable::Title()}}</a></dd>

                    <dd><a href="{{\App\Lable::LinkUrl()}}" target="_blank">{{$title = \App\Lable::Title()}}</a></dd>

                </dl>
            </div>
        </div>
    </div><br class="clear"  />
</div>

<div class="cfoot">
    <div class="cfoota" style="height:22px;">
        <div class="cfootax">
        </div>
    </div>
    <div class="cfootb" style="height:auto;text-align: center; ">
        <div>
            <style type="text/css">
                .scyyqlj select{ width:120px;}
                .scyyqlj td{ width:125px;}
                .scyyqlj{margin:0 auto; width:1000px; height:44px; margin-top:6px;}
            </style>

        </div>



        <div style="margin:0 auto; text-align:center; width:280px;">
            <ul>
                <li style="float:left; padding-top:20px;"></li>
                <li style="padding-top:10px;"></li>
            </ul>
        </div>


        <div class="cfootbx" style="background:none;">
            <p class="cfootbxp1">&copy; 1996 - 2018 中国农业部 版权所有 京ICP备{{rand(100000,999999)}}号&nbsp;&nbsp;京公网安备{{rand(100000,999999)}}号&nbsp;&nbsp;<a href="{{\App\Lable::LinkUrl()}}" target="_blank" >联系我们</a></p>
            <p class="cfootbxp2">地址：北京市朝1阳区农展南里{{rand(100000,999999)}}号</p>
        </div>
    </div>
</div>
</body>
</html>