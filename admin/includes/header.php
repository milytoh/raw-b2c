<!DOCTYPE html>
<html class="scroll-smooth bg-surface" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo isset($page_title) ? $page_title : 'Admin Dashboard | RAW B2C LTD'; ?></title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

       <link rel="icon" href="/raw-b2c/assets/favicon/favicon.ico?v=2">

<link rel="icon" type="image/png" sizes="32x32"
href="/raw-b2c/assets/favicon/favicon-32x32.png">

<link rel="icon" type="image/png" sizes="16x16"
href="/raw-b2c/assets/favicon/favicon-16x16.png">

<link rel="apple-touch-icon"
href="/raw-b2c/assets/favicon/apple-touch-icon.png">

<link rel="manifest" href="/raw-b2c/assets/favicon/site.webmanifest?v=2">
    
    <!-- Tailwind Config (Same corporate theme as public site) -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed-dim": "#a2d3a2",
                        "on-secondary-container": "#336f34",
                        "surface-tint": "#326a2d",
                        "tertiary-container": "#26512c",
                        "surface-variant": "#e1e3e4",
                        "surface-container-lowest": "#ffffff",
                        "surface-bright": "#f8f9fa",
                        "surface-container-highest": "#e1e3e4",
                        "secondary-container": "#aef0a6",
                        "error-container": "#ffdad6",
                        "surface": "#f8f9fa",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-container": "#93c393",
                        "inverse-primary": "#98d68c",
                        "on-primary": "#ffffff",
                        "tertiary": "#0d3a17",
                        "on-primary-fixed-variant": "#185218",
                        "inverse-surface": "#2e3132",
                        "surface-dim": "#d9dadb",
                        "primary": "#003b05",
                        "primary-container": "#1a5319",
                        "surface-container-low": "#f3f4f5",
                        "on-primary-container": "#89c67e",
                        "primary-fixed": "#b3f3a6",
                        "on-error": "#ffffff",
                        "secondary": "#2f6b30",
                        "error": "#ba1a1a",
                        "on-background": "#191c1d",
                        "surface-container-high": "#e7e8e9",
                        "primary-fixed-dim": "#98d68c",
                        "surface-container": "#edeeef",
                        "on-error-container": "#93000a",
                        "on-secondary": "#ffffff",
                        "on-secondary-fixed": "#002204",
                        "on-surface": "#191c1d",
                        "on-primary-fixed": "#002202",
                        "on-tertiary-fixed": "#002107",
                        "outline-variant": "#c1c9bb",
                        "on-tertiary-fixed-variant": "#24502a",
                        "secondary-fixed": "#b1f3a9",
                        "background": "#f8f9fa",
                        "secondary-fixed-dim": "#95d68f",
                        "tertiary-fixed": "#bdefbd",
                        "outline": "#71796d",
                        "on-secondary-fixed-variant": "#14521a",
                        "on-surface-variant": "#41493e",
                        "inverse-on-surface": "#f0f1f2"
                    },
                    "fontFamily": {
                        "headline-md": ["Montserrat"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"]
                    }
                }
            }
        }
    </script>
    
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .material-symbols-outlined.filled { font-variation-settings: 'FILL' 1; }
        .sidebar-transition { transition: transform 0.3s ease-in-out; }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md overflow-x-hidden flex h-screen">
