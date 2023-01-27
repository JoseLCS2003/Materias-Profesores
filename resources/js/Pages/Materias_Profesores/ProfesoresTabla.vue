<template>

    <Head title="Profesores" />
    <MyLayout />
    <div v-if="profesores.length">
        <h1 class="text-center px-3 py-2 text-5xl font-sans capitalize">tabla profesores</h1>
        <table class="container mx-auto text-1xl text-gray-500 dark:text-black">
            <thead class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-900 dark:text-white">
                <tr>
                    <th class="px-6 py-3">#</th>
                    <th>nombre</th>
                    <th>apellidos</th>
                    <th>telefono</th>
                    <th>correo</th>
                    <th>materia asignada</th>
                    <th colspan="2">opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-100 bg-white text-center bg-white border-b dark:border-gray-400"
                    v-for="profesor in profesores">
                    <td class="px-6 py-4">{{ profesor.id }}</td>
                    <td>{{ profesor.nombre }}</td>
                    <td>{{ profesor.apPaterno }} {{ profesor.apMaterno }}</td>
                    <td>{{ profesor.telefono }}</td>
                    <td>{{ profesor.correo }}</td>
                    <td>{{ profesor.materia }}</td>
                    <td>
                        <Link :href="route('profesores.editar', profesor.id)"
                            class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                        Modificar</Link>
                    </td>
                    <td>
                        <Link @click="eliminarP(profesor.id)"
                            class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                        Eliminiar</Link>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="container mx-auto mt-6">
            <a href="/profesores/nuevo"
                class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Agregar
                Profesores</a>
        </div>
    </div>
    <div v-else-if="profesores.length == 0" class="container mx-auto">
        <h1 class="text-center px-3 py-2 text-5xl font-sans capitalize">tabla profesores</h1>
        <div class="mt-7 mx-auto flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50"
            role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                 No hay Profesores
            </div>
        </div>
        <div class="container mx-auto mt-6">
            <a href="/profesores/nuevo"
                class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Agregar
                Profesores</a>
        </div>
    </div>
    <div v-if="materiaProfesor.length">
        <h1 class="text-center px-3 py-2 text-5xl font-sans capitalize">Profesores asignados a: {{ materia.nombre }}
        </h1>
        <table class="container mx-auto text-1xl text-gray-500 dark:text-black">
            <thead class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-900 dark:text-white">
                <tr>
                    <th class="px-6 py-3">#</th>
                    <th>nombre</th>
                    <th>apellidos</th>
                    <th>telefono</th>
                    <th>correo</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-100 bg-white text-center bg-white border-b dark:border-gray-400"
                    v-for="profesor in materiaProfesor">
                    <td class="px-6 py-4">{{ profesor.id }}</td>
                    <td>{{ profesor.nombre }}</td>
                    <td>{{ profesor.apPaterno }} {{ profesor.apMaterno }}</td>
                    <td>{{ profesor.telefono }}</td>
                    <td>{{ profesor.correo }}</td>
                </tr>
            </tbody>
        </table>
        <div class="container mx-auto mt-6">
            <a href="/materias"
                class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Regresar</a>
        </div>
    </div>
    <div v-else-if="materiaProfesor.length == 0" class="container mx-auto">
        <h1 class="text-center px-3 py-2 text-5xl font-sans capitalize">Profesores asignados a: {{ materia.nombre }}
        </h1>
        <div class="mt-7 mx-auto flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50"
            role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                 No se a asignados profesor
            </div>
        </div>
        <div class="container mx-auto mt-6">
            <a href="/materias"
                class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Regresar</a>
        </div>
    </div>

</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import MyLayout from '@/Layouts/MyLayout.vue';
import { Link } from "@inertiajs/vue3";
import { router } from '@inertiajs/vue3';



const props = defineProps({
    profesores: {
        type: Object,
        default: () => ({}),
    },
    materiaProfesor: {
        type: Object,
        default: () => ({}),
    },
    materia: {
        type: Object,
        default: () => ({}),
    }
});

function eliminarP(id) {
    router.delete(route('profesores.eliminar', id))
}

</script>