// var nowPath=location.pathname.split('/')[2];
var nowPath=location.pathname.split('/')[1];

// menu highlight
if(!nowPath==''){
	document.querySelector('#menu a[href*="'+nowPath+'"]').classList.add('visited');
}else{
	document.querySelector('#menu a').classList.add('visited');
}

//slider show
const slides=document.querySelectorAll("div[class^='slide']");
let myIdx=9999;

function goNext(){
	var oldSlide=slides[myIdx%3];
	oldSlide.style.zIndex=myIdx%3+1002;
	oldSlide.classList.add('fadeOut');
	myIdx++;
	slides[myIdx%3].style.zIndex=1000;
	setTimeout(function(){
		oldSlide.classList.remove('fadeOut');
		oldSlide.style.zIndex=oldSlide.dataset.index;
	},800);
	clearInterval(myauto);
	autoShow();
}

function goPrev(){
	var oldSlide=slides[myIdx%3];
	oldSlide.style.zIndex=myIdx%3+1002;
	oldSlide.classList.add('fadeOut');
	if(myIdx==1){
		myIdx=9999;
	}else{
		myIdx--;
	}
	slides[myIdx%3].style.zIndex=1000;
	setTimeout(function(){
		oldSlide.classList.remove('fadeOut');
		oldSlide.style.zIndex=oldSlide.dataset.index;
	},800);
	clearInterval(myauto);
	autoShow();
}

var myauto;

function autoShow(){
	myauto=setInterval(function(){
		var oldSlide=slides[myIdx%3];
		oldSlide.style.zIndex=myIdx%3+1002;
		oldSlide.classList.add('fadeOut');
		myIdx++;
		slides[myIdx%3].style.zIndex=1000;
		setTimeout(function(){
			oldSlide.classList.remove('fadeOut');
			oldSlide.style.zIndex=oldSlide.dataset.index;
		},800);
	},4000)
}

// menu open
var scrollbarWidth=window.innerWidth-document.body.clientWidth;

function openMenu(){
	if(navigator.userAgent.match('Windows')!=false){
		document.body.style.paddingRight=scrollbarWidth+'px';
	}
	document.body.classList.add('menu-showed');
}

//menu close
function closeMenu(th, e){
	if(th.classList.contains('menu-showed')){
		if(e.target.className.match(/menu/)){
			return;
		}else{
			document.body.classList.remove('menu-showed');
			document.body.style.paddingRight='';
		}
	}
}

// conf to sent
function goMail(th, e){
	e.preventDefault();

	var inputs=th.querySelectorAll('input:disabled, textarea:disabled');
	for(var i=0;i<inputs.length;i++){
		inputs[i].disabled=false;   
	}

	th.submit();
}

// mail check
function checkEmail(th){
	var mail1=document.querySelector('input[name="your-mail"]');
	if(th.value==mail1.value){
		th.setCustomValidity("");
	}else{
		
		th.setCustomValidity("メールアドレス（確認用）の内容に誤りがあります");
	}
}