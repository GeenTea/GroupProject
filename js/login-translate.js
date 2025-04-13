var Language = 'EN';

// This function is used to change the language of the page to English for the Login page
const Language_EN = ()=>{
    const EN = document.getElementById('EN');
    
    // Check if the current language is not English
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

// This function is used to change the language of the page to Welsh for the Login page
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
