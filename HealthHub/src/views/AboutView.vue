<script>
import Navbar from '../components/Navbar.vue'
export default {
  setup() {
    
  },
  components: {Navbar}
}
</script>
<template>
  <Navbar />
  <div class="about-us-container">
    <div class="aboutus">
      <h1>ABOUT US</h1>
      <p>
        <span>W</span>elcome to HealthHub, where our mission is to provide
        exceptional healthcare services with a personal touch. Founded on a
        commitment to excellence and compassion, HealthHub has been serving our
        community with dedication and expertise for several years.At HealtHub,
        we take pride in our team of skilled healthcare professionals who are
        passionate about delivering comprehensive care tailored to each
        patient's needs. From routine check-ups to specialized treatments, our
        doctors, nurses, and support staff work collaboratively to ensure that
        every patient receives the highest standard of care.
      </p>
    </div>
  </div>
  <div class="vision-container">
    <div class="image">
      <img src="../assets/images/aboutus2.jpg" width="700" height="800" />
    </div>
    <div class="text">
      <h1>HealthHub Vision</h1>
      <p>
        We envision a
        <span class="underline">healthier and happier</span> community, where
        every individual has access to comprehensive and compassionate
        healthcare services. We strive to be the beacon of wellness, providing
        innovative solutions and personalized care to enhance the quality of
        life for all. We aim to empower our patients through education,
        prevention, and personalized treatment plans, while also cultivating a
        collaborative and supportive environment for our staff to thrive
        personally and professionally.
      </p>
    </div>
  </div>
  <div class="mission-container">
    <div class="text">
      <h1>HealthHub Mission</h1>
      <p>
        To deliver exceptional healthcare services with
        <span class="underline">integrity, empathy, and professionalism</span>.
        We are committed to providing accessible and affordable healthcare
        services to individuals and families, regardless of their background or
        circumstances. Our focus is on fostering a culture of continuous
        improvement and innovation to deliver the highest standards of care.
      </p>
    </div>
    <div class="image">
      <img src="../assets/images/aboutus1.jpg" width="700" height="700" />
    </div>
  </div>
</template>

<style scoped>
.about-us-container {
  border-top: 1px solid #eee;
  height: 100%;
  width: 100%;
  background-color: #0146ae;
}
.aboutus {
  color: white;
  padding-top: 120px;
  padding-bottom: 120px;
  width: 70%;
  line-height: 30px;
  margin: 0 auto;
  text-align: center;
}
.aboutus h1 {
  font-size: 50px;
  word-spacing: 5px;
  margin-bottom: 20px;
  text-align: center;
  font-weight: 900;
}

.aboutus p {
  font-size: 1.1em;
}

/* Vision */
.vision-container {
  margin: 40px 0 20px 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.vision-container .image {
  flex: 1;
  margin-right: 30px;
}
.text {
  color: #003a6b;
  flex: 1;
}

.vision-container .text p {
  padding-right: 50px;
  font-size: 1.1em;
}

.text h1 {
  word-spacing: 5px;
  margin-bottom: 20px;
  font-weight: 900;
}

.vision-container .image img {
  max-width: 100%;
  height: auto;
  display: block;
}

/*Mission */
.mission-container {
  margin: 30px 0 40px 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.mission-container .image {
  flex: 1;
  margin-left: 30px;
}
.mission-container .text {
  padding-left: 60px;
  text-align: right;
  flex: 1;
}

.mission-container .text p {
  font-size: 1.1em;
}

.mission-container .image img {
  max-width: 100%;
  height: auto;
  display: block;
}
.underline {
  color: white;
  background-color: #003a6b;
  opacity: 0.5;
  padding: 0 2px;
  font-weight: 700;
}
</style>
