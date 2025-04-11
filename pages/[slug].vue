<script lang="ts" setup>
const route = useRoute()
const { data: page } = await useAsyncData(route.path, () => {
  return queryCollection('content').path(route.path).first()
})
if (!page.value) {
  throw createError({ statusCode: 404, statusMessage: `Page not found: ${route.path}` })
}
</script>

<template>
  <div class="container">
    <ContentRenderer v-if="page" :value="page" />
  </div>
</template>

<style scoped>
.container {
  margin-top: 60px;
  padding: 80px 0 80px 0;
}

@media (max-width: 1200px) {
  .container {
    padding: 60px 0 60px 0;
  }
}
</style>