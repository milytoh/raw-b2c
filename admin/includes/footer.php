    <!-- Scripts -->
    <script>
        // Sidebar Toggle Logic for Mobile
        document.addEventListener("DOMContentLoaded", function () {
            const sidebar = document.getElementById("sidebar");
            const overlay = document.getElementById("sidebar-overlay");
            const menuBtn = document.getElementById("mobile-menu-btn");

            if (menuBtn && sidebar && overlay) {
                const toggleSidebar = () => {
                    sidebar.classList.toggle("-translate-x-full");
                    overlay.classList.toggle("hidden");
                };

                menuBtn.addEventListener("click", toggleSidebar);
                overlay.addEventListener("click", toggleSidebar);
            }
        });
    </script>
</body>
</html>
