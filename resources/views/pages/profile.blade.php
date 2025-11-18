@extends('layouts.app')
@section('title', 'Helios Guard - Profile')
@section('content')
<section class="container mt-16 mx-auto px-4 py-8">
    <!-- Tabs -->
    <div class="min-h-screen">
        <div>
            <h2 class="text-3xl font-bold py-4">Mi Perfil</h2>
            <nav class="-mb-px flex space-x-6" aria-label="Tabs">
                <button
                    data-tab="tab-1"
                    class="tab-btn whitespace-nowrap border-b-2 px-3 py-2 text-sm font-medium transition-colors
               text-gray-500 hover:text-gray-700 border-transparent focus:outline-none hover:cursor-pointer">
                    Perfil
                </button>
                <button
                    data-tab="tab-2"
                    class="tab-btn whitespace-nowrap border-b-2 px-3 py-2 text-sm font-medium transition-colors
               text-gray-500 hover:text-gray-700 border-transparent focus:outline-none hover:cursor-pointer">
                    Direcciones
                </button>
                <button
                    data-tab="tab-3"
                    class="tab-btn whitespace-nowrap border-b-2 px-3 py-2 text-sm font-medium transition-colors
               text-gray-500 hover:text-gray-700 border-transparent focus:outline-none hover:cursor-pointer">
                    Pedidos
                </button>
            </nav>
        </div>

        <!-- Contenido -->
        <div class="mt-6">
            <div id="tab-1" class="tab-panel">
                <h4 class="text-lg font-semibold">Resumen general</h4>
                <div class="my-2 border rounded w-2/3 h-80 flex flex-col">
                    <div class="flex flex-col justify-between">
                        <button>Editar</button>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-panel hidden">
                <h4 class="text-lg font-semibold">Métricas y gráficos</h4>
                <p class="mt-2 text-gray-600">Contenido del tab Estadísticas.</p>
            </div>
            <div id="tab-3" class="tab-panel hidden">
                <h4 class="text-lg font-semibold">Preferencias</h4>
                <p class="mt-2 text-gray-600">Contenido del tab Configuración.</p>
            </div>
        </div>
    </div>

    <script>
        // Clases de estado activo: subrayado en borde inferior y color de texto
        const activeClasses = ["border-gray-600", "text-gray-900"];
        const inactiveClasses = ["border-transparent", "text-gray-500"];

        const buttons = document.querySelectorAll(".tab-btn");
        const panels = document.querySelectorAll(".tab-panel");

        function setActiveTab(targetId) {
            // Actualiza botones
            buttons.forEach((btn) => {
                const isActive = btn.dataset.tab === targetId;
                btn.classList.remove(...activeClasses, ...inactiveClasses);
                btn.classList.add(
                    "border-b-2",
                    "px-3",
                    "py-2",
                    "text-sm",
                    "font-medium",
                    "transition-colors",
                    "focus:outline-none",
                    isActive ? activeClasses[0] : inactiveClasses[0],
                    isActive ? activeClasses[1] : inactiveClasses[1]
                );
                btn.setAttribute("aria-selected", isActive ? "true" : "false");
                btn.setAttribute("tabindex", isActive ? "0" : "-1");
                btn.role = "tab";
            });

            // Actualiza paneles
            panels.forEach((panel) => {
                const isActive = panel.id === targetId;
                panel.classList.toggle("hidden", !isActive);
                panel.role = "tabpanel";
            });
        }

        // Inicial: activar el primero
        setActiveTab("tab-1");

        // Click
        buttons.forEach((btn) => {
            btn.addEventListener("click", () => setActiveTab(btn.dataset.tab));
        });

        // Navegación con teclado (izq/der)
        document.addEventListener("keydown", (e) => {
            const currentIndex = Array.from(buttons).findIndex(
                (b) => b.getAttribute("aria-selected") === "true"
            );
            if (e.key === "ArrowRight" || e.key === "ArrowLeft") {
                const dir = e.key === "ArrowRight" ? 1 : -1;
                const next = (currentIndex + dir + buttons.length) % buttons.length;
                setActiveTab(buttons[next].dataset.tab);
                buttons[next].focus();
            }
        });
    </script>
</section>
@endsection