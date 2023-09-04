<style type="text/css">

@import url('https://fonts.cdnfonts.com/css/poppins');
@import url('https://fonts.cdnfonts.com/css/alegreya-sans-medium');
@import url('https://fonts.cdnfonts.com/css/playfair-display');

:root {
    --bs-blue: #0d6efd;
    --bs-indigo: #6610f2;
    --bs-purple: #6f42c1;
    --bs-pink: #f02121;
    --bs-red: #dc3545;
    --bs-orange: #fd7e14;
    --bs-yellow: #ffc107;
    --bs-green: #198754;
    --bs-teal: #20c997;
    --bs-cyan: #0dcaf0;
    --bs-white: #fff;
    --bs-gray: #6c757d;
    --bs-gray-dark: #343a40;
    --bs-gray-100: #f8f9fa;
    --bs-gray-200: #e9ecef;
    --bs-gray-300: #dee2e6;
    --bs-gray-400: #ced4da;
    --bs-gray-500: #adb5bd;
    --bs-gray-600: #6c757d;
    --bs-gray-700: #495057;
    --bs-gray-800: #343a40;
    --bs-gray-900: #212529;
    --bs-primary: #0d6efd;
    --bs-secondary: #6c757d;
    --bs-success: #198754;
    --bs-info: #0dcaf0;
    --bs-warning: #ffc107;
    --bs-danger: #dc3545;
    --bs-light: #f8f9fa;
    --bs-dark: #212529;


    /*--------------------Font Family -----------*/
    --f-popings: 'poppins';
    --f-alegreya: 'alegreya-sans-medium';
    --f-playfair: 'playfair-display';
}

.body {
    height: 15000px;
}

.Hero {
    width: 100%;
}

.Hero .nav_bar {
    position: fixed;
    width: 100%;
    z-index: 1;
}

.Hero .nav_bar .bs-icon {
    height: 150px;
    width: 150px;
}


.Hero .nav_bar li {
    transition: 0.2s;
}

.nav_bar li:hover {
    padding-left: 10px;
    padding-right: 10px;
    scale: 0.9;
}

.nav_bar a {
    color: #fd7e14;
    transition: 0.2s;
    font-weight: 900;
}

.nav_bar a:hover {
    color: #fd7e14;
    scale: 1.2;
}


/* slider-section */
.Hero .slider {
    z-index: -1;
    object-fit: cover;
    width: 100%;
    height: 100vh;
}

.Hero .slide .carousel-caption {
    top: 180px;
}

.slide h2 {
    font-size: 80px;
    padding-bottom: 60px;
    color: #e0e3e9;
    font-family: var(--f-alegreya);
}

.Hero .slide p {
    padding-top: 60px;
    font-size: 50px;
    padding-bottom: 60px;
    color: #e0e3e9;
    font-family: var(--f-popings);
}

.Hero .slide button {
    font-size: 60px;
}

.Hero .c-image {
    width: 98%;
    height: 100vh;
    object-fit: cover;
    filter: brightness(0.5);
}

.Hero .login_model {
    transition: 0.2s;
}

.Hero .modal-content {
    background-color: #bec2c9;
}

.oder_food .title-class {
    font-family: var(--f-playfair);
    padding-bottom: 80px;
}

.oder_food .filter-section h2 {
    font-size: 30px;

}

.oder_food .main-section h2 {
    font-size: 30px;

}

.oder_food .details_section p {
    font-size: 20px;

}</style>