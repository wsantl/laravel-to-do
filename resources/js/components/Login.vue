<template>
    <div>
        <h1>Login</h1>
        <form @submit.prevent="login">
            <input v-model="email" type="email" placeholder="Email" required />
            <input v-model="password" type="password" placeholder="Senha" required />
            <button type="submit">Entrar</button>
        </form>
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