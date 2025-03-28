import {Language_EN, Language_Welsh} from './language.js';

const switchLang= (lang) =>{
    console.log('SwitchLang called with:', lang);
    if(lang=='EN'){
        Language_EN();
    }else if(lang=='WELSH'){
        Language_Welsh();
    }
}

window.switchLang = switchLang;

