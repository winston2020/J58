// JavaScript Document


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
var closetimer		= 0;
var ddmenuitem      = 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 
// -->







$(function() {
	    for(var n=1;n<=9;n++){
		$("#mynav" + n).mouseover(function(){
				$(".ctop3az").css("display","none");							
				
				var div_qh_con = "#" + $(this).attr("rel");
				
				$(div_qh_con).slideDown();

			
		})};
					$(".ctop3a").mouseleave(function(){
					
					for(var i=1;i<=9;i++){
						$("#qh_con" + i).slideUp();
							}
					});			
		});
		
		
$(function(){
	if($("#D_mainL") && $("#D_mainR")){
		if($("#D_mainL").height() <= $("#D_mainR").height()){
			$("#D_mainL").height($("#D_mainR").height());
			}
			else{
				$("#D_mainR").height($("#D_mainL").height());
				}
	}
	});


$(function(){
	$(".ztlb_ld_mainR_box01_list li:odd").addClass("C_eff7fd");
});
