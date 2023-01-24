<template>
    <Head title="Profesores"></Head>
    <MyLayout/>
    <section>
        <div class="relative items-center w-full px-7 py-12 mx-auto lg:px-24 max-w-7xl">
            <div class="grid grid-cols-1">
                <div class="w-full max-w-lg mx-auto my-4 bg-white shadow-xl rounded-xl">
                    <div class="p-6 lg:text-center">
                        <h1 class="text-3xl">Nuevo Profesor</h1>
                        <form action="">
                            <label
                                class="mt-7 mb-7 mx-2 relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                <input type="text" name="nombre" placeholder="Ingresar el nombre"
                                    class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                     />
                                <span
                                    class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                    Ingresar el nombre
                                </span>
                            </label>
                            <div class="flex flex-wrap">
                                <label
                                class="mx-2 relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                <input type="text" name="apPaterno" placeholder="Ingresar el nombre"
                                    class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                     />
                                <span
                                    class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                    Ingresar el apellido Paterno
                                </span>
                            </label>
                            <label
                                class="mx-2 relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                <input type="text" name="apMaterno" placeholder="Ingresar el nombre"
                                    class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                     />
                                <span
                                    class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                    Ingresar el apellido Materno
                                </span>
                            </label>
                            </div>
                            
                            <label
                                class="mt-7 mb-7 mx-2 relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                <input type="text" name="telefono" placeholder="Ingresar el nombre"
                                    class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                     />
                                <span
                                    class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                    Ingresar el telefono
                                </span>
                            </label>
                            <label
                                class="mt-7 mb-7 mx-2 relative block overflow-hidden rounded-md border border-gray-200 px-3 pt-3 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                <input type="text" name="correo" placeholder="Ingresar el nombre"
                                    class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                                     />
                                <span
                                    class="absolute left-3 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs">
                                    Ingresar el correo
                                </span>
                            </label>
                            
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
</script>