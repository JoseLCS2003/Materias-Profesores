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

function eliminarM(id) {
    router.delete(route('materias.eliminar', id))
}

</script>

<template>

    <Head title="Materias" />
    <MyLayout />
    <div v-if="materias.length">
        <h1 class="text-center px-3 py-2 text-5xl font-sans capitalize">tabla materias</h1>
        <table class="container mx-auto text-1xl text-gray-500 dark:text-black">
            <thead class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-900 dark:text-white">
                <tr>
                    <th scope="col" class="px-6 py-3">#</th>
                    <th>nombre</th>
                    <th>unidades</th>
                    <th>profesores asignados</th>
                    <th colspan="3">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-100 bg-white text-center bg-white border-b dark:border-gray-400"
                    v-for="materia in materias" v-if="!materias.null">
                    <td class="px-6 py-4">{{ materia.id }}</td>
                    <td class="">{{ materia.nombre }}</td>
                    <td class="">{{ materia.unidades }}</td>
                    <td>
                        <Link :href="route('materia.Profesores', materia.id)"
                            class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                        profesores</Link>
                    </td>
                    <td>
                        <Link :href="route('materias.editar', materia.id)"
                            class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                        Modificar</Link>
                    </td>
                    <td>
                        <Link @click="eliminarM(materia.id)"
                            class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                        Eliminiar</Link>
                    </td>
                    <td>
                        <Link :href="route('materias.profesor.nuevo', materia.id)"
                            class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
                        Agregar Profesor</Link>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100 bg-white text-center bg-white border-b dark:border-gray-400" v-else>
                    <td colspan="6">
                        <div role="alert" class="rounded border-l-4 border-red-500 bg-red-50 p-4">
                            <strong class="block text-1xl text-red-700"> No Existen Materias</strong>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="container mx-auto mt-6">
            <a href="/materias/nuevo"
                class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Agregar
                Materia</a>
        </div>
    </div>
    <div v-else class="container mx-auto">
        <h1 class="text-center px-3 py-2 text-5xl font-sans capitalize">tabla materias</h1>
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
                 No hay Materias
            </div>
        </div>
        <div class="container mx-auto mt-6">
            <a href="/materias/nuevo"
                class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Agregar
                Materia</a>
        </div>
    </div>

</template>
