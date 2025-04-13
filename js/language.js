var Language = 'EN';

// This function is used to change the language of the page to English or Welsh
const Language_EN = ()=>{

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
        document.getElementById('Copyright-symbol').innerHTML = '© [2025] Wrexham Welsh Centre. All Rights Reserved';
        document.getElementById('legal-text1').innerHTML = 'Privacy Policy';
        document.getElementById('legal-text2').innerHTML = 'Terms of Use';
        document.getElementById('legal-text3').innerHTML = 'Cookies';
        document.getElementById('main-link').innerHTML = 'MAIN PAGE';
        document.getElementById('legal-link').innerHTML = 'Legal & Policies';
        document.getElementById('activities-link').innerHTML = 'Activities';
        document.getElementById('sign-link').innerHTML = 'Sign Up';
        document.getElementById('login-link').innerHTML = 'Log In';
        document.getElementById('profile-link').innerHTML = 'Profile';
        document.getElementById('exit-link').innerHTML = 'Exit';

        Language = 'EN';

}
// This function is used to change the language of the page to Welsh
const Language_Welsh = ()=>{
    const WELSH = document.getElementById('WELSH');

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
        document.getElementById('Copyright-symbol').innerHTML = '© [2025] Canolfan Gymraeg Wrecsam. Cedwir pob hawl';
        document.getElementById('legal-text1').innerHTML = 'Polisi Preifatrwydd';
        document.getElementById('legal-text2').innerHTML = 'Telerau Defnydd';
        document.getElementById('legal-text3').innerHTML = 'Cwcis';
        document.getElementById('main-link').innerHTML = 'HAFAN';
        document.getElementById('legal-link').innerHTML = 'Cyfreithiol & Pholisïau';
        document.getElementById('activities-link').innerHTML = 'Gweithgareddau';
        document.getElementById('sign-link').innerHTML = 'Cofrestru';
        document.getElementById('login-link').innerHTML = 'Mewngofnodi';
        document.getElementById('profile-link').innerHTML = 'Proffil';
        document.getElementById('exit-link').innerHTML = 'Ymadael';

        Language = 'WELSH';

}

//Here we export the functions to be used in other files
export {Language_EN, Language_Welsh};