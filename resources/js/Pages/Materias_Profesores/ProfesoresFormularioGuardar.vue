<template>
    <Head title="Profesores"></Head>
    <MyLayout/>
    <section>
        <div class="relative items-center w-full px-7 py-12 mx-auto lg:px-24 max-w-7xl">
            <div class="grid grid-cols-1">
                <div class="w-full max-w-xg mx-auto my-4 bg-white shadow-xl rounded-xl">
                    <div class="p-6 lg:text-center">
                        <h1 class="text-4xl">Nuevo Profesor</h1>
                        <form action="post" @submit.prevent="guardarProfesor">
                            <label
                                class="mt-4 mb-4 mx-2 relative block overflow-hidden rounded-xl border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                <input v-model="form.nombre" type="text" name="nombre" placeholder="Ingresar el nombre"
                                    class="peer h-12 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-xl"
                                     />
                                <span
                                    class="capitalize absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-xl peer-focus:top-2 peer-focus:text-xs">
                                    inserte el nombre
                                </span>
                            </label>
                            <div class="mt-7 mx-auto flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50" v-if="errors.nombre">{{ errors.nombre }}</div>
                                <div class="grid grid-cols-2">
                                    <label
                                class="mt-4 mb-4 mx-2 relative block overflow-hidden rounded-xl border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                <input v-model="form.apPaterno" type="text" name="apPaterno" placeholder="Ingresar el nombre"
                                    class="peer h-12 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-xl"
                                     />
                                <span
                                    class="capitalize absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-xl peer-focus:top-2 peer-focus:text-xs">
                                    inserte el apellido Paterno
                                </span>
                            </label>
                            <div class="mt-7 mx-auto flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50" v-if="errors.apPaterno">{{ errors.apPaterno }}</div>
                            <label
                                class="mt-4 mb-4 mx-2 relative block overflow-hidden rounded-xl border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                <input v-model="form.apMaterno" type="text" name="apMaterno" placeholder="Ingresar el nombre"
                                    class="peer h-12 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-xl"
                                     />
                                <span
                                    class="capitalize absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-xl peer-focus:top-2 peer-focus:text-xs">
                                    inserte el apellido Materno
                                </span>
                            </label>
                            <div class="mt-7 mx-auto flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50" v-if="errors.apMaterno">{{ errors.apMaterno }}</div>
                                </div>                            
                            <label
                                class="mt-4 mb-4 mx-2 relative block overflow-hidden rounded-xl border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                <input v-model="form.telefono" type="text" name="telefono" placeholder="Ingresar el nombre"
                                    class="peer h-12 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-xl"
                                     />
                                <span
                                    class="capitalize absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-xl peer-focus:top-2 peer-focus:text-xs">
                                    inserte el telefono
                                </span>
                            </label>
                            <div class="mt-7 mx-auto flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50" v-if="errors.telefono">{{ errors.telefono }}</div>
                            <label
                                class="mt-4 mb-4 mx-2 relative block overflow-hidden rounded-xl border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                <input v-model="form.correo" type="text" name="correo" placeholder="Ingresar el nombre"
                                    class="peer h-12 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-xl"
                                     />
                                <span
                                    class="capitalize absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-xl peer-focus:top-2 peer-focus:text-xs">
                                    inserte el correo
                                </span>
                            </label>
                            <div class="mt-7 mx-auto flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50" v-if="errors.correo">{{ errors.correo }}</div>
                            <select v-model="form.materia" v-if="materias" name="materia" class="capitalize mx-2 block py-2.5 px-0 w-full text-xl text-gray-700 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option selected>Selecione una materia</option>
                                <option  v-for="materia in materias" v-bind:value="materia.id">{{ materia.nombre }}</option>
                            </select>
                            <select v-model="form.materia" v-else name="materia" class="mx-2 block py-2.5 px-0 w-full text-xl text-gray-700 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option selected>Selecione una materia</option>
                                <option  v-bind:value="materiaP.id" selected>{{ materiaP.nombre }}</option>
                            </select>
                            <div class="mt-7 mx-auto flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50" v-if="errors.materia">{{ errors.materia }}</div>
                            <button type="submit"
                                class="mt-4 mx-2 text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import MyLayout from '@/Layouts/MyLayout.vue';
import { reactive, defineProps } from 'vue';
import { router } from '@inertiajs/vue3';

const props = defineProps({
    materias:{
        type:Object
    },
    profesor:{
        type: Object,
        default: () => ({}),
    },
    materiaP:{
        type: Object,
        default: () => ({})
    },
    errors:{
        type:Object
    } 
});

const form=reactive({
    nombre:null,
    apPaterno:null,
    apMaterno:null,
    telefono:null,
    correo:null,
    materia:null
})

function guardarProfesor(){
    router.post('/profesores/nueva',form)
}

</script>