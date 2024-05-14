<template>
    <div class="form-container">
        <form @submit.prevent="handleSubmit">
            <h1>Login to Dashboard</h1>
            <hr>
            <!-- Email -->
            <label >Email: </label>
            <input type="email" required v-model="email">
            <label >Password: </label>
            <!-- Password -->
            <input type="password" required v-model="password">
            <!-- Validates the password given -->
            <p v-if="passwordError" class="password-error"> {{ passwordError }} </p>
            <!-- Submitting the form -->
            <div class="submit">
                <button class="rounded mt-2">Login</button>
            </div>
          </form>
    </div>
    <!-- @submit.prevent prevents the form to reload to manage the data manually -->

</template>

<script>
export default {
  watch: {
  },
  data () {
    return {
        email: '',
        password: '',
        role: '',
        terms: false,
        tempSkill: '',
        skills: [],
        isDelete: true,
        passwordError: '',
        skillsError: ''
    }
  },
  methods : {
    //Adding a new skill in the skills array. If a given skill is already in the skills array, the skill won't be added.
    addSkill(e) {
        if(e.key === 'Enter' && this.tempSkill) {
            if(!this.skills.includes(this.tempSkill)) {
                this.skills.push(this.tempSkill)
                this.skillsError = ''
            } else {
                this.skillsError = 'Skill already exists'
            }
            this.tempSkill = ''
        }
    },
    // Removing the clicked skill by returning a new array using filter() function
    deleteSkill(skill) {
        this.skills =  this.skills.filter((item) => {
            console.log(`skill:${skill} : item:${item}`)
            return skill !== item
        })
        console.log(this.skills)
    },
    // Validates the password and logging out the data from the form in the console.
    handleSubmit() {
        if(this.password.length > 5) {
            this.passwordError = ''
            console.log(`Email: ${this.email}`)
            console.log(`Password: ${this.password}`)
            console.log(`Role: ${this.role}`)
            console.log(`Skills: ${this.skills.toString()}`)
        } else {
            this.passwordError = 'Must be at least 6 characters'
            this.password = ''
            this.role = ''
            this.skills = []
        }

    }
  }

}
</script>

<style scoped>
.form-container {
    border-top: 1px solid #eee;
    width: 100%;
    height: 100%;
    background-color: #0146ae;
    padding: 80px 0;
}
form {
    width: 500px;
    margin: 0 auto;
    background: white;
    text-align: left;
    padding: 45px;
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
}
form h1 {
    font-weight: 900;
    color:#0146ae;
    text-align: center;
    font-size: 30px;
}
label {
    font-weight: 800;
    color: #003a6b;
    display: inline-block;
    margin: 25px 0 15px;
    font-size: 0.7em;
    text-transform: uppercase;
    letter-spacing: 1px;

}
input {
    font-weight: 600;
}
input, select {
    border-radius: 10px;
    display: block;
    padding: 10px 6px;
    width: 100%;
    border: 1px solid #003a6b;
    color: #003a6b;;
}
input:focus, select:focus {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    outline: none;
}
input[type="checkbox"] {
    display: inline-block;
    width: 16px;
    margin: 0 10px 0 0;
    position: relative;
    top: 2px;
}
.skills {
    margin-top: 10px;
    display: inline-block;
    margin-right: 4px;
    background: #aaa;
    border-radius: 30px;
    width: fit-content;
    padding: 4px 10px;
    color: white;
    cursor:pointer;
}
button {
    background: #0146ae;
    border: none;
    padding: 10px 20px;
    color: white;
}
button:hover {
    cursor: pointer;
}
.submit {
    margin-top: 10px;
    text-align: center;
}
.password-error, .skill-error {
    color: #ff0062;
    margin-top: 10px;
    font-size: 0.8em;
    font-weight: bold;
    text-align: left;
}
</style>