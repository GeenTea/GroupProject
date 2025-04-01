var Language = 'EN';

const switchLang = (lang) => {
    if (lang == 'EN') {
        // Header and footer translations
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

        document.getElementById('profile-title').innerHTML = 'PROFILE';
        document.getElementById('name-profile').placeholder="Name";
        document.getElementById('username-profile').placeholder="Username";
        document.getElementById('phone-profile').placeholder="Phone Number";
        document.getElementById('email-profile').placeholder="Email";
        document.getElementById('save-profile').innerHTML = "SAVE";
        document.getElementById('delete-profile').innerHTML = "DELETE";

        
        document.getElementById('exit-link').innerHTML = 'Exit';
        document.getElementById('profile-link').innerHTML = 'Profile';

        
        document.getElementById('sign-link').innerHTML = 'Sign Up';
        document.getElementById('login-link').innerHTML = 'Log In';

        Language = 'EN';
    }
    else if (lang == 'WELSH') {
        // Header and footer translations
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

        document.getElementById('profile-title').innerHTML = 'PROFFIL';
        document.getElementById('name-profile').placeholder="Enw";
        document.getElementById('username-profile').placeholder="Enw Defnyddiwr";
        document.getElementById('phone-profile').placeholder="Rhif Ffôn";
        document.getElementById('email-profile').placeholder="E-bost";
        document.getElementById('save-profile').innerHTML = "CADW";
        document.getElementById('delete-profile').innerHTML = "DILEU";
        

        
        document.getElementById('exit-link').innerHTML = 'Ymadael';
        document.getElementById('profile-link').innerHTML = 'Proffil';

        
        document.getElementById('sign-link').innerHTML = 'Cofrestru';
        document.getElementById('login-link').innerHTML = 'Mewngofnodi';

        Language = 'WELSH';
    }
}