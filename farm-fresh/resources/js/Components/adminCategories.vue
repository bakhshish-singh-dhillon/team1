
<template>
  <table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Parent</th>
      </tr>
    </thead>
    <tbody class="">
      @foreach ($categories as $cat)
      <tr>
        <td>{{ $cat->id }}</td>
        <td>{{ $cat->name }}</td>
        <td>{{ null == $cat->parent ? "NA" : $cat->parent->name}}</td>
        <td>
          <div class="btn-group">
            <a
              class="btn btn-secondary mx-2"
              href="{{ route('product-edit', ['product' => $cat->id]) }}"
              >Edit</a
            >
            <form
              method="post"
              action="{{ route('product-delete', ['product' => $cat->id]) }}"
            >
              @csrf @method('DELETE')
              <input type="hidden" name="id" value="{{ $cat->id }}" />
              <button
                class="btn btn-danger"
                onclick="return confirm('Are you sure you want to delete this post?')"
              >
                Delete
              </button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</template>

<script>
import UserModal from "./Components/adminCategoryModal.vue";
export default {
  name: "App",
  methods: {
    createUser(user) {
      this.show_modal = true;
      this.user = {
        id: "",
        name: "",
        email: "",
        phone: "",
      };
    },
    editUser(user_obj) {
      this.user = { ...user_obj };
      this.show_modal = true;
    },
    submitForm() {
      var method = "";
      var error = false;
      if (this.user.name.trim().length == 0) {
        this.required.name = "Name is Required!";
        error = true;
      } else {
        this.required.name = "";
      }
      if (this.user.email.trim().length == 0) {
        this.required.email = "Email is Required!";
        error = true;
      } else {
        this.required.email = "";
      }
      if (this.user.phone.trim().length == 0) {
        this.required.phone = "Phone is Required!";
        error = true;
      } else {
        this.required.phone = "";
      }
      if (!error) {
        if (this.user.id) {
          method = "PUT";
        } else {
          method = "POST";
        }
        fetch(this.api_url, {
          method: method,
          body: JSON.stringify(this.user),
          headers: {
            "Content-Type": "application/json",
          },
        })
          .then((resp) => resp.json())
          .then((json) => {
            if (json.status == 200 || json.status == 201) {
              this.user = {
                id: "",
                name: "",
                email: "",
                phone: "",
              };
              this.show_flash_success = true;
              this.flash_success = json.message;
              this.getAllUsers();
            } else {
              this.show_flash_error = true;
              this.flash_error = json.message;
            }
          });
        this.show_modal = false;
      }
    },
    deleteUser(user_obj) {
      if (confirm("Do you really want to delete this user?")) {
        this.user = { ...user_obj };
        if (this.user.id) {
          fetch(this.api_url, {
            method: "DELETE",
            body: JSON.stringify(this.user),
            headers: {
              "Content-Type": "application/json",
            },
          })
            .then((resp) => resp.json())
            .then((json) => {
              if (json.status == 200) {
                this.user = {
                  id: "",
                  name: "",
                  email: "",
                  phone: "",
                };
                this.show_flash_success = true;
                this.flash_success = json.message;
                this.getAllUsers();
              } else {
                this.show_flash_error = true;
                this.flash_error = json.message;
              }
            });
        }
      }
    },
    closeModal(e) {
      this.show_modal = false;
      this.required = {
        name: "",
        email: "",
        phone: "",
      };
    },
  },
  created() {
    this.getAllUsers();
  },
  data() {
    return {
      api_url: "http://localhost:8001",
      users: [],
      title: "All Users",
      show_modal: false,
      user: {
        name: "",
        email: "",
        phone: "",
      },
      heading: "Advance Project : User CRUD",
      show_flash_error: false,
      show_flash_success: false,
      flash_error: "",
      flash_success: "",
      required: {
        name: "",
        email: "",
        phone: "",
      },
    };
  },
  components: {
    UserList,
    UserModal,
    Header,
    FlashSuccessMessage,
    FlashErrorMessage,
  },
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}

.v-enter-active,
.v-leave-active {
  transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
  opacity: 0;
}

.slide-fade-enter-active {
  transition: all 0.3s ease-out;
}

.slide-fade-leave-active {
  transition: all 0.3s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
  transform: translateX(20px);
  opacity: 0;
}

.bounce-enter-active {
  animation: bounce-in 0.5s;
}
.bounce-leave-active {
  animation: bounce-in 0.5s reverse;
}
@keyframes bounce-in {
  0% {
    transform: scale(0);
  }
  50% {
    transform: scale(1.25);
  }
  100% {
    transform: scale(1);
  }
}

button {
  margin: 5px;
}
</style>

