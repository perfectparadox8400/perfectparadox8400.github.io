import WOW from "wow.js";
import 'animate.css';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';
import 'lightbox2/dist/css/lightbox.css';
import 'lightbox2';

export default defineNuxtPlugin(() => {
    new WOW().init();
});