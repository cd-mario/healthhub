
<script>
import axios from 'axios'
export default {
  data() {
    return {
      patients: [],
    }
  },
  mounted() {
    this.getPatients();
  },
  methods: {
    getPatients() {
    axios.get('http://127.0.0.1:8000/api/patients')
         .then(res => {

            this.patients = res.data.patients;
            console.log(this.patients);
         })
         .catch(error => {
            console.error('Error fetching patients:', error);
         });
}
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
        <div class="patients-container">
          <div class="card">
            <div class="card-header">
              <h2>Patients</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Schedule (Date & Time)</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody v-if="this.patients.length > 0">
                  <tr v-for="(patient, index) in this.patients" :key="index">
                    <td>{{ patient.id }}</td>
                    <td>{{ patient.name }}</td>
                    <td>{{ patient.email }}</td>
                    <td>{{ patient.appointment_date }} at {{patient.appointment_time}}</td>
                    <td>
                      <button type="button" class="btn btn-danger">
                        Delete
                      </button>
                      <button type="button" class="btn btn-success">
                        View
                      </button>
                    </td>
                  </tr>
                </tbody>
                <tbody v-else>
                  <tr>
                    <td colspan="7" class="loading">Loading patients...</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
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
        grid-row: 1 / 8;
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

      #grid .patients-container h1 {
        margin-top: 50px;
        font-weight: 600;
          word-spacing: 20px;
          color: #424141;
          font-size: 2em;
      }
      #grid .header div p {
        font-weight: 600;
        font-size: 13px;
        margin-left: 10px;
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
      .patients-container {
        margin: 0 100px;
        grid-column: 2 / 13;
        grid-row: 1;
        margin-top: 30px;
      }
      #grid .patients-container .flex {
        display: flex;
        justify-content: space-between;
      }
      #grid .patients-container .flex h6 {
        font-size: 14px;
        font-weight: 800;
        margin-top: 10px
      }
      #grid .patients-container .flex h6:hover {
        background-color: rgba(0, 0, 0, 0.10);
        cursor: pointer;
      }
      .btn {
        margin-left: 10px;
      }
      th {
        font-size: 1.2rem;
      }
      .card {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }
      .loading {
        font-size: 2.5rem;
      }
      table {
        text-align: center;
      }
    </style>