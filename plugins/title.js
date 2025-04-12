import website from "../website.json";

export default defineNuxtPlugin((nuxtApp) => {
  const title = useState("pageTitle", () => "");
  const discription = useState("pagediscription", () => "");

  nuxtApp.provide("setTitle", (newTitle) => {
    title.value = newTitle;
  });

  nuxtApp.provide("setDiscription", (newDiscription) => {
    discription.value = newDiscription;
  });

  useHead(() => ({
    title: title.value ? `${title.value} | ${website.name}` : website.name,
    meta: [
      { property: "og:title", content: title.value ? `${title.value} | ${website.name}` : website.name },
      { property: "og:description", content: discription.value || website.home.about },
      { name: "description", content: discription.value || website.home.about },
    ],
  }));
});
