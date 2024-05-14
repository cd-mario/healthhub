
<script>
  import Agenda from '../../components/Agenda.vue'
export default {
  components: {
    Agenda,
  },
  methods: {

  }

}
</script>

<template>

    <div id="grid">
        <div class="side-nav">
            <h5>Dashboard</h5>
            <ul>
              <li><router-link :to="{ name: 'dashboard' }">Home</router-link></li>
              <li><router-link :to="{ name: 'patients' }">Patients</router-link></li>
              <li><router-link :to="{ name: 'appointments' }">Appointments</router-link></li>
              <hr>
              <li class="logout"><router-link  :to="{ name: 'home' }">Logout</router-link></li>
            </ul>
        </div>
    
        <div class="appointments-wrapper">
            <Agenda header="Appointment Dashboard" />
        </div>
    </div>
  
    </template>
    <style scoped>
    #grid{
        display: grid;
        grid-template-columns: repeat(10, 1fr);
        grid-auto-rows: minmax(100px, auto);
    }
      #grid .side-nav {
        color: white;
        background: #0146ae;
        grid-column: 1 / 2;
        grid-row: 1 / 2;
        width: 220px;
      }
      #grid .side-nav h5 {
        text-transform: uppercase;
        font-weight: 700;
        margin: 20px 0 40px 40px;
      }
      #grid .side-nav ul li {
        list-style: none;
        margin: 0 0 35px 20px;
        font-weight: 500;
      }
      #grid .side-nav ul li:hover {
        cursor: pointer;
        font-weight: 800;
      }

      #grid .appointments-wrapper {
        grid-column: 2 / 11;
        margin: 10px;
      }
      a {
        text-decoration: none;
        color: white;
      }
      
      .router-link-exact-active {
        font-weight: 800;
        text-decoration: underline;
      }
      
      #grid .side-nav ul .logout {
        margin-left: 20px;
        margin-top: 50px;
        font-weight: 700;
        background: #003a6b;
        width: fit-content;
        padding: 5px;
        border-radius: 6px;
      }
      .side-nav ul .logout:hover {
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px,
          rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px,
          rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
      }
    </style>