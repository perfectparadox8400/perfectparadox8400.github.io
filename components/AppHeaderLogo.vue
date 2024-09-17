<template>
  <NuxtLink
    class="navbar-logo"
    to="/"
  >
    <!-- Only Logo -->
    <span
      class="logo"
    >
      <component
      />
      <template>
        <img
          alt=""
          class="light-img"
        >
        <img
          alt=""
          class="dark-img"
        >
      </template>
      <Logo />
    </span>

    <!-- Only title -->
    <span
    >
      Perfect Paradox
    </span>
  </NuxtLink>
</template>

<style scoped>
a {
  display: flex;
  align-items: center;
  flex: none;
}

a .logo {
  height: var(--docus-header-logo-height); /* Replace with actual value */
  width: auto;
}

a .logo img,
a .logo svg {
  height: inherit;
}

a .logo .light-img {
  display: block;
}

@media (prefers-color-scheme: dark) {
  a .logo .light-img {
    display: none;
  }

  a .logo .dark-img {
    display: block;
  }
}

a .logo .dark-img {
  display: none;
}

a .title {
  font-size: var(--docus-header-title-fontSize); /* Replace with actual value */
  font-weight: var(--docus-header-title-fontWeight); /* Replace with actual value */
  color: var(--docus-header-title-color-static); /* Replace with actual value */
}

a .title:hover {
  color: var(--docus-header-title-color-hover); /* Replace with actual value */
}
</style>