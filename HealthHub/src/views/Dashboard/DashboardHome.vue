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

    <div class="header">
        <div>
            <h1>Welcome Admin!</h1>
            <p>All systems are running smoothly!</p>
            <hr>
        </div>
    </div>

    <div class="earnings">
      <h5>Earnings</h5>
      <hr>
      <h6>Annually</h6>

      <div class="peso-container">
        <div id="peso">₱</div>
        <div>
          <h6>Peso</h6>
          <p>₱500,000</p>
        </div>
      </div>

      <div class="dollar-container">
        <div id="dollar">$</div>
        <div>
          <h6>Dollar</h6>
          <p>$8,902</p>
        </div>
      </div>
      <hr>
      <h6>Monthly</h6>

      <div class="peso-container">
        <div id="peso">₱</div>
        <div>
          <h6>Peso</h6>
          <p>₱41,666.67</p>
        </div>
      </div>

      <div class="dollar-container">
        <div id="dollar">$</div>
        <div>
          <h6>Dollar</h6>
          <p>$741.87</p>
        </div>
      </div>
    </div>

    <div class="container-1">
      <h5 class="display-6">31°C</h5>
      <h6 class="display-6">Excessive Heat</h6>
      <h6 class="display-6">Tue • Tacloban City</h6>

    </div>

    <div class="container-2">
      <div class="one">
        <h6 class="display-6">Today's Appointments</h6>
        <h5 class="display-6">20</h5>
        <h6 class="display-6">10.00% (30 days)</h6>
      </div>
      <div class="two">
        <h6 class="display-6">Total Appointments</h6>
        <h5 class="display-6">6,344</h5>
        <h6 class="display-6">10.00% (30 days)</h6>
      </div>
      <div class="three">
        <h6 class="display-6">Number of Patients</h6>
        <h5 class="display-6">533</h5>
        <h6 class="display-6">2.00% (30 days)</h6>
      </div>
      <div class="four">
        <h6 class="display-6">Number of Consultations</h6>
        <h5 class="display-6">1,432</h5>
        <h6 class="display-6">20.00% (30 days)</h6>
      </div>
    </div>

    <div class="appointments">
      <h5 class="display-6">Appointments</h5>
      <small>32 appointment request pendings</small>
      <br>
      <button type="button" class="btn rounded">view</button>
    </div>

    <div class="patients">
      <h5 class="display-6">Patients</h5>
      <small>32 appointment request pendings</small>
      <br>
      <button type="button" class="btn rounded">view</button>
    </div>
    
    <div class="medicines">
      <h5 class="display-6">Medicines</h5>
      <small>32 appointment request pendings</small>
      <br>
      <button type="button" class="btn rounded">view</button>
    </div>

    <div class="duty">
      <h6 class="display-6">On leave:</h6>
      <hr>
      <h5>John Doe</h5>
      <h3>Opthalmologist</h3>
      <div class="salary">
        <div class="month">85%</div>
        <div class="year">71%</div>
        <div>Month</div>
        <div>Year</div>
      </div>
      <p>Profile</p>
    </div>
  </div>
</template>
<style scoped>
#grid {
  background: rgba(255,255,255,0.1);
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
#grid .header {
    margin-top: 30px;
    grid-row: 1;
    grid-column: 2 / 9;
    width: 855px;

}
#grid .header div h1 {
    word-spacing: 20px;
    text-align: left;
    color: #424141;
    text-transform: uppercase;
    font-size: 2.6em;
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
#grid .earnings {
  color: white;
  padding: 30px;
  border-radius: 5px;
  margin: 50px 10px 10px 0;
  grid-row: 1 / 6;
  grid-column: 9 / 11;
  background-color: rgba(44, 130, 201, 0.4);
  border: 1px solid lightgray;
}
.earnings h5 {
  color: white;
  text-align: center;
  font-weight: 800;
  margin-top: 20px;
  margin-bottom: 35px;
  text-transform: uppercase;
  font-size: 23px;
}
.earnings h6 {
  font-weight: 800;
  margin-bottom: 20px;
  font-size: 18px;
}
.earnings #peso {
  background: #fbdc60;
  width: 40px;
  height: 40px;
  text-align: center;
  padding: 10px;
  border-radius: 4px;
  font-weight: 700;
  font-size: 16px;
  margin-right: 15px;
  margin-left: 10px;
}
.earnings .peso-container {
  display: flex;
}
.earnings .peso-container div h6,
.earnings .dollar-container div h6 {
  font-size: 18px;
  font-weight: 600;
  margin: 0;
}
.earnings .peso-container div p,
.earnings .dollar-container div p {
  font-size: 15px;
  word-spacing: 30px;
}
.earnings .dollar-container {
  display: flex;
  margin-bottom:30px;
}
.earnings #dollar {
  background: #85bb65;
  width: 40px;
  height: 40px;
  text-align: center;
  padding: 10px;
  border-radius: 4px;
  font-weight: 700;
  font-size: 16px;
  margin-right: 15px;
  margin-left: 10px;
}
#grid .container-1 {
  color: white;
  padding: 30px;
  border-radius: 20px;
  margin: 0 20px 0 20px;
  background-image: url(./../../assets/images/weather.png);
  background-size: 600px 500px;
  background-repeat: no-repeat;
  grid-column: 2 / 5;
  box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
  grid-row:  2 / 5;
  height: 450px;
}
#grid .container-1:hover {
  cursor: pointer;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
#grid .container-1 h6{
  margin-bottom: 3px;
  font-size: 14px;
  font-weight: 500;
}
#grid .container-1 h5{
  margin: 0;
  font-size: 50px;
  font-weight: 600;
}

#grid .container-2 {
  margin-left: 10px;
  border-radius: 6px;
  grid-column: 5 / 9;
  grid-row:  2 / 6;
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-auto-rows: minmax(30%, 35%);
  row-gap: 15px;
}
.one, .two, .three, .four {
  border-radius: 20px;
  padding: 25px;
  color: white;
  width: 230px;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
.one:hover, .two:hover, .three:hover, .four:hover {
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  cursor: pointer;
} 
.one h6, .two h6, .three h6, .four h6 {
  font-size: 11px;
  font-weight: 500;
}
.one h5, .two h5, .three h5, .four h5 {
  margin-top: 15px;
  font-size: 35px;
  font-weight: 400;
}

.one {
  background: #98bddf;
}
.two {
  background: #f37973;
}
.three {
  background: #7978e9;
}
.four {
  background: #4b49ac;
}
.appointments {
  color: white;
  background: #8a8888;
  border-radius: 10px;
  margin: 20px 20px 0 20px;
  grid-column: 2 / 9;
  grid-row: 5 / 6;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}
.patients {
  background: #8a8888;
  color: white;
  border-radius: 10px;
  margin: 15px 20px 0 20px;
  grid-column: 2 / 9;
  grid-row: 6 / 7;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}
.medicines {
  color: white;
  background: #8a8888;
  border-radius: 10px;
  margin: 15px 20px 20px 20px;
  grid-column: 2 / 9;
  grid-row: 7 / 8;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}
.appointments h5, .patients h5,.medicines h5 {
  margin: 20px 0 10px 30px;
  font-size: 16px;
  font-weight: 800;
  letter-spacing: 1.5px;
}
.appointments small, .patients small,.medicines small {
  margin: 0 0 10px 30px;
  font-size: 13px;
}
.appointments button, .patients button,.medicines button {
  background: orangered;
  color: white;
  margin: 5px 0 10px 30px;
  font-size: 13px;
  font-weight: 600;
}

.duty {
  text-align: center;
  color: white;
  margin: 0 10px 20px 0;
  background-color: rgba(44, 130, 201, 0.4);
  border: 1px solid lightgray;
  grid-column: 9 / 11;
  grid-row: 6 / 8;
  border-radius: 10px;
  padding: 20px 10px 0 10px;
}
.duty h6 {
  margin-bottom: 20px;
  font-size: 16px;
  font-weight: 600;
}

.duty h5 {
  font-weight: 800;
}

.duty h3 {
  font-size: 14px;
  margin-bottom: 10px;
}

.duty .salary {
  display: grid;
  grid-template-columns: 1fr 1fr;
}

.duty .salary .month, .duty .salary .year {
  margin-left: 30px;
  font-size: 13px;
  text-align: center;
  padding: 5px;
  border-radius: 30px;
  background: #0146ae;
  width: 50px;
  opacity: 50%;
}

.duty .salary div {
  font-size: 14px;
}

.duty p {
  border-radius: 6px;
  margin-top: 30px;
  font-weight: 400;
  text-align: center;
  border: 1px solid lightgray;
}

.duty p:hover {
  background-color: lightgray;
  color: black;
}

#grid .header div h1 {
  font-weight: 700;
}
#grid .header div {
  margin-left: 20px;
}


</style>
