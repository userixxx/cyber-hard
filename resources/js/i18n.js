import { createI18n } from 'vue-i18n';
import ru from '../lang/ru/header.json';
import en from '../lang/en/header.json';

const messages = {
    ru,
    en,
    // Другие языки
};

const i18n = createI18n({
    locale: 'ru', // Дефолтный язык
    fallbackLocale: 'en',
    messages,
});

export default i18n;
