<template>
    <div class="container">
        <div>
          <h1 class="mb-3 mt-5"><strong>HealthHub Clinic:</strong> Where Care <br> Meets Innovation</h1>
          <p class="mb-3">
            Our clinic system integrates advanced technology  prioritizing <br> your well-being 
            through a holistic approach and <br>nurturing healthier lives for everyone we serve. 
          </p>
          <button><router-link :to="{name: 'appointment'}">Appointment</router-link></button>
        </div>
      </div>
</template>

<script>


</script>

<style scoped>
.container {
    font-family: "Montserrat", sans-serif;
    display: flex;
    justify-content: space-between;
    padding: 40px;
    margin: 0 40px;
    height: 650px;
}

.container h1 {
    font-size: 2.8rem;
    font-weight: bold;

}

.container p {
    font-size: 1.1em;
    text-align: left;
}

.container button {
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    width: 180px;
    border: 1px solid transparent;
    background-color: #0146ae;
    color: white;
    padding: 10px;
    border-radius: 5px;
}

.container button:hover {
    background-color: #064097;
    font-weight: 500;
}

a {
    text-decoration: none;
    color: white;
}
</style>