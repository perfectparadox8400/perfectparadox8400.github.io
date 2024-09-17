<template>
  <button
    aria-label="Menu"
  >
    <Icon
      name="heroicons-outline:menu"
      aria-hidden="”true”"
    />
  </button>

  <!-- eslint-disable-next-line vue/no-multiple-template-root -->
  <teleport to="body">
    <nav
      class="dialog"
    >
      <div @click.stop>
        <div class="wrapper">
          <button
            aria-label="Menu"
          >
            <Icon
              name="heroicons-outline:x"
              aria-hidden="”true”"
            />
          </button>

          <div class="icons">
            <AppSocialIcons />
          </div>
        </div>
      </div>
    </nav>
  </teleport>
</template>

<style scoped>
button {
  position: relative;
  z-index: 10;
  display: flex;
  padding: var(--space-4) var(--space-4) var(--space-4) 0;
  color: var(--color-gray-500); /* Replace with actual value */
}

@media (min-width: 1024px) { /* lg breakpoint */
  button {
    display: none;
  }
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

.dialog {
  position: fixed;
  inset: 0 0 0 0; /* Shorthand for top, right, bottom, and left */
  z-index: 50;
  display: flex;
  align-items: flex-start;
  overflow-y: auto;
  background-color: rgba(255, 255, 255, 0.5);
  backdrop-filter: var(--elements-backdrop-filter); /* Replace with actual value */
}

@media (prefers-color-scheme: dark) {
  .dialog {
    background-color: rgba(0, 0, 0, 0.5);
  }
}

@media (min-width: 1024px) { /* lg breakpoint */
  .dialog {
    display: none;
  }
}

.dialog .icons {
  overflow: auto;
}

.dialog > div {
  max-width: var(--size-xs); /* Replace with actual value */
  width: 100%;
  min-height: 100%;
  box-shadow: var(--shadow-md); /* Replace with actual value */
  padding-left: var(--space-4); /* px -> padding-left & padding-right */
  padding-right: var(--space-4);
  background-color: var(--color-white); /* Replace with actual value */
}

@media (prefers-color-scheme: dark) {
  .dialog > div {
    background-color: var(--color-black); /* Replace with actual value */
  }
}

@media (min-width: 640px) { /* sm breakpoint */
  .dialog > div {
    padding-left: var(--space-6); /* Replace with actual value */
    padding-right: var(--space-6);
  }
}

.dialog > div > div {
  height: var(--docus-header-height); /* Replace with actual value */
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 1px solid transparent;
  gap: var(--space-2); /* Replace with actual value */
}

.dialog > div > div .icons {
  display: flex;
  align-items: center;
}

.icon {
  width: var(--space-4); /* Replace with actual value */
  height: var(--space-4); /* Replace with actual value */
}

</style>