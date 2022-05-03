import i18n from 'i18next';
import { initReactI18next } from 'react-i18next';
import { adminEn } from './resources/admin.en';
import { adminVi } from './resources/admin.vi';
import { homeEn } from './resources/home.en';
import { homeVi } from './resources/home.vi';
import axios from 'axios';

// the translations
// (tip move them in a JSON file and import them,
// or even better, manage them separated from your code: https://react.i18next.com/guides/multiple-translation-files)
const resources = {
    en: {
        translation: {
            admin: { ...adminEn },
            home: { ...homeEn }
        }
    },
    vi: {
        translation: {
            admin: { ...adminVi },
            home: { ...homeVi }
        }
    }
};
axios.get('/ajax/get-user-setting').then(result => {
    i18n.use(initReactI18next) // passes i18n down to react-i18next
        .init({
            resources,
            lng: result.data.setting.language, // language to use, more information here: https://www.i18next.com/overview/configuration-options#languages-namespaces-resources
            // you can use the i18n.changeLanguage function to change the language manually: https://www.i18next.com/overview/api#changelanguage
            // if you're using a language detector, do not define the lng option
            fallbackLng: 'en',

            interpolation: {
                escapeValue: false // react already safes from xss
            }
        });
});

export default i18n;
