<template>
    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-8 footer-info">
                        <h3>{{ website.name }}</h3>
                        <p>{{ website.home.about }}</p>
                    </div>
                    <div class="col-lg-2 col-md-8 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li v-for="link in website.footer.links" :key="link.name">
                                <a :href="link.url">{{ link.name }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-8 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            <strong>Location:</strong> {{ website.contact.address.name }}<br>
                            <strong>Phone:</strong> {{ formattedPhoneNumber(website.contact.phone) }}<br>
                            <strong>Email:</strong> {{ website.contact.email }}<br>
                        </p>
                        <div class="social-links">
                            <a v-for="social in website.contact.socials" :key="social.name" :href="social.link" target="_blank">
                                <Icon :name="social.icon" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-8 footer-newsletter">
                        <h4>{{ website.footer.updates.title }}</h4>
                        <p>{{ website.footer.updates.subtitle }}</p>
                        <a :href="website.footer.updates.link"><img :src="website.footer.updates.image"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; Copyright {{ dateYear() }} <strong> {{ website.name }}</strong>. {{ website.footer.copyright }}
            </div>
            <div class="credits">
                Designed by <a href="https://allancoding.dev/" target="_about">Allan Niles</a>
            </div>
        </div>
    </footer>
</template>

<script setup>
import website from '../website.json';

const formattedPhoneNumber = (phone) => {
    const countryCode = phone.slice(1, 2);
    const areaCode = phone.slice(2, 5);
    const centralOfficeCode = phone.slice(5, 8);
    const lineNumber = phone.slice(8);
    return `+${countryCode} (${areaCode}) ${centralOfficeCode}-${lineNumber}`;
};

const dateYear = () => {
    return new Date().getFullYear();
};
</script>

<style scoped>
.footer {
  background: #3f065c;
  padding: 0 0 30px 0;
  color: #eee;
  font-size: 14px;
}

.footer .footer-top {
  background: #680899;
  padding: 60px 0 30px 0;
}

.footer .footer-top .footer-info {
  margin-bottom: 30px;
}

.footer .footer-top .footer-info h3 {
  font-size: 34px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-family: "Montserrat", sans-serif;
  color: #fff;
  font-weight: 400;
  letter-spacing: 3px;
  text-transform: uppercase;
}

.footer .footer-top .footer-info p {
  font-size: 13px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Montserrat", sans-serif;
  color: #ecf5ff;
}

.footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #5e068a;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

.footer .footer-top .social-links a:hover {
  background: #380452;
  color: #fff;
}

.footer .footer-top h4 {
  font-size: 14px;
  font-weight: bold;
  color: #fff;
  text-transform: uppercase;
  position: relative;
  padding-bottom: 10px;
}

.footer .footer-top .footer-links {
  margin-bottom: 30px;
}

.footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer .footer-top .footer-links ul li {
  padding: 8px 0;
}

.footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

.footer .footer-top .footer-links ul a {
  color: #ecf5ff;
}

.footer .footer-top .footer-links ul a:hover {
  color: #fff;
  text-shadow: 0 0 1px #fff;
}

.footer .footer-top .footer-contact {
  margin-bottom: 30px;
}

.footer .footer-top .footer-contact p {
  line-height: 26px;
}

.footer .footer-top .footer-newsletter {
  margin-bottom: 30px;
}

.footer .footer-top .footer-newsletter input[type="email"] {
  border: 0;
  padding: 6px 8px;
  width: 65%;
}

.footer .footer-top .footer-newsletter input[type="submit"] {
  background: #007bff;
  border: 0;
  width: 35%;
  padding: 6px 0;
  text-align: center;
  color: #fff;
  transition: 0.3s;
  cursor: pointer;
}

.footer .footer-top .footer-newsletter input[type="submit"]:hover {
  background: #0062cc;
}

.footer .copyright {
  text-align: center;
  padding-top: 30px;
}

.footer .credits {
  text-align: center;
  font-size: 13px;
  color: #f1f7ff;
}

.footer .credits a {
  color: #bfddfe;
}

.footer .credits a:hover {
  color: #f1f7ff;
}
</style>