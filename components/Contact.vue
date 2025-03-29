<template>
    <section id="contact">
        <div class="container-fluid">
            <div class="section-header">
                <h3>Contact Us</h3>
            </div>
            <div class="row wow fadeInUp">
                <ul class="nav">
                    <li><a :href="website.contact.address.link" target="_blank"><Icon name="material-symbols:location-on-outline" />
                        {{ website.contact.address.name }}</a></li>
                    <li><a :href="'mailto:' + website.contact.email" target="_blank"><Icon name="material-symbols:mail-outline" />
                            {{ website.contact.email }}</a></li>
                    <li><a :href="'tel:' + website.contact.phone"><Icon name="material-symbols:perm-phone-msg-rounded" />
                        {{ formattedPhoneNumber(website.contact.phone) }}</a></li>
                </ul>
            </div>
        </div>
    </section>
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
</script>

<style scoped>
#contact {
    padding: 60px 0;
    overflow: hidden;
}

.nav {
    list-style-type: none;
    text-align: center;
    margin: auto;
    padding: 30px 0;
    display: flex;
    justify-content: space-evenly;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 40px;
}

.nav li {
    display: inline-block;
    font-size: 15px;
    text-align: center;
}

.nav a {
    color: #092038;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.nav a:hover {
    color: #5e068a;
}

.nav span {
    width: 1.75em;
    height: 1.75em;
    color: #5e068a;
}
</style>