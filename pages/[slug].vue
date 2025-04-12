<script lang="ts" setup>
const route = useRoute()
const { $setTitle, $setDiscription } = useNuxtApp() as unknown as {
  $setTitle: (title: string) => void,
  $setDiscription: (description: string) => void
}

const { data: page } = await useAsyncData(route.path, () => {
  return queryCollection('content').path(route.path).first()
})
if (!page.value) {
  throw createError({ statusCode: 404, statusMessage: `Page not found: ${route.path}` })
}

$setTitle(page.value.title)
$setDiscription(page.value.description)
</script>

<template>
  <div class="content-container">
    <ContentRenderer v-if="page" :value="page" class="container"/>
  </div>
</template>

<style scoped>
.content-container {
  margin-top: 60px;
  padding: 80px 0 80px 0;
  min-height: calc(100vh - (458.5px + 30px) - 60px);
}

.dark-mode .content-container {
  background-color: #000;
  color: #fff;
}

@media (max-width: 1200px) {
  .content-container {
    padding: 60px 0 60px 0;
  }
}
</style>