<template>
	<section id="sponsors" class="section-bg sponsors">
		<div class="container">
			<div class="section-header">
				<h3>{{ website.sponsors.title }}</h3>
				<p>{{ website.sponsors.subtitle }}</p>
			</div>
			<div v-for="(group, groupIndex) in sponsors" :key="groupIndex" class="sponsor-group">
				<div class="section-header wow fadeInUp" v-if="group.sponsors">
					<h4>{{ group.title }}</h4>
				</div>

				<div v-if="group.sponsors" class="clients-wrap wow fadeInUp">
					<div v-for="(sponsor, sponsorIndex) in group.sponsors" :key="sponsorIndex" class="client-logo">
						<a :href="sponsor.url" target="_blank" rel="noopener noreferrer">
							<NuxtImg v-if="sponsor.logo" width="300" height="180" fit="outside" :src="sponsor.logo" :alt="sponsor.name" format="webp"/>
							<p v-else>{{ sponsor.name }}</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>

<script setup>
import website from '../website.json';
import sponsors from '../sponsors.json';
import { NuxtImg } from '#components';
</script>

<style scoped>
.sponsors {
	padding: 60px 0;
	box-shadow: inset 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
	background: #ededed;
}

.sponsors .section-header p {
	padding-bottom: 25px;
}

.sponsors .clients-wrap {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	gap: 20px;
	margin-bottom: 30px;
}

.sponsors .client-logo {
	padding: 20px;
	display: flex;
	justify-content: center;
	align-items: center;
	border: 1px solid #dec6f5;
	overflow: hidden;
	background: #fff;
	height: 180px;
	width: 300px;
}

.sponsors .client-logo img {
	transform: scale(0.8);
	transition: all 0.4s ease-in-out;
}

.sponsors .client-logo:hover img {
	transform: scale(0.9);
}

.sponsors .client-logo p {
	transition: all 0.4s ease-in-out;
	font-size: 24px;
	font-weight: 500;
	margin: auto;
	cursor: pointer;
	text-align: center;
}

.sponsors .client-logo:hover p {
	font-size: 27px;
}

.sponsors img {
	width: 100%;
	height: 100%;
	object-fit: contain;
	aspect-ratio: attr(width) / attr(height);
	max-width: 300px;
	max-height: 180px;
}

h4 {
	font-size: 1.5em;
	font-weight: 500;
	color: #5e068a;
	text-align: center;
}
</style>