// Fonction init_index()
function init_index(){
	// Empeche l'evenement du bouton retour navigateur
	history.pushState(null, null, 'index.php');
	window.addEventListener('popstate', function(event) {
		history.pushState(null, null, 'index.php');
	});
	$("#content").animate({'opacity': '1'}, 500);
	
	// Création d'un compte
	$("#submit-register").on('click', function(event){
	  if($("#email").val() == $("#email_co").val() && regex_mail($("#email").val())){
	    var mail = $("#email").val();
	    var account1 = true;
	    $('#register_mail_group').removeClass('has-error');
	    $('#register_mail_group').addClass('has-success');
	    $('#message_mail').val('');
	  }else{
	    $('#register_mail_group').addClass('has-error');
	    $('#register_mail_group').removeClass('has-success');
	    $('#message_mail').val('');
	  }
	  
	  if($("#mdp").val() == $("#mdp_co").val() && regex_password($("#mdp").val())){
	    var pass = $("#mdp").val();
	    var account2 = true;
	    $('#register_password_group').removeClass('has-error');
	    $('#register_password_group').addClass('has-success');
	    $('#message_password').val('');
	  }else{
	    $('#register_password_group').addClass('has-error');
	    $('#register_password_group').removeClass('has-success');
	    $('#message_password').val('');
	  }
	  
	  if(regex_login($("#login_register").val())){
	    var login = $("#login_register").val();
	    var account3 = true;
	    $('#register_login_group').removeClass('has-error');
	    $('#register_password_group').addClass('has-success');
	    $('#message_login').val('');
	  }else{
	    $('#register_login_group').addClass('has-error');
	    $('#register_login_group').removeClass('has-success');
	    $('#message_login').val('');
	  }
	  
	  if(account1 && account2 && account3){
	    alert("Account can be created");
	  }
	});
}

function regex_login(login){
  var lengthlog =/(?=.*[a-z]).{6,}/;
  $.ajax({
    type: 'POST',
    url: 'Php/fonctions.php',
    data: "action=verif_pseudo_libre&pseudo="+login
  }).done(function(data){
     if(data=='OUI' && lengthlog.test(login)){
       return true;
     }else{
       return false;
     }
  });
}

function regex_mail(mail){
  var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  return re.test(mail)
}

// at least one lowercase and one uppercase letter and at least six characters
function regex_password(pass){
  var re = /(?=.*[a-z]).{6,}/;
  return re.test(pass);
}























