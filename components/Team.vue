<template>
    <section id="team" class="section-bg team">
        <div class="container">
            <div class="section-header">
                <h3>Team Members</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonials-carousel wow fadeInUp">
                        <div v-for="member in team" :key="member.name" class="testimonial-item">
                            <NuxtImg :src="member.image" class="testimonial-img" :alt="member.name" format="webp" quality="100" :placeholder="[150, 200, 75, 5]" />
                            <h3>{{ member.name }}</h3>
                            <h4>{{ member.role }}</h4>
                            <p>{{ member.description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import team from '../team.json';
</script>

<style scoped>
.team {
    padding: 60px 0;
    box-shadow: inset 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
    background: #ededed;
}

.team .section-header {
    margin-bottom: 40px;
}

.team .testimonial-item .testimonial-img {
    width: 120px;
    border-radius: 50%;
    border: 4px solid #fff;
    float: left;
}

.team .testimonial-item h3 {
    font-size: 20px;
    font-weight: bold;
    margin: 10px 0 5px 0;
    color: #111;
    margin-left: 140px;
}

.team .testimonial-item h4 {
    font-size: 14px;
    color: #999;
    margin: 0 0 15px 0;
    margin-left: 140px;
}

.team .testimonial-item p {
    font-style: italic;
    margin: 0 0 15px 140px;
}
</style>