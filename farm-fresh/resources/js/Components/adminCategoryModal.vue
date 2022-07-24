<template >
  <!-- Large Modal -->
  <div
    id="large-modal"
    tabindex="-1"
    class="
      overflow-y-auto overflow-x-hidden
      fixed
      top-0
      right-0
      left-0
      z-50
      w-full
      md:inset-0
      h-modal
      md:h-full
      justify-center
      items-center
      flex
      bg-gray-500 bg-opacity-50
    "
  >
    <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div
          class="
            flex
            justify-between
            items-center
            p-5
            rounded-t
            border-b
            dark:border-gray-600
          "
        >
          <h3 class="text-xl font-medium text-gray-900 dark:text-white">
            {{ user.name ? "Edit" : "Create" }} Category
          </h3>
          <button
            type="button"
            class="
              text-gray-400
              bg-transparent
              hover:bg-gray-200 hover:text-gray-900
              rounded-lg
              text-sm
              p-1.5
              ml-auto
              inline-flex
              items-center
              dark:hover:bg-gray-600 dark:hover:text-white
            "
            @click="$emit('closeModal', $event)"
          >
            <svg
              class="w-5 h-5"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </button>
        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-6">
          <form novalidate>
            <div class="mb-6">
              <label
                for="name"
                class="
                  block
                  mb-2
                  text-sm
                  font-medium
                  text-gray-900
                  dark:text-gray-300
                "
                >Category Name
                <span class="text-red-500"> * {{ required.name }}</span></label
              >
              <input
                type="text"
                id="name"
                name="name"
                class="
                  bg-gray-50
                  border border-gray-300
                  text-gray-900 text-sm
                  rounded-lg
                  focus:ring-blue-500 focus:border-blue-500
                  block
                  w-full
                  p-2.5
                  dark:bg-gray-700
                  dark:border-gray-600
                  dark:placeholder-gray-400
                  dark:text-white
                  dark:focus:ring-blue-500
                  dark:focus:border-blue-500
                "
                v-model="user.name"
                placeholder="e.g. John Doe"
                required
              />
            </div>
            <div class="mb-6">
              <label
                for="email"
                class="
                  block
                  mb-2
                  text-sm
                  font-medium
                  text-gray-900
                  dark:text-gray-300
                "
                >Parent Category
                <span class="text-red-500"> * {{ required.email }}</span></label
              >
              <input
                type="text"
                id="email"
                name="email"
                class="
                  bg-gray-50
                  border border-gray-300
                  text-gray-900 text-sm
                  rounded-lg
                  focus:ring-blue-500 focus:border-blue-500
                  block
                  w-full
                  p-2.5
                  dark:bg-gray-700
                  dark:border-gray-600
                  dark:placeholder-gray-400
                  dark:text-white
                  dark:focus:ring-blue-500
                  dark:focus:border-blue-500
                "
                v-model="user.email"
                placeholder="e.g. john@doe.com"
                required
              />
            </div>
            <button
              type="submit"
              class="
                text-white
                bg-blue-700
                hover:bg-blue-800
                focus:ring-4 focus:outline-none focus:ring-blue-300
                font-medium
                rounded-lg
                text-sm
                w-full
                sm:w-auto
                px-5
                py-2.5
                text-center
                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800
              "
              @click.prevent="$emit('submit', user)"
            >
              Submit
            </button>
          </form>
        </div>
        <!-- Modal footer -->
        <div
          class="
            flex
            items-center
            p-6
            space-x-2
            rounded-b
            border-t border-gray-200
            dark:border-gray-600
          "
        ></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "CreateUser",
  props: {
    user: Object,
    required: Object,
  },
};
</script>

<style>
</style>