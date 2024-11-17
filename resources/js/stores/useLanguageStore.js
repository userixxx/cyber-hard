import { defineStore } from 'pinia';
import axios from 'axios';
import i18n from '../i18n';

export const useLanguageStore = defineStore('language', {
    state: () => ({
        currentLang: 'ru',
        currentFlag: '/img/flags/ru.jpg',
        dropdownVisible: false,
    }),
    actions: {
        async changeLanguage(lang) {
            try {
                const response = await axios.post('/api/change-language', { lang });
                if (response.data.success) {
                    this.currentLang = response.data.language;
                    this.currentFlag = `/img/flags/${response.data.language}.jpg?timestamp=${new Date().getTime()}`;
                    i18n.global.locale = response.data.language; // Устанавливаем локаль
                }
            } catch (error) {
                console.error('Ошибка при смене языка:', error);
            }
        },
    },
});