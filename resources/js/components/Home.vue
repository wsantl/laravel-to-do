<template>
    <div class="min-h-screen bg-gradient-to-br from-blue-50 to-gray-100 flex flex-col items-center">
        <!-- Cabeçalho -->
        <header class="w-full max-w-3xl p-8">
            <h1 class="text-5xl font-extrabold text-gray-800 text-center">
                Minha Lista de Tarefas
            </h1>
            <p class="mt-3 text-xl text-gray-600 text-center">
                Planeje seu dia com simplicidade!
            </p>
        </header>

        <!-- Seção principal -->
        <main class="w-full max-w-3xl bg-white rounded-xl shadow-lg p-8 mb-12">
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-700">
                    Comece agora
                </h2>
                <p class="mt-2 text-gray-500">
                    Adicione suas tarefas e mantenha tudo organizado.
                </p>
            </div>

            <!-- Lista de tarefas (estática) -->
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <span class="text-gray-700">Estudar para prova</span>
                    <button class="text-green-500 hover:text-green-700 font-medium">
                        Concluir
                    </button>
                </div>
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <span class="text-gray-700">Reunião às 14h</span>
                    <button class="text-green-500 hover:text-green-700 font-medium">
                        Concluir
                    </button>
                </div>
            </div>

            <!-- Botão para adicionar tarefa -->
            <div class="mt-8">
                <button
                    class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-200 font-semibold"
                >
                    Adicionar Tarefa
                </button>
            </div>
        </main>

        <!-- Rodapé -->
        <footer class="text-gray-500 text-sm">
            <p>© 2025 Lista de Tarefas. Feito com 💙</p>
        </footer>
    </div>
</template>

<script>
export default {
    name: 'Home',
};
</script>