<template>
    <section id="about">
        <div class="container">
            <header class="section-header">
                <h3>About Us</h3>
                <p>
                    {{ website.home.about }}
                </p>
            </header>
        </div>
    </section>
</template>

<script setup>
import website from '../website.json';
</script>

<style scoped>
#about {
  background: #fff;
  padding: 60px 0;
}

.dark-mode #about {
  background: #000;
}

#about .about-container .background {
  margin: 20px 0;
}

#about .about-container .content {
  background: #fff;
}

#about .about-container .title {
  color: #333;
  font-weight: 700;
  font-size: 32px;
}

.dark-mode #about .about-container .title {
  color: #fff;
}

#about .about-container p {
  line-height: 26px;
}

#about .about-container p:last-child {
  margin-bottom: 0;
}

#about .about-container .icon-box {
  background: #fff;
  background-size: cover;
  padding: 0 0 30px 0;
}

#about .about-container .icon-box .icon {
  float: left;
  background: #fff;
  width: 64px;
  height: 64px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  text-align: center;
  border-radius: 50%;
  transition: all 0.3s ease-in-out;
}

#about .about-container .icon-box:hover .icon i {
  color: #fff;
}

#about .about-container .icon-box .title {
  margin-left: 80px;
  font-weight: 600;
  margin-bottom: 5px;
  font-size: 18px;
}

#about .about-container .icon-box .title a {
  color: #432850;
}

.dark-mode #about .about-container .icon-box .title a {
  color: #fff;
}

#about .about-container .icon-box .description {
  margin-left: 80px;
  line-height: 24px;
  font-size: 14px;
}

#about .about-extra {
  padding-top: 60px;
}

#about .about-extra h4 {
  font-weight: 600;
  font-size: 24px;
}
</style>