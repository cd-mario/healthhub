<script>
import { defineComponent } from 'vue'
import FullCalendar from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'
import timeGridPlugin from '@fullcalendar/timegrid'
import interactionPlugin from '@fullcalendar/interaction'
import { INITIAL_EVENTS, createEventId } from './event-utils'
import Modal from './Modal.vue'

export default defineComponent({
  components: {
    FullCalendar,
    Modal
  },
  data() {
    return {
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
        eventsSet: this.handleEvents
        /* you can update a remote database when these fire:
        eventAdd:
        eventChange:
        eventRemove:
        */
      },
      currentEvents: [],
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
      let title = prompt('Please enter a new title for your event')
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
        console.log(this.currentEvents)
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
  },
  props: {
      header: String
    }
})

</script>

<template> 

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
        <input type="email" class="form-control" id="name" aria-describedby="emailHelp" placeholder="E.g. Marian Jake O. Bula">
      </div>
      <div class="form-group mt-3">
        <label for="exampleInputEmail1">Email address: </label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E.g. marianjakebula@gmail.com">
      </div>
      <div class="form-group mt-3">
        <label for="time" >Preferred Time: </label>
        <input type="time" class="form-control mr-3" id="time">
      </div>
      <button type="submit" class="btn btn-primary mt-3" @click="closeModal()">Submit</button>
    </form>
  </template>
</Modal>

  <div class='demo-app' @click="pass">
    <div class='demo-app-sidebar'>
      <div class='demo-app-sidebar-section border'>
        <h2>{{ header }}</h2>
      </div>
      <div class='demo-app-sidebar-section'>
      </div>
      <div class='demo-app-sidebar-section'>
        <h3>Pending Appointments ({{ currentEvents.length }})</h3>
        <ul>
          <li v-for='event in currentEvents' :key='event.id'>
            <b>{{ event.startStr }}</b>
            <i>{{ event.title }}</i>
            <br>
            <button type="button" class="btn btn-success btn-sm" style="margin-right: 3px">Accept</button>
            <button type="button" class="btn btn-danger btn-sm">Decline</button>
            <hr>
          </li>
        </ul>
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
</template>

<style scoped>

.demo-app-sidebar-section h2 {
  margin: 0;
  font-size: 18px;
  font-weight: 700;
  text-align: center;
  padding: 6px 4px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
  border-radius: 4px;
}

.demo-app-sidebar-section h3 {
  font-size: 18px;
  font-weight: 700;
}

ul {
  margin: 0;
  padding: 0 0 0 1em;
}

li {
  margin: 1.5em 0;
  padding: 0;
  list-style: none;
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
  border: 1px solid rgba(0, 0, 0, 0.2);
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
.modal-title {
  font-weight: 700;
}
form label {
  font-weight: 600;
}
.border {
  border-bottom: 3px solid white;
}

</style>