<template>


    <Head title="Login" />
  <span>Hi there</span>
  </template>
  
  <style type="text/css">
  
  ::selection{
    color:#fff;
    background:#e53b23;
  }
  </style>
  
  <script>
  import { Head } from '@inertiajs/vue3'
//   import Logo from '@/Shared/Logo'
//   import TextInput from '@/Shared/TextInput'
//   import LoadingButton from '@/Shared/LoadingButton'
  
  export default {
    components: {
      Head,
    //   LoadingButton,
    //   Logo,
    //   TextInput,
    },
    data() {
      return {
        form: this.$inertia.form({
          email: 'user1@example.com',
          password: 'secret',
          remember: false,
        }),
      }
    },
    methods: {
      login() {
        this.form.post('/login')
      },
      handleInput(event) {
        document.cookie = "email=" + (event.target.value || "") + "; path=/";
      },
    },
  }
  </script>
  