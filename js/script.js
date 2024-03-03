function getCookie(name) {
	  let matches = document.cookie.match(new RegExp(
	    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
	  ));
	  return matches ? decodeURIComponent(matches[1]) : undefined;
	}

function heart(heartid){
	var str='heart'+heartid;
	

	if (document.getElementById("heart"+heartid).getAttribute('src')=="img/heart.png")
	{
		$.ajax({
 			type:"POST",
 			url:"likeadd.php",
 			data: ({newsid:heartid}),
 			success:function(msg){
 				console.log(msg);
 			}
 		});
		document.getElementById("heart"+heartid).src="img/heartfull.png";
	}
	else
	{
		$.ajax({
 			type:"POST",
 			url:"dislikeadd.php",
 			data: ({newsid:heartid}),
 			success:function(msg){
 				console.log(msg);
 			}
 		});
		document.getElementById("heart"+heartid).src="img/heart.png";
	}

}

$(function(){	
	$('#btnSend').click(function(event){
		console.log("1")
	 	var name = getCookie('user');
	 	var con = getCookie('con');
	 	var msg = $('#txtMessage').val();
	 	console.log(name)
	 	console.log(con)
		console.log(msg)
	 	$.ajax({
 			type:"POST",
 			url:"messageSave.php",
 			data: ({name:name, msg:msg, con:con}),
 			success:function(msg){
 				if(msg==1){
 					$('#txtMessage').val("");
 				}
 				$.ajax({
 					url:"show.php",
 					success:function(html){
 						$('#messages').html(html);
 					}
 				});
 			}
 		});
	});	
	
	authorize();

	
	function authorize(who){
		setInterval(showMess,1000);
	}


	function showMess(){
		var name = getCookie('user');
	 	var con = getCookie('con');
		$.ajax({
			type:"POST",
			url:"show.php",
			data: ({name:name, con:con}),
			success:function(html){
				$('#messages').html(html);
			}
		});
	}
	
	
}); 

function message(id){
	var str='heart'+id;
	document.cookie = "con="+id;
	console.log("con="+id);

}


function mySortUp(){
	var nav=document.querySelector('.product_list');
	for (var i = 0; i < nav.children.length-1; ++i) {
		for (var j = i+1; j < nav.children.length; ++j) {
			if (+nav.children[i].getAttribute('data-sort')>+nav.children[j].getAttribute('data-sort')){
				replaceNode = nav.replaceChild(nav.children[j], nav.children[i]);
				insertAfter(replaceNode, nav.children[i]);
			}
		}
	}
}
function mySortDown(){
	var nav=document.querySelector('.product_list');
	for (var i = 0; i < nav.children.length-1; ++i) {
		for (var j = i+1; j < nav.children.length; ++j) {

			if (+nav.children[i].getAttribute('data-sort')<+nav.children[j].getAttribute('data-sort')){
				replaceNode = nav.replaceChild(nav.children[j], nav.children[i]);
				insertAfter(replaceNode, nav.children[i]);
			}
		}
	}
}

function insertAfter(elem, refElem){
	return refElem.parentNode.insertBefore(elem,refElem.nextSibling);
}

var show=0;
function block_show(){
	var ss=document.getElementById('block-sort');
	if (show==0)
	{
		show=1;
		ss.style.display='grid';
	}else{
		show=0;
		ss.style.display='none';
	}
}
function mySortPrice(){
	var nav=document.querySelector('.product_list');
	var min=+document.querySelector('#minprice').getAttribute('value');
	var max=+document.querySelector('#maxprice').getAttribute('value');

	for (var i = 0; i < nav.children.length; ++i) {
		if (+nav.children[i].getAttribute('data-sort')<min || +nav.children[i].getAttribute('data-sort')>max){
			nav.children[i].style.display='none';
		}
		else
			nav.children[i].style.display='flex';
	}
}
function inputMaxVal(a){
	$('#maxprice').attr('value',a.value);
}
function inputMinVal(a){
	$('#minprice').attr('value',a.value);
}


document.getElementById('increaseFontBtn').addEventListener('click', function() {
  changeFontSize(2); // Increase font size by 2px
});

document.getElementById('decreaseFontBtn').addEventListener('click', function() {
  changeFontSize(-2); // Decrease font size by 2px
});

function changeFontSize(changeAmount) {
  var currentSize = parseInt(window.getComputedStyle(document.getElementById('content')).fontSize);
  var newSize = currentSize + changeAmount;
  
  document.getElementById('content').style.fontSize = newSize + 'px';
}

