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
        document.getElementById('open-hour-title').innerHTML = 'Opening Hours';
        document.getElementById('open-hour-text').innerHTML = 'Monday - Friday: 08:00 - 21:00 Saturday - Sunday: 10:00 - 22:00';
        document.getElementById('open-hour').style.width = '300px';
        document.getElementById('contact-info-title').innerHTML = 'CONTACT INFO';
        document.getElementById('social-media-title').innerHTML = 'Social Media';
        document.getElementById('Legal-title').innerHTML = 'Legal & Policies';

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
        document.getElementById('open-hour-title').innerHTML = 'Oriau Agor';
        document.getElementById('open-hour-text').innerHTML = 'Dydd Llun - Dydd Gwener: 08:00 - 21:00 Dydd Sadwrn - Dydd Sul: 10:00 - 22:00';
        document.getElementById('open-hour').style.width = '400px';
        document.getElementById('contact-info-title').innerHTML = 'GWYBODAETH CYSWLLT';
        document.getElementById('social-media-title').innerHTML = 'Cyfryngau Cymdeithasol';
        document.getElementById('Legal-title').innerHTML = 'Cyfreithiol & Pholisïau';

        Language = 'WELSH';
    }else{
        return;
    }
}