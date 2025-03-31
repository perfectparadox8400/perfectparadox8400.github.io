import website from '../website.json';

export default defineNuxtPlugin((nuxtApp) => {
    const title = useState('pageTitle', () => '');
  
    nuxtApp.provide('setTitle', (newTitle) => {
      title.value = newTitle;
    });
    
    useHead(() => ({
      title: title.value ? `${title.value} | ${website.name}` : website.name,
      meta: [{ property: 'og:title', content: title.value ? `${title.value} | ${website.name}` : website.name }]
    }));
});