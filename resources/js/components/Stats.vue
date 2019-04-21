<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">
            Laracasts 3 Stats
        </h1>
        
        <ul class="list-reset">
          <li><strong>Total Series:</strong> {{ series }}</li>
          <li><strong>Total Lessons:</strong> {{ lessons }}</li>
        </ul>
    </div>
</template>

<script>
export default {
  data() {
    return { series: 0, lessons: 0 }
  },
  created() {
    axios.get('http://localhost:8000/api/stats')
    .then(res => res.data)
    .then(data => {
      this.series = data.series;
      this.lessons = data.lessons;
    })
  }
};
</script>
