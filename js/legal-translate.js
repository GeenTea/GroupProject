var Language = 'EN';

// This function is used to change the language of the page to English for the Legal & Policies page
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

        // Legal & Policies page translations
        document.getElementById('cart-title1').innerHTML = 'Privacy';
        document.getElementById('cart-firtsInfo1').innerHTML = '<u>Information we collect:</u>';
        document.getElementById('cart-secondInfo1').innerHTML = '<u>How we use your information:</u>';
        document.getElementById('cart-therdInfo1').innerHTML = 'To provide services. To improve our website and services. To comply with legal requirements.';
        
        document.getElementById('cart-title2').innerHTML = 'Cookies';
        document.getElementById('cart-firtsInfo2').innerHTML = 'Our website uses cookies to enhance your experience.';
        document.getElementById('cart-secondInfo2').innerHTML = 'You can manage cookie preferences through your browser settings.';
        
        document.getElementById('cart-title3').innerHTML = 'Terms of Use';
        document.getElementById('cart-firtsInfo3').innerHTML = 'By using the Wrexham Welsh Centre website, you agree to the following terms:';
        document.getElementById('cart-infoLi1').innerHTML = 'Use of Content: All content is for informational purposes. Do not copy or distribute without permission.';
        document.getElementById('cart-infoLi2').innerHTML = 'User Conduct: Be respectful when interacting with our site. No harmful or unlawful activity is allowed.';
        document.getElementById('cart-infoLi3').innerHTML = 'Privacy: We collect and use data as outlined in our Privacy Policy.';

        
        document.getElementById('exit-link').innerHTML = 'Exit';
        document.getElementById('profile-link').innerHTML = 'Profile';

        
        document.getElementById('sign-link').innerHTML = 'Sign Up';
        document.getElementById('login-link').innerHTML = 'Log In';

        Language = 'EN';
    }
    // Welsh translations
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

        // Legal & Policies page translations (Welsh versions)
        document.getElementById('cart-title1').innerHTML = 'Preifatrwydd';
        document.getElementById('cart-firtsInfo1').innerHTML = '<u>Gwybodaeth rydym yn ei chasglu:</u>';
        document.getElementById('cart-secondInfo1').innerHTML = '<u>Sut rydym yn defnyddio eich gwybodaeth:</u>';
        document.getElementById('cart-therdInfo1').innerHTML = 'I ddarparu gwasanaethau. I wella ein gwefan a gwasanaethau. I gydymffurfio â gofynion cyfreithiol.';
        
        document.getElementById('cart-title2').innerHTML = 'Cwcis';
        document.getElementById('cart-firtsInfo2').innerHTML = 'Mae ein gwefan yn defnyddio cwcis i wella eich profiad.';
        document.getElementById('cart-secondInfo2').innerHTML = 'Gallwch reoli eich dewisiadau cwcis trwy\'ch gosodiadau porwr.';
        
        document.getElementById('cart-title3').innerHTML = 'Telerau Defnydd';
        document.querySelector(".cart-text-legal h1").style.marginBottom = "16px";
        document.getElementById('cart-firtsInfo3').innerHTML = 'Trwy ddefnyddio gwefan Canolfan Gymraeg Wrecsam, rydych yn cytuno i\'r telerau canlynol:';
        document.getElementById('cart-infoLi1').innerHTML = 'Defnydd o Gynnwys: Mae\'r holl gynnwys at ddibenion gwybodaethol. Peidiwch â chopïo na dosbarthu heb ganiatâd.';
        document.getElementById('cart-infoLi2').innerHTML = 'Ymddygiad Defnyddiwr: Byddwch yn barchus wrth ryngweithio â\'n safle. Ni chaniateir unrhyw weithgaredd niweidiol neu anghyfreithlon.';
        document.getElementById('cart-infoLi3').innerHTML = 'Preifatrwydd: Rydym yn casglu a defnyddio data fel y\'i nodir yn ein Polisi Preifatrwydd.';

        
        document.getElementById('exit-link').innerHTML = 'Ymadael';
        document.getElementById('profile-link').innerHTML = 'Proffil';

        
        document.getElementById('sign-link').innerHTML = 'Cofrestru';
        document.getElementById('login-link').innerHTML = 'Mewngofnodi';

        Language = 'WELSH';
    }
}