function setTab(name,num,n){
	for(i=1;i<=n;i++){
		var menu=document.getElementById(name+i);
		var con=document.getElementById(name+"_"+"con"+i);
		menu.className=i==num?"now":"";
  		con.style.display=i==num?"block":"none"; 
	}
}
<!--
var timeout         = 0;
var closetimer	    = 0;
var ddmenuitem      = 0;
function mopen(id){	
	mcancelclosetime();	
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';
}

function mclose(){
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

function mclosetime(){
	closetimer = window.setTimeout(mclose, timeout);
}
function mcancelclosetime(){
	if(closetimer){
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}
document.onclick = mclose; 
$(function() {
	    for(var n=1;n<=9;n++){
		$("#m" + n).mouseover(function(){
			$(".navaz").css("display","none");							
			var div_qh_con = "#" + $(this).attr("rel")
			$(div_qh_con).slideDown();
		})};
		$(".nava").mouseleave(function(){
			for(var i=1;i<=9;i++){
				$("#sb" + i).slideUp();
			}
		});			
});
$(function(){
	if($("#D_mainL") && $("#D_mainR")){
		if($("#D_mainL").height() <= $("#D_mainR").height()){
			$("#D_mainL").height($("#D_mainR").height());
		}else{
			$("#D_mainR").height($("#D_mainL").height());
		}
	}
});
$(function(){
	$(".ztlb_ld_mainR_box01_list li:odd").addClass("C_eff7fd");
});

