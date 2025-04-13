var Language = 'EN';

// This function is used to change the language of the page to English for the Sign Up page
const Language_EN = ()=>{
    const EN = document.getElementById('EN');
    
    if(Language!='EN'){
        document.getElementById('sign-up-title').innerHTML = 'Sign Up';
        document.getElementById('username').placeholder = 'Create Username';
        document.getElementById('email').placeholder = 'Add email';
        document.getElementById('password').placeholder = 'Create Password';
        document.getElementById('Sign-up').innerHTML = 'Sign Up';


        Language = 'EN';
    }else{
        return;
    }
}

// This function is used to change the language of the page to Welsh for the Sign Up page
const Language_Welsh = ()=>{
    const WELSH = document.getElementById('WELSH');
    
    if(Language!='WELSH'){
        document.getElementById('sign-up-title').innerHTML = 'Cofrestru';
        document.getElementById('username').placeholder = 'Creu Enw Defnyddiwr';
        document.getElementById('email').placeholder = 'Ychwanegu e-bost';
        document.getElementById('password').placeholder = 'Creu Cyfrinair';
        document.getElementById('Sign-up').innerHTML = 'Cofrestru';

        Language = 'WELSH';
    }else{
        return;
    }
}