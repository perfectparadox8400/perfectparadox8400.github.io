<template>
	<section id="sponsors" class="sponsors">
		<div class="container">
			<div class="section-header">
				<h3>{{ website.sponsors.title }}</h3>
				<p>{{ website.sponsors.subtitle }}</p>
			</div>
			<div v-for="(group, groupIndex) in sponsors" :key="groupIndex" class="sponsor-group">
				<div class="section-header wow fadeInUp">
					<h4>{{ group.title }}</h4>
				</div>

				<div v-if="group.sponsors" class="clients-wrap">
					<div v-for="(sponsor, sponsorIndex) in group.sponsors" :key="sponsorIndex" class="client-logo wow fadeInUp">
						<a :href="sponsor.url" target="_blank" rel="noopener noreferrer">
							<NuxtImg v-if="sponsor.logo" width="300" height="180" fit="outside" :src="sponsor.logo" :alt="sponsor.name" format="webp"/>
							<p v-else>{{ sponsor.name }}</p>
						</a>
					</div>
				</div>
				<h5 v-else class="wow fadeInUp">{{ website.sponsors.nosponsor }}<br>Email us at: <a :href="'mailto:' + website.contact.email">{{ website.contact.email }}</a></h5>
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

.dark-mode .sponsors {
	background: #121212;
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
	border: 1px solid #D16DFD;
	overflow: hidden;
	background: #fff;
	height: 180px;
	width: 300px;
}

.dark-mode .sponsors .client-logo {
	background: #222;
}

.sponsors .client-logo img {
	transform: scale(0.8);
	transition: all 0.4s ease-in-out;
}

.dark-mode .sponsors .client-logo img {
	-webkit-filter: drop-shadow(0 0 1px #fff);
  	filter: drop-shadow(0 0 1px #fff);
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

.dark-mode h4 {
	color: #7f26d3;
}

h5 {
	font-size: 1em;
	font-weight: 500;
	text-align: center;
	margin-top: 20px;
}

.dark-mode h5 {
	color: #fff;
}

h5 a:hover {
	text-shadow: 0 0 5px #5e068a;
}

.client-logo a:hover,
.client-logo a:active,
.client-logo a:focus {
	color: #7f26d3;
}
</style>