<template>
    <div>
      <Head title="Novo Avaliação" />
      <h1 class="mb-8 text-3xl font-bold">
        <Link class="text-red-400 hover:text-red-600" href="/avaliacoes">Avaliações</Link>
        <span class="text-red-400 font-medium">/</span> Criar
      </h1>
      <div class="max-w-3xl bg-white rounded-md shadow overflow-hidden">
        <form @submit.prevent="store">
          <div class="flex flex-wrap -mb-8 -mr-6 p-8">
            <input id='start-date' class="relative px-3 py-3 w-full rounded focus:shadow-outline mr-1"
                        autocomplete="off" type="date" v-model="startDate" />
          </div>
          <div class="flex items-center justify-end px-8 py-4 bg-red-50 border-t border-red-100">
            <loading-button :loading="form.processing" class="btn-red" type="submit">Criar usuário</loading-button>
          </div>
        </form>
      </div>
    </div>
  </template>

  <script>
  import { Head, Link } from '@inertiajs/vue3'
  import Layout from '@/Shared/Layout'
  import FileInput from '@/Shared/FileInput'
  import TextInput from '@/Shared/TextInput'
  import SelectInput from '@/Shared/SelectInput'
  import LoadingButton from '@/Shared/LoadingButton'
  import { TheMask } from 'vue-the-mask'
import { mask } from 'vue-the-mask'

  export default {
    components: {
      FileInput,
      Head,
      Link,
      LoadingButton,
      SelectInput,
      TextInput,
      TheMask,
    },
    directives: { mask },
    layout: Layout,
    remember: 'form',
    data() {
      return {
        form: this.$inertia.form({
          name: '',
          email: '',
          cpf: '',
          password: '',
          type: '',
          owner: false,
          photo: null,
        }),
      }
    },
    methods: {
      store() {
        this.form.post('/avaliacoes')
      },
    },
  }
  </script>
