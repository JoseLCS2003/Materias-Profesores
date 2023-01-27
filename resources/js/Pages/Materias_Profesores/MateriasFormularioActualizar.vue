<template>

    <Head title="Materias"/>
    <MyLayout />
    <section>
        <div class="relative items-center w-full px-7 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
            <div class="grid grid-cols-1">
                <div class="w-full max-w-xg mx-auto my-4 bg-white shadow-xl rounded-xl">
                    <div class="p-6 lg:text-center">
                        <h1 class="text-4xl">Editar Materia</h1>
                        <form @submit.prevent="actualizarMateria" class="container mx-auto mt-7" method="post">

                            <label
                                class="mt-4 mb-4 mx-2 relative block overflow-hidden rounded-xl border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                <input v-model="form.nombre" type="text" name="nombre" placeholder="Ingresar el nombre"
                                    class="peer h-12 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-xl"
                                     />
                                <span
                                    class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-xl peer-focus:top-2 peer-focus:text-xs">
                                    Ingresar el nombre
                                </span>
                            </label>
                            <label
                                class="mt-4 mb-4 mx-2 relative block overflow-hidden rounded-xl border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                <input v-model="form.unidades" type="text" name="unidades" placeholder="Ingresar el nombre"
                                    class="peer h-12 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-xl"
                                     />
                                <span
                                    class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-xl peer-focus:top-2 peer-focus:text-xs">
                                    Ingresar las unidades
                                </span>
                            </label>
                            <button type="submit"
                                class="mx-2 text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Guardar</button>
                            
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
    materia: {
        type: Object,
        default: () => ({}),
    }
});

const form = reactive({
    nombre: props.materia.nombre,
    unidades: props.materia.unidades
})
function actualizarMateria() {
    router.put(route('materias.guardar', props.materia.id), form)
}
</script>