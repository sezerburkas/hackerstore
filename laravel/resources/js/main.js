
    
$('form[name=login]').on('submit', function(e){
    e.preventDefault();
    $('.terminal-container').show('fade',300);
    $('.terminal-container').attr('id','hack');

    $.ajax({
        type:'POST',
        url:'/auth',
        data:{
        _token : $('input[name=_token]').val(),
        username : $("#username").val(),
        password : $("#password").val(),  
        remember : $("input[name=remember]").val(),
        },
        success:function(data) {
            if(data.success == true){
            typeWrite($("#username").val(), "Access Granted", data.redirect);
            
            }else{

            typeWrite($("#username").val(), "Access Denied", false, data.error);
            
            }
        },
        dataType:"json"
    });
});

$('form[name=register]').on('submit', function(e){
    e.preventDefault();
    $('.alert').css({"padding":"0em 1em","max-height":"0"});
    $.ajax({
        type:'POST',
        url:'/create',
        data:{
        _token : $('input[name=_token]').val(),
        username : $("input[name=username]").val(),
        email : $("input[name=email]").val(),
        password : $("input[name=password]").val(), 
        password_confirmation : $("input[name=password_confirmation]").val(),  
        terms : $("input[name=terms]:checked").val(),
        },
        success:function(data) {
            if(data.status){
                window.location.assign(data.redirect);
            }else{
                $('.alert').empty();
                $.each(data.errors, function(key ,error){
                    $('.alert').append("<li>"+error+"</li>");
                });
                $('.alert').show('fade',500);
                setTimeout(function(){ $('.alert').css({"padding":"1em","max-height":"100%"})},525);
            }
        },
        dataType:"json"
    });
});

function typeWrite(username, text12, redirect = false, error){
    text1 = "$> login -u "+username+" -p ********";
    text2 = "The authenticity of host 'hackerstore.pw (18.168.226.206)' can't be established.";
    text3 = "ED25519 key fingerprint is SHA256:2t1SyRaE55f2FkBIsVVTMOuyTjIHkD+U9hToqjIagV4.";
    text4 = "This host key is known by the following other names/addresses:";
    text5 = "~/.ssh/known_hosts:4: [hashed name]";
    text6 = "~/.ssh/known_hosts:6: [hashed name]";
    text7 = "~/.ssh/known_hosts:7: [hashed name]";
    text8 = "Are you sure you want to continue connecting (yes/no/[fingerprint])? yes";
    text9 = " ";
    text10 = "Warning: Permanently added 'hackerstore.pw' (ED25519) to the list of known hosts.";
    text11 = "Checking credentials...";

    rows = [text1, text2, text3, text8, text9, text10, text11, text12];

    type(rows);

    async function type(rows) {
       
        var count = 0;
        var key = 0;
        var fin = false;
        
        if(key == 0){
            $("#hack").append('<li id="terminal-'+key+'"></li>');
        }
        
        interval = setInterval(function(){

            id = '#terminal-'+key;

            letters = rows[key].split('');

            $(id).append(letters[count]);

            if(count == letters.length){
                count = -1;
                key += 1;
                $("#hack").append('<li id="terminal-'+key+'"></li>');
            }

            if(key == rows.length)
            {
                clearInterval(interval);
                fin = true;
            }
            count += 1;

            if(redirect == false && fin == true){
                $('.terminal-container').hide('fade',500);
                setTimeout(function(){
                    $('.alert').show('fade',500);
                    setTimeout(function(){ $('.alert').css({"padding":"1em","max-height":"100%"}).html(error);},525);
                    $('.terminal-container').removeAttr('id');
                    $('.terminal-container').empty();
                },550);
            }else if(fin == true){
                setTimeout(function(){
                    window.location.assign(redirect);
                },120);
            }

        },4);
    }
  
}

