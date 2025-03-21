export default defineNuxtPlugin((nuxtApp) => {
    const title = useState('pageTitle', () => '');
  
    nuxtApp.provide('setTitle', (newTitle) => {
      title.value = newTitle;
    });
    
    useHead(() => ({
      title: title.value ? `${title.value} | Perfect Paradox 8400` : 'Perfect Paradox 8400',
      meta: [{ property: 'og:title', content: title.value ? `${title.value} | Perfect Paradox 8400` : 'Perfect Paradox 8400' }]
    }));
});