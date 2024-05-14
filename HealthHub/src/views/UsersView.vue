<template>
    <div>
        <Sidebar />
      <Breadcrumb :items="breadcrumbItems" />
      <!-- Your dashboard content here -->
      <h1>Users</h1>
    </div>
  </template>
  
  <script>
  import Breadcrumb from '../components/Breadcrumb.vue' // Adjust the path as per your project structure
  import Sidebar from '../components/Sidebar.vue'
  export default {
    name: 'Dashboard', 
    components: {
      Breadcrumb,Sidebar
    },
    data() {
      return {
        breadcrumbItems: [
          { label: 'Home', route: '/dashboard' },
          { label: 'Users', route: '/Users' },
          { label: 'Patients', route: '/patients' }
          // Add more breadcrumb items as needed
        ]
      };
    }
  };
  </script>
  
  <style scoped>
  /* Your dashboard styles here */
  </style>
  