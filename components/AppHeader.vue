<template>
  <header>
    <Container>
      <div class="section left">
        <AppHeaderDialog />
        <AppHeaderLogo />
      </div>

      <div class="section center">
        <AppHeaderNavigation />
      </div>

      <div class="section right">
        <ThemeSelect />
        <div class="social-icons">
          <AppSocialIcons />
        </div>
      </div>
    </Container>
  </header>
</template>

<style scoped>
.icon {
  width: var(--space-4); /* Replace with actual value */
  height: var(--space-4); /* Replace with actual value */
}

.navbar-logo {
  display: none; /* Default for has-dialog & .navbar-logo */

  /* Nested classes for left section */
  .left .has-dialog .navbar-logo {
    display: none;
  }

  .left .has-dialog .navbar-logo {
    display: block;
  }

  /* Center section */
  .center .navbar-logo {
    display: block;
  }

  @media (min-width: 1024px) {
    .has-dialog .navbar-logo {
      display: block;
    }

    .center .navbar-logo {
      display: none;
    }
  }
}

header {
  backdrop-filter: var(--elements-backdrop-filter); /* Replace with actual value */
  position: sticky;
  top: 0;
  z-index: 10;
  width: 100%;
  border-bottom: 1px solid var(--elements-border-primary-static); /* Replace with actual value */
  background-color: var(--elements-backdrop-background); /* Replace with actual value */
  height: var(--docus-header-height); /* Replace with actual value */

  .container {
    display: grid;
    height: 100%;
    grid-template-columns: repeat(12, minmax(0, 1fr));
    gap: var(--space-2); /* Replace with actual value */
  }

  .section {
    display: flex;
    align-items: center;
    flex: none;
  }

  /* Left section */
  .section.left {
    grid-column: span 4 / span 4;
  }

  @media (min-width: 1024px) {
    .section.left {
      margin-left: 0;
    }
  }

  /* Center section */
  .section.center {
    grid-column: span 4 / span 4;
    justify-content: center;
    flex: 1;
    z-index: 1;
  }

  /* Right section */
  .section.right {
    display: flex;
    grid-column: span 4 / span 4;
    justify-content: flex-end;
    align-items: center;
    flex: none;
    margin-right: calc(0px - var(--space-4)); /* Replace with actual value */
  }

  .section.right .social-icons {
    display: none;
  }

  @media (min-width: 768px) {
    .section.right .social-icons {
      display: flex;
      align-items: center;
    }
  }
}

</style>