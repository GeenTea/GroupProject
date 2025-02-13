var Language = 'EN';

const Language_EN = ()=>{
    const EN = document.getElementById('EN');
    
    if(Language!='EN'){
        document.getElementById('form-contact-us').innerHTML = 'CONTACT US';
        document.getElementById('email').placeholder = 'Your email';
        document.getElementById('message').placeholder = 'Your message';
        document.getElementById('submit-main-home').value = 'Submit';
        document.getElementById('WREXHAM_main_text').innerHTML = 'WREXHAM WELSH CENTRE';
        document.getElementById('home_mainText').style.width= '934px';

        Language = 'EN';
    }else{
        return;
    }
}

const Language_Welsh = ()=>{
    const WELSH = document.getElementById('WELSH');
    
    if(Language!='WELSH'){
        document.getElementById('form-contact-us').innerHTML  = 'CYSYLLTWCH Â NI';
        document.getElementById('email').placeholder = 'Eich e-bost';
        document.getElementById('message').placeholder = 'Eich neges';
        document.getElementById('submit-main-home').value = 'Cyflwyno';
        document.getElementById('WREXHAM_main_text').innerHTML = 'CANOLFAN GYMRAEG WRECSAM';
        document.getElementById('home_mainText').style.width= '1034px';

        Language = 'WELSH';
    }else{
        return;
    }
}