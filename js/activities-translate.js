var Language = 'EN';

const switchLang = (lang)=>{

        if(lang=='EN'){
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
                document.getElementById('Activities-title').innerHTML = 'Activities';
                document.getElementById('SPORTS-tl').innerHTML = 'SPORTS ON S4C';
                document.getElementById('text-cart1').innerHTML = 'On matchdays we view sport shows and matches together on S4C. This allows us to practice Welsh and have a great time together';
                document.getElementById('practice').innerHTML= 'PRACTICE WELSH';
                document.getElementById('text-cart2').innerHTML = 'Clwb Clebran, every Thursday evening, gives Welsh language learners the opportunity to practice in an informal atmosphere outside the classroom.';
                document.getElementById('and-more').innerHTML = '& MORE';
                document.getElementById('text-cart3').innerHTML = 'There are also many non-Welsh language activities e.g. darts, live bands on a Saturday night, but even on those nights, the Welsh spirit and culture is evident.';


                document.getElementById('exit-link').innerHTML = 'Exit';
                document.getElementById('profile-link').innerHTML = 'Profile';

                
                document.getElementById('sign-link').innerHTML = 'Sign Up';
                document.getElementById('login-link').innerHTML = 'Log In';

                Language = 'EN';
        }

        else if(lang=='WELSH'){
                const WELSH = document.getElementById('WELSH');
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
                document.getElementById('Activities-title').innerHTML = 'Gweithgareddau';
                document.getElementById('SPORTS-tl').innerHTML = 'CHWARAEON AR S4C';
                document.getElementById('text-cart1').innerHTML = 'Ar ddiwrnodau gemau rydym yn gwylio sioeau a gemau chwaraeon gyda’n gilydd ar S4C. Mae hyn yn ein galluogi i ymarfer Cymraeg ac i gael amser gwych gyda’n gilydd';
                document.getElementById('practice').innerHTML= 'YMARFER CYMRAEG';
                document.getElementById('text-cart2').innerHTML = 'Mae Clwb Clebran, bob nos Iau, yn rhoi cyfle i ddysgwyr y Gymraeg ymarfer mewn awyrgylch anffurfiol y tu allan i’r ystafell ddosbarth.';
                document.getElementById('and-more').innerHTML = '& YN DDWYF';
                document.getElementById('text-cart3').innerHTML = 'Mae hefyd lawer o weithgareddau nad ydynt yn Gymraeg e.e. darts, bandiau byw ar nos Sadwrn, ond hyd yn oed ar y nosweithiau hynny, mae’r ysbryd a diwylliant Cymreig yn amlwg.';
                document.querySelector(".cart-text-activities img").style.marginTop = "60px";


                document.getElementById('exit-link').innerHTML = 'Ymadael';
                document.getElementById('profile-link').innerHTML = 'Proffil';

                
                document.getElementById('sign-link').innerHTML = 'Cofrestru';
                document.getElementById('login-link').innerHTML = 'Mewngofnodi';
                
                Language = 'WELSH';
        }

}
