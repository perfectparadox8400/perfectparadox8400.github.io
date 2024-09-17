<script setup lang="ts">
const colorMode = useColorMode()
const onClick = () => {
  const values = ['system', 'light', 'dark']
  const index = values.indexOf(colorMode.preference)
  const next = (index + 1) % values.length

  colorMode.preference = values[next]
}
</script>

<template>
  <button
    aria-label="Color Mode"
    @click="onClick"
  >
    <ColorScheme placeholder="...">
      <Icon
        v-if="colorMode.preference === 'dark'"
        name="uil:moon"
      />
      <Icon
        v-else-if="colorMode.preference === 'light'"
        name="uil:sun"
      />
      <Icon
        v-else
        name="uil:desktop"
      />
    </ColorScheme>
  </button>
</template>

<style scoped>
button {
  display: flex;
  padding: var(--space-4); /* Replace with actual value */
  color: var(--color-gray-500); /* Replace with actual value */
}

@media (prefers-color-scheme: dark) {
  button {
    color: var(--color-gray-400); /* Replace with actual value */
  }
}

button:hover {
  color: var(--color-gray-700); /* Replace with actual value */
}

@media (prefers-color-scheme: dark) {
  button:hover {
    color: var(--color-gray-200); /* Replace with actual value */
  }
}
</style>