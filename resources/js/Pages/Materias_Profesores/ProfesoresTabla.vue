<template>
    <Head title="Profesores" />
    <MyLayout />
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
                <th>opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr class="hover:bg-gray-100 bg-white text-center bg-white border-b dark:border-gray-400" v-for="profesor in profesores">
                <td class="px-6 py-4">{{ profesor.id }}</td>
                <td>{{ profesor.nombre }}</td>
                <td>{{ profesor.apPaterno }} {{ profesor.apMaterno }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <div class="container mx-auto mt-6">
        <a href="/profesores/nuevo"
            class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Agregar
            Profesor</a>
    </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import MyLayout from '@/Layouts/MyLayout.vue';
import { Link } from "@inertiajs/vue3";
import { router } from '@inertiajs/vue3';



const props = defineProps({
    materias: {
        type: Object,
        default: () => ({}),
    }
});
</script>