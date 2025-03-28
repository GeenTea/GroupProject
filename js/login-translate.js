var Language = 'EN';

const Language_EN = ()=>{
    const EN = document.getElementById('EN');
    
    if(Language!='EN'){
        document.getElementById('login-title').innerHTML = 'LOGIN';
        document.getElementById('username').placeholder = 'Username';
        document.getElementById('password').placeholder = 'Password';
        document.getElementById('login').innerHTML = 'Login';

        Language = 'EN';
    }else{
        return;
    }
}

const Language_Welsh = ()=>{
    const WELSH = document.getElementById('WELSH');
    
    if(Language!='WELSH'){
        document.getElementById('login-title').innerHTML = 'Mewngofnodi';
        document.getElementById('username').placeholder = 'Enw Defnyddiwr';
        document.getElementById('password').placeholder  = 'Cyfrinair';
        document.getElementById('login').innerHTML = 'Mewngofnodi';

        Language = 'WELSH';
    }else{
        return;
    }
}
