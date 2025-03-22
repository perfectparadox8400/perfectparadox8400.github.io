<template>
    <div>
        <header ref="header" class="fixed-top header header-full">
            <div class="container">
                <div ref="loadingBox" class="loading">
                    <img ref="logo" src="/img/logo.png" class="zoom logo-box">
                    <div ref="title" class="title hide">
                        <a href="/">&nbsp;Perfect Paradox's 8400</a>
                    </div>
                    <div ref="loadbar" class="loadbar">
                        <div ref="bar" class="loading-bar">&nbsp;Loading...</div>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <nav ref="nav" class="main-nav d-none d-lg-block navbar hide">
                    <ul>
                        <li class="drop-down"><a>Home</a>
                            <ul>
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#testimonials">Members</a></li>
                                <li><a href="#portfolio">Portfolio</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#clients">Sponsors</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a>FIRST</a>
                            <ul>
                                <li><a href="https://www.firstinspires.org/robotics/fll">FIRST ® LEGO® League</a></li>
                                <li><a href="https://www.firstinspires.org/robotics/ftc">FIRST ® Tech Challenge</a></li>
                                <li><a href="https://www.firstinspires.org/robotics/frc">FIRST ® Robotics
                                        Competition</a>
                                </li>
                            </ul>
                        </li>
                        <li class="drop-down"><a>More</a>
                            <ul>
                                <li><a href="https://perfectparadox8400.wixsite.com/mysite">Old Website</a></li>
                            </ul>
                        </li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
</template>

<script setup>
const nav = ref(null);
const header = ref(null);
const logo = ref(null);
const title = ref(null);
const loadbar = ref(null);
const bar = ref(null);
const loadingBox = ref(null);
let loading = null;
let loadingProgress = 0;

// const enableScrolling = () => {
//   document.body.style.overflow = 'auto';
// };

const loadingTimer = () => {
    if (loadingProgress > 90) {
        stoploading();
    } else {
        loadingProgress += 6.25;
        bar.value.style.width = loadingProgress + '%';
    }
};

const stoploading = () => {
  if (loading) {
    clearInterval(loading);
    loading = null;
  }
};

onMounted(async () => {
    loading = setInterval(loadingTimer, 1000);
    loaded();
});

const loaded = () => {
    bar.value.style.width = '100%';

  setTimeout(async () => {
    await nextTick();
    header.value?.classList.remove('header-full');
    nav.value?.classList.remove('hide');
    title.value?.classList.remove('hide');
    loadbar.value?.classList.add('hide');
    logo.value?.classList.remove('zoom');
    loadingBox.value?.classList.remove('loading');
    loadingBox.value?.classList.add('logo');

    //enableScrolling();

    // setTimeout(() => {
    //   dlod.value?.classList.add('lood');
    // }, 100);

    // setTimeout(() => {
    //   lood.value?.classList.add('lood');
    // }, 420);
  }, 750);
};
</script>

<style scoped>
@keyframes zoom {
    0% {
        -webkit-transform: scale(1);
    }

    50% {
        -webkit-transform: scale(1.05);
    }

    100% {
        -webkit-transform: scale(1);
    }
}

.header {
    width: 100%;
    height: 80px;
    z-index: 9999;
    transition: all 0.5s;
    padding: 0;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.3);
    position: fixed;
    top: 0;
    left: 0;
    padding-left: -15px;
}

.header-full  {
    height: 100svh;
}

.title {
    display: inline-block;
    vertical-align: center;
    transition: all 0.5s;
}

.loading {
    height: 100svh;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: center;
    text-align: center;
    padding: 10svh 0;

}

.logo {
    float: left;
}

.logo-box {
    transition: all 0.5s;
}

.logo img {
    height: 80px;
}

.zoom {
    max-height: 80svh;
    max-width: 100%;
    margin: auto;
    height: 100svh;
    -webkit-animation: zoom 1.5s linear infinite;
    animation: zoom 1.5s linear infinite;
}

.loadbar {
    transition: all 0.5s;
    background-color: #afb0b3;
    height: auto;
    border-radius: 5px;
    position: relative;
}

.loadbar p {
    margin: 0;
}

.loading-bar {
    width: 0%;
    background-color: #7f26d3;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0;
    border-radius: 5px;
    color: #fff;
    transition: all 0.5s;
    text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
}

.lod-hide {
    opacity: 0;
    transform: translateY(-100%);
    transition: opacity 0.5s ease, transform 0.5s ease;
}

.lood {
    opacity: 1;
    transform: translateY(0);
}

.navbar {
  height: 80px;
  transition: all 0.5s;
  z-index: 997;
  padding: 20px 0;
  float: right;
}

#headerrr {
  height: 80px;
  transition: all 0.5s;
  z-index: 997;
  transition: all 0.5s;
  padding: 0px 0;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.3);
  transition: all 0.5s;
  position: fixed;
  top: 0px;
  padding-left: -15px;
}

#headerrr.header-scrolledd {
  height: 60px;   
  transition: all 0.5s;
}

#headerr.header-scrolleddd {
  width: 60px;   
  transition: all 0.5s;
}

#headerr {
  width: 80px;   
  transition: all 0.5s;  
}

.header.header-scrolled,
.header.header-pages {
  height: 66px;
  padding: 10px 0;
  transition: all 0.5s;
}

#headerrr .logo h1 {
  font-size: 36px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 400;
  letter-spacing: 3px;
  text-transform: uppercase;
  transition: all 0.5s;
}

#headerrr .logo h1 a {
    margin: 7px 0;
    transition: all 0.5s;
}

#headerrr .logo h1 a:hover {
  color: #5e068a;
  text-decoration: none;
  transition: all 0.5s;
}

#headerrr .logo img{
  padding: 0;
  margin: 0px 0;
  transition: all 0.5s;
}

.hide {
    display: none !important;
}
</style>