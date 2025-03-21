<template>
    <div>
        <header class="fixed-top header">
            <div class="container fixed-top">
                <div class="logo float-center">
                    <a>
                        <img src="/img/logo.png" class="main-logo">
                        <div class="title">
                            <a href="/">&nbsp;Perfect Paradox's 8400</a>
                        </div>
                    </a>
                    <div class="loader">
                        <div class="fixx">
                            <div class="float-center lodbar">
                                <p>&nbsp;Loading...</p>
                                <div id="barr" class="persent">&nbsp;</div>
                            </div>
                        </div>
                    </div>
                </div>

                <nav class="main-nav float-right d-none d-lg-block header">
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
// var w = 5;
// var mylod = setInterval(myTimer, 1000);
// function myTimer() {
//     if (w > 100) {
//         myStopFunction();
//     } else {
//         w = w + 6.25;
//         document.getElementById('barr').style.width = w + '%';
//     }
// }
// function myStopFunction() {
//     clearInterval(mylod);
// }
</script>

<style scoped>
@keyframes rotate {
    0% {
        -webkit-transform: scale(1);
    }

    50% {
        -webkit-transform: scale(1.1);
    }

    100% {
        -webkit-transform: scale(1);
    }
}

.header {
    height: 100svh;
    transition: all 0.5s;
}

.lod {
    display: none !important;
    transition: all 0.5s;
    opacity: 0;
}

.bigg {
    margin-left: 30% !important;
    margin-right: 30% !important;
    width: 40% !important;
    -webkit-animation-name: rotate;
    animation-name: rotate;
    -webkit-animation-duration: 1.5s;
    animation-duration: 1.5s;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
    transition: all 0.5s;
}

.float-center {
    margin-top: 8% !important;
    transition: all 0.5s;
}

.loder {
    width: 80%;
    transition: all 0.5s;
}

.fixx {
    position: relative;
}

.lodbar {
    width: 125%;
    transition: all 0.5s;
    background-color: #afb0b3;
    height: auto;
    border-radius: 5px;
}

.persent {
    width: 0%;
    transition: all 0.5s;
    background-color: #5e068a;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0;
    border-radius: 5px;
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
</style>