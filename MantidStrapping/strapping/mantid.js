/*Mantid specific JQuery to run contact page and other special features*/





$( document ).ready(function() {
	systemType();
	resizeSearch();
});

$(window).on('resize', function(){    
	resizeSearch();
});

//See what system type the user is using
function systemType(){
	var OSType=0;
	var x64;
	if (navigator.appVersion.indexOf("Win")!=-1){
		if(navigator.userAgent.indexOf("WOW64") != -1 || navigator.userAgent.indexOf("Win64") != -1 ){
			OSType=1;
		}else{
			OSType=2;
		}
	}
	if (navigator.appVersion.indexOf("Mac")!=-1){ 	
		if (navigator.appVersion.match(/10[_.]6/)) {
		    OSType=3//Snow Leopard
		} else {
		    OSType=4//Mountain Lion
		}
	}
	if (navigator.appVersion.indexOf("Linux")!=-1){
		OSType=5;
	}
	
	//See if download window is on this page
	if($('#downloadType').length){
		switch(OSType){
			case 0:
				$('#downloadType').html('System not detected');
				break;
			case 1:
				$('#downloadType').html('Windows x64');
				break;
			case 2:
				$('#downloadType').html('Windows x86');
				break;
			case 3:
				$('#downloadType').html('Mac - Snow Leopard');
				break;
			case 4:
				$('#downloadType').html('Mac - Mountain Lion');
				break;
			case 5:
				$('#downloadType').html('Linux');
				break;			
		}		
	}

}

//Function to handle the nav search when window resized
function resizeSearch(){
    var size = $(window).width();
        
    if(size <= 768){
    	$('#n-Search').html('');
    	$('#n-li').css({'padding-top':'10px'});
    }else{
    	$('#n-Search').html('<i class="icon-search"></i>Search</a>');
    	$('#n-li').css({'padding-top':'0px'});
    }
    
    if(size < 250){
    	$('#n-li').width('180');    	
    }else{
    	$('#n-li').width('');    	
    }
}

var nameValid=false;
var emailValid=false;
var commentsValid=false

$(document).on('focusout','#c_name',function(){
	validateName(false);
});

$(document).on('focusout','#c_email',function(){
	validateEmail(false);
});

$(document).on('focusout','#c_comments',function(){
	validateComments(false);
});

function validateName(silent){
	var nameInput = $('#c_name').val();
	if(nameInput.length < 4){
		nameValid=false;
		$('#contactFormBtn').prop('disabled', true);
		if(!silent){
			$('#alertMessage').show();
		}
		if(nameInput.length == 0){
			$('#warning').text('Please input a name.');
		}else{
			$('#warning').text('Please input a name longer than 4 characters.');	
		}				
	}else{
		hide();		
		nameValid=true;
	}
}

function validateEmail(silent){
	var emailInput = $('#c_email').val();
	
	if(emailInput.length != 0){
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		
		if(!regex.test(emailInput)){
			emailValid=false;
			$('#contactFormBtn').prop('disabled', true);
			if(!silent){
				$('#alertMessage').show();
			}
			$('#warning').text('Please input a valid email address');
		}else{
			hide()
			emailValid=true;
		}
	}else{
		emailValid=false;
		if(!silent){
			$('#alertMessage').show();
		}
		$('#warning').text('Please input your email.');
	}	
}

function validateComments(silent){
	var commentsInput = $('#c_comments').val();
	
	if(commentsInput.length < 10){
		commentsValid=false;
		$('#contactFormBtn').prop('disabled', true);
		if(!silent){
			$('#alertMessage').show();
		}
		if(commentsInput.length == 0){
			$('#warning').text('Please input a comment.');
		}else{
			$('#warning').text('Please input a more descriptive comment.');
		}
	}else{
		hide()
		commentsValid=true;
	}
}

function hide(){
	if($('#alertMessage').is(":visible") == false){
		$('#alertMessage').hide();
	}
}

function checkValid(){
	console.log('Check Valid');
	
	var nameInput = $('#c_name').val();
	var commentsInput = $('#c_comments').val();
	var emailInput = $('#c_email').val();
	
	if(nameInput.length != 0){
		validateName(true);
	}
	
	if(emailInput.length != 0){
		validateEmail(true);
	}
	
	if(commentsInput.length != 0){
		validateComments(true);
	}
	
	if(nameValid == true && emailValid == true && commentsValid == true){
		console.log('valid');
		$('#contactFormBtn').prop('disabled', false);
	}else{
		
		
		console.log('not valid');
		$('#contactFormBtn').prop('disabled', true);
	}
}