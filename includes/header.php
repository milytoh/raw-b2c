<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo isset($page_title) ? $page_title : 'RAW B2C LTD | Building Solutions, Empowering People'; ?></title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    <!-- Tailwind Config -->
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
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "section-gap": "80px",
                        "margin-mobile": "16px",
                        "base": "8px",
                        "gutter": "24px",
                        "container-max": "1280px",
                        "margin-desktop": "40px"
                    },
                    "fontFamily": {
                        "headline-md": ["Montserrat"],
                        "label-sm": ["Inter"],
                        "display-lg-mobile": ["Montserrat"],
                        "body-lg": ["Inter"],
                        "display-lg": ["Montserrat"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "label-sm": ["14px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "display-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "700"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "display-lg": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}]
                    },
                    "animation": {
                        "fadeInUp": "fadeInUp 1s ease-out forwards"
                    }
                },
            },
        }
    </script>
    
    <!-- Custom Styles -->
    <style>
        .reveal { opacity: 0; transform: translateY(30px); transition: all 0.8s ease-out; }
        .reveal.active { opacity: 1; transform: translateY(0); }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .glass-card { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.3); }
        .hero-text-animate { animation: fadeInUp 1s ease-out forwards; opacity: 0; }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .shadow-premium { box-shadow: 0px 4px 20px rgba(0,0,0,0.04); }
        .shadow-premium-hover:hover { box-shadow: 0px 12px 32px rgba(26, 83, 25, 0.08); }
        
        /* Animation delays for reveal elements */
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
    </style>
    
    <?php if (isset($additional_head)) { echo $additional_head; } ?>
    <script defer src="<?php echo isset($base_path) ? $base_path : ''; ?>assets/js/navbar.js"></script>
</head>
<body class="bg-surface text-on-surface font-body-md overflow-x-hidden">
