import {Language_EN, Language_Welsh} from './language.js';/* import translate fantion from language.js*/

/*create transalte funtion*/
const switchLang= (lang) =>{
    console.log('SwitchLang called with:', lang);/*it show set languege in web console*/
    if(lang=='EN'){/*if lang is english, translate to english*/
        Language_EN();
    }else if(lang=='WELSH'){/*if lang is welsh, translate to welsh*/
        Language_Welsh();
    }
}

window.switchLang = switchLang;

