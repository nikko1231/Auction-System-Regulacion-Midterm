<script>
import Layout from "@/Layouts/Layout.vue";

export default {
  layout: Layout,
  props: {
    bidders: Array,
  },
  data() {
    return {
      searchValue: "",
      filteredBidders: this.bidders,
    };
  },
  methods: {
    searchBidder(value) {
      this.filteredBidders = this.bidders.filter((bidder) => {
        return (
          bidder.first_name.toLowerCase().includes(value.toLowerCase()) ||
          bidder.last_name.toLowerCase().includes(value.toLowerCase())
        );
      });
    },
  },
};
</script>

<template>
  <div class="bidders-container">
    <div class="search-bar">
      <input
        type="text"
        placeholder="🔍 Search a bidder..."
        v-model="searchValue"
        @input="searchBidder(searchValue)"
      />
    </div>

    <section class="cards-container">
      <div class="card" v-for="bidder in filteredBidders" :key="bidder.id">
        <h3>{{ bidder.last_name }}, {{ bidder.first_name }}</h3>
        <p>📍 Address: <span>{{ bidder.address }}</span></p>
        <p>✉️ Email: <span>{{ bidder.email }}</span></p>
      </div>
    </section>
  </div>
</template>

<style scoped>

.bidders-container {
  min-height: 100vh;
  background: radial-gradient(circle, #0f2027, #203a43, #2c5364);
  color: #ffffff;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
}

.search-bar input {
  width: 300px;
  padding: 12px;
  border: 2px solid #ffffff;
  background: transparent;
  color: white;
  font-size: 16px;
  text-align: center;
  border-radius: 25px;
  outline: none;
  transition: 0.3s ease-in-out;
}

.search-bar input::placeholder {
  color: rgba(255, 255, 255, 0.7);
}

.search-bar input:focus {
  border-color: #00d4ff;
  box-shadow: 0 0 10px #00d4ff;
}


.cards-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
  margin-top: 20px;
}


.card {
  background: rgba(255, 255, 255, 0.1);
  padding: 20px;
  width: 300px;
  border-radius: 15px;
  box-shadow: 0px 0px 15px rgba(0, 212, 255, 0.5);
  text-align: center;
  transition: 0.3s ease-in-out;
  backdrop-filter: blur(10px);
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0px 0px 20px rgba(0, 212, 255, 0.8);
}

.card h3 {
  font-size: 22px;
  color: #00d4ff;
  text-transform: uppercase;
  font-weight: bold;
}

.card p {
  font-size: 16px;
  color: #ffffff;
  margin-top: 8px;
}

.card span {
  color: #ffcc00;
  font-weight: bold;
}
</style>
