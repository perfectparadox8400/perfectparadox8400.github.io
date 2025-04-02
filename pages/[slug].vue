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
  <div>
    <ContentRenderer v-if="page" :value="page" />
  </div>
</template>