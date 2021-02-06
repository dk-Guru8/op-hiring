<template>
  <div :class="class">
    <div class="relative flex w-full flex-wrap items-stretch mb-3">
      <span
        class="z-10 h-full flex leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"
      >
        <svg
          version="1.1"
          class="h-4 text-dark"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px"
          y="0px"
          viewBox="0 0 52.966 52.966"
          style="enable-background: new 0 0 52.966 52.966"
          xml:space="preserve"
        >
          <path
            d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21
            c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279
            C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19
            S32.459,40,21.983,40z"
          />
        </svg>
      </span>
      <input
        v-model="search"
        type="text"
        placeholder="Search"
        class="px-3 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none focus:shadow-outline w-full pl-10"
      />
    </div>
    <div>
      <ul class="text-xs text-black list-disc ml-10">
        <li class="hover:bg-gray-300 py-2 px-2" v-for="country in filteredCountries" :key="country">
          <div class="inline-block">
            <svg
              version="1.1"
              class="h-4 text-dark inline-block"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              x="0px"
              y="0px"
              viewBox="0 0 52.966 52.966"
              style="enable-background: new 0 0 52.966 52.966"
              xml:space="preserve"
            >
              <path
                d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21
                  c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279
                  C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19
                  S32.459,40,21.983,40z"
              />
            </svg>
            <p class="inline-block">{{ country }}</p>
          </div>
        </li>
        <div v-if="filteredCountries.length === 0">No search result</div>
      </ul>
    </div>
  </div>
</template>
<script>
export default {
  name: "App",
  components: {},
  props: ["class"],
  data: function () {
    return {
      countries: [
        "Nepal",
        "New Zealand",
        "Netherland",
        "Belgium",
        "United Kingdom",
        "Italy",
        "Greece",
      ],
      search: "",
    };
  },
  computed: {
    filteredCountries: function () {
      if (this.search === "") {
        return this.countries;
      }
      return this.countries.filter((country) =>
        country.toLowerCase().startsWith(this.search.toLowerCase())
      );
    },
  },
};
</script>
