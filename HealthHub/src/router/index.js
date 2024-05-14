import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue' //
import AboutView from '../views/AboutView.vue' //
import ContactsView from '../views/ContactsView.vue' //
import LoginView from '../views/LoginView.vue' //
import AppointmentView from '../views/AppointmentView.vue' //
// import RegisterView from '../views/RegisterView.vue'
import DashboardHome from '../views/Dashboard/DashboardHome.vue'
import DashboardPatients from '../views/Dashboard/DashboardPatients.vue'
import DashboardAppointments from '../views/Dashboard/DashboardAppointments.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      component: AboutView
    },
    {
      path: '/contacts',
      name: 'contacts',
      component: ContactsView
    },
    {
      path: '/login',
      name: 'login',
      component: LoginView
    },
    {
      path: '/appointment',
      name: 'appointment',
      component: AppointmentView
    },
    {
      path: '/dashboard',
      name: 'dashboard',
      component: DashboardHome
    },
    {
      path: '/patients',
      name: 'patients',
      component: DashboardPatients
    },
    {
      path: '/appointments',
      name: 'appointments',
      component: DashboardAppointments
    },
    // {
    //   path: '/register',
    //   name: 'register',
    //   component: RegisterView
    // },
  ]
})

export default router
