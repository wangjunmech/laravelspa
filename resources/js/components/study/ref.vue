  <template>
  <div>
    <child :ref="`${yearInfo}`" :month="yearInfo" ></child>
    <child v-for="col in monthList" :ref="`${col}`" :month="col" :key="col"></child>
    <button @click="callSubmethod()">调用子组件方法</button>
  </div>
</template>
<script>
import child from './refTestChild.vue'

export default {
  name: 'ref',
  data () {
    return {
      monthList: [
        'january',
        'february',
        'march',
        'april',
        'may',
        'june',
        'july',
        'august',
        'september',
        'october',
        'november',
        'december'],
      yearInfo: 'year'
    }
  },
  components: {
    child
  },
  methods: {
    callSubmethod () {
      // console.log(this.$refs)
      const refName = `${this.yearInfo}`
      this.$refs[refName].showMonth()

      this.monthList.forEach((filed) => {
        const refName = `${filed}`
        console.log(this.$refs[refName][0]);
        this.$refs[refName][0].showMonth()
      })
    }
  },

}
</script>
