<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">
            Your Achievements
        </h1>
        
        <input class="border p-2 rounded w-full mb-4" 
               placeholder="Laracasts API Token" 
               v-model="token"
               @keyup.enter="fetch">
        
        <p class="text-red italic text-sm" v-if="message" v-text="message"></p>
        
        <ul class="list-reset">
          <li v-for="achievement in achievements" 
              v-text="achievement.name"
              class="p-2">
          </li>
        </ul>
    </div>
</template>

<script>
export default {
  data() {
    return { achievements: [], token: '', message: '' };
  },
  methods: {
    fetch() {
      this.message = '';
      axios.get(`http://localhost:8000/api/achievements?api_token=${this.token}`)
      .then(res => res.data)
      .then(data => {
        this.achievements = data;
      })
      .catch(error => {
        this.achievements = [];
        this.message = error.response.data.message;
      });
    }
  }
};
</script>
