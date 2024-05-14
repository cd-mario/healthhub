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
  <div class="contacts-container">
    <h1>Get in Touch</h1>
    <div class="contacts">
      <div class="media">
        <img src="../assets/images/address.png" width="100" />
        <h1>Address</h1>
        <h2>HealthHub Headquarters:</h2>
        <p>
          123 Wellness Street, Vitality Valley, <br />
          Fitland, FL 54321, United States
        </p>
        <h2>HealthHub Wellness Center:</h2>
        <p>
          456 Fitness Avenue, Energize District, Wellbeing City, WC1A 2AB,
          United Kingdom
        </p>
        <h2>HealthHub Clinic:</h2>
        <p>
          789 Health Drive, Harmony Heights, Serenity Town, ST 98765, Canada
        </p>
      </div>
      <div class="media">
        <img src="../assets/images/phone2.png" width="100" />
        <h1>Phone</h1>
        <h2>HealthHub Headquarters:</h2>
        <p>
         US: +1 (555) 123-4567 <br>
         PH: +63 2 123 4567
        </p>
        <h2>HealthHub Wellness Center:</h2>
        <p>
          US: +44 20 1234 5678 <br>
          PH: +63 3 123 4569
         </p>
        <h2>HealthHub Clinic:</h2>
        <p>
          US: +14 20 1234 5678 <br>
          PH: +63 6 123 4569
         </p>
      </div>
      <div class="media">
        <img src="../assets/images/email.png" width="100" />
        <h1>Email</h1>
        <h2>Inquiries:</h2>
        <p>
          info@healthhubclinic.com
        </p>
        <h2>Medical Service</h2>
        <p>
          appointments@healthhubclinic.com
        </p>
        <h2>Request for Proposal</h2>
        <p>
          contact@healthhubclinic.com
        </p>
      </div>
    </div>
  </div>
</template>

<style scoped>
.contacts-container {
  color: white;
  width: 100%;
  height: 100%;
  background-color: #0146ae;
  text-align: center;
  border-top: 1px solid white;
  padding: 110px 0;
}
.contacts-container h1 {
  word-spacing: 15px;
  text-transform: uppercase;
  font-size: 50px;
  font-weight: 900;
}
.contacts {
  display: flex;
  justify-content: space-evenly;
  margin-top: 70px;
}
.media {
  margin: 20px;
  width: 300px;
}
.media h1 {
  background: white;
  border-radius: 4px;
  padding: 15px 2px;
  color: #003a6b;
  font-size: 1.8em;
}
.media h2 {
  margin-top: 30px;
  font-size: 1em;
  font-weight: 800;
}
.media p {
  margin-top: 10px;
}
.media img {
  margin-bottom: 20px;
}
</style>
