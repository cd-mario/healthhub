<!-- <script>
import Agenda from '../components/Agenda.vue'
import Navbar from '../components/Navbar.vue'
export default {
    components: {
        Agenda,
        Navbar
    }
}
</script> -->
<script>
import Navbar from '../components/Navbar.vue'
import { defineComponent } from 'vue'
import FullCalendar from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'
import timeGridPlugin from '@fullcalendar/timegrid'
import interactionPlugin from '@fullcalendar/interaction'
import { INITIAL_EVENTS, createEventId } from '../components/event-utils.js'
import Modal from '../components/Modal.vue'
import axios from 'axios'
export default defineComponent({
  components: {
    FullCalendar,
    Modal,
    Navbar
  },
  data() {
    return {
      model: {
        patient: {
        name: '',
        email: '',
        time: '',
        // appointment: ''
      },
      },
      isModalVisible: false,
      calendarOptions: {
        plugins: [
          dayGridPlugin,
          timeGridPlugin,
          interactionPlugin // needed for dateClick
        ],
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        initialView: 'dayGridMonth',
        initialEvents: INITIAL_EVENTS, // alternatively, use the `events` setting to fetch from a feed
        editable: true,
        selectable: true,
        selectMirror: true,
        dayMaxEvents: true,
        weekends: true,
        select: this.handleDateSelect,
        eventClick: this.handleEventClick,
        eventsSet: this.handleEvents,
        /* you can update a remote database when these fire:
        eventAdd:
        eventChange:
        eventRemove:
        */
      },
      currentEvents: [],
      // appointment: this.currentEvents[currentEvents.length - 1]
    }
  },
  methods: {
    showModal() {
      this.isModalVisible = true; 
    },
    closeModal() {
      this.isModalVisible = false;
    },
    handleWeekendsToggle() {
      this.calendarOptions.weekends = !this.calendarOptions.weekends // update a property
    },
    handleDateSelect(selectInfo) {
      let title = 'Appointment'
      this.isModalVisible = true
      let calendarApi = selectInfo.view.calendar

      calendarApi.unselect() // clear date selection

      if (title) {
         calendarApi.addEvent({
          id: createEventId(),
          title,
          start: selectInfo.startStr,
          end: selectInfo.endStr,
          allDay: selectInfo.allDay
        })
      }
    },
    handleEventClick(clickInfo) {
      if (confirm(`Are you sure you want to delete the event '${clickInfo.event.title}'`)) {
        clickInfo.event.remove()
      }
    },
    handleEvents(events) {
      this.currentEvents = events
    },
    handleEventAdd() {
      this.model.patient.appointment = this.currentEvents[this.currentEvents.length - 1]
      console.log(this.model.patient.appointment)
    },
    savePatient() {
      this.closeModal()
      axios.post('http://127.0.0.1:8000/api/patients', this.model.patient)
           .then(res=> {


            console.log(res.data)
            alert(res.data.message)

            this.model.patient = {
              name: '',
              email: '',
              time: '',
            }
            })
            .catch(function (error){
              
              if(error.response) {

                if(error.response.status == 422) {

                  this.erroList = error.response.data.errors;
                }
              }
              if (error.response) {
                console.log(error.response.data);
                console.log();
                console.log(error.response.headers);
              } else if (error.request) {
                console.log(error.request);
              } else {
                console.log('Error', error.message);
              }
            })
    }
  },
})

</script>
<!-- 
<template>
    <Navbar />
    <div class="wrapper">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Book an Appointment</h1>
            </div>
            <div class="card-body">
                  <Agenda header="Please Select Date and Time" />
            </div>
          </div>
    </div>

</template> -->

<template>
    <Navbar />
    <div class="wrapper">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Book an Appointment</h1>
            </div>
            <div class="card-body">
                <Modal
                v-show="isModalVisible"
                @close="closeModal"
              >
                <template v-slot:header>
                  <h1 class="modal-title ">Healthub Appointment</h1>
                </template>
              
                <template v-slot:body>
                  <form>
                    <div class="form-group">
                      <label for="name">Full Name: </label>
                      <input type="text" class="form-control" id="name" v-model="model.patient.name" placeholder="E.g. Marian Jake O. Bula">
                    </div>
                    <div class="form-group mt-3">
                      <label for="exampleInputEmail1">Email address: </label>
                      <input type="email" class="form-control" v-model="model.patient.email" aria-describedby="emailHelp" placeholder="E.g. marianjakebula@gmail.com">
                    </div>
                    <div class="form-group mt-3">
                      <label for="time" >Preferred Time: </label>
                      <input type="time" class="form-control mr-3" id="time" v-model="model.patient.time">
                    </div>
                    <button type="button" @click="savePatient" class="btn btn-primary mt-3">Save</button>
                  </form>
                </template>
              </Modal>
              
                <div class='demo-app'>
                  <div class='demo-app-sidebar'>
                    <div class='demo-app-sidebar-section border'>
                      <h2>Please Select a Date and Time</h2>
                    </div>
                    <div class='demo-app-sidebar-section'>
                    </div>
                    <div class='demo-app-sidebar-section'>
                      <!-- <h3>Pending Appointments ({{ currentEvents.length }})</h3>
                      <ul>
                        <li v-for='event in currentEvents' :key='event.id'>
                          <b>{{ event.startStr }}</b>
                          <i>{{ event.title }}</i>
                          <br>
                          <button type="button" class="btn btn-success btn-sm" style="margin-right: 3px">Accept</button>
                          <button type="button" class="btn btn-danger btn-sm">Decline</button>
                          <hr>
                        </li>
                      </ul> -->
                      <h3>Instructions</h3>
                      <ol>
                        <li>Click available dates</li>
                        <li>Fill out information</li>
                        <li>Wait for confirmation</li>
                      </ol>
                    </div>
              
                  </div>
                  <div class='demo-app-main'>
                    <FullCalendar
                      class='demo-app-calendar'
                      :options='calendarOptions'
                    >
                      <template v-slot:eventContent='arg'>
                        <b>{{ arg.timeText }}</b>
                        <i>{{ arg.event.title }}</i>
                      </template>
                    </FullCalendar>
                  </div>
                </div>
            </div>
          </div>
    </div>
</template>

<style scoped>
.wrapper .card {
    margin: 50px auto;
    width: 90%;
}
.wrapper .card .card-header .card-title {
    font-weight: 700;
    font-size: 2.5rem;
}
.form-group label {
    font-weight: 500;
}
.card-header {
    height: 100px;
    text-align: center;
    background-color: #0146ae;
    color: white;
}
.card-title {
    margin: 15px auto;
}

.demo-app-sidebar-section h2 {
    margin: 0;
    font-size: 18px;
    font-weight: 700;
    text-align: center;
  }
  
  .demo-app-sidebar-section h3 {
    font-size: 18px;
    font-weight: 700;
  }
  
  ol {
    margin: 0;
    padding: 0 0 0 1em;
  }
  
  li {
    margin: 1.5em 0;
    padding: 0;
  }
  
  b { /* used for event dates/times */
    margin-right: 3px;
  }
  
  .demo-app {
    display: flex;
    min-height: 100%;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }
  
  .demo-app-sidebar {
    width: 250px;
    background-color:rgba(0,0,255,0.3);
    border-right: 1px solid #d3e2e8;
  }
  
  .demo-app-sidebar-section {
    padding: 2em;
  }
  
  .demo-app-main {
    flex-grow: 1;
    padding: 3em;
  }
  
  .fc { /* the calendar root */
    max-width: 1100px;
    margin: 0 auto;
  }
</style>