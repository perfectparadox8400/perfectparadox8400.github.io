<template>
    <a href="#" class="back-to-top" ref="backToTopButton" @click="scrollToTop">
        <Icon name="octicon:chevron-up-12" />
    </a>
</template>

<script>
export default {
    mounted() {
        window.addEventListener("scroll", this.handleScroll);
        this.handleScroll();
    },
    beforeDestroy() {
        window.removeEventListener("scroll", this.handleScroll);
    },
    methods: {
        handleScroll() {
            const backToTopButton = this.$refs.backToTopButton;
            if (window.scrollY > 100) {
                backToTopButton.classList.add("visible");
                backToTopButton.classList.remove("hidden");
            } else {
                backToTopButton.classList.add("hidden");
                backToTopButton.classList.remove("visible");
            }
        },
        scrollToTop() {
            $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
        }
    }
};
</script>

<style scoped>
.back-to-top {
    position: fixed;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #5e068a;
    color: #fff;
    width: 44px;
    height: 44px;
    text-align: center;
    line-height: 1;
    font-size: 16px;
    border-radius: 50%;
    right: 15px;
    bottom: 15px;
    z-index: 11;
}

.back-to-top span {
    width: 1.5em;
    height: 1.5em;
    margin-bottom: 5px;
    color: #fff;
}

.visible {
  visibility: visible;
  opacity: 1;
  transition: opacity 0.5s linear;
}

.hidden {
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s 1s, opacity 0.5s linear;
}
</style>