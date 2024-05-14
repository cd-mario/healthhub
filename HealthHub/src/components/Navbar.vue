<script>
export default {
    methods: { 

}
}
</script>

<template>
    <nav>
        <div class="flex">
            <h3 class="logo">
              <router-link :to="{name: 'home'}">HealthHub</router-link>
            </h3>
        </div>
        
        <ul>
            <li><router-link :to="{name: 'home'}">Home</router-link></li>
            <li><router-link :to="{name: 'about'}">About</router-link></li>
            <li><router-link :to="{name: 'contacts'}">Contacts</router-link></li>
            <li><router-link :to="{name: 'dashboard'}"><span>Dashboard</span></router-link></li>
        </ul>
    </nav>

</template>

<style scoped>
    nav {
        background-color: #0146ae;
        box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        padding: 12px;
        display: flex;
        justify-content: space-between;
    }

    nav a {
        color: #003a6b;
        text-decoration: none;
    }
    .logo {
        background: white;
        padding: 6px 4px;
        border-radius: 4px;
        color: #003a6b;
        margin: auto 0;
        font-weight: 800;
        font-size: 1.2rem;
    }
    .logo:hover {
        cursor: pointer;
    }
    nav ul {
        margin-top: 5px;
        display: flex;
        align-items: center;
    }

    li {
        font-size: 1em;
        margin: auto 0;
        font-weight: 600;
        margin-right: 30px;
        list-style: none;
    }
    li:last-child {
        font-weight: 800;
    }
    li:hover {
        color: white;
        text-decoration: underline;
    }
    li a {
        color: white;
        text-decoration: none;
    }
    span {
        border-radius: 4px;
        padding: 7px;
        background-color: white;
        color: #003a6b;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }
    .flex {
        display: flex;
    }
    .router-link-exact-active {
        font-weight: 1000;
    }
</style>