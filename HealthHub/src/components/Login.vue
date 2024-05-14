<template>
    <div class="container-container">
        <div class="container">
            <div class="form-container border rounded p-3">
                <h1 class="mb-3 text-center mt-5">Login to HealthHub</h1>
                <form>
                    <div class="form-group mb-3">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4" @click="showMain">Login</button>
                  </form>
            </div>
    
        </div>
    </div>


</template>

<script>
export default {
  methods: {
    showMain() {
        this.$emit('open')
    }
  },
  data () {
    return {
        show: false
    }
  },


}
</script>

<style scoped>
.container-container {
    height: 700px;
    background: #0146ae;
}
.container {
    padding-top: 100px;
    background: #0146ae;
    display: flex;
    justify-content: center;
}
h1 {
    font-weight: 700;
    color: #0146ae;
    font-size: 2.3rem;
}
label {
    font-weight: 600;
    font-size: 0.9rem;
    color: #0146ae; 
}
button {
    width: 470px;
    background: #0146ae;
}
.form-container {
    background: white;
    height: 400px;
    width: 500px;
}

</style>