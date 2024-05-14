<template>
    <div class="about mt-1  rounded">
        <h2 class="text-center">Our Services</h2>
    </div>
    
      <div class="card-container mb-5">
        <div class="card">
            <img class="card-img-top" src="../assets/images/services1.jpg" alt="Card image cap">
          <div class="card-header text-center">Your Clear Vision Partner: Expert Ophthalmology Care at HealthHub</div>
          <div class="card-body border rounded">
            <p class="card-text">
                Experience exceptional eye care with our skilled ophthalmologist. Our specialist is committed to preserving and enhancing your vision through personalized, state-of-the-art treatments. From routine check-ups to advanced surgical procedures, trust us for compassionate eye care.
            </p>
          </div>
        </div>

       <div class="card"> 
          <img class="card-img-right" src="../assets/images/services2.jpg" alt="Card image cap" height="">
          <div class="card-header text-center">
            Complete EN Care: Your Trusted Otolaryngologist at HealthHub
          </div>
          <div class="card-body border rounded">
            <p class="card-text">
              Experience comprehensive care for your ears and nose with our expert otolaryngologist. At HealthHub, our specialist is dedicated to diagnosing and treating a wide range of EN conditions. From hearing issues to sinus disorders, trust us for personalized and advanced EN care.
            </p>
          </div>
        </div>
      </div>
</template>

<script>

</script>

<style scoped>
.about {
    text-transform: uppercase;
    margin: 50px auto;
    color: #0146ae;
    padding: 7px 20px;
}

.about h2 {
  background: rgba(70, 110, 220, 0.3);
  font-size: 2.5em;
  font-weight: 800;
  width: fit-content;
  margin: 0 auto;
  color: rgb(36, 35, 35);
  padding: 10px 20px;
  border-radius: 4px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
}


.card-container {
    justify-content: space-around;
    margin-top: 40px;
    display: flex;
    flex-direction: row;

}

.card-container .card {
    width: 450px;
    height: 300px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    border: 1px solid lightgray;
}

.card-header {
    background-color: #0146ae;
    color: #eee;
    font-weight: bold;
}
.card-body {
    border: 1px solid #0146ae;
}

.card-text {
    text-align: justify;
}

a {
  text-decoration: none;
}
</style>