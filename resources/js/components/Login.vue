<template>
    <div class="min-h-screen bg-gradient-to-br from-blue-50 to-gray-100 flex items-center justify-center">
        <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
            <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Login</h1>
            <form @submit.prevent="login">
                <div class="mb-4">
                    <input
                        v-model="email"
                        type="email"
                        placeholder="Email"
                        required
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                </div>
                <div class="mb-6">
                    <input
                        v-model="password"
                        type="password"
                        placeholder="Senha"
                        required
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                </div>
                <button
                    type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-200 font-semibold"
                >
                    Entrar
                </button>
            </form>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            email: '',
            password: '',
        };
    },
    methods: {
        async login() {
            try {
                const response = await axios.post('/api/login', {
                    email: this.email,
                    password: this.password,
                });
                localStorage.setItem('token', response.data);
                this.$router.push('/');
            } catch (error) {
                console.error('Erro ao logar:', error);
            }
        },
    },
};
</script>