<script>
import Layout from "@/Layouts/Layout.vue";

export default {
  layout: Layout,
  props: {
    cars: Array,
  },
  data() {
    return {
      searchValue: "",
      filteredCars: this.cars,
    };
  },
  methods: {
    searchCar(value) {
      this.filteredCars = this.cars.filter((car) => {
        return (
          car.make.toLowerCase().includes(value.toLowerCase()) ||
          car.model.toLowerCase().includes(value.toLowerCase())
        );
      });
    },
  },
};
</script>

<template>
  <div class="galaxy-container">
    <div class="search-bar">
      <input
        type="text"
        placeholder="🔍 Search a car..."
        v-model="searchValue"
        @input="searchCar(searchValue)"
      />
    </div>

    <section class="cards-container">
      <div class="card" v-for="car in filteredCars" :key="car.id">
        <h3>{{ car.make }} - {{ car.model }}</h3>
        <p>Miles: <span>{{ car.miles }}</span></p>
      </div>
    </section>
  </div>
</template>

<style scoped>

.galaxy-container {
  min-height: 100vh;
  background: radial-gradient(circle, #1a1a2e, #16213e, #0f3460);
  color: #ffffff;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
}


.search-bar input {
  width: 300px;
  padding: 10px;
  border: 2px solid #ffffff;
  background: transparent;
  color: white;
  font-size: 16px;
  text-align: center;
  border-radius: 20px;
  outline: none;
  transition: 0.3s ease-in-out;
}

.search-bar input::placeholder {
  color: rgba(255, 255, 255, 0.7);
}

.search-bar input:focus {
  border-color: #00aaff;
  box-shadow: 0 0 10px #00aaff;
}


.cards-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 15px;
  margin-top: 20px;
}


.card {
  background: rgba(255, 255, 255, 0.1);
  padding: 15px;
  width: 250px;
  border-radius: 15px;
  box-shadow: 0px 0px 15px rgba(0, 170, 255, 0.5);
  text-align: center;
  transition: 0.3s ease-in-out;
  backdrop-filter: blur(10px);
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0px 0px 20px rgba(0, 170, 255, 0.8);
}


.card h3 {
  font-size: 20px;
  color: #00aaff;
  text-transform: uppercase;
}

.card p {
  font-size: 16px;
  color: #ffffff;
  margin-top: 5px;
}

.card span {
  color: #ffcc00;
  font-weight: bold;
}
</style>
